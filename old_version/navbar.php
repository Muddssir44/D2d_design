<?php 
$url= $_SERVER['REQUEST_URI'];

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #343a40!important;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav" style="margin-top: -16px;">
   <a  href="index.php" class="<?php if(($url == '/index.php') || ($url == '/')) { echo 'active'; }  ?>">Home</a>

  <a  href="students.php" class="<?php if($url == '/students.php') { echo 'active'; } ?>" >Students</a>    
<a  href="teachers.php" class="<?php if($url == '/teachers.php') { echo 'active'; } ?>" >Teachers/Mentors</a>
  <a  href="sponsor.php" class="<?php if($url == '/sponsor.php') { echo 'active'; } ?>">Sponsor</a>
   <a  href="judges.php" class="<?php if($url == '/judges.php') { echo 'active'; } ?>">Judges</a>
    <a  href="help.php" class="<?php if($url == '/help.php') { echo 'active'; } ?>">Help</a>
 
	 <a  href="login.php" class="<?php if($url == '/login.php') { echo 'active'; } ?>" style="float:right">Login</a>
	  <a  href="register.php" class="<?php if($url == '/register.php') { echo 'active'; } ?>" style="float:right">SignUp</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
    
	<div style="width:100%;font-size: 1.3rem;">
	
	<div class="tabs-panel is-active" id="d32e139-1" role="tabpanel" aria-hidden="false" aria-labelledby="d32e139-1-label">
      

	  <div style="text-align:center">
	   <a href="https://emuinvent.emuem.org/login.php">	 
	  <img src="images/judges_image.jpeg" alt="2020 EMUiNVENT" width="300px"></a>
	  <a href="https://emuinvent.emuem.org/register.php">
	  <img src="images/register_image.jpeg" alt="2020 EMUiNVENT" width="300px"></a>
	  <div>
   </div>
   </div>

    </div>
	</div>