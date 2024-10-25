<?php 
include("database/config.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>EMUiNVENT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="shortcut icon" href="http://emuinvent.emuem.org/favicon.png">
</head>
<body>

<style>
@media only screen and (max-width: 800px) {

    #header{
            width: 100%;
            height:auto;
            background-size: 100% auto !important;
    }
	
}
.tabs-content {
    border: 1px solid #e6e6e6;
    border-top: 0;
    background: #fefefe;
    color: #0a0a0a;
    transition: all 0.5s ease;
}
.tabs-panel[aria-hidden="false"] {
    display: block;
	
}
.tabs-panel {
    display: none;
    padding: 1rem;
}

</style>
   <?php include('header.php');?>
	

<body>
	
		 <?php include('navbar.php');?>
	
	<div style="width:100%">
	<div class="tabs-panel is-active" id="d32e139-2" role="tabpanel" aria-hidden="false" aria-labelledby="d32e139-2-label">
	<p>School teachers can bring their class teams to the competition. We understand that your students might be participating in other STEM and non-STEM related activities and competitions; EMIiNVENT is unique as it introduces and teaches Innovation, entrepreneurship, and problem-solving. Henry Ford Foundations has developed the Innovation and entrepreneurship process curriculum for 3-12 graders. EMUiNVENT and Henry Ford Foundations conduct orientation workshops and also help teachers to learn the Innovation and entrepreneurship process. Interested teachers please email us for details at emu_invent@emich.edu.</p>
	</div>

    </div>

    <!-- <div class="container d-flex justify-content-center col-md-8">
        <p class="dbtn">
            <button type="button" id="signout-btn" onclick="signOutUser()" class="btn btn-danger"> SignOut </button>
        </p>
    </div> -->

</body>

<?php include('footer.php');?>

</html>	