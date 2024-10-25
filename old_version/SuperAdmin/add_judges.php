<?php
include('../database/config.php'); 
include('control.php'); 

#$id = $_GET['id'];
$name = $_SESSION['name'];
#$q = mysqli_query($con,"select * from tbl_user where id = $id");
#$r = mysqli_fetch_assoc($q);
$q = '';
$year = '2021';

extract($_POST);
if(isset($_POST['submit']))
{
	echo 'inside if';
	$q = ("insert into tbl_user (first_name,last_name,phone,email,password,user_type,year,is_approved) values ('$first_name', '$last_name','$phone','$email','$password','$user_type','$year',1)");
	$q_u=mysqli_query($con,$q);
	if($q_u)												
	{
		header("location:home.php");
		
	}
	else 
	{
		echo("insert failed".$q);
	}
	
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Judge</title>
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
html, body {
    top:0;
    bottom:0;
    left:0;
    right:0;
    
   
}
</style>
<?php include('../header.php'); ?>
<body>
<div id="wrapper">
  

	<?php include('navbar.php');?>





    <div class="container d-flex justify-content-left col-md-10">
        <div class="col-9">
		<form method="post" enctype="multipart/form-data" >
            <br>
            <h3> Profile:</h3>
            <br>

            <table class="table table-borderless">

                <thead class="thead-dark">
                    <tr>
                        <th colspan="3"> Basic Information </th>
                     </tr>
                    </thead>

                <tr>
                    <td>
                        <div class="form-group">
                            <label for="email"> <b> First Name: </b> </label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name">
                        </div>
                    </td>
					
				</tr>	
				<tr>

                    <td>
                        <div class="form-group">
                            <label for="email"><b> Last Name:</b></label>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter last Name">
                        </div>
                    </td>
				</tr>
				<tr>	
                    <td>
                        <div class="form-group">
                            <label for="email"><b> Email:</b></label>
                           <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="email"><b>Password:</b></label>
                           <input type="text" class="form-control" name="password" id="password" placeholder="Enter Password">
                        </div>
                    </td>
                </tr>

                <tr>

                    <td>
                        <div class="form-group">
                            <label for="pwd"><b>Contact No:</b></label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="studentType"><b>User Type:</b></label>
                            <select class="form-control" id="SelectDepartment" name="user_type">
							<option selected value="">Select User Type</option>
                                <option value="Judge">Judge</option>
                                <option value="Mentor">Mentor</option>
								<option value="Student">Student</option>
                                <option value="Student">General User</option>
                            </select>
                        </div>

                    </td>
                </tr>
				
				

               

            </table>

            <div id="alertBox"> </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
			</form>
        </div>
    </div>

    <!-- <div class="container d-flex justify-content-center col-md-8">
        <p class="dbtn">
            <button type="button" id="signout-btn" onclick="signOutUser()" class="btn btn-danger"> SignOut </button>
        </p>
    </div> -->




    
    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->
</div>
</body>
</html>