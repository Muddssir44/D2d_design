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

var tableU = document.getElementById('tableU');
var abc = localStorage.getItem('keyOfStudent');

function renewalInformationS1() {
  $(".dataS1").show();
  $("#buttonS").hide();
}

function renewalInformationS2() {
  $(".dataS2").show();
  $("#buttonS2").hide();
}

function renewalInformationS3() {
  $(".dataS3").show();
  $("#buttonS3").hide();
}

$(document).ready(function () {
  $("#houseType").on("change", function () {
    if ($(this).val() === "Rent") {
      $("#mRent").show();
    } else {
      $("#mRent").hide();
    }
  });

  $("#orphan").on("change", function () {
    if ($(this).val() === "No") {
      $("#orphanConditionSelect").show();
    } else {
      $("#orphanConditionSelect").hide();
    }
  });

  $("#ifOrphan").on("change", function () {
    if ($(this).val() === "Mother" || $(this).val() === "Father") {
      $(".monthlyIncomeParents").show();
    } else {
      $(".monthlyIncomeParents").hide();
    }
  });

  $("#studentType").on("change", function () {
    if ($(this).val() === "current") {
      $(".currentShow").show();
    } else {
      $(".currentShow").hide();
    }
  });

  $("#married").on("change", function () {
    if ($(this).val() === "yes") {
      $("#marriedAns").show();
    } else {
      $("#marriedAns").hide();
    }
  });

  $("#studentType").on("change", function () {
    if ($(this).val() === "graduated") {
      $(".gradShow").show();
    } else {
      $(".gradShow").hide();
    }
  });

}); //document.ready ends here

var photoURL;

var file1 = "";
var file2 = "";
var file3 = "";
var file4 = "";
var file5 = "";
// var file6 = "" ;
// var file7 = "" ;
// var file8 = "" ;
// var file9 = "" ;
// var file10 = "" ;
var fileName = '';
var file1Name = "";
var file2Name = "";
var file3Name = "";
var file4Name = "";
var file5Name = "";

var fileToBeDeleted;
var fileNameToBeDeleted;

function deletingFile(fileName, b, fileUrl, fileNameToBeDeleted) {
  // Create a reference to the file to delete
  // const storageRef = firebase.storage().ref();
  var desertRef = firebase.storage().ref().child(fileName);

  // Delete the file
  desertRef.delete().then(function () {
    alert('file deleted successfully');

    var delImg = firebase.database().ref('students').child(abc).update({
      [fileUrl]: "",
      [fileNameToBeDeleted]: ""
    });

    if (fileNameToBeDeleted == 'file1Name') {
      file1 = "";
      file1Name = "";
    } else if (fileNameToBeDeleted == 'file2Name') {
      file2 = "";
      file2Name = "";
    } else if (fileNameToBeDeleted == 'file3Name') {
      file3 = "";
      file3Name = "";
    } else if (fileNameToBeDeleted == 'file4Name') {
      file4 = "";
      file4Name = "";
    } else if (fileNameToBeDeleted == 'file5Name') {
      file5 = "";
      file5Name = "";
    }
    $(b).closest("tr").remove();

    // File deleted successfully
  }).catch(function (error) {
    alert(error)
    // Uh-oh, an error occurred!

  });
} // function deleting file ended here



function deletingAtInstance(fileNameC, b, fileNameToBeDeleted) {
  var desertRef = firebase.storage().ref().child(fileNameToBeDeleted);
  // Delete the file
  desertRef.delete().then(function () {
    if (fileNameC == 'file1Name') {
      file1 = "";
      file1Name = "";
    } else if (fileNameC == 'file2Name') {
      file2 = "";
      file2Name = "";
    } else if (fileNameC == 'file3Name') {
      file3 = "";
      file3Name = "";
    } else if (fileNameC == 'file4Name') {
      file4 = "";
      file4Name = "";
    } else if (fileNameC == 'file5Name') {
      file5 = "";
      file5Name = "";
    }
    alert('file deleted successfully');
    $(b).closest("tr").remove();

    // File deleted successfully
  }).catch(function (error) {
    alert(error)
    // Uh-oh, an error occurred!

  });
} // function deleting file ended here


