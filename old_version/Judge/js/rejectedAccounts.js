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

if(userLocal.loginType == "administrator" || userLocal.loginType == "student"){
    window.open('home.html' , '_self');
}


function approveUser(a, b, c, userName, email, password) {
    firebase.database().ref('users/' + a + '/Login').set({
        uid: a,
        userName: userName,
        email: email,
        password: password,
        loginType: b,
        loginState: true
    });

    firebase.database().ref('users' + '/' + 'approved').push({
        uid: a,
        userName: userName,
        email: email,
        password: password,
        loginType: b,
        loginState: true
    });

    firebase.database().ref('users' + '/' + 'rejected').child(c).remove();
    $('body').on('click', 'a.deleteDep', function() {
        $(this).parents('tr').remove();  
        
        var rowCount = $('#table tr').length;
        if (rowCount <= 1){
        document.getElementById("tZapCard").innerHTML = '<b> No rejected accounts found.</b>';
        } 

     });


    } // Approve user function ends here

function rejectedUsers() {
    var todosRef = firebase.database().ref('users' + '/' + 'rejected');
    todosRef.on('child_added', (data) => {
        console.log(data.val(), data.key);
        var row = generateRow(data.val(), data.key);
        table.innerHTML += row;
        document.getElementById("tZapCard").innerHTML = '<b> Rejected accounts listed successfully.</b>';
        
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
        <td> <a href="javascript:void(0)" class="deleteDep" onclick="approveUser('${data.uid}','${data.loginType}', '${key}' ,'${data.userName}', '${data.email}' , '${data.password}')" style="color:green;" > Approve Account  </a> </td>
        </tr>`
    }
    
} // function rejectedUser ends here

firebase.auth().onAuthStateChanged(function (user) {
    if (user) {


        var dataCheck = firebase.database().ref('users' + '/' + 'rejected');
        dataCheck.orderByChild('rejected').once("value", snapshot => {
                    if (snapshot.exists()) {
                        rejectedUsers();
                    } 
                    
                    else {
          document.getElementById("tZapCard").innerHTML = '<b> No rejected accounts found.</b>';
                        }

                });
      
    } // if(user) ends here
    
    else {
        signOutUser();
    } // else ends here

});