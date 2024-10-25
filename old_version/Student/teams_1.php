<?php
include('../database/config.php'); 
include('control.php'); 
$url= $_SERVER['REQUEST_URI'];
$id = $_SESSION['id'];
$name = $_SESSION['name'];
$mentor_id = $_SESSION['mentor_id'];
$student = 0;
$upload = 0;
$team_id = 0;

if(!isset($team))
{
	$team = 0;
}

extract($_POST);

if(isset($_POST['submit_check'])) {
	
	if($terms)
	{
		$_SESSION['team'] = 1;
	}
	
}

if(isset($_POST['submit_team_select'])) {
	$_SESSION['team'] = 2;
	if($team_id > 0) 
	{
		header("location:viewteams.php?team_id=$team_id");
	}
	
}

if(isset($_POST['submit_team'])) {
$year = date("Y");
$project_description = mysqli_real_escape_string($con,$_POST['project_description']);
#echo '<script>alert("inside creation");</script>';
$sql = mysqli_query($con,"insert into tbl_team (project_team_name,project_description,category,year) values ('$team_name', '$project_description','$category','$year')")	;
if($sql)
{
	$team_id = mysqli_insert_id($con);
	$team_q = mysqli_query($con,"insert into tbl_team_mentor values (NULL,$team_id,$mentor_id,'','','')");
	if($team_q)
	{
		$student = 1;
		$team_submit = 1;
		foreach( $_POST[ 'student_id' ] as $p )
		{
        //$q_u = mysqli_query($con, "select * from tbl_user where id= $p");
		//$r_u = mysqli_fetch_assoc($q_u);
		mysqli_query($con,"update tbl_team_member set team_id = $team_id where student_id = $p");
		}
	
	}
	
}
header("location:home.php");
}
#echo 'outside the script';

