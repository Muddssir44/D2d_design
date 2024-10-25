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
	$login_q = mysqli_query($con,"select * from tbl_user where email = '$userEmail' and password = '$userPassword' and is_approved = 1");
	//print_r($con);die;
	//print_r($login_d);die;
	$login_d = mysqli_fetch_assoc($login_q);
	session_start();
	$_SESSION['id'] = $login_d['id'];
	$_SESSION['name'] = $login_d['first_name'];
	$_SESSION['user_type'] = $login_d['user_type'];
	$_SESSION['email'] = $login_d['email'];
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
		$date_check = '2030-03-03 00:00:00';
		/*if($date >= $date_check)
		{
			#echo $userEmail;
			if($userEmail=='jayasharmajdh@gmail.com')
			{
			#echo 'inside if'.$date; 
				header("location:Judge/home.php");
			#echo "<script>alert('Judging Portal is closed on March 2nd. 2020. at 12:00:00 Mid-night. Judges can email any concerns to svivek@emich.edu by the 5:00PM Feb 24, 2020')</script>";
			}
		else{
		//echo ($_SESSION['user_type']);
		#echo 'outside if';
		#echo "<script>alert('Judging Portal is closed as on March 2nd. 2020. at 12:00:00 Mid-night. Please contact Dr.Ahmed (mahmed6@emich.edu) for any questions. ')</script>";
		}

		}
		else{ */
		//echo ($_SESSION['user_type']);
		#echo 'outside if';
		header("location:Judge/home.php");
		//}
		
	}
	elseif ($_SESSION['user_type'] == 'Mentor')
	{
		$userid = $_SESSION['id'];
		header("location:Team/home.php");
		#echo "<script>alert('Submissions were closed on Feb 22nd. 2030. Independent Inventors can email their submission to svivek@emich.edu by the 5:00PM Feb 24, 2020')</script>";
		
	}
	elseif ($_SESSION['user_type'] == 'General User')
	{
		$userid = $_SESSION['id'];
		header("location:General_User/index.php");
		#echo "<script>alert('Submissions were closed on Feb 22nd. 2030. Independent Inventors can email their submission to svivek@emich.edu by the 5:00PM Feb 24, 2020')</script>";
		
	}
	elseif ($_SESSION['user_type'] == 'Student')
	{
		$userid = $_SESSION['id'];
		$login_q_s = mysqli_query($con,"select * from tbl_student_mentor where student_id = $userid and approve = 1");
		$c_rows = mysqli_num_rows($login_q_s);
		if($c_rows > 0)
		{
			$row = mysqli_fetch_assoc($login_q_s);
			$_SESSION['mentor_id'] = $row['mentor_id'];
		header("location:Student/home.php");
		}
		else {
			echo "<script>alert('User not approved');</script>";
		}
		#echo "<script>alert('Submissions were closed on Feb 22nd. 2030. Independent Inventors can email their submission to svivek@emich.edu by the 5:00PM Feb 24, 2020')</script>";
		
	}
	
	
	else
	{
		$q = "select * from tbl_user where email = '$userEmail' and password = '$userPassword'";
	echo "<script>alert('Invalid Login');</script>";
	}
}


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
<style>
.btn-success {
    color: #fff;
    background-color: #78CC6F;
    border-color: #78CC6F;
}
</style>
<?php include('header.php');?>
<div id="wrapper">
<body>

  <?php include('navbar.php'); ?>
    <br>

  <div class="container d-flex justify-content-center col-md-10">
		<div class="col-7">
		
            <table class="table table-borderless">
            <h3>Login:</h3>
				<br>
				<h3><b>IMPORTANT:</b></h3>
				<ul>
					<li>Mentors need to Approve their students before they are approved by EMU</li>
					<li>Students should update their student profiles after logging in by accessing "Student Profile Page" under < Student Name> tab</li>
					<li>Student can Add one team only</li>
					<li>Mentors/Teachers can Add multiple teams</li>
				</ol>	
				<form method="post" enctype="multipart/form-data" >
				
                
				<tr>
                    <td colspan="6">
                     
						<div >
                            <label for="usr">Email:</label>
							<input type="text" class="form-control" id="userEmail" name="userEmail" required>
                        </div>
						
                    </td>
				</tr>	
					
					
				<tr>
                    <td colspan="6">
                     
						<div >
                            <label for="pwd">Password:</label>
							<input type="password" class="form-control" id="userPassword" name="userPassword" required>
                        </div>
						
                    </td>
				</tr>

				

								
				
				
				<tr >
				<td>
				<div class="form-group">
				 <button type="submit" class="btn btn-success" name="submit">Login</button>
				 <a href="forgot_password.php" style="float:right">Forgot Password</a>
				
				</div>
				</td>
				</tr>

				
            
        
				<!--</td>
				</tr>-->
				</form>
			</table>
              
		
			
		
		
    
				
    </div>   
	  
	</div>

    <!-- <div class="container d-flex justify-content-center col-md-8">
        <p class="dbtn">
            <button type="button" id="signout-btn" onclick="signOutUser()" class="btn btn-danger"> SignOut </button>
        </p>
    </div> -->
</body>
</div>
<?php include('footer.php');?>
</html>	