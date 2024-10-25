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

// <tr> <td> <img src="${objectGot.photoURL}" alt="student photo to be loaded" width="200" heigth="200" />  </td> </tr>

var tableFileUpload = document.getElementById('tableFileUpload');

function currentStudent() {
    studentRecordCard.innerHTML =
        `
    <br>
      <table class="table table-bordered">

      <tr> 
    <button type="button" onclick="window.open('editStudentData.html', '_self');" class="btn btn-primary">Edit Student Record</button>
    </tr>
    
    <thead class="thead-dark">
    <tr>
        <th colspan="3"> Student Basic Information </th>
     </tr>
    </thead>

    <tr> 
    <td>
    <b> Student Type:  </b> ${objectGot.studentType}
    </td>
    <td>
    <b> Student Regitration Number: </b>  ${objectGot.studentRegNo}
    </td>
    <td>
    <b> Email Address: </b>  ${objectGot.email}
    </td>
    </tr>

    <tr> 
    
    <td> 
    <b> Name: </b> ${objectGot.name}
    </td>
    <td> 
    <b> Father Name: </b>  ${objectGot.fatherName}
    </td>
    <td> 
    <b> Contact Number: </b> ${objectGot.contactNo}
    </td>
    </tr> 

    <tr> 
    
    <td>
    <b> Department: </b> ${objectGot.Department}
    </td>
    <td colspan="2"> 
    <b> Address: </b> ${objectGot.Address}
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
    <b> Date of Extra Amount: </b>  ${objectGot.dateOfExtraAmount}
    </td>
    <td> 
    <b> Extra Amount: </b> ${objectGot.extraAmount}
    </td>
    <td>
    <b> Extra amount Note: </b>  ${objectGot.extraAmountNote}
    </td>
    </tr>

    

    <thead class="thead-dark">
    <tr>
        <th colspan="3"> Scholarship Award Information </th>
     </tr>
    </thead>

    <tr> 
    <td>
    <b> Year scholarship awarded: </b>  ${objectGot.scholarshipAwardYear}
    </td>
    <td> 
    <b> Amount of scholarship: </b> ${objectGot.amount}
    </td>
    <td>
    <b> Year: </b>  ${objectGot.year}, <b> Extra Amount: </b> ${objectGot.extraAmount}
    </td>
    </tr>

    ${(() => {
        if (objectGot.scholarshipAwardYearS1 != "") {
          return`
          <tr> 
          <td>
          <b> Year scholarship awarded: </b>  ${objectGot.scholarshipAwardYearS1}
          </td>
          <td> 
          <b> Amount of scholarship: </b> ${objectGot.amountS1}
          </td>
          <td>
          <b> Year: </b>  ${objectGot.yearS1} , <b> Extra Amount: </b> ${objectGot.extraAmountS1}
          </td>
          </tr>
          `
        } 
        else {
            return '';
        }
        
      })()}

      ${(() => {
              
        if (objectGot.scholarshipAwardYearS2 != "") {
                return`
                <tr> 
                <td>
                <b> Year scholarship awarded: </b>  ${objectGot.scholarshipAwardYearS2}
                </td>
                <td> 
                <b> Amount of scholarship: </b> ${objectGot.amountS2}
                </td>
                <td>
                <b> Year: </b>  ${objectGot.yearS2}, <b> Extra Amount: </b> ${objectGot.extraAmountS2}
                </td>
                </tr>
                `
          }

        else {
            return '';
        }

      })()}

      ${(() => {
        if (objectGot.scholarshipAwardYearS3 != "") {
          return`
          <tr> 
          <td>
          <b> Year scholarship awarded: </b>  ${objectGot.scholarshipAwardYearS3}
          </td>
          <td> 
          <b> Amount of scholarship: </b> ${objectGot.amountS3}
          </td>
          <td>
          <b> Year: </b>  ${objectGot.yearS3}, <b> Extra Amount: </b> ${objectGot.extraAmountS3}
          </td>
          </tr>
          `
        } 
        else {
            return '';
        }

      })()}

    </table>
    `
    if (objectGot.file1 != "") {
        studentRecordCard.innerHTML += `   
          <td> <b> File uploaded: </b> <a href="${objectGot.file1}" target="_blank"> ${objectGot.file1Name} </a></td>    
       `
      } 

      if (objectGot.file2 != "") {
        studentRecordCard.innerHTML += `
            <td> <b> File uploaded: </b> <a href="${objectGot.file2}" target="_blank"> ${objectGot.file2Name} </a></td>       
         `
        } 
        
        if (objectGot.file3 != "") {
            studentRecordCard.innerHTML += `
            <td>  <b> File uploaded: </b> <a href="${objectGot.file3}" target="_blank"> ${objectGot.file3Name} </a></td>         
         `
        }

        if (objectGot.file4 != "") {
            studentRecordCard.innerHTML += `
            <td> <b> File uploaded: </b> <a href="${objectGot.file4}" target="_blank"> ${objectGot.file4Name} </a></td>  
         `
        }

        if (objectGot.file5 != "") {
            studentRecordCard.innerHTML += `
            <td> <b> File uploaded: </b> <a href="${objectGot.file5}" target="_blank"> ${objectGot.file5Name} </a> </td> 
         `
        }

        else{
            studentRecordCard.innerHTML += `
            <td> <b> No Files Uploaded </b> </td> 
            `   
        }



} //current student function ends here