if(isset($_POST['submit_update']))	
{
$team_id = $_POST['team_id'];
$year = date("Y");
$project_description = mysqli_real_escape_string($con,$_POST['project_description']);

#echo 'inside the script';

$sql = mysqli_query($con,"update tbl_team set project_team_name ='$team_name' ,
                                            ,project_description = '$project_description',
											category = '$category' where id = $team_id" );
											
											
foreach($_POST['student_id'] as $p)
		{
        //$q_u = mysqli_query($con, "select * from tbl_user where id= $p");
		//$r_u = mysqli_fetch_assoc($q_u);
		mysqli_query($con,"update tbl_team_member set team_id = $team_id where student_id = $p");
		
		}	
header("location:home.php");	
}






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
<style>
.btn-success {
    color: #fff;
    background-color: #78CC6F;
    border-color: #78CC6F;
}
</style>
<?php include('../header.php');?>
<div id="wrapper" style="width:100%;">
<body>

  <?php include('navbar.php');?>
    <br>

  
  <style>
	body {font-family: Arial;}

	/* Style the tab */
	.tab {
	  overflow: hidden;
	  border: 1px solid #ccc;
	  background-color: #f1f1f1;
	}

	/* Style the buttons inside the tab */
	.tab button {
	  background-color: inherit;
	  float: left;
	  border: none;
	  outline: none;
	  cursor: pointer;
	  padding: 14px 16px;
	  transition: 0.3s;
	  font-size: 17px;
	}

	/* Change background color of buttons on hover */
	.tab button:hover {
	  background-color: #ddd;
	}

	/* Create an active/current tablink class */
	.tab button.active {
	  background-color: #ccc;
	}

	/* Style the tab content */
	.tabcontent {
	  display: none;
	  padding: 6px 12px;
	  border: 1px solid #ccc;
	  border-top: none;
	}
</style>
<link rel="shortcut icon" href="http://emuinvent.emuem.org/favicon.png">
</head>
<body>

<!--<h2>Teams Registration</h2>-->


<div class="tab">
  <!--<button class="tablinks" onclick="openCity(event, 'London')">Project Details</button>-->
 <!-- <button class="tablinks" onclick="openCity(event, 'Paris')">Student Details</button> -->
  
</div>

<div id="Tokyo" class="tabcontent" style=" <?php if(isset($_SESSION['team']) || $terms > 0) { echo 'display:none'; } else { echo 'display:block';}?> ">
  <h3>Project  Details</h3>
  <form method="post" enctype="multipart/form-data" >
				
                <?php 
				$team_q = mysqli_query($con, "select * from tbl_team where id = $team_id");
				$row = mysqli_fetch_assoc($team_q);
				
				?>
				<tr>
                    <td colspan="6">
                     <br>
						<div >
                        <h6>You will need the following for the competition</h6>    
						<ol>
						<li>
						<p>Submission of completed Log Book  </p>
						</li>
						<li>
						<p>A video pitch</p>
						</li>
						<li>
						<p>Demonstration of working or non-working prototype in the video pitch      </p>
						</li>
						<li>
						<p>Display of Trifold board in the video pitch      </p>
						</li>
<li>
						<p>Registration fee $20 per team (Check made to Eastern Michigan University)     </p>
						</li>
<li>
						<p>A one minute video by student(s) talking about their experience with their invention and /or with EMUiNVENT competition (Optional)       </p>
						</li>
						<li>
						<p>Photo Consent form (Download below) signed by the parents should be provided      </p>
						</li>
						<a href="Photo-video waiver form1.pdf" >Download Photo Consent Form</a>
						<br>
						</ol>
						
						<input type="checkbox" name="terms" id="terms" required <?php if(isset($_SESSION['team']) || $terms > 0) { echo 'checked'; } ?> >  I Agree to the Terms & Conditions
						
						
                        </div>
						
                    </td>
				</tr>	
					
				<br>	
				<tr align="center">
				<td>
				<div class="form-group">
				<button type="submit" class="btn btn-success" name="submit_check" style=" <?php if(isset($_SESSION['team']) || $terms > 0) { echo 'display:none'; } ?> ">Submit</button>	
				</div>
				</td>
				</tr>

				
            
        
				<!--</td>
				</tr>-->
				</form>
</div>

<div id="London" class="tabcontent" style="<?php if(isset($_SESSION['team'])) { echo 'display:block'; } if(($team_submit) > 0) { echo 'display:none' ;}   ?>">
  <h3>Project  Details</h3>
  <form method="post" enctype="multipart/form-data">
				
                <tr>
                    <td colspan="6">
                     <br>
						<div >
                        <h6>Please check if your team is already been created! If not, please select "Not appliable" to proceed further</h6>    
						
						<div>
									<label for="studentType">Created Teams List:</label>
									<select name="team_id" class="form-control" required>
									<?php 
									$q_t = mysqli_query($con,"select * from tbl_team where id in (select team_id from tbl_team_mentor where user_id = $mentor_id) and deleted = 0 and year = '$year'");
									while($r_t = mysqli_fetch_assoc($q_t))
									{
									?>	
										<option value="<?php echo $r_t['id'];?>"><?php echo $r_t['project_team_name']?></option>
										
									<?php } ?>	
									<option value="0">Not Appliable</option>
									</select>
						</div>
						
						
						
                        </div>
						
                    </td>
				</tr>	
				<br>	
				<tr align="center">
				<td>
				<div class="form-group">
				<button type="submit" class="btn btn-success" name="submit_team_select">Submit</button>	
				</div>
				</td>
				</tr>

				
            
        
				<!--</td>
				</tr>-->
				</form>
</div>


<div id="London" class="tabcontent" style="<?php if($_SESSION['team'] > 1 ) { echo 'display:block'; } if(($team_submit) > 0) { echo 'display:none' ;}   ?>">
  <h3>Project  Details</h3>
  <form method="post" enctype="multipart/form-data">
				
                <?php 
				$team_q = mysqli_query($con, "select * from tbl_team where id = $team_id");
				$row = mysqli_fetch_assoc($team_q);
				
				?>
				<tr>
                    <td colspan="6">
                     
						<div >
                            <label for="pwd"><b>Project Title:</b></label>
                            <input type="text" class="form-control" id="studentEmail" name="project_title" required placeholder="Project Title" value="<?php echo $row['project_team_name']?>" required>
                        </div>
						
                    </td>
				</tr>	
					
				<br>	
				<tr>
                    <td colspan="6">
                     
						<div >
                            <label for="pwd"><b>Project Description:</b></label>
                            <textarea class="form-control" name="project_description" required placeholder="Project Description"><?php echo $row['project_description']?></textarea>
                        </div>
						
                    </td>
				</tr>
				<br>	
				<tr>
                    <td colspan="6">
                     
						<div >
                            <label for="pwd"><b>Team Name:</b></label>
                            <input type="text" class="form-control" name="team_name" required placeholder="Team Name" value="<?php echo $row['project_team_name']?>"  required>
                        </div>
						
                    </td>
				</tr>
				
				<br>	
				<tr>
                    <td colspan="6">
                     
						<div>
						<label for="studentType">Team Category:</label>
						<select name="category" class="form-control" required>
							<option>Select Student Grade</option>
							<option value="K-2" <?php if($row['category'] == 'K-2') { echo 'selected';}?>>K-2</option>
							<option value="3-5" <?php if($row['category'] == '3-5') { echo 'selected';}?>>3-5</option>
							<option value="6-8" <?php if($row['category'] == '6-8') { echo 'selected';}?>>6-8</option>
							<option value="9-12" <?php if($row['category'] == '9-12') { echo 'selected';}?>>9-12</option>
							
						</select>
						</div>
						
                    </td>
				</tr>
				<br>
				<tr>
				<div>
									<label for="studentType">Students List:</label>
									<?php $q_m_s = mysqli_query($con,"select * from tbl_team_member where team_id = $team_id and deleted = 0");
									$count = mysqli_num_rows($q_m_s);
									if($count > 0)
									{
									?>
									<select  class="form-control" multiple readonly>
									<?php 
									$q_m_s = mysqli_query($con,"select * from tbl_team_member where team_id = $team_id and deleted = 0");
									while($r_m_s = mysqli_fetch_assoc($q_m_s))
									{
									?>	
										<option value="<?php echo $r_m_s['id'];?>" selected><?php echo $r_m_s['student_first_name'].' '.$r_m_s['student_last_name']?></option>
										
									<?php } ?>	
									</select>
									<?php } ?>
									<select name="student_id[]" class="form-control" multiple="multiple">
									<?php 
									$q_m = mysqli_query($con,"select * from tbl_user where id in (select student_id from tbl_student_mentor where mentor_id = $mentor_id and student_id in (select student_id from tbl_team_member where team_id is null))");
									while($r_m = mysqli_fetch_assoc($q_m))
									{
									?>	
										<option value="<?php echo $r_m['id'];?>"><?php echo $r_m['first_name'].' '.$r_m['last_name']?></option>
										
									<?php } ?>	
									</select>
									</div>
				</tr>
				
				<br>	
				<tr align="center">
				<td>
				<div class="form-group">
				<?php if($team_id > 0 ) { ?>
				<input type="text" class="form-control" hidden name="team_id" placeholder="Team Name" value="<?php echo $team_id; ?>"/>
				<?php } ?>
				
				<button type="submit" class="btn btn-success" name="submit_update"><?php if($team_id < 1) { echo 'Create'; } else { echo 'Update'; }?></button>	
				</div>
				</td>
				</tr>

				
            
        
				<!--</td>
				</tr>-->
				</form>
</div>

</body>
</div>
</html>	