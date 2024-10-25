<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_GET['id'];
$name = $_SESSION['name'];
$q = mysqli_query($con,"select * from tbl_user where id = $id");
$r = mysqli_fetch_assoc($q);
extract($_POST);
if(isset($_POST['submit']))
{
	echo 'inside if';
	$q = ("update tbl_user set first_name = '$first_name', 
												last_name = '$last_name',
												phone = '$phone',
												email = '$email',
												password = '$password',
												category = '$category', judge_confirm = '$judge_confirm' where id = $id");
	$q_u=mysqli_query($con,$q);
	if($q_u)												
	{
		header("location:judges.php");
		
	}
	else 
	{
		echo("Update failed".$q);
	}
	
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<style>
html, body {
    top:0;
    bottom:0;
    left:0;
    right:0;
    
   
}
</style>
<body>
<div id="wrapper">
    <div class="jumbotron col-md-12" style="font-size: 16px;
    height: 10em;margin-block-start: -55px;">
       <img class="card-img-top" src="images/emulogo.png" alt="logo image" style="width:99%;height: 226px;">
    </div>

	<nav class="navbar navbar-expand bg-dark navbar-dark" style="    margin-top: 140px;
    width: 1289px;
    left: 2.3%;">
        <!-- Links -->
        <ul class="navbar-nav">

            <li class="nav-item" style="font-weight: bold;">
                <a class="nav-link" href="home.php">Home</a>
            </li>
			
			
			<li class="nav-item dropdown" style="font-weight: bold;">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Add
                </a>
                <div class="dropdown-menu"  id="mainNavbar">
                    <!--<a class="dropdown-item" href="teams.php">Teams</a>-->
                    <a class="dropdown-item" href="add_judges.php">Judges</a>
                </div>
            </li>
			
			
			<li class="nav-item dropdown" style="font-weight: bold;">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    View
                </a>
                <div class="dropdown-menu"  id="mainNavbar">
                    <a class="dropdown-item" href="teams.php">Teams</a>
                    <a class="dropdown-item" href="judges.php">Judges</a>
                </div>
            </li>
			
			
			<li class="nav-item dropdown" style="font-weight: bold;">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Assign Teams vs Judges
                </a>
                <div class="dropdown-menu"  id="mainNavbar">
                    <a class="dropdown-item" href="assign_judge_team.php">Assign Teams vs Judges</a>
                    <a class="dropdown-item" href="view_judge_team.php">View Assigned Teams vs Judges</a>
                </div>
            </li>
			
			<li class="nav-item" style="font-weight: bold;">
                <a class="nav-link" href="evaluation_results.php">Evaluation Details</a>
            </li>
			
			 <li class="nav-item dropdown" style="font-weight: bold;">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <?php echo $name?>
                </a>
                <div class="dropdown-menu"  id="mainNavbar">
					<a class="dropdown-item" href="profile.php">Profile</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                    
                </div>
            </li>

            <!--<li class="nav-item">
                <a class="nav-link" href="addStudent.html">Add Student</a>
            </li>

            <li class="nav-item" id="addAccount">
				<a class="nav-link" href="addUser.html">Add Account</a>
            </li>-->
        </ul>
    </nav>





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
                            <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $r['first_name']?>">
                        </div>
                    </td>
					
				</tr>	
				<tr>

                    <td>
                        <div class="form-group">
                            <label for="email"><b> Last Name:</b></label>
                            <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $r['last_name']?>">
                        </div>
                    </td>
				</tr>
				<tr>	
                    <td>
                        <div class="form-group">
                            <label for="email"><b> Email:</b></label>
                           <input type="text" class="form-control" name="email" id="email" value="<?php echo $r['email']?>">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="email"><b>Password:</b></label>
                           <input type="text" class="form-control" name="password" id="password" value="<?php echo $r['password']?>">
                        </div>
                    </td>
                </tr>

                <tr>

                    <td>
                        <div class="form-group">
                            <label for="pwd"><b>Contact No:</b></label>
                            <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $r['phone']?>">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="studentType"><b>Category:</b></label>
                            <select class="form-control" id="SelectDepartment" name="category">
							<option selected value="<?php echo $r['category']?>"><?php echo $r['category']?></option>
                                <option value="Professional">Professional/Engineers</option>
                                <option value="Faculty">Faculty </option>
								<option value="K-12 Teachers">K-12 Teachers </option>
                                <option value="Student">Student</option>
                                <option value="Pre-Service teacher">Pre-Service Teacher</option>
								<option value="Others">Others</option>
                            </select>
                        </div>

                    </td>
                </tr>

               <tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="studentType"><b>Judge Confirm:</b></label>
                            <select class="form-control" id="SelectDepartment" name="judge_confirm">
							<?php if($r['judge_confirm'] = 'Y')
							{
								$val = 'Yes';
							}
							else
								{
								$val='No';
								}?>
							<option selected value="<?php echo $r['judge_confirm']?>"><?php echo $val?></option>
							    <option value="Y">Yes</option>
                                <option value="N">No</option>
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