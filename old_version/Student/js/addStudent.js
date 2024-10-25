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

if (userLocal.loginType == "student") {
  window.open('home.html', '_self');
}

// Selection of multiple select boxes

$(document).ready(function () {
  $("#houseType").on("change", function () {
    if ($(this).val() === "Rent") {
      $("#mRent").show();
    } else {
      $("#mRent").hide();
    }
  });

  $("#orphan").on("change", function () {
    if ($(this).val() === "Yes") {
      $("#orphanConditionSelect").show();
    } else {
      $("#orphanConditionSelect").hide();
    }
  });

  $("#ifOrphan").on("change", function () {
    if ($(this).val() === "None") {
      $(".currentlyLivingWith").show();
    } else {
      $(".currentlyLivingWith").hide();
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

var table = document.getElementById('table');

firebase.auth().onAuthStateChanged(function (user) {
  if (user) {

    var alertBox = document.getElementById('alertBox');
    var formSubmit = document.getElementById('formSubmit');

    //Collecting Basic Information //

    // student type bottom onclick
    var sname = document.getElementById('studentName');
    var fname = document.getElementById('studentFN');
    var studentRegNo = document.getElementById('studentRegNo');
    var studentAddress = document.getElementById('studentAdd');
    var studentEmail = document.getElementById('studentEmail');
    var studentContact = document.getElementById('studentContact');
    // department bottom onclick
    var notes = document.getElementById('notes');

    // Upload File Starts Here //
    var uploadStatus = document.getElementById('uploadStatus');
    var photoURL = "";
    var uploadButton = document.getElementById('uploadButton')

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
            table.innerHTML += `
            <tr>
              <td>${file1Name}</td>
              <td>'Uploaded'</td>
            </tr>
           `
          } else if (file2 == "") {
            $(".tableUpload").show();
            file2 = downloadURL;
            file2Name = fileName;
            table.innerHTML += `
              <tr>
                <td>${file2Name}</td>
                <td>'Uploaded'</td>
              </tr>
             `
          } else if (file3 == "") {
            $(".tableUpload").show();
            file3 = downloadURL;
            file3Name = fileName;
            table.innerHTML += `
              <tr>
                <td>${file3Name}</td>
                <td>'Uploaded'</td>
              </tr>
             `
          } else if (file4 == "") {
            $(".tableUpload").show();
            file4 = downloadURL;
            file4Name = fileName;
            table.innerHTML += `
              <tr>
                <td>${file4Name}</td>
                <td>'Uploaded'</td>
              </tr>
             `
          } else if (file5 == "") {
            $(".tableUpload").show();
            file5 = downloadURL;
            file5Name = fileName;
            table.innerHTML += `
              <tr>
                <td>${file5Name}</td>
                <td>'Uploaded'</td>
              </tr>
             `
          }



        });
      });

    }); //Event listener closed here.
    // Uploading file ends here 

    // Requirments for current students 
    var yearOfAdmissionInNed = document.getElementById('yearOfAdmissionInNed');
    var studentRoll = document.getElementById('studentRoll');
    var noOfSiblings = document.getElementById('noOfSiblings');
    var monthlyIncomeParents = document.getElementById('monthlyIncomeParents');
    var currentlyLivingWith = document.getElementById('currentlyLivingWith');
    var monthlyHouseRent = document.getElementById('monthlyRent');
    var scholarshipAwardYear = document.getElementById('scholarshipAwardYear');
    var amount = document.getElementById('amount');
    var dateOfExtraAmount = document.getElementById('dateOfExtraAmount');
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


    // Graduated students requirments starts here 
    var yearOfGraduation = document.getElementById('yearOfGraduation');
    var internships = document.getElementById('internships');
    var currentCompanyName = document.getElementById('currentCompanyName');
    var currentCompanySalary = document.getElementById('currentCompanySalary');
    var pastCompanyName = document.getElementById('pastCompanyName');
    var pastCompanySalary = document.getElementById('pastCompanySalary');
    var yearOfMarriage = document.getElementById('yearOfMarriage');
    // var studentYear = document.getElementById('studentYear');



    formSubmit.addEventListener('click', e => {
      e.preventDefault();

      var studentType = $("#studentType option:selected").val();
      var SelectDepartment = $("#SelectDepartment option:selected").val();
      var orphan = $("#orphan option:selected").val();
      var LivingParent = $("#ifOrphan option:selected").val();
      var houseType = $("#houseType option:selected").val();
      // var scholarshipAwardYear = $("#scholarshipAwardYear option:selected").val();
      var year = $("#year option:selected").val();
      var yearS1 = $("#yearS1 option:selected").val();
      var yearS2 = $("#yearS2 option:selected").val();
      var yearS3 = $("#yearS3 option:selected").val();
      var married = $("#married option:selected").val();
      // var extraAmountSelect = $("#extraAmountSelect option:selected").val();



      var _db = firebase.database();
      const newStudentAdd = _db.ref('students/').push();

      var studentObj = {

        studentType: studentType,
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
        currentlyLivingWith: currentlyLivingWith.value,
        monthlyIncomeParents: monthlyIncomeParents.value,
        houseType: houseType,
        monthlyRent: monthlyHouseRent.value,
        scholarshipAwardYear: scholarshipAwardYear.value,
        amount: amount.value,
        extraAmount: extraAmount.value,
        dateOfExtraAmount: dateOfExtraAmount.value,
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

      alertBox.innerHTML =
        `<div class="alert alert-success alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                 Student Added Successfully
                 </div>`;
      // alert('Student Added Successfully');
      // location.reload();
      $('input[type="text"], textarea').val('');

    }); //Form submit addEventListener
  } // If user Ends here
  else {
    signOutUser();
  }

}); //Firebase Auth on State changed ends here