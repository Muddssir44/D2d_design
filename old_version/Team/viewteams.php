<?php
include('../database/config.php'); 
include('control.php'); 
$url= $_SERVER['REQUEST_URI'];

$id = $_SESSION['id'];
$team_id = $_GET['team_id'];
$mentor_id = $_SESSION['mentor_id'];

$name = $_SESSION['name'];
$mentor_id = $_SESSION['mentor_id']	;


$q_vt = mysqli_query($con,"select distinct tt.id as team_id,tt.project_team_name as project_name,tt.category,tt.project_team_name,tt.project_description,tu.first_name, tu.last_name,tt.video_pitch, tt.log_book,tu.email 
from tbl_team tt, tbl_team_mentor ttm, tbl_user tu
											where tt.id = $team_id
											and tt.id = ttm.team_id
											and ttm.user_id = $id
											 and ttm.user_id = tu.id
                                            and tt.deleted = 0");
$c_vt = mysqli_num_rows($q_vt);
if($c_vt > 0 ) { 
$d_vt = mysqli_fetch_assoc($q_vt);


$url = $d_vt['video_pitch'];
preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
$youtube_id = $match[1];


$sql_students = mysqli_query($con,"select * from tbl_team_member where team_id = $team_id and deleted = 0");
$c_students = mysqli_num_rows($sql_students);
}
else 
{
	echo "<script>alert('No Such Team Available')</script>";
}

extract($_POST);
if(isset($_POST['submit'])) {
$sql  = "update tbl_team set project_team_name = '$project_title', project_description = '$project_description',category = '$category' where id = $team_id";
$r = mysqli_query($con,$sql);
echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";	
}

if(isset($_POST['submit_student'])) {
	$sql_u = "update tbl_team_member set student_first_name = '$student_first_name', student_last_name = '$student_last_name', student_grade = '$student_grade', student_school_name = '$student_school_name', student_school_district = '$student_school_district', student_school_county = '$student_school_county', 	t_shirt_size = '$student_tshirt' where id = $student_id";
	$u = mysqli_query($con,$sql_u);
}

$timezone = date_default_timezone_set('America/New_York');
$date = date('Y-m-d H:i:s');
$today_at_midnight = strtotime('midnight');

$date_check = '2021-02-27 00:00:00';


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
<?php include('../header.php');?>
<div id="wrapper" style="margin-top:20px;width:100%;">
<body>

    <?php include('navbar.php');?>
    <br>

 <div class="container d-flex justify-content-left col-md-12">
        <div class="col-12" id="editDetails">
            <br>
            <h3>View Team:</h3>
            <br>
			
            <table class="table table-borderless">
			 <form method="post" enctype="multipart/form-data" >
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

                    
                </tr>

                <tr>
				
					<td>
                        <div class="form-group">
                            <label for="email"><b> Project Title:</b></label>
                            <input type="text" class="form-control" id="studentRegNo" value="<?php echo $d_vt['project_name']?>" name="project_title" required>
                        </div>
                    </td>
					
					
					<td colspan="6">
                     
						<div>
						<label for="studentType">Team Category:</label>
						<select name="category" class="form-control" required>
							<option>Select Student Grade</option>
							<option value="K-2" <?php if($d_vt['category'] == 'K-2') { echo 'selected';}?>>K-2</option>
							<option value="3-5" <?php if($d_vt['category'] == '3-5') { echo 'selected';}?>>3-5</option>
							<option value="6-8" <?php if($d_vt['category'] == '6-8') { echo 'selected';}?>>6-8</option>
							<option value="9-12" <?php if($d_vt['category'] == '9-12') { echo 'selected';}?>>9-12</option>
							
						</select>
						</div>
						
                    </td>
					
					
					
                    
					
					
					
					
					  
					
                </tr>
				
				<tr>
				
							
				<td colspan="2">
                        <div class="form-group">
                            <label for="email"><b>Project Description:</b></label>
                            <textarea class="form-control" name="project_description" required><?php echo $d_vt['project_description']?></textarea>
                        </div>
                    </td>
				</tr>

                <tr>
				<?php if($d_vt['video_pitch']) { ?>
                    <td>
					<?php if ($youtube_id=='') {?>
						<div class="form-group">
							<video width="300" height="300" controls>
							  <source src="<?php echo $d_vt['video_pitch']?>" type="video/mp4">
							  <source src="<?php echo $d_vt['video_pitch']?>" type="video/ogg">
							</video>
								</div>	
						<?php } else {?>		
						<div class="form-group">
							<iframe width="300" height="300" src="https://www.youtube.com/embed/<?php echo $youtube_id?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>	
						<?php }?>
				
                      
                    </td>
					<?php } ?>	
					<?php if($d_vt['log_book']) { ?>
                    <td>
					  <div class="form-group">
                            <label for="pwd"><b>LogBook:</b></label>
                            <a href="../<?php echo $d_vt['log_book']?>">LogBook</a>
                        </div>
                    </td>
					<td>
                
				
				</td>	
					<?php } ?>
				
                </tr>
				
				<?php if (($year) == date("Y")) { 
						if($date <= $date_check)
						{
						?>
                <tr>
				<td>
                 <div class="form-group">
				<button type="submit" class="btn btn-success" name="submit">Submit</button>	
				</div>
				</td>
                </tr>
				<?php } } ?>
			</form>
			<?php if (($year) == date("Y")) { 
						if($date <= $date_check)
						{
						?>
			<tr>
				<td>
				<label>Upload docs</label>
				<!--<a target="_blank" href="edit_team.php?team_id=<?php echo $team_id;?>" ><button type="submit" class="btn btn-success" name="submit">Edit video pitch/logbook</button></a>	-->
				<a href="edit_team.php?team_id=<?php echo $team_id; ?>"><button type="submit" class="btn btn-success" name="submit">Edit video pitch/logbook</button></a>	
								
				</td>
				</tr>
				
			<?php } } ?>	
            </table>

            <!-- Basic Requirments for students ends here -->



			
            <!-- Requirments for current students -->

          <table class="table table-borderless" style="<?php if($c_students > 0) { echo 'margin-top:-175px'; } else { echo 'margin-top:-10px'; }?>">
			
                <thead class="thead-dark">
                    <tr>
                        <th colspan="3"> Current Team Members </th>
                     </tr>
                    </thead>

				
				<?php
				$t_q = mysqli_query($con,"select * from tbl_team_member where team_id = $team_id and deleted=0")	;
				$i=1;
				while ($row = mysqli_fetch_assoc($t_q))
				{
				
				?>
				
				
        
					
					
						
							<tr>
							
								<td>
								
								
									<!--div class="top-row"-->
									<div >
										<label>
											First Name
										</label>
										<input type="text" class="form-control" readonly autocomplete="off" value="<?php echo $row['student_first_name']?>" name="student_first_name"/>
									</div>
								</td>	
									<br>
								<td>	
									<div >
										<label>
											Last Name
										</label>
										<input type="text"readonly class="form-control" autocomplete="off" value="<?php echo $row['student_last_name']?>" name="student_last_name"/>
									</div>
								</td>	
									<br>
								<td>	
									<div>
									<label for="studentType">Student Grade:</label>
									<select name="student_grade" class="form-control" readonly>
										
										<option value="<?php echo $row['student_grade']?>"><?php echo $row['student_grade']?></option>
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
										<select name="student_tshirt" class="form-control" readonly>
										<option value="<?php echo $row['t_shirt_size']?>"><?php echo $row['t_shirt_size']?></option>
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
											School District
										</label>
										<input type="text"readonly autocomplete="off" class="form-control" value="<?php echo $row['student_school_district']?>" name="student_school_district"/>
									</div>
							      	
								</td>
								<br>
								<td>	
									<div >
										<label>
											Photo Consent form
										</label>
										<?php if(($row['photo_consent_form']) != '') { ?>
										<p><a href="../<?php echo $row['photo_consent_form']?>" target="_blank">Uploaded consent form </a></p>		
										<?php } else {  ?>
										<p><a href="edit_member_details.php?student_id=<?php echo $row['id']; ?>" target="_blank">No Consent Form </a></p>		
										<?php } ?>
									</div>
							      	
								</td>
								
								<?php if (($year) == date("Y")) { 
									if($date <= $date_check)
									{
									?>
								<td>
								<label>Edit</label>
								<a href="edit_member_details.php?student_id=<?php echo $row['id']; ?>"><button type="submit" class="btn btn-success" name="submit">Edit</button></a>	
								<!--<a onClick="return confirm('Are you sure you want to delete?')" href="set_delete.php?id=<?php echo $row['id'];?>&table=tbl_team_member&return=home" class="btn btn-success" style="    margin-bottom: -80px;"> Delete</a>-->
								
								</td> 
								<?php } } ?>
							</tr>
							
						
				
				
				
				
				
                <?php $i++; } ?>
			<?php if (($year) == date("Y")) { 
									if($date <= $date_check)
									{
									?>
			<tr><td><a href="add_more_students.php?team_id=<?php echo $team_id; ?>"><button type="button" name="add" id="add" class="btn btn-success">Add More Team Members</button></a></td></tr>
			<?php } } ?>
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
</html>	