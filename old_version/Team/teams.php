<?php
include('../database/config.php'); 
include('control.php'); 
$url= $_SERVER['REQUEST_URI'];

$id = $_SESSION['id'];
$name = $_SESSION['name'];
$student = 0;
$upload = 0;
$team_id = -1;
$team_select = 0;
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
	$team_select = 1;
	if($team_id > 0) 
	{
		header("location:viewteams.php?team_id=$team_id");
	}
	
}
if(isset($_POST['submit_team'])) {
$year = date("Y");
$project_description = mysqli_real_escape_string($con,$_POST['project_description']);

$sql = mysqli_query($con,"insert into tbl_team (project_team_name,project_description,category,year) values ('$team_name', '$project_description','$category','$year')")	;
if($sql)
{
	$team_id = mysqli_insert_id($con);
	$team_q = mysqli_query($con,"insert into tbl_team_mentor values (NULL,$team_id,$id,'','','')");
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
	else
	{
		echo 'DB error';
	}
	#echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";
}
else{
	
	$q = "insert into tbl_team (project_team_name,project_description,category,year) values ('$team_name', '$project_description','$category','$year')";
	echo 'error'.$q;
	echo "<script>alert('Database error. Please report to admin!')</script>";
}	
	
}



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
		#echo "update tbl_team_member set team_id = $team_id where student_id = $p";
		}	
echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";	
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
						<p>Display of Trifold board in the video pitch (Optional)     </p>
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
  <form method="post" enctype="multipart/form-data" >
				
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
									<label for="studentType">Current Team's Students List:</label>
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
									<option selected>Select the Team Members</option>
									<?php 
									$q_m = mysqli_query($con,"select tbl_student_mentor.student_id as id, tbl_user.first_name, tbl_user.last_name from tbl_user, tbl_student_mentor, tbl_team_member
																where tbl_user.id = tbl_student_mentor.student_id
																and tbl_student_mentor.mentor_id = $id
																and tbl_student_mentor.student_id = tbl_team_member.student_id
																and (tbl_team_member.team_id is null  
																or tbl_team_member.team_id in (select id from tbl_team where deleted = 1))");
									while($r_m = mysqli_fetch_assoc($q_m))
									{
									?>	
										<option value="<?php echo $r_m['id'];?>"><?php echo $r_m['first_name'].' '.$r_m['last_name']?></option>
										
									<?php } ?>	
									</select>
									</div>
				</tr>
				<tr align="center">
				<td>
				<div class="form-group">
				<button type="submit" class="btn btn-success" name="submit_team">Submit</button>	
				</div>
				</td>
				</tr>

				
            
        
				<!--</td>
				</tr>-->
				</form>
</div>
<style>
.form-holder {
  display: flex;
  margin-bottom: 10px;
}

.input-field input {
  width: 100px;
}

.add, .remove {
  display: block;
  border: 1px solid #ccc;
  padding: 2px 10px;
  margin-left: 10px;
  cursor: pointer;
}

.add:hover {
  background: #eee;
}

.remove {
  display: none;
}

.form-holder-append .remove {
  display: block;
}

</style>
<div id="Paris" class="tabcontent" style="<?php if($student > 0) { echo 'display:block'; } ?>">
  <h3>Student Details</h3>
 <div class="crcform">
        
        <form id="student_details" enctype="multipart/form-data">
		
            <table class="table table-bordered" id="dynamic_field">
                <tr>
                    <td>
					
					
                        <!--div class="top-row"-->
                        <div >
                            <label>
                                Student First Name
                            </label>
                            <input type="text" class="form-control" required autocomplete="off" name="student_first_name[]"/>
                        </div>
					</td>
						<br>
					<td>	
                        <div >
                            <label>
                                Student Last Name
                            </label>
                            <input type="text"required class="form-control" autocomplete="off" name="student_last_name[]"/>
                        </div>
                    </td>	    
						<br>
					<td>	
                        <div>
						<label for="studentType">Student Grade:</label>
						<select name="student_grade[]" class="form-control" required>
							<option>Select Student Grade</option>
							<option value="K">K</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							
						</select>
						</div>
					</td>	
                        <br>
					<td>	
                        <div >
                            <label>
                                T-Shirt Size
                            </label>
                            <select name="student_tshirt[]" class="form-control" required>
							<option>Select Student Grade</option>
							<option value="Youth Small">Youth Small</option>
							<option value="Youth Medium">Youth Medium</option>
							<option value="Youth Large">Youth Large</option>
							<option value="Adult Small">Adult Small</option>
							<option value="Adult Medium">Adult Medium</option>
							<option value="Adult Large">Adult Large</option>
							<option value="Adult X-Large">Adult X-Large</option>
							
							
						</select>
                        </div>
					</td>	
					    <br>
					<td>	
						<div >
                            <label>
                                School Name
                            </label>
                            <input type="text"required autocomplete="off" class="form-control" name="student_school_name[]"/>
                        </div>
					</td>	
					    <br>
					<td>		
						<div >
                            <label>
                                School District
                            </label>
                            <input type="text"required autocomplete="off" class="form-control" name="student_school_district[]"/>
                        </div>
					
                    </td>
                    <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                </tr>
            </table>
			<input type="text" hidden autocomplete="off" name="team_id" value="<?php echo $team_id?>"/>
            <input type="button" name="submit" id="submit"  class="btn btn-success" value="Submit" />
        </form>
	<br>	
	<a href="home.php"><button type="submit" class="btn btn-success" name="submit">Return to Home Page</button></a>		
    </div>
    <script>
        $(document).ready(function(){
            var i = 1;
            $('#add').click(function(){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'"><td><div ><label>Student First Name</label><input type="text" required autocomplete="off" class="form-control" name="student_first_name[]"/></div></td><br><td><div ><label>Student Last Name</label><input type="text" required class="form-control" autocomplete="off" name="student_last_name[]"/></div></td><br><td><div><label for="studentType">Student Grade:</label><select  id="student_grade[]" class="form-control" required><option>Select Student Grade</option><option value="K">K</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select></div></td><br><td><div ><label>T-Shirt Size</label><select name="student_tshirt[]" class="form-control" required><option>Select Student Grade</option><option value="Youth Small">Youth Small</option><option value="Youth Medium">Youth Medium</option><option value="Youth Large">Youth Large</option><option value="Adult Small">Adult Small</option><option value="Adult Medium">Adult Medium</option><option value="Adult Large">Adult Large</option><option value="Adult X-Large">Adult X-Large</option></select></div></td><br><td><div ><label>School Name</label><input type="text"required autocomplete="off" class="form-control" name="student_school_name[]"/></div></td><br><td><div ><label>School District</label><input type="text"required class="form-control" autocomplete="off" name="student_school_district[]"/></div></td><td><button name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
            });

            $(document).on('click','.btn_remove', function(){
                var button_id = $(this).attr("id");
                $("#row"+button_id+"").remove();
            });

            $('#submit').click(function(){
                $.ajax({
                    async: true,
                    url: "student_details.php",
                    method: "POST",
                    data: $('#student_details').serialize(),
                    success:function(rt)
                    {
                        alert(rt);
                        //$('#student_details')[0].reset();
						window.location.href = "home.php";
                    }
                });
            });
        });
    </script>
</div>

  <!-- <div class="container d-flex justify-content-center col-md-8">
        <p class="dbtn">
            <button type="button" id="signout-btn" onclick="signOutUser()" class="btn btn-danger"> SignOut </button>
        </p>
    </div> -->
</body>
</div>
</html>	