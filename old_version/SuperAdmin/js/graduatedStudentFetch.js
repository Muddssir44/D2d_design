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
if(userLocal.loginType == "student"){
  window.open('home.html', '_self')
}

  function testing(key, generateAd) {
    localStorage.setItem('keyOfStudent', key);
    localStorage.setItem('studentType', 'graduated');
    window.open('studentDetails.html', '_self');
    console.log(key);
  }

  function graduatedStudentsFetch(){
    var table = document.getElementById('table');
    var todosRef = firebase.database().ref('students').orderByChild('studentType').equalTo('graduated');
        todosRef.on('child_added', (data) => {
          console.log(data.val(), data.key);
          var row = generateRow(data.val(), data.key);
          table.innerHTML += row;
          document.getElementById("tZapCard").innerHTML = '<b> Graduated Students Listed Successfully.</b>';
        });
 
      function generateRow(data, key) {
        return `<tr>
                <td>${data.studentRegNo}</td>
                <td>${data.name}</td>
                <td>${data.fatherName}</td>
                <td>${data.email}</td>
                <td> <a href="javascript:void(0)" onclick="testing('${key}',this)" > View records  </a> </td>
                </tr>`
              }
  }
  
  firebase.auth().onAuthStateChanged(function (user) {
    if (user) {
      
      var dataCheck = firebase.database().ref('students');
      dataCheck.orderByChild('studentType').once("value", snapshot => {
        if (snapshot.exists()) {
          graduatedStudentsFetch();
        } else {
          document.getElementById("tZapCard").innerHTML = '<b> No graduated students found.</b>';
        }
  
      });
   
                
}

    else {
        signOutUser();
    }

  });

