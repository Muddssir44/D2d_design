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
	<p>We would like to thank our sponsors "FORD COMMUNITY CORP", "EMU BRIGHT FUTURE" and "Henry Ford's Invention Convention" for their generous donations and partnership. </p>

	<p></p>
 <div style="text-align:center">
	  <img src="images/fcc.png" alt="FORD COMMUNITY CORP" width="300px">
	  <img src="images/bf.jpg" alt="EMU BRIGHT FUTURE" width="300px">
 <img src="images/icw1.png" alt="Invention Convention" width="300px">
	  <div>
<p></p>

	<p>We need sponsors to help us in organizing and encouraging students to learn Innovation and Entrepreneurship. Interested in supporting the students? Connect with us at emu_invent@emich.edu. It takes a village to raise an entrepreneur!!</p>
<p></p>
<p></p>
<!--div style="text-align:center">
<img src="images/EMU.png" alt="EMU" width="300px">

	</div>-->

    </div>

    <!-- <div class="container d-flex justify-content-center col-md-8">
        <p class="dbtn">
            <button type="button" id="signout-btn" onclick="signOutUser()" class="btn btn-danger"> SignOut </button>
        </p>
    </div> -->

</body>

<?php include('footer.php');?>

</html>	