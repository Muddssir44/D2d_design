// firebase.auth().onAuthStateChanged(function (user) {
//     if (user) {
//           window.open('home.html', '_self');
//     } // if(user) ends here
//     else {
//     } // else ends here

// }); // onAuthStateChanged Ends here

window.onload = function () {
    var signIn = document.getElementById('signin-btn');
    var alert = document.getElementById('alert');
    var userEmailL = document.getElementById('userEmail');
    var userPassL = document.getElementById('userPassword');

    signIn.addEventListener('click', e => {
        e.preventDefault();
        const emailL = userEmailL.value;
        const passL = userPassL.value;
        const loginType = $("input[name=loginType]:checked").val();

        const auth = firebase.auth();
        if (userEmailL.value == "") {
            alert("Email Missing");
        } else if (userPassL.value == "") {
            alert('Password Missing');
        }

        signIn.innerHTML +=
            `<span id="spins" class="spinner-border spinner-border-sm"></span>`;

        firebase.auth().signInWithEmailAndPassword(emailL, passL)
            .then(function () {
                var user = firebase.auth().currentUser;
                var uid = user.uid;

                var userTest = firebase.database().ref('users' + '/' + uid);
                userTest.orderByChild('uid').equalTo(uid).once("value", snapshot => {
                    if (snapshot.exists()) {

                        var settingUser = firebase.database().ref('users' + '/' + uid);
                        settingUser.once('value', data => {

                            var result = data.val()
                            var key = Object.keys(result)[0]
                            console.log('userName is ', result[key].userName)
                            var userLocal = {
                                userName: result[key].userName,
                                email: result[key].email,
                                password: result[key].password,
                                uid: result[key].uid,
                                loginState: result[key].loginState,
                                loginType: result[key].loginType
                            }

                            localStorage.setItem('userLocal', JSON.stringify(userLocal));
                        });

                        var userData = snapshot.val();
                        console.log("exists!", userData);
                        loginFunction();
                    } else {
                        alert.innerHTML =
                            `<div class="alert alert-danger alert-dismissible">
                         <button type="button" class="close" data-dismiss="alert">&times;</button>
                         Wrong Login type or Account not approved yet.
                        </div>`;
                        signIn.innerHTML = 'Login';
                    }

                });

                // var email, uid;
                // window.open('home.html', '_self');

                // if (user != null) {
                //     // window.location.reload();
                //     email = user.email;
                //     uid = user.uid;
                //     console.log(uid); 
                // }


                function loginFunction() {
                    var userTest = firebase.database().ref('users' + '/' + uid);
                    userTest.orderByChild('loginState').equalTo(true).once("value", data => {
                        if (data.exists()) {
                            console.log("Login Successfully");
                            window.open('home.html', '_self');
                        } else {
                            alert.innerHTML =
                                `<div class="alert alert-danger alert-dismissible">
                                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                                 Your account is not approved yet.
                                </div>`;
                            signIn.innerHTML = 'Login';
                        }

                    });
                }

            })
            .catch(function (error) {
                $('#spins').remove();
                alert.innerHTML =
                    `<div class="alert alert-danger alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                 Invalid credentials
                 </div>`;
                console.log(error);
                signIn.innerHTML = 'Login';
            });
    });



}