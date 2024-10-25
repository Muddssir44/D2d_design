function signOutUser() {
    firebase.auth().signOut()
        .then(function () {
            window.open('index.html', '_self');
            console.log("Successfully Logged Out");
            // Sign-out successful.
        }).catch(function (error) {
            // An error happened.
            console.log(error);
        });
}

var gettingUserLocal = localStorage.getItem('userLocal');
var userLocal = JSON.parse(gettingUserLocal);

if (userLocal.loginType == "student" || userLocal.loginType == "administrator"  ) {
    window.open('home.html', '_self');
}

var alertBox = document.getElementById('alertBox');
var accountName = document.getElementById('accountName');
var accountEmail = document.getElementById('accountEmail');
var accountPassword = document.getElementById('accountPassword');
var accountSubmit = document.getElementById('accountSubmit');


firebase.auth().onAuthStateChanged(function (user) {
        if (user) {

            accountSubmit.addEventListener('click', e => {
                e.preventDefault();
                var accountType = $("#accountType option:selected").val();
                var loginState = false;
            
                accountSubmit.innerHTML +=
                    `<span id="spins" class="spinner-border spinner-border-sm"></span>`;
            
                const auth = firebase.auth();
                firebase.auth().createUserWithEmailAndPassword(accountEmail.value, accountPassword.value)
                    .then(function () {
            
                        var uid = firebase.auth().currentUser.uid;
            
                        alertBox.innerHTML =
                            `<div class="alert alert-success alert-dismissible">
                     <button type="button" class="close" data-dismiss="alert">&times;</button>
                     Account Created Successfully.
                     </div>`;
            
                        var _db = firebase.database();
                        const newUserAdd = _db.ref('users' + '/' + 'pending').push();
            
                        var userObject = {
                            uid: uid,
                            userName: accountName.value,
                            email: accountEmail.value,
                            password: accountPassword.value,
                            loginType: accountType,
                            loginState: loginState
                        }
                        console.log('success');
                        newUserAdd.set(userObject);
            
                        $('input[type="text"]').val('');
                        $('input[type="password"]').val('');
                        $('#spins').remove();
                        alert('Account created');
                    })
            
                    .catch(function (error) {
                        $('#spins').remove();
                        alertBox.innerHTML =
                            `<div class="alert alert-danger alert-dismissible">
                       <button type="button" class="close" data-dismiss="alert">&times;</button>
                       ${error}
                       </div>`;
                       accountSubmit.innerHTML = 'Create Account';
                        console.log(error);
                    });
            
            });

        }

else {
    signOutUser();
}

}); //Firebase Auth on State changed ends here