// <tr> <td> ${objectGot.photoURL} </td> </tr>

function graduatedStudent(key) {
    studentRecordCard.innerHTML =
        `
    <table class="table table-bordered">
    <thead class="thead-dark">
    <tr>
        <th colspan="3"> Student Basic Information </th>
     </tr>
    </thead>

    <tr> 
    <td>
    <b> Student Type:  </b> ${objectGot.studentType}
    </td>
    <td>
    <b> Student Regitration Number: </b>  ${objectGot.studentRegNo}
    </td>
    <td>
    <b> Email Address: </b>  ${objectGot.email}
    </td>
    </tr>

    <tr> 
    
    <td> 
    <b> Name: </b> ${objectGot.name}
    </td>
    <td> 
    <b> Father Name: </b>  ${objectGot.fatherName}
    </td>
    <td> 
    <b> Contact Number: </b> ${objectGot.contactNo}
    </td>
    </tr> 

    <tr> 
    
    <td>
    <b> Department: </b> ${objectGot.Department}
    </td>
    <td colspan="2"> 
    <b> Address: </b> ${objectGot.Address}
    </td>
    </tr>

    <tr> 
    <td colspan="3">
    <b> Notes: </b> ${objectGot.notes}
    </td>
    </tr>

    <thead class="thead-dark">
    <tr>
        <th colspan="3"> Graduation Details. </th>
     </tr>
    </thead>
    
    <tr> 
    <td>
    <b> Year of graduation: </b>  ${objectGot.yearOfGraduation}
    </td>
    <td colspan="2"> 
    <b> Internships: </b> ${objectGot.internships}
    </td>
    </tr>

    <tr> 
    <td>
    <b> Current company: </b>  ${objectGot.currentCompanyName}
    </td>
    <td colspan="2"> 
    <b> Current Salary: </b> ${objectGot.currentCompanySalary}
    </td>
    </tr>

    <tr> 
    <td>
    <b> Past company: </b>  ${objectGot.pastCompanyName}
    </td>
    <td colspan="2"> 
    <b> Past Salary: </b> ${objectGot.pastCompanySalary}
    </td>
    </tr>

    <tr> 
    <td>
    <b> Married: </b>  ${objectGot.married}
    </td>
    <td colspan="2"> 
    <b> Year of marriage: </b> ${objectGot.yearOfMarriage} 
    </td>
    </tr>

    
    <tr>
    <button type="button" onclick="window.open('editStudentData.html', '_self');" class="btn btn-primary">Edit Student Record</button>           
    </tr>
    
    </table>
    `

    if (objectGot.file1 != "") {
        studentRecordCard.innerHTML += `   
          <td> <b> File uploaded: </b> <a href="${objectGot.file1}" target="_blank"> ${objectGot.file1Name} </a></td>    
       `
      } 

      if (objectGot.file2 != "") {
        studentRecordCard.innerHTML += `
            <td> <b> File uploaded: </b> <a href="${objectGot.file2}" target="_blank"> ${objectGot.file2Name} </a></td>       
         `
        } 
        
        if (objectGot.file3 != "") {
            studentRecordCard.innerHTML += `
            <td>  <b> File uploaded: </b> <a href="${objectGot.file3}" target="_blank"> ${objectGot.file3Name} </a></td>         
         `
        }

        if (objectGot.file4 != "") {
            studentRecordCard.innerHTML += `
            <td> <b> File uploaded: </b> <a href="${objectGot.file4}" target="_blank"> ${objectGot.file4Name} </a></td>  
         `
        }

        if (objectGot.file5 != "") {
            studentRecordCard.innerHTML += `
            <td> <b> File uploaded: </b> <a href="${objectGot.file5}" target="_blank"> ${objectGot.file5Name} </a> </td> 
         `
        }

        else{
            studentRecordCard.innerHTML += `
            <td> <b> No Files Uploaded </b> </td> 
            `   
        }


} // graduated student ends here

