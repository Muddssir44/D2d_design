<?php 
include("database/config.php");
$url= $_SERVER['REQUEST_URI'];
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
<div style="width:100%">
	
	<div class="tabs-panel is-active" id="d32e139-1" role="tabpanel" aria-hidden="false" aria-labelledby="d32e139-1-label">
      
	  <p><b style="color:#2b873b;letter-spacing: .01rem;font-size: 1.5rem;">EMUiNVENT</b> provides students in 3-12 an interactive and interdisciplinary opportunity to use the invention process to create and pitch an original product at a state-wide convention. Students will build their critical thinking and entrepreneurial skills and may qualify to compete at Invention Convention Michigan.</p>
	  <div style="text-align:center">

	  <div>
   </div>
   </div>

    </div>
	</div>
	<div class="tabs-content" data-tabs-content="example-tabs">
	<div class="tabs-panel is-active" id="d32e139-1" role="tabpanel" aria-hidden="false" aria-labelledby="d32e139-1-label">
      <h3>What?</h3>
      <p>An interactive and interdisciplinary opportunity for 3-12 students to follow the invention process to create a prototype for a regional competition.</p>
      <h3>When?</h3>
      <p>EMUiNVENT will be held virtually on March 11, 2022. Outstanding projects participate in the <a href="https://www.thehenryford.org/current-events/calendar/michigan-invention-convention/" target="_blank">2022 Invention Convention Michigan</a> in April, 2022, organized by <a href="https://www.thehenryford.org/">the Henry Ford</a>.</p>
      <h3>Why?</h3>
      <p>Get help from engineers, university professors and EMU to convert an idea into a model. As you do it, learn the habits of famous inventors and business people.</p>
      <p>First, second, and third place awards for:</p>
      <ul>
         <li>Grades 3-5</li>
         <li>Grades 6-8</li>
         <li>Grades 9-12</li>
      </ul>
      <h3>How will EMU help</h3>
      <ul>
         <li>Provide you mentors to walk you through the process.</li>
         <li>Hold training sessions to help you through the process of invention.</li>
      </ul>
      <!--<h3><a class="button small" title="Dare 2 Design Registration form" href="https://docs.google.com/forms/d/e/1FAIpQLSfr66M0v3Wy4ufGZQBRvbvmRrEounYWh6IWDWXSbfcDpRkoHA/viewform" target="_blank">Dare 2 Design Registration</a></h3>-->
      <h3>Important Dates</h3>
      <ul>
      <li>November 8, 2021: <a href="https://dare2design.emuinvent.org">Dare 2 Design-Independent Inventor training begins</a></li>
      <li>January 22, 2022: Registration starts</li>
<li> February 8th, 2022 @ 10AM EST Judges Training on Zoom </li><li> February 12th 2021 @ 6PM EST Judges Training on Zoom</li>
      <li>February 20, 2022: Registration ends</li>
      <li>February 2022: Video Pitch training and support</li>
      <li>February 26, 2022: Video Pitch submission due (online)</li>
      <li>March 11, 2022: EMUiNVENT Virtual</li>
         <li>TBD: Michigan Invention Convention registration deadline</li>
         <li>TBD: Michigan Invention Convention Virtual</li>
         <li>TBD: Invention Convention U.S. Nationals Virtual</li>
      </ul>
     <p><img src="images/2020event-gatheringphoto.jpg" alt="2022 EMUiNVENT" class="responsive" ></p>
   </div>
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