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


	<nav class="navbar navbar-expand bg-dark navbar-dark" style="margin-top:20px;width:100%;">
        <!-- Links -->
        <ul class="navbar-nav">

             <li class="nav-item" style="font-weight: bold;">
                <a class="nav-link" href="index.php">Home</a>
            </li>
			
			<li class="nav-item" style="font-weight: bold;">
                <a class="nav-link" href="login.php">Login</a>
            </li>
			
			<li class="nav-item" style="font-weight: bold;">
                <a class="nav-link" href="register.php">SignUp</a>
            </li>			
			

            <!--<li class="nav-item">
                <a class="nav-link" href="addStudent.html">Add Student</a>
            </li>

            <li class="nav-item" id="addAccount">
				<a class="nav-link" href="addUser.html">Add Account</a>
            </li>-->
        </ul>
    </nav>
    <br>
    <div style="width:100%">
   <div class="tabs-content" data-tabs-content="example-tabs">
   <div class="tabs-panel is-active" id="d32e139-1" role="tabpanel" aria-hidden="false" aria-labelledby="d32e139-1-label">
      <h3>What?</h3>
      <p>An interactive and interdisciplinary opportunity for 3-12 students to follow the invention process to create a prototype for a regional competition.</p>
      <h3>When?</h3>
      <p>EMUiNVENT will be held virtually on March 12, 2021. Outstanding projects participate in the <a href="https://www.thehenryford.org/current-events/calendar/michigan-invention-convention/" target="_blank">2021 Invention Convention Michigan</a> in April, 2021, organized by <a href="https://www.thehenryford.org/">the Henry Ford</a>.</p>
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
         <li>November 8, 2020: Independent Inventor training begins</li>
         <li>January 22, 2021: Registration due</li>
         <li>February 2021: Video Pitch training to registered participants</li>
         <li>Now till February 26, 2021: Preparation, prototyping and video pitch creation</li>
         <li>February 26, 2021: Video Pitch submission</li>
         <li>March 12, 2021: EMUiNVENT Virtual</li>
         <li>April, 2021: Michigan Invention Convention registration deadline</li>
         <li>April, 2021: Michigan Invention Convention Virtual</li>
         <li>June, 2021: Invention Convention U.S. Nationals Virtual</li>
      </ul>
     <p><img src="images/2020event-gatheringphoto.jpg" alt="2020 EMUiNVENT" width="290px" ></p>
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