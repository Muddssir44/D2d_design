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

var table = document.getElementById('table');
var gettingUserLocal = localStorage.getItem('userLocal');
var userLocal = JSON.parse(gettingUserLocal);
console.log(userLocal);

if (userLocal.loginType == "administrator" || userLocal.loginType == "student") {
    window.open('home.html', '_self');
}


function rejectUser(a, b, c, userName, email, password ) {

    firebase.database().ref('users' + '/' + 'rejected').push({
        uid: a,
        userName: userName,
        email: email,
        password: password,
        loginType: b,
        loginState: false
    });

    firebase.database().ref('users' + '/' + 'approved').child(c).remove();
    firebase.database().ref('users/' + a).remove();

    $('body').on('click', 'a.deleteDep', function () {
        $(this).parents('tr').remove();

        var rowCount = $('#table tr').length;
        if (rowCount <= 1){
        document.getElementById("tZapCard").innerHTML = '<b> No approved accounts found.</b>';
        } 

    });

} // Reject user function ends here

function approvedUsers() {
    var todosRef = firebase.database().ref('users' + '/' + 'approved');
    todosRef.on('child_added', (data) => {
        console.log(data.val(), data.key);
        var row = generateRow(data.val(), data.key);
        table.innerHTML += row;
        document.getElementById("tZapCard").innerHTML = '<b> Approved accounts listed successfully.</b>';

        // userName = data.val().userName;
        // email = data.val().email;
        // password = data.val().password;
        // accountType = data.val().loginType;
        // loginState = data.val().loginState;
        // uid = data.val().uid;
    });

    function generateRow(data, key) {
        return `<tr>
            <td>${data.userName}</td>
            <td>${data.email}</td>
            <td>${data.loginType}</td>
            <td>${data.loginState}</td>
            <td> <a href="javascript:void(0)" class="deleteDep" onclick="rejectUser('${data.uid}','${data.loginType}', '${key}' ,'${data.userName}', '${data.email}' , '${data.password}')" style="color:red;" > Reject Account  </a> </td>
            </tr>`
    }
}

firebase.auth().onAuthStateChanged(function (user) {
    if (user) {

        var dataCheck = firebase.database().ref('users' + '/' + 'approved');
        dataCheck.orderByChild('approved').once("value", snapshot => {
            if (snapshot.exists()) {
                approvedUsers();
            } else {
                document.getElementById("tZapCard").innerHTML = '<b> No approved accounts found.</b>';
            }

        });



    } // if(user) ends here
    else {
        signOutUser();
    } // else ends here

});