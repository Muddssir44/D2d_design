<?php 
include("database/config.php");
session_start();
$refresh = 0;
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
	if(!empty($_POST['password'])) 
	{
	$query = mysqli_query($con, "update tbl_user set password = '$password' where email = '$userEmail'");
	if($query)
	{
	
	#echo '<script>alert("Password updated successfully")</script>';
	
	$login_q = mysqli_query($con,"select * from tbl_user where email = '$userEmail' and password = '$password'");
	//print_r($con);die;
	//print_r($login_d);die;
	$login_d = mysqli_fetch_assoc($login_q);
	
	$_SESSION['id'] = $login_d['id'];
	$_SESSION['name'] = $login_d['first_name'];
	$_SESSION['user_type'] = $login_d['user_type'];
	//echo $_SESSION['user_type'];
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
		#echo "<script>alert('Submissions were closed on Feb 22nd. 2020. Independent Inventors can email their submission to svivek@emich.edu by the 5:00PM Feb 24, 2020')</script>";
		
	}
	else
	{
		$q = "select * from tbl_user where email = '$userEmail' and password = '$userPassword'";
	echo "<script>alert('Invalid Login');</script>";
	}
	}
	else 
	{
		echo '<script>alert("Password update unsuccessfull")</script>';
	}
	
	}
	else
	{
	#echo 'Enter the new password';
	$userEmail = $_POST['userEmail'];
	$login_q = mysqli_query($con,"select * from tbl_user where email = '$userEmail'");
	//print_r($con);die;
	//print_r($login_d);die;
	$login_d = mysqli_fetch_assoc($login_q);
	$num_rows = mysqli_num_rows($login_q);
	
	if($num_rows > 0)
	{
		$is_approved = $login_d['is_approved'];
		if($is_approved > 0 )
		{
			$refresh = 1;
			//header("Refresh:0");
		  $to = $login_d['email'];
		  $username = $login_d['email'];
		  $id = $login_d['id'];
		  //$password = $row['password'];
		  $name = $login_d['first_name'];
		echo 'isnide else'.$to;
         $subject = "EMUiNVENT Forgot Password";
		 $headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		 
			 
		// Compose a simple HTML email message
		$message = '<html><body>';
		$message .= '<p style="color:#080;font-size:18px;">Dear '.$name.',</p>';
		$message .= '<p style="color:#080;font-size:18px;">Please click on this <a href="http://grading.emuem.org/forgot_password_email.php?id='.$id.'">link</a> to update the new password.</p>';
		$message.= '<p style="color:#080;font-size:18px;">For more information and all deadlines, visit the <a href="https://emich.edu/emuinvent">EMUiNVENT website</a>. If you have questions, please email emu_invent@emich.edu.</p>';
		$message .= '<br><p style="color:#080;font-size:18px;">EMUiNVENT</p>';	
		$message .= '</body></html>';	
        if (mail($to, $subject, $message, $headers)) {
		
		# echo '<script>alert("An email has been sent to the given email ID on further instructions.")</script>';
		echo '<script type="text/javascript">'; 
		echo 'alert("An email has been sent to the given email ID on further instructions.");'; 
		echo 'window.location.href = "index.php";';
		echo '</script>';		
			
        //$message ="Dear $name,
		//We are excited to welcome your team(s) for participation in the EMUiNVENT competition. Please login using  :Username: $username, Password: $password @ http://grading.emuem.org/login.php to provide all details of the participating teams. Closer to the video submission deadline, you will receive another email with details of submission.EMUiNVENT 2021 will be entirely online. So please make sure you visit the submission system and provide all the information and materials in a timely manner.After the submission of videos is completed, a panel of professionals will judge all student projects. We will announce awards and winners in a broadcasted awards ceremony on March 12. You will receive more details about the ceremony and how to access it in the coming weeks.For more information and all deadlines, visit the https://emich.edu/emuinvent website. If you have questions, please email emu_invent@emich.edu.
		//EMUiNVENT Team";
         } else {
       echo 'Unable to send email. Please try again.';
         }
		}
		else 
		{
		echo '<script>alert("User account with this email ID is not yet approved, contact mahmed6@emich.edu for further details")</script>';
		}
	}
	else 
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("User account with this email ID doesnot exist, please create an account first");'; 
		echo 'window.location.href = "register.php";';
		echo '</script>';
	}
		
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

    <?php include('navbar.php')?>
    <br>

  <div class="container d-flex justify-content-center col-md-10">
		<div class="col-7">
		
            
            <h3>Forgot Password:</h3>
				
				
				<form method="post" enctype="multipart/form-data" >
				
                <br>
				
						<div >
                            <label for="usr">Email:</label>
							<input type="text" class="form-control" id="userEmail" name="userEmail" value="<?php echo $userEmail; ?>" required>
                        </div>
						
                
				<br>
								
				<div class="form-group">
				 <button type="submit" class="btn btn-success" name="submit">Submit</button>
				 
				</div>
				
				
				

				
            
        
				<!--</td>
				</tr>-->
				</form>
	
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