window.onload = function () {
    var userEmail = document.getElementById('userEmail');
    var alert = document.getElementById('alert');
    var signUp = document.getElementById('signup-btn');

    signUp.addEventListener('click', e => {
        e.preventDefault();
        const uEmail = userEmail.value;

        if (userEmail.value == "") {
            alert("Email Missing");
        }

        signUp.innerHTML +=
            `<span id="spins" class="spinner-border spinner-border-sm"></span>`;

        var auth = firebase.auth();
        var emailAddress = uEmail;

        auth.sendPasswordResetEmail(emailAddress).then(function () {
            // Email sent.
            alert.innerHTML =
                `<div class="alert alert-success alert-dismissible">
         <button type="button" class="close" data-dismiss="alert">&times;</button>
         Reset link sent Successfully.
         </div>`;
            $('#spins').remove();

        }).catch(function (error) {
            // An error happened.
            alert.innerHTML =
                `<div class="alert alert-danger alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                 ${error}
                 </div>`;
            $('#spins').remove();

        });



    });

}