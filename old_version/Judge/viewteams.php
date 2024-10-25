<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$team_id = $_GET['team_id'];

$q_vt = mysqli_query($con,"select distinct tt.id as team_id,tt.project_team_name as project_name,tt.project_description,tu.first_name, tu.last_name,tt.video_pitch, tt.log_book,tu.email 
from tbl_team tt, tbl_team_mentor ttm, tbl_user tu
											where tt.id = $team_id
											and tt.id = ttm.team_id
											and ttm.user_id = tu.id");

$d_vt = mysqli_fetch_assoc($q_vt);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Team Lists</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="shortcut icon" href="http://emuinvent.emuem.org/favicon.png">
</head>
<?php include('../header.php'); ?>
<body>

        

    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Links -->
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>

           <li class="nav-item" style="font-weight: bold;">
               
            </li>
			 <li class="nav-item dropdown" style="font-weight: bold;">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <?php echo '    Welcome '.$name?>
                </a>
                <div class="dropdown-menu"  id="mainNavbar">
					<a class="dropdown-item" href="JudgeDetails.php">Profile</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                    
                </div>
            </li>

            <!--<li class="nav-item">
                <a class="nav-link" href="addStudent.html">Add Student</a>
            </li>

            <li class="nav-item" id="addAccount">
				<a class="nav-link" href="addUser.html">Add Account</a>
            </li>-->
			
			
			<li class="nav-item">
				<a href="JudgeDetails.php?id=<?php echo $id?>"><button type="button" id="signout-btn" onclick="signOutUser()" style="margin-left:100px;" class="btn btn-danger">Profile</button></a>
                <a href="logout.php"><button type="button" id="signout-btn" onclick="signOutUser()" style="margin-left:50px;" class="btn btn-danger"> SignOut </button></a>
            </li>
			
        </ul>
    </nav>

    <br>

 <div class="container d-flex justify-content-left col-md-12">
        <div class="col-12" id="editDetails">
            <br>
            <h3>View Team:</h3>
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
                            <label for="email"> <b> Mentor Name: </b> </label>
                            <input type="text" readonly class="form-control" id="studentName" value="<?php echo $d_vt['first_name'].' '.$d_vt['last_name']?>" placeholder="Enter your name">
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <label for="email"><b> Mentor Email:</b></label>
                            <input type="text" readonly class="form-control" id="studentFN" value="<?php echo $d_vt['email']?>"
                                placeholder="Enter your Father's name">
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <label for="email"><b> Project Title:</b></label>
                            <input type="text" readonly class="form-control" id="studentRegNo" value="<?php echo $d_vt['project_name']?>" placeholder="Enter student registration number">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="email"><b>Project Description:</b></label>
                            <textarea class="form-control" readonly><?php echo $d_vt['project_description']?></textarea>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
					<!--<div class="form-group">
					   <video width="624" height="352" controls>
						<source src="https://www.youtube.com/watch?v=sA9DwvbQ-hI" type="video/mp4">
						Your browser does not support the video tag.
						</video>
					</div>-->
					<div class="form-group">
					<label for="pwd"><b>Video Pitch:</b></label>
					  <iframe frameborder="0" height="200" width="200" 
						src="<?php echo $d_vt['video_pitch']?>">
					  </iframe>
					</div>
					
                        <!--<div >
                            <label for="pwd"><b>Video Pitch:</b></label>
                            <input type="text" class="form-control" id="studentEmail" placeholder="Enter your email">
                        </div>-->
                    </td>

                    <td>
					  <div class="form-group">
                            <label for="pwd"><b>LogBook:</b></label>
                            <a href="../<?php echo $d_vt['log_book']?>">LogBook</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <!--<div class="form-group">
                            <label for="pwd"><b>Upload File/Photo (MAX LIMIT: 2MB)</label>
                            <input type="file" class="form-control" id="uploadFile" multiple> <br>
                        <button type="submit" class="btn btn-info" id="uploadButton">Upload</button>
                        </div>-->
                    </td>

                   <!-- <td>
                        <p id="uploadStatus"></p>
                    </td>-->
                </tr>

            </table>

            <!-- Basic Requirments for students ends here -->




            <!-- Requirments for current students -->

            <table class="table table-borderless currentShow">

                <thead class="thead-dark">
                    <tr>
                        <th colspan="3"> Team Members. </th>
                     </tr>
                    </thead>

				<br>
				<?php
				$t_q = mysqli_query($con,"select * from tbl_team_member where team_id = $team_id")	;
				$i=1;
				while ($row = mysqli_fetch_assoc($t_q))
				{
				
				?>
				<thead class="thead-light">
                    <tr>
                        <th colspan="3"> Student - <?php echo $i?></th>
					</tr>
                </thead>
					
                <tr>
                    <td>
                        <div class="form-group currentShow" >
                            <label for="email"><b>Student First Name:</b></label>
                            <input type="text" readonly class="form-control" id="yearOfAdmissionInNed"
                                value="<?php echo $row['student_first_name']?>" placeholder="Year of Admission In NED">
                        </div>
						
						
						
                    </td>
					
					<td>
                        <div class="form-group currentShow" >
                            <label for="email"><b>Student Last Name:</b></label>
                            <input type="text" readonly class="form-control" id="yearOfAdmissionInNed"
                                value="<?php echo $row['student_last_name']?>" placeholder="Year of Admission In NED">
                        </div>
						
						
						
                    </td>

                    <td>
					
					
                        <div class="form-group currentShow" >
                            <label for="email"><b>Grade:</b></label>
                            <input type="text" readonly class="form-control" id="studentRoll" value="<?php echo $row['student_grade']?> Grade" placeholder="Enter your Roll No">
                        </div>
                    </td>
                   
                </tr>

                <tr>
				
				
					 <td>
                        <div class="form-group currentShow" >
                            <label for="email"><b>Student School District:</b></label>
                            <input type="text" readonly class="form-control" id="noOfSiblings" value="<?php echo $row['student_school_district']?>" placeholder="">
                        </div>
                    </td>
					
                    <td>
                        <div class="form-group currentShow" >
                            <label for="pwd"><b>Student School Name:</b></label>
                            <input type="text" readonly class="form-control" id="monthlyIncomeParents"
                               value="<?php echo $row['student_school_name']?>" placeholder="Enter your parent's monthly income.">
                        </div>
                    </td>
					
					<td>
                        <div class="form-group currentShow" >
                            <label for="pwd"><b>Student School County:</b></label>
                            <input type="text" class="form-control" id="monthlyIncomeParents"
                                value="<?php echo $row['student_school_county']?>" readonly placeholder="Enter your parent's monthly income.">
                        </div>
                    </td>

                    
                </tr>

                <tr>
				<td>
                        <div class="form-group" id="mRent">
                            <label for="pwd"><b>T-shirt Size:</b></label>
                            <input type="text" readonly class="form-control" id="monthlyRent"
                                placeholder="Enter your monthly house rent" value="<?php echo $row['t_shirt_size']?>">
                        </div>
                    </td>
				</tr>
				<br>			
                <!-- S1 Starts Here -->
				
                <?php $i++;} ?>

            </table>

            

            
        </div>

    </div>

    <!-- <div class="container d-flex justify-content-center col-md-8">
        <p class="dbtn">
            <button type="button" id="signout-btn" onclick="signOutUser()" class="btn btn-danger"> SignOut </button>
        </p>
    </div> -->
</body>
</html>	