firebase.auth().onAuthStateChanged(function (user) {
  if (user) {
    var abc = localStorage.getItem('keyOfStudent');
    var studentType = localStorage.getItem('studentType')
    console.log(abc);
    var formSubmit = document.getElementById('formSubmit');

    // student type bottom onclick ( Getting Elements )
    var sname = document.getElementById('studentName');
    var fname = document.getElementById('studentFN');
    var studentRegNo = document.getElementById('studentRegNo');
    var studentAddress = document.getElementById('studentAdd');
    var studentEmail = document.getElementById('studentEmail');
    var studentContact = document.getElementById('studentContact');
    // department bottom onclick
    var notes = document.getElementById('notes');

    // Requirments for current students 
    var yearOfAdmissionInNed = document.getElementById('yearOfAdmissionInNed');
    var studentRoll = document.getElementById('studentRoll');
    var noOfSiblings = document.getElementById('noOfSiblings');
    var monthlyIncomeParents = document.getElementById('monthlyIncomeParents');
    var currentlyLivingWith = document.getElementById('currentlyLivingWith');
    var monthlyHouseRent = document.getElementById('monthlyRent');
    var amount = document.getElementById('amount');
    var extraAmount = document.getElementById('extraAmount');
    var extraAmountNote = document.getElementById('extraAmountNote');
    var scholarshipAwardYear = document.getElementById('scholarshipAwardYear');

    var scholarshipAwardYearS1 = document.getElementById('scholarshipAwardYearS1');
    var amountS1 = document.getElementById('amountS1');
    var extraAmountS1 = document.getElementById('extraAmountS1');

    var scholarshipAwardYearS2 = document.getElementById('scholarshipAwardYearS2');
    var amountS2 = document.getElementById('amountS2');
    var extraAmountS2 = document.getElementById('extraAmountS2');

    var scholarshipAwardYearS3 = document.getElementById('scholarshipAwardYearS3');
    var amountS3 = document.getElementById('amountS3');
    var extraAmountS3 = document.getElementById('extraAmountS3');

    var yearS1 = $("#yearS1 option:selected").val();
    var yearS2 = $("#yearS2 option:selected").val();
    var yearS3 = $("#yearS3 option:selected").val();

    // Graduated students requirments starts here 
    var yearOfGraduation = document.getElementById('yearOfGraduation');
    var internships = document.getElementById('internships');
    var currentCompanyName = document.getElementById('currentCompanyName');
    var currentCompanySalary = document.getElementById('currentCompanySalary');
    var pastCompanyName = document.getElementById('pastCompanyName');
    var pastCompanySalary = document.getElementById('pastCompanySalary');
    var yearOfMarriage = document.getElementById('yearOfMarriage');



    scholarshipAwardYearS1.value = "";
    amountS1.value = "";
    yearS1.value = "";

    scholarshipAwardYearS2.value = "";
    amountS2.value = "";
    yearS2.value = "";

    scholarshipAwardYearS3.value = "";
    amountS3.value = "";
    yearS3.value = "";

    var editDetails = document.getElementById('editDetails');
    var fetchedStudentType;

    var _db = firebase.database();
    var table = document.getElementById('mainContent');
    var todosRef = firebase.database().ref('students').child(abc).once('value')
      .then(function (data) {
        abc = data.key;
        studentType = data.val().studentType;
        document.getElementById("tZapCard").innerHTML = '<b> Record Listed Successfully. You can now edit or modify data.</b>';
        console.log(data.val().name);
        console.log(data.key)

        // Setting Basic Values from Database
        document.getElementById('studentType').value = data.val().studentType;
        document.getElementById('dateOfExtraAmount').value = data.val().dateOfExtraAmount;
        // document.getElementById('extraAmountSelect').value = data.val().extraAmountSelect;
        sname.setAttribute('value', data.val().name);
        fname.setAttribute('value', data.val().fatherName);
        studentRegNo.setAttribute('value', data.val().studentRegNo);
        studentAddress.setAttribute('value', data.val().Address);
        studentEmail.setAttribute('value', data.val().email);
        studentContact.setAttribute('value', data.val().contactNo);
        notes.innerHTML = data.val().notes;


        if (data.val().file1 != "") {
          $(".tableUpload").show();
          file1 = data.val().file1;
          file1Name = data.val().file1Name;
          fileToBeDeleted = 'file1';
          fileNameToBeDeleted = 'file1Name';

          tableU.innerHTML += `
          <tr>   
            <td>  ${data.val().file1Name}</td> 
            <td>'Uploaded'</td> 
            <td> <a href="javascript:void(0)" class="deleteDep" onclick="deletingFile('${data.val().file1Name}', this , '${fileToBeDeleted}', '${fileNameToBeDeleted}')" style="color:red;" > Delete  </a> </td>
            </tr>
            `
        }

        if (data.val().file2 != "") {
          $(".tableUpload").show();
          file2 = data.val().file2;
          file2Name = data.val().file2Name;
          fileToBeDeleted = 'file2';
          fileNameToBeDeleted = 'file2Name';

          tableU.innerHTML += `
          <tr>   
            <td>  ${data.val().file2Name}</td> 
            <td>'Uploaded'</td> 
            <td> <a href="javascript:void(0)" class="deleteDep" onclick="deletingFile('${data.val().file2Name}', this , '${fileToBeDeleted}', '${fileNameToBeDeleted}')" style="color:red;" > Delete  </a> </td>
            </tr>
            `
        }

        if (data.val().file3 != "") {
          $(".tableUpload").show();
          file3 = data.val().file3;
          file3Name = data.val().file3Name;
          fileToBeDeleted = 'file3';
          fileNameToBeDeleted = 'file3Name';

          tableU.innerHTML += `
          <tr>   
            <td>  ${data.val().file3Name}</td> 
            <td>'Uploaded'</td> 
            <td> <a href="javascript:void(0)" class="deleteDep" onclick="deletingFile('${data.val().file3Name}', this , '${fileToBeDeleted}', '${fileNameToBeDeleted}')" style="color:red;" > Delete  </a> </td>
            </tr>
            `
        }

        if (data.val().file4 != "") {
          $(".tableUpload").show();
          file4 = data.val().file4;
          file4Name = data.val().file4Name;
          fileToBeDeleted = 'file4';
          fileNameToBeDeleted = 'file4Name';

          tableU.innerHTML += `
          <tr>   
            <td>  ${data.val().file4Name}</td> 
            <td>'Uploaded'</td> 
            <td> <a href="javascript:void(0)" class="deleteDep" onclick="deletingFile('${data.val().file4Name}', this , '${fileToBeDeleted}', '${fileNameToBeDeleted}')" style="color:red;" > Delete  </a> </td>
            </tr>
            `
        }

        if (data.val().file5 != "") {
          $(".tableUpload").show();
          file5 = data.val().file5;
          file5Name = data.val().file5Name;
          fileToBeDeleted = 'file5';
          fileNameToBeDeleted = 'file5Name';

          tableU.innerHTML += `
          <tr>   
            <td>  ${data.val().file5Name}</td> 
            <td>'Uploaded'</td> 
            <td> <a href="javascript:void(0)" class="deleteDep" onclick="deletingFile('${data.val().file5Name}', this , '${fileToBeDeleted}', '${fileNameToBeDeleted}')" style="color:red;" > Delete  </a> </td>
            </tr>
            `
        }

        // Setting values for Current Student 
        yearOfAdmissionInNed.setAttribute('value', data.val().yearOfAdmissionInNed);
        studentRoll.setAttribute('value', data.val().universityRollNo);
        noOfSiblings.setAttribute('value', data.val().noOfSiblings);
        monthlyIncomeParents.setAttribute('value', data.val().monthlyIncomeParents);
        currentlyLivingWith.setAttribute('value', data.val().currentlyLivingWith)
        monthlyHouseRent.setAttribute('value', data.val().monthlyRent);
        amount.setAttribute('value', data.val().amount);
        extraAmount.setAttribute('value', data.val().extraAmount);
        extraAmountNote.setAttribute('value', data.val().extraAmountNote);
        scholarshipAwardYear.setAttribute('value', data.val().scholarshipAwardYear);
        extraAmountS1.setAttribute('value', data.val().extraAmountS1);
        extraAmountS2.setAttribute('value', data.val().extraAmountS2);
        extraAmountS3.setAttribute('value', data.val().extraAmountS3);

        if (data.val().scholarshipAwardYearS1 != "") {
          $(".dataS1").show();
          $("#buttonS").hide();
          scholarshipAwardYearS1.setAttribute('value', data.val().scholarshipAwardYearS1);
          amountS1.setAttribute('value', data.val().amountS1);
          document.getElementById('yearS1').value = data.val().yearS1;
          extraAmountS1.setAttribute('value', data.val().extraAmountS1);
          extraAmountS1.value = data.val().extraAmountS1;
          scholarshipAwardYearS1.value = data.val().scholarshipAwardYearS1;
          amountS1.value = data.val().amountS1;
          yearS1.value = data.val().yearS1;
        }

        if (data.val().scholarshipAwardYearS2 != "") {
          $(".dataS2").show();
          $("#buttonS2").hide();
          scholarshipAwardYearS2.setAttribute('value', data.val().scholarshipAwardYearS2);
          amountS2.setAttribute('value', data.val().amountS2);
          document.getElementById('yearS2').value = data.val().yearS2;
          extraAmountS2.setAttribute('value', data.val().extraAmountS2);
          extraAmountS2.value = data.val().extraAmountS2;
          scholarshipAwardYearS2.value = data.val().scholarshipAwardYearS2;
          amountS2.value = data.val().amountS2;
          yearS2.value = data.val().yearS2;
        }

        if (data.val().scholarshipAwardYearS3 != "") {
          $(".dataS2").show();
          $("#buttonS3").hide();
          scholarshipAwardYearS3.setAttribute('value', data.val().scholarshipAwardYearS3);
          amountS3.setAttribute('value', data.val().amountS3);
          document.getElementById('yearS3').value = data.val().yearS3;
          extraAmountS3.setAttribute('value', data.val().extraAmountS3);
          extraAmountS3.value = data.val().extraAmountS3;
          scholarshipAwardYearS3.value = data.val().scholarshipAwardYearS3;
          amountS3.value = data.val().amountS3;
          yearS3.value = data.val().yearS3;
        }

        // Setting Values for Graduated Student
        yearOfGraduation.setAttribute('value', data.val().yearOfGraduation);
        internships.setAttribute('value', data.val().internships);
        currentCompanyName.setAttribute('value', data.val().currentCompanyName);
        currentCompanySalary.setAttribute('value', data.val().currentCompanySalary);
        pastCompanyName.setAttribute('value', data.val().pastCompanyName);
        pastCompanySalary.setAttribute('value', data.val().pastCompanySalary);
        yearOfMarriage.setAttribute('value', data.val().yearOfMarriage);

        document.getElementById('houseType').value = data.val().houseType;
        document.getElementById('SelectDepartment').value = data.val().Department;
        document.getElementById('orphan').value = data.val().orphan;
        document.getElementById('ifOrphan').value = data.val().LivingParent;

        // document.getElementById('scholarshipAwardYear').value = data.val().scholarshipAwardYear;
        document.getElementById('married').value = data.val().married;

        // monthlyRent.setAttribute('value', data.val().monthlyRent);
        //  notes.setAttribute('value', data.val().notes);
        fetchedStudentType = data.val().studentType;
        var checkingHouseType = data.val().houseType;
        var checkingIfOrphan = data.val().orphan;
        var checkingIfMarried = data.val().married;
        photoURL = data.val().photoURL;


        $(document).ready(function () {

          if (checkingHouseType === "Rent") {
            $("#mRent").show();
          } else {
            $("#mRent").hide();
          }

          if (checkingIfOrphan === "Yes") {
            $("#orphanConditionSelect").show();
            $(".currentlyLivingWith").show();
            monthlyIncomeParents
          } else {
            $("#orphanConditionSelect").hide();
            $(".currentlyLivingWith").hide();
          }


          if (studentType === "current") {
            $(".currentShow").show();
          } else {
            $(".currentShow").hide();
          }

          if (studentType === "graduated") {
            $(".gradShow").show();
          } else {
            $(".gradShow").hide();
          }

          if (checkingIfMarried === "yes") {
            $("#marriedAns").show();
          } else {
            $("#marriedAns").hide();
          }

        });

      });


    uploadButton.addEventListener('click', e => {
      const ref = firebase.storage().ref();
      const file = $('#uploadFile').get(0).files[0];
      const name = (file.name);
      fileName = file.name;
      const task = ref.child(name).put(file, {
        contentType: file.type
      });

      task.on('state_changed', function (snapshot) {
        var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
        console.log('Upload is ' + progress + '% done');
        uploadStatus.innerText = 'Upload is ' + progress + '% done';

        switch (snapshot.state) {
          case firebase.storage.TaskState.PAUSED: // or 'paused'
            console.log('Upload is paused');
            uploadStatus.innerText = 'Upload is paused';
            break;
          case firebase.storage.TaskState.RUNNING: // or 'running'
            console.log('Upload is running');
            uploadStatus.innerText = 'Upload is running';
            break;
        }
      }, function (error) {
        // Handle unsuccessful uploads
        uploadStatus.innerText = error;
      }, function () {
        // Handle successful uploads on complete
        // For instance, get the download URL: https://firebasestorage.googleapis.com/...
        task.snapshot.ref.getDownloadURL().then(function (downloadURL) {
          console.log('File available at', downloadURL);
          uploadStatus.innerText = 'File Uploaded Successfully';
          // photoURL = downloadURL;

          if (file1 == "") {
            $(".tableUpload").show();
            file1 = downloadURL;
            file1Name = fileName;
            tableU.innerHTML += `
              <tr>
                <td>${file1Name}</td>
                <td>'Uploaded'</td>
                <td> <a href="javascript:void(0)" class="deleteDep" onclick="deletingAtInstance('file1Name', this , '${file1Name}')" style="color:red;" > Delete  </a> </td>
              </tr>
             `
          } else if (file2 == "") {
            $(".tableUpload").show();
            file2 = downloadURL;
            file2Name = fileName;
            tableU.innerHTML += `
                <tr>
                  <td>${file2Name}</td>
                  <td>'Uploaded'</td>
                  <td> <a href="javascript:void(0)" class="deleteDep" onclick="deletingAtInstance('file2Name', this , '${file2Name}')" style="color:red;" > Delete  </a> </td>
                </tr>
               `
          } else if (file3 == "") {
            $(".tableUpload").show();
            file3 = downloadURL;
            file3Name = fileName;
            tableU.innerHTML += `
                <tr>
                  <td>${file3Name}</td>
                  <td>'Uploaded'</td>
                  <td> <a href="javascript:void(0)" class="deleteDep" onclick="deletingAtInstance('file3Name', this , '${file3Name}')" style="color:red;" > Delete  </a> </td>
                </tr>
               `
          } else if (file4 == "") {
            $(".tableUpload").show();
            file4 = downloadURL;
            file4Name = fileName;
            tableU.innerHTML += `
                <tr>
                  <td>${file4Name}</td>
                  <td>'Uploaded'</td>
                  <td> <a href="javascript:void(0)" class="deleteDep" onclick="deletingAtInstance('file4Name', this , '${file4Name}')" style="color:red;" > Delete  </a> </td>
                </tr>
               `
          } else if (file5 == "") {
            $(".tableUpload").show();
            file5 = downloadURL;
            file5Name = fileName;
            tableU.innerHTML += `
                <tr>
                  <td>${file5Name}</td>
                  <td>'Uploaded'</td>
                  <td> <a href="javascript:void(0)" class="deleteDep" onclick="deletingAtInstance('file5Name', this , '${file5Name}')" style="color:red;" > Delete  </a> </td>
                </tr>
               `
          }

        });
      });

    }); //Event listener closed here.
    // Uploading file ends here 



    formSubmit.addEventListener('click', e => {

      var updatedStudentType = $("#studentType option:selected").val();
      var SelectDepartment = $("#SelectDepartment option:selected").val();
      var orphan = $("#orphan option:selected").val();
      var LivingParent = $("#ifOrphan option:selected").val();
      var houseType = $("#houseType option:selected").val();
      var married = $("#married option:selected").val();
      var year = $("#year option:selected").val();
       yearS1 = $("#yearS1 option:selected").val();
       yearS2 = $("#yearS2 option:selected").val();
       yearS3 = $("#yearS3 option:selected").val();

      if ( (updatedStudentType == fetchedStudentType) && (updatedStudentType =="current") ) {

        firebase.database().ref('students').child(abc)
          .update({
            studentType: updatedStudentType,
            name: sname.value,
            fatherName: fname.value,
            studentRegNo: studentRegNo.value,
            Address: studentAddress.value,
            email: studentEmail.value,
            contactNo: studentContact.value,
            Department: SelectDepartment,
            notes: notes.value,

            yearOfAdmissionInNed: yearOfAdmissionInNed.value,
            universityRollNo: studentRoll.value,
            noOfSiblings: noOfSiblings.value,
            orphan: orphan,
            LivingParent: LivingParent,
            monthlyIncomeParents: monthlyIncomeParents.value,
            currentlyLivingWith: currentlyLivingWith.value,
            houseType: houseType,
            monthlyRent: monthlyRent.value,
            scholarshipAwardYear: scholarshipAwardYear.value,
            amount: amount.value,
            extraAmount: extraAmount.value,
            extraAmountNote: extraAmountNote.value,
            year: year,

            scholarshipAwardYearS1: scholarshipAwardYearS1.value,
            amountS1: amountS1.value,
            yearS1: yearS1,
            extraAmountS1: extraAmountS1.value,

            scholarshipAwardYearS2: scholarshipAwardYearS2.value,
            amountS2: amountS2.value,
            yearS2: yearS2,
            extraAmountS2: extraAmountS2.value,

            scholarshipAwardYearS3: scholarshipAwardYearS3.value,
            amountS3: amountS3.value,
            yearS3: yearS3,
            extraAmountS3: extraAmountS3.value,

            yearOfGraduation: yearOfGraduation.value,
            internships: internships.value,
            currentCompanyName: currentCompanyName.value,
            currentCompanySalary: currentCompanySalary.value,
            pastCompanyName: pastCompanyName.value,
            pastCompanySalary: pastCompanySalary.value,
            married: married,
            yearOfMarriage: yearOfMarriage.value,
            // photoURL: photoURL
            file1Name: file1Name,
            file2Name: file2Name,
            file3Name: file3Name,
            file4Name: file4Name,
            file5Name: file5Name,
            file1: file1,
            file2: file2,
            file3: file3,
            file4: file4,
            file5: file5
          });
      } // IF ENDS HERE

      else if ( (updatedStudentType == fetchedStudentType) && (updatedStudentType =="graduated") ) {

        firebase.database().ref('students').child(abc)
          .update({
            studentType: updatedStudentType,
            name: sname.value,
            fatherName: fname.value,
            studentRegNo: studentRegNo.value,
            Address: studentAddress.value,
            email: studentEmail.value,
            contactNo: studentContact.value,
            Department: SelectDepartment,
            notes: notes.value,

            yearOfAdmissionInNed: yearOfAdmissionInNed.value,
            universityRollNo: studentRoll.value,
            noOfSiblings: noOfSiblings.value,
            orphan: orphan,
            LivingParent: LivingParent,
            monthlyIncomeParents: monthlyIncomeParents.value,
            currentlyLivingWith: currentlyLivingWith.value,
            houseType: houseType,
            monthlyRent: monthlyRent.value,
            scholarshipAwardYear: scholarshipAwardYear.value,
            amount: amount.value,
            extraAmount: extraAmount.value,
            extraAmountNote: extraAmountNote.value,
            year: year,

            yearOfGraduation: yearOfGraduation.value,
            internships: internships.value,
            currentCompanyName: currentCompanyName.value,
            currentCompanySalary: currentCompanySalary.value,
            pastCompanyName: pastCompanyName.value,
            pastCompanySalary: pastCompanySalary.value,
            married: married,
            yearOfMarriage: yearOfMarriage.value,
            // photoURL: photoURL
            file1Name: file1Name,
            file2Name: file2Name,
            file3Name: file3Name,
            file4Name: file4Name,
            file5Name: file5Name,
            file1: file1,
            file2: file2,
            file3: file3,
            file4: file4,
            file5: file5
          });
      } // ELSE IF ENDS HERE


      else {
        firebase.database().ref('students').child(abc).remove();
        var _db = firebase.database();
        const newStudentAdd = _db.ref('students/').push();

        var studentObj = {
          studentType: updatedStudentType,
          name: sname.value,
          fatherName: fname.value,
          studentRegNo: studentRegNo.value,
          Address: studentAddress.value,
          email: studentEmail.value,
          contactNo: studentContact.value,
          Department: SelectDepartment,
          notes: notes.value,

          yearOfAdmissionInNed: yearOfAdmissionInNed.value,
          universityRollNo: studentRoll.value,
          noOfSiblings: noOfSiblings.value,
          orphan: orphan,
          LivingParent: LivingParent,
          monthlyIncomeParents: monthlyIncomeParents.value,
          houseType: houseType,
          monthlyRent: monthlyRent.value,
          scholarshipAwardYear: scholarshipAwardYear.value,
          amount: amount.value,
          extraAmount: extraAmount.value,
          extraAmountNote: extraAmountNote.value,
          year: year,

          scholarshipAwardYearS1: scholarshipAwardYearS1.value,
          amountS1: amountS1.value,
          yearS1: yearS1,
          extraAmountS1: extraAmountS1.value,

          scholarshipAwardYearS2: scholarshipAwardYearS2.value,
          amountS2: amountS2.value,
          yearS2: yearS2,
          extraAmountS2: extraAmountS2.value,

          scholarshipAwardYearS3: scholarshipAwardYearS3.value,
          amountS3: amountS3.value,
          yearS3: yearS3,
          extraAmountS3: extraAmountS3.value,

          yearOfGraduation: yearOfGraduation.value,
          internships: internships.value,
          currentCompanyName: currentCompanyName.value,
          currentCompanySalary: currentCompanySalary.value,
          pastCompanyName: pastCompanyName.value,
          pastCompanySalary: pastCompanySalary.value,
          married: married,
          yearOfMarriage: yearOfMarriage.value,
          //photoURL: photoURL
          file1Name: file1Name,
          file2Name: file2Name,
          file3Name: file3Name,
          file4Name: file4Name,
          file5Name: file5Name,
          file1: file1,
          file2: file2,
          file3: file3,
          file4: file4,
          file5: file5

        }
        console.log('success');
        newStudentAdd.set(studentObj);

      } // Else ends here

      alert('Record updated')
      window.open('studentDetails.html', '_self');



      alertBox.innerHTML =
        `<div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          Record Updated Successfully!
          </div>`;

    });

  } else {
    signOutUser();
  }

});