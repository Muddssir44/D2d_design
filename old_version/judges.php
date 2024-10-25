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
   <h3>Become an EMUiNVENT Judge </h3>
   <p>Do you believe anyone can be an innovator? Do you like working with students? If your answer is yes, consider being a volunteer judge for EMUiNVENT. </p>
   
   <p>Judges come from a variety of disciplines and areas of expertise. Judges ensure that EMUiNVENT is an educational and fun activity for all students by: </p>
   <ul>
      <li>Fostering a healthy environment for discussion and sharing.</li>
	  <li>Listening to students pitch their inventions.</li>
	  <li>Providing constructive feedback to students.</li>
	  <li>Scoring student projects using a rubric.</li>
      
   </ul>
   <h3>Your Commitment </h3>
   <p>By committing to be a judge at the 2021 EMUiNVENT, you agree to: </p>
   <ul>
      <li><b>Attend judge training (1 hour):</b> Attend a mandatory Zoom online training session on February 8th @ 10AM EST and February 12th 2021 @ 6PM</li>
      <li><b>Evaluate online pitches (2-3 hours):</b> Judges will score student video pitches from February 27th through March 05th 2021, using EMUiNVENT online judging platform. </li>
   </ul>
   <h3>The students you judge: </h3>
   <ul>
      <li>Will be in grades 3-12.</li>
	  <li>Will compete as an individual or on a team.</li>
	  <li>Have created an invention.</li>
	  <li>Have been nominated by an educator or mentor to compete at EMUiNVENT.</li>
   </ul>
   <p><b>Interested?</b> If you are interested in being a judge, please email us at emu_invent@emich.edu and we shall send your login credentials. </p>
   
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