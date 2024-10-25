<?php 
include("database/config.php");
$url= $_SERVER['REQUEST_URI'];
#echo $url;
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
	<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  
  padding: 3px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
	<div class="row" style="    padding: 1rem;">
  <div class="column" style="width: 70%;">
    <p>Have an idea but don't have any teacher to help you take it forward? Please check with your teachers if they will be interested in helping you out with the competition. If your  teacher/school does not have time to help you out, students' parents can join our <b style="color:#2b873b;">"Dare 2 Design"</b> program.<b style="color:#2b873b;">Dare 2 Design</b> is <b style="color:#2b873b;">EMUiNVENT</b>'s Independent Inventors program, where we help such students and teams to bring their ideas to reality. Under parents' guardianship we conduct workshops and training (due to Covid19 this year we are conducting them virtually) to help students/ teams convert their idea into a working or a non-working prototype.&nbsp;As a part of these workshops and trainings, students/ teams get help and guidance from budding &amp; experienced engineers and entrepreneurs. These engineers and entrepreneurs will mentor students/ teams and ensure that they are ready to participate in <b style="color:#2b873b;">EMUiNVENT</b>.&nbsp;</p>
   
  </div>
  
  <div class="column" style="width: 30%;">
    <img src="images/students.png" alt="Mountains" style="width:100%;height: 350px;">
  </div>
</div>
  <!-- <p>Have an idea but don't have any teacher to help you take it forward? Please check with your teachers if they will be interested in helping you out with the competition. If your  teacher/school does not have time to help you out, students' parents can join our <b style="color:#2b873b;">"Dare 2 Design"</b> program.</p><p><b style="color:#2b873b;">Dare 2 Design</b> is <b style="color:#2b873b;">EMUiNVENT</b>'s Independent Inventors program, where we help such students and teams to bring their ideas to reality. Under parents' guardianship we conduct workshops and training (due to Covid19 this year we are conducting them virtually) to help students/ teams convert their idea into a working or a non-working prototype.</p><p>&nbsp;As a part of these workshops and trainings, students/ teams get help and guidance from budding &amp; experienced engineers and entrepreneurs. These engineers and entrepreneurs will mentor students/ teams and ensure that they are ready to participate in <b style="color:#2b873b;">EMUiNVENT</b>.&nbsp;</p>-->
   <!--<p><img src="images/students.png" alt="2020 EMUiNVENT" class="responsive" ></p>-->
   <h3>Register here&nbsp;to join Dare 2 Design&nbsp;</h3>
	
	<p>Parents can act as a mentor and may register the student/team by signing up to the <b style="color:#2b873b;">EMUiNVENT</b> site as "Mentor".&nbsp;</p>
	<div style="text-align:center"><a href="register.php"><button type="button" style="line-height: 2.5;"  class="btn-success"  onclick="edit(this)">Dare 2 Design Registration</button></a></div> 
	<br>
  

   <h3>Resources</h3>
   <ul>
      <li><a title="Download the LogBook [PDF]." href="emuinvent_logbook.pdf" target="_blank">LogBook [PDF]</a> is used to document the innovation, design and development process that the students/team followed during the Dare 2 Design process.   </li>
      <br>
	  <li>
         <p>Pitching Examples: These are some examples of presentation and pitches from past competitions. <b style="color:#2b873b;">EMUiNVENT</b> will conduct workshops and training on method of pitching ideas. Check "Important Dates" on our home page.</p>
         
		 <ul>
            <li><a title="View "Soggy Smelly Shoe Solution" Youtube video page." href="https://www.youtube.com/watch?v=sA9DwvbQ-hI" target="_blank">View "Soggy Smelly Shoe Solution" Youtube video page.</a></li>
            <li><a title="View "Canope" YouTube video page." href="https://www.youtube.com/watch?v=Q9RrHmSbQXM" target="_blank">View "Canope" YouTube video page.</a></li>
            <li><a title="View "Fidget Art" YouTube video page." href="https://www.youtube.com/watch?v=P3NWaOcK1CY" target="_blank">View "Fidget Art" YouTube video page.</a></li>
         </ul>
      </li>
   </ul>
   <!--<h3>Important Dates</h3>
   <ul>
      <li>November 8, 2020: Dare 2 Design-Independent Inventor training begins</li>
      <li>January 22, 2021: Registration starts</li>
      <li>February 20, 2021: Registration ends</li>
      <li>February 2021: Video Pitch training and support</li>
      <li>February 26, 2021: Video Pitch submission due (online)</li>
      <li>March 12, 2021: <b style="color:#2b873b;">EMUiNVENT</b> Virtual</li>
   </ul>-->
   <h3>More</h3>
   <ul>
      <li><a title="Download the EMUiNVENT Flyer [PDF]." href="emuinvent_flyer_2020.pdf" target="_blank">Download the <b style="color:#2b873b;">EMUiNVENT</b> Flyer.</a></li>
   </ul>
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