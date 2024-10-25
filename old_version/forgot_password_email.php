<?php 
include("database/config.php");
session_start();
$id = $_GET['id'];
$timezone = date_default_timezone_set('America/New_York');
$date = date('Y-m-d H:i:s');
$today_at_midnight = strtotime('midnight');

extract($_POST);
if(isset($_POST['submit']))
{
	if(!empty($_POST['password'])) 
	{
	$query = mysqli_query($con, "update tbl_user set password = '$password' where id = '$id'");
	if($query)
	{
	 
	 header("location:login.php");
	
	
	}
	else 
	{
		echo '<script>alert("Password update unsuccessfull")</script>';
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

   <nav class="navbar navbar-expand bg-dark navbar-dark" style="margin-top:-16px;width:100%;">
        <!-- Links -->
        <ul class="navbar-nav">

             <li class="nav-item" style="font-weight: bold;">
                <a class="nav-link" href="index.php">Home</a>
            </li>
			
			  <li class="nav-item" style="font-weight: bold;">
                <a class="nav-link" href="students.php">Students</a>
            </li>
			
			  <li class="nav-item" style="font-weight: bold;">
                <a class="nav-link" href="teachers.php">Teachers/Mentors</a>
            </li>
			
			<li class="nav-item" style="font-weight: bold;">
                <a class="nav-link" href="sponsor.php">Sponsor</a>
            </li>
			
			  <li class="nav-item" style="font-weight: bold;">
                <a class="nav-link" href="judges.php">Judges</a>
            </li>
		
		
			<li class="nav-item" style="font-weight: bold;margin-left:700px">
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

  <div class="container d-flex justify-content-center col-md-10">
		<div class="col-7">
		
            
            <h3>Forgot Password:</h3>
				
				
				<form method="post" enctype="multipart/form-data" >
				
                
				<div>	
				             
				<div >
							<label for="input-password">New Password</label>
							
								<input type="password" name="password" value="" placeholder="Password" id="password" class="form-control" >
							
				</div>
				<br>
				<div >
							<label for="input-confirm">Confirm Password</label>
					
								<input type="password" name="confirm" value="" placeholder="Password Confirm" id="confirm_password" class="form-control" >
								<span id='message'></span>
					
				</div>
				
				
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
						<script>
						$('#password, #confirm_password').on('change', function () {
						  if ($('#password').val() == $('#confirm_password').val()) {
							$('#message').html('Matching').css('color', 'green');
						  } else {
							
							$('#message').html('Not Matching').css('color', 'red');
							document.getElementById("confirm_password").value = "";
						  }
						});
						</script>
				
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