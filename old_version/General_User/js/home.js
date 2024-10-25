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

var mainNavbar = document.getElementById('mainNavbar');
var mainBody = document.getElementById('mainBody');
var gettingUserLocal = localStorage.getItem('userLocal');
var userLocal = JSON.parse(gettingUserLocal);
var emailGet = userLocal.email;

if (userLocal.loginType == "student") {
    mainBody.innerHTML = `<h2> <br/>  Welcome Back Student, Please wait while your record is being loaded. </h2>`
    searchingStudent();
    // mainBody.innerHTML =
    //     `
    //     <br>
    //     <h3>Search by Registration No#:</h3>
    //     <div class="form-group">
    //     <input type="text" class="form-control" id="searchEntry">
    //     </div>
        
    //     <div class="form-group">
    //     <label for="pwd">Select type:</label>
    //     <input type="radio" name="loginType" id="userType" value="current"> Current Student
    //     <input type="radio" name="loginType" id="userType" value="graduated"> Gradudated Student
    //     </div>

    //     <button id="signup-btn" class="btn btn-success" onclick="searchingStudent()">
    //     Search
    //     </button>
    //     <div id="alert"> </div> `
}

function testing(key) {
    localStorage.setItem('keyOfStudent', key);
    localStorage.setItem('studentType', objectGot.studentType);
    window.open('editStudentData.html', '_self');
    console.log(key);
  }

function currentStudent(){
    mainBody.innerHTML =
        `
        <br/>
    <div class="alert alert-success alert-dismissible">
     <button type="button" class="close" data-dismiss="alert">&times;</button>
     Record Listed Successfully.
    </div>

    <table class="table">
    <thead class="thead-dark">
    <tr>
        <th colspan="3"> Student Record </th>
     </tr>
    </thead>


    <tr> 
    <td>
    <b> Student Type:  </b> ${objectGot.studentType}
    </td>
    <td> 
    <b> Name: </b> ${objectGot.name}
    </td>
    <td> 
    <b> Father Name: </b>  ${objectGot.fatherName}
    </td>
    </tr>

    <tr> 
    <td>
    <b> Student Regitration Number: </b>  ${objectGot.studentRegNo}
    </td>
    <td colspan="2"> 
    <b> Address: </b> ${objectGot.Address}
    </td>
    </tr> 

    <tr> 
    <td>
    <b> Email Address: </b>  ${objectGot.email}
    </td>
    <td> 
    <b> Contact Number: </b> ${objectGot.contactNo}
    </td>
    <td>
    <b> Department: </b> ${objectGot.Department}
    </td>
    </tr>

    <tr> 
    <td colspan="3">
    <b> Notes: </b> ${objectGot.notes}
    </td>
    </tr>

    <tr> 
    <td>
    <b> Year of admission in ned: </b>  ${objectGot.yearOfAdmissionInNed}
    </td>
    <td> 
    <b> University Roll No#: </b> ${objectGot.universityRollNo} 
    </td>
    <td>
    <b> Number of siblings: </b> ${objectGot.noOfSiblings}
    </td>
    </tr>

    <tr> 
    <td>
    <b> Orphan: </b>  ${objectGot.orphan}
    </td>
    <td> 
    <b> Living Parent: </b> ${objectGot.LivingParent}
    </td>
    <td>
    <b> Monthly Parents Income: </b>  ${objectGot.monthlyIncomeParents}
    </td>
    </tr>

    <tr> 
    <td>
    <b> House Type: </b>  ${objectGot.houseType}
    </td>
    <td> 
    <b> Monthly Rent: </b> ${objectGot.monthlyRent}
    </td>
    </tr>

    <tr> 
    <td>
    <b> Year scholarship awarded: </b>  ${objectGot.scholarshipAwardYear}
    </td>
    <td> 
    <b> Amount of scholarship: </b> ${objectGot.amount}
    </td>
    <td>
    <b> Extra amount: </b>  ${objectGot.extraAmount}
    </td>
    </tr>    
    </table>
    `
    } //current student function ends here

    function graduatedStudent(key){
        mainBody.innerHTML =
        `
        <br/>
    <div class="alert alert-success alert-dismissible">
     <button type="button" class="close" data-dismiss="alert">&times;</button>
     Record Listed Successfully.
    </div>

    <table class="table">
    <thead class="thead-dark">
    <tr>
        <th colspan="3"> Student Record </th>
     </tr>
    </thead>


    <tr> 
    <td>
    <b> Student Type:  </b> ${objectGot.studentType}
    </td>
    <td> 
    <b> Name: </b> ${objectGot.name}
    </td>
    <td> 
    <b> Father Name: </b>  ${objectGot.fatherName}
    </td>
    </tr>

    <tr> 
    <td>
    <b> Student Regitration Number: </b>  ${objectGot.studentRegNo}
    </td>
    <td colspan="2"> 
    <b> Address: </b> ${objectGot.Address}
    </td>
    </tr> 

    <tr> 
    <td>
    <b> Email Address: </b>  ${objectGot.email}
    </td>
    <td> 
    <b> Contact Number: </b> ${objectGot.contactNo}
    </td>
    <td>
    <b> Department: </b> ${objectGot.Department}
    </td>
    </tr>

    <tr> 
    <td colspan="3">
    <b> Notes: </b> ${objectGot.notes}
    </td>
    </tr>

    <tr> 
    <td>
    <b> Year of graduation: </b>  ${objectGot.yearOfAdmissionInNed}
    </td>
    <td> 
    <b> Internships: </b> ${objectGot.internships}
    </td>
    </tr>

    <tr> 
    <td>
    <b> Current company: </b>  ${objectGot.currentCompanyName}
    </td>
    <td> 
    <b> Current Salary: </b> ${objectGot.currentCompanySalary}
    </td>
    </tr>

    <tr> 
    <td>
    <b> Past company: </b>  ${objectGot.pastCompanyName}
    </td>
    <td> 
    <b> Past Salary: </b> ${objectGot.pastCompanySalary}
    </td>
    </tr>

    <tr> 
    <td>
    <b> Married: </b>  ${objectGot.married}
    </td>
    <td> 
    <b> Year of marriage: </b> ${objectGot.yearOfMarriage} 
    </td>
    </tr>

    
    <tr>
    <td> <a href="javascript:void(0)" onclick="testing('${key}',this)" > Edit records  </a> </td>           
    </tr>
    
    </table>
    `
    } // graduated student ends here

    var objectGot ;
   


function searchingStudent() {
    // const loginType = $("input[name=loginType]:checked").val();
    // var searchEntry = document.getElementById('searchEntry').value;
    // searchEntry.replace(/\s/g, '')
    // console.log(loginType)
   
    var studentSearch = firebase.database().ref('students/');
    studentSearch.orderByChild('email').equalTo(emailGet).on("child_added", data => {
        objectGot = data.val();
        console.log(objectGot)
        if ( data.val().studentType == "current"){
            currentStudent(data.key);
        }
        else {
            graduatedStudent(data.key);
        }
    });
}



firebase.auth().onAuthStateChanged(function (user) {
    if (user) {

    } // if(user) ends here
    else {
        signOutUser();
    } // else ends here

}); // onAuthStateChanged Ends here