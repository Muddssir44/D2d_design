<?php 
include("database/config.php");

#$timezone = date_default_timezone_get();
$timezone = date_default_timezone_set('America/New_York');
#echo "The current server timezone is: " . $timezone;

$date = date('Y-m-d H:i:s');
#echo $date;
$today_at_midnight = strtotime('midnight');
#echo $today_at_midnight;

extract($_POST);
if(isset($_POST['submit']))
{
	$userEmail = $_POST['userEmail'];
	$userPassword = $_POST['userPassword'];
	$login_q = mysqli_query($con,"select * from tbl_user where email = '$userEmail' and password = '$userPassword'");
	//print_r($con);die;
	//print_r($login_d);die;
	$login_d = mysqli_fetch_assoc($login_q);
	session_start();
	$_SESSION['id'] = $login_d['id'];
	$_SESSION['name'] = $login_d['first_name'];
	$_SESSION['user_type'] = $login_d['user_type'];
	
	$num_rows = mysqli_num_rows($login_q);
	if($_SESSION['user_type'] == 'SuperUser')
	{
		$userid = $_SESSION['id'];
		header("location:SuperAdmin/home.php");
	}
	elseif ($_SESSION['user_type'] == 'Organizer')
	{
		$userid = $_SESSION['id'];
		//echo ($_SESSION['user_type']);
		header("location:admin/admin_home.php");
		
	}
	elseif ($_SESSION['user_type'] == 'Judge')
	{
		$userid = $_SESSION['id'];
		$date_check = '2020-03-03 00:00:00';
		if($date >= $date_check)
		{
			#echo $userEmail;
			if($userEmail=='jayasharmajdh@gmail.com' ||$userEmail=='kbanerji@emich.edu')
			{
			#echo 'inside if'.$date; 
				header("location:Judge/home.php");
			#echo "<script>alert('Judging Portal is closed on March 2nd. 2020. at 12:00:00 Mid-night. Judges can email any concerns to svivek@emich.edu by the 5:00PM Feb 24, 2020')</script>";
			}
		else{
		//echo ($_SESSION['user_type']);
		#echo 'outside if';
		echo "<script>alert('Judging Portal is closed as on March 2nd. 2020. at 12:00:00 Mid-night. Please contact Dr.Ahmed (mahmed6@emich.edu) for any questions. ')</script>";
		}

		}
		else{
		//echo ($_SESSION['user_type']);
		#echo 'outside if';
		header("location:Judge/home.php");
		}
		
	}
	elseif ($_SESSION['user_type'] == 'Mentor')
	{
		$userid = $_SESSION['id'];
		#header("location:Team/home.php");
		echo "<script>alert('Submissions were closed on Feb 22nd. 2020. Independent Inventors can email their submission to svivek@emich.edu by the 5:00PM Feb 24, 2020')</script>";
		
	}
	else
	{
		$q = "select * from tbl_user where email = '$userEmail' and password = '$userPassword'";
	echo $q."<script>alert('Invalid Login');</script>";
	}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
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
 
<div class="container d-flex justify-content-center">
  <div class="card col-sm-8 col-md-5 col-lg-5">
  <form method="post" enctype="multipart/form-data" >
<img class="card-img-top" src="images/emulogo.png" alt="Card image" style="width:100%">
    <img src="images/userLogin.png" alt="Card image" style="width:50%" class="center">
    <div class="card-body">
      <h4 class="card-title">Sign In</h4>
      <div class="form-group">
        <label for="usr">Email:</label>
        <input type="text" class="form-control" id="userEmail" name="userEmail">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="userPassword" name="userPassword">
      </div>
	  
<!--	 <div class="form-group">
        <label for="pwd">User Type:</label>
        <input type="text" class="form-control" id="user_type" name="user_type" placeholder="Enter either Judge, Mentor">
      </div>-->
	       
     <div class="form-group">
       <button type="submit" class="btn btn-primary" name="submit">Login</button>
     </div>
	  
    </form>
      <!-- <a href="#" id="signin-btn" class="btn btn-primary">Login</a> -->
     <!-- <p class="card-text"> Lost Password ?  <a href="forgetPassword.html">  Click to reset </a></p>-->
    </div>
  </div>
  <br>
</div>


</body>
</html>