var objectGot;


firebase.auth().onAuthStateChanged(function (user) {
    if (user) {
        var abc = localStorage.getItem('keyOfStudent');
        var studentType = localStorage.getItem('studentType')
        console.log(abc);
        var studentRecordCard = document.getElementById('studentRecordCard');

        var _db = firebase.database();
        var table = document.getElementById('mainContent');
        var todosRef = firebase.database().ref('students').child(abc).once('value')
            .then(function (data) {
                document.getElementById("tZapCard").innerHTML = '<b> Record Listed Successfully.</b>';
                
                objectGot = data.val();
                console.log(objectGot)
                if (data.val().studentType == "current") {
                    currentStudent(data.key);
                } else {
                    graduatedStudent(data.key);
                }

                //   studentRecordCard.innerHTML =
                //         `
                //      <img class="card-img-top" src="${data.val().photoURL}" alt="Student Image">
                //     <div class="card-body" >
                //     <h4 class="card-title">${data.val().name}</h4>
                //     <p class="card-text"> <b>Father Name:</b>  ${data.val().fatherName} </p>
                //     <p class="card-text"> <b>Roll No#:</b>  ${data.val().rollNo} </p>
                //     <p class="card-text"> <b>Email:</b>  ${data.val().email} </p>
                //     <p class="card-text"> <b>Contact No#:</b>  ${data.val().contactNo} </p>
                //     <p class="card-text"> <b>Address:</b>  ${data.val().Address} </p>
                //     <p class="card-text"> <b>Student Year:</b>  ${data.val().studentYear} </p>
                //     <p class="card-text"> <b>Current Company:</b>  ${data.val().currentCompanyName} </p>
                //     <p class="card-text"> <b>Past Company:</b>  ${data.val().pastCompanyName} </p>
                //     <p class="card-text"> <b>Internships:</b>  ${data.val().internships} </p>
                //     <p class="card-text"> <b>Amount:</b>  ${data.val().amount} </p>
                //     <p class="card-text"> <b>Extra Amount:</b>  ${data.val().extraAmount} </p>
                //     <p class="card-text"> <b>Monthly Parent Income's:</b>  ${data.val().monthlyIncomeParents} </p>
                //     <p class="card-text"> <b>House Type:</b>  ${data.val().houseType} </p>
                //     <p class="card-text"> <b>Monthly Rent:</b>  ${data.val().monthlyRent} </p>
                //     <p class="card-text"> <b>Notes:</b>  ${data.val().notes} </p>

                //     <button type="button" onclick="window.open('editStudentData.html', '_self');" class="btn btn-primary">Edit Student Record</button>
                //  </b>  
                // </div>


                //     


            });

    } else {
        signOutUser();
    }

});