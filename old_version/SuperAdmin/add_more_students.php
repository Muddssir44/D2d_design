<?php 
session_start();
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];
$mentor_id = $_GET['mentor_id'];
$team_id = $_GET['team_id'];

$q_vt = mysqli_query($con,"select distinct tt.id as team_id,tt.project_team_name as project_name,tt.project_description,tu.first_name, tu.last_name,tt.video_pitch, tt.log_book,tu.email 
from tbl_team tt, tbl_team_mentor ttm, tbl_user tu
											where tt.id = $team_id
											and tt.id = ttm.team_id
											and ttm.user_id = tu.id");

$d_vt = mysqli_fetch_assoc($q_vt);

$url = $d_vt['video_pitch'];
preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
$youtube_id = $match[1];


extract($_POST);
if(isset($_POST['submit_update']))	
{
$team_id = $_GET['team_id'];
								
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
<?php $q_team = mysqli_query($con,"select distinct tt.id as team_id,tt.project_team_name as project_name,tt.category,tt.project_description,tt.video_pitch, tt.log_book
											from tbl_team tt, tbl_team_mentor ttm, tbl_team_member tm 
											where tm.student_id = $mentor_id 
											and tt.id = $team_id
											and tt.id = ttm.team_id
											and tt.deleted = 0
											

									");	  
									
				$r_team = mysqli_fetch_assoc($q_team);			?>
			<div class="form-group"><p>Project Name: <?php echo $r_team['project_name'];?> </p>
			<p>Team Category : <?php echo $r_team['category'];?>  </p>
			<?php if($d_vt['log_book']) { ?>
			<p>Team Logbook : <a href="http://emuinvent.emuem.org/Team/<?php echo $r_team['log_book']?>">LogBook</a>  </p>
			<?php } ?>
			<?php if($d_vt['video_pitch']) { ?>
			<div class="col-9">	
				<table class="table table-borderless">
				<br>
					<h3> Video Pitch:</h3>
				   <br>
				<br>
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
				</table>		
        </div>  
	<?php } ?>	
			</div>
<br>			
<h3>Add Students from below list</h3>
  <form method="post" enctype="multipart/form-data">
<div>
									<label for="studentType">Students List:</label>
									<?php $q_m_s = mysqli_query($con,"select * from tbl_team_member where team_id = $team_id and deleted = 0");
									$count = mysqli_num_rows($q_m_s);
									if($count > 0)
									{
									?>
										
									</select>
									<?php } ?>
									<select name="student_id[]" class="form-control" multiple="multiple">
									<option selected>Select the Team Members</option>
									<?php 
									$q_m = mysqli_query($con,"select tbl_student_mentor.student_id as id, tbl_user.first_name, tbl_user.last_name from tbl_user, tbl_student_mentor, tbl_team_member
																where tbl_user.id = tbl_student_mentor.student_id
																and tbl_student_mentor.mentor_id = $mentor_id
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
									
									<br>
									<div>
									<label for="studentType">Current Team members:</label>
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
									</div>
				<br>					
				<div class="form-group">
							
				<button type="submit" class="btn btn-success" name="submit_update">Add Students</button>	
				</div>								
									
</form>			
<br>


<hr>
<div id="Paris" class="tabcontent" style="<?php if($student > 0) { echo 'display:block'; } ?>">
  <h3>Add New Student Details (if the student name does not appear above)</h3>
 <div class="crcform" style="margin-top: -150px;">
        
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