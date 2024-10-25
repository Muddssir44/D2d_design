<?php 
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$user_id = $_GET['judge_id'];
$name=$_SESSION['name'];
$team_id = $_GET['team_id'];

$q_e = mysqli_query($con,"select * from tbl_judge_assessment where user_id = $user_id and team_id = $team_id");
$d_e = mysqli_fetch_assoc($q_e);
$e_id = $d_e['id'];
$team= $d_e['team_id'];
$v_q = mysqli_query($con,"select * from tbl_team where id = $team");
$v_d = mysqli_fetch_assoc($v_q);

$video_pitch = $v_d['video_pitch'];
				$url = $video_pitch;
				preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
				$youtube_id = $match[1];

extract($_POST);
if(isset($_POST['submit']))
{
	if ($identifying_understanding == '')
	{
		$identifying_understanding = 'NULL';
	}
	if($ideating == '')
	{
		$ideating = 'NULL';
	}
	if($designing_building == '')
	{
		$designing_building = 'NULL';
	}
	if($testing_refinging == '')
	{
		$testing_refinging = 'NULL';
	}
	if($value_propoition == '')
	{
		$value_propoition = 'NULL';
	}
	if($market_potential == '')
	{
		$market_potential = 'NULL';
	}
	if($social_value == '')
	{
		$social_value = 'NULL';
	}
	if($originality == '')
	{
		$originality = 'NULL';
	}
	if($logbook == '')
	{
		$logbook = 'NULL';
	}
	if($display_board == '')
	{
		$display_board = 'NULL';
	}
	if($prototype == '')
	{
		$prototype = 'NULL';
	}
	if($online_pitch == '')
	{
		$online_pitch = 'NULL';
	}
		
			
			$r = "update tbl_judge_assessment set
                                 	identifying_understanding = $identifying_understanding,
	                                ideating = $ideating,
									designing_building = $designing_building,
									testing_refinging = $testing_refinging,
									value_propoition = $value_propoition,
									market_potential = $market_potential,
									social_value = $social_value,
									originality = $originality,
									logbook = $logbook,
									display_board = $display_board,
									prototype = $prototype,
									online_pitch = $online_pitch,
									question_asked = '$question_asked' where id = $e_id";
				$update = mysqli_query($con,$r);
	if($update)
	{
		echo"<script>alert('Updated Evaluation Entered Successfully')</script>";
		#echo $r;
		echo "<script type='text/javascript'> document.location = 'home.php'; </script>";
	}
	else 
	{
		echo"<script>alert('Evaluation Updation Failed')</script>";
	}

	
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Evaluation Details</title>
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

	

	


	<!--<div class="container d-flex justify-content-left col-md-10">
				<div class="form-group">
							<iframe frameborder="0" height="100" width="100" 
																	src="https://www.youtube.com/embed/sA9DwvbQ-hI">
				</div>	
	</div>			-->

    <div class="container d-flex justify-content-left col-md-10">
		<div class="col-7">
		<table class="table table-borderless" style="margin-left: -110px;">
                <thead class="thead-dark" id="table">
                    <tr>
						<!--<th scope="col">Team ID</th>-->
                        <th scope="col">Team Name</th>
						<th scope="col">Project Description</th>
						<th scope="col">Team Cateogory</th>
                        <!--<th scope="col">Video Pitch</th>-->
                        <th scope="col">LogBook</th>
						<!--<th scope="col">Team Members</th>-->
                       
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				$team_id = $d_e['team_id'];
				$q_team = mysqli_query($con,"select distinct tt.id as team_id,tt.project_team_name as project_name,tt.category,tt.project_description,tu.first_name, tu.last_name,tt.video_pitch, tt.log_book
											from tbl_team tt, tbl_judge_team tj, tbl_team_mentor ttm, tbl_team_member tm , tbl_user tu
											where tt.id = $team_id
											and tt.id = ttm.team_id
											and ttm.user_id = tu.id

									");	  
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
					$team_id = $r_team['team_id'];
				$team_m_q = mysqli_query($con, "select GROUP_CONCAT(student_first_name) as members from tbl_team_member where team_id = $team_id");
				$team_m_r = mysqli_fetch_assoc($team_m_q);
				
				?>
											
												<tr> 
													<!--<td><?php echo $r_team['team_id']?></a></td> -->
													<td><?php echo $r_team['project_name']?></a></td> 
													<td><?php echo $r_team['project_description']?></td> 
													<td><?php echo $r_team['category']?></td>
													<!--<td><iframe frameborder="0" height="100" width="100" 
														src="https://www.youtube.com/embed/sA9DwvbQ-hI">
													  </iframe></a></td> -->
																	<?php if ($r_team['log_book']!='') {?>
													<td><a href="http://emuinvent.emuem.org/Team/<?php echo $r_team['log_book']?>" target="_blank">LogBook</a></td>  
											<?php } else {?>
													<td>LogBook</td>  
											<?php }?>
													<!--<td><?php echo $team_m_r['members']?></td>  -->
													
												</tr> 
				<?php } ?>								
				
												
											</tbody> 
            </table>
			
			
		          

            <!--<div class="form-group">
                <label for="studentType">Select Account Type:</label>
                <select class="form-control" id="accountType">
                    <option>Select account type</option>
                    <option value="superUser">Super User</option>
                    <option value="administrator">Administrator</option>
                    <option value="student">Student</option>
                </select>
            </div>-
			<table  class="table table-borderless" style="margin-right: 547px;margin-bottom: -52px;margin-right: -474px;">
				<tr>
				<td colspan="-4">
				<div class="form-group">
					<iframe frameborder="0" height="100" width="100" 
														src="https://www.youtube.com/embed/sA9DwvbQ-hI">
													  </iframe>
            </div>
				</td>
				</tr>		
			</table>-->	
            <table class="table" style="margin-left: -110px;">
            <h3> Evaluation:</h3>
				
				
				<form method="post" enctype="multipart/form-data" >
				
                <thead class="thead-dark">
                    <tr>
					   <th colspan="24"> Invention Process (45) </th>
					</tr>
				</thead>
					
                <tr>
				
								
                    <td colspan="6">
                     
                            <label for="email">Identifying & Understanding: </label>
                            <select name="identifying_understanding" style="margin-left: 31px">
							<option value="<?php echo $d_e['identifying_understanding']?>" selected><?php echo $d_e['identifying_understanding']?></option>
							<?php 

								for($i=0; $i<=15; $i=$i+0.5)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        
                    </td>
				</tr>	
				<tr>
                    
                    <td colspan="6">
                        
                            <label for="email"> Designing & Building: </label>
                            <select name="designing_building" style="margin-left: 84px">
							<option value="<?php echo $d_e['designing_building']?>" selected><?php echo $d_e['designing_building']?></option>
							<?php 

								for($i=0; $i<=10;$i=$i+0.5)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                       
                    </td>
					</tr>
					<tr>
                    <td colspan="6">
                        
                            <label for="email">  Testing & Refining:  </label>
                            <select name="testing_refinging" style="margin-left: 104px">
							<option value="<?php echo $d_e['testing_refinging']?>" selected><?php echo $d_e['testing_refinging']?></option>
							<?php 

								for($i=0; $i<=10;$i=$i+0.5)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        
                    </td>
					</tr>	
				<tr>
					<td colspan="6">
                        
                            <label for="email">  Ideating Process:  </label>
                            <select  name="ideating" style="margin-left: 116px">
							<option value="<?php echo $d_e['ideating']?>" selected><?php echo $d_e['ideating']?></option>
							<?php 

								for($i=0; $i<=10;$i=$i+0.5)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        
                    </td>
					
                </tr>

                

                   <thead class="thead-dark">
                    <tr>
                        <th colspan="24"> Invention Impact (25) </th>
                     </tr>
                    </thead>

                <tr>
                    <td colspan="4">
                            <label for="email">Value Proposition:</label>
                            <select name="value_propoition" style="margin-left: 104px">
							<option value="<?php echo $d_e['value_propoition']?>" selected><?php echo $d_e['value_propoition']?></option>
							<?php 

								for($i=0; $i<=5;$i=$i+0.5)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        
                    </td>
				</tr>	
				<tr>
                    
                    <td colspan="4">
                            <label for="email">Market Potential:</label>
                            <select  name="market_potential" style="margin-left: 112px">
							<option value="<?php echo $d_e['market_potential']?>" selected><?php echo $d_e['market_potential']?></option>
							<?php 

								for($i=0; $i<=5;$i=$i+0.5)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        
                    </td>
					
					</tr>	
				<tr>
					
                    <td colspan="4">
                            <label for="email">Social Value: </label>
                            <select  name="social_value" style="margin-left: 143px">
							<option value="<?php echo $d_e['social_value']?>" selected><?php echo $d_e['social_value']?></option>
							<?php 

								for($i=0; $i<=5;$i=$i+0.5)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        
                    </td>
                </tr>	
				<tr>
                    <td colspan="4">
                            <label for="email">Originality: </label>
                            <select  name="originality" style="margin-left: 153px">
							<option value="<?php echo $d_e['originality']?>" selected><?php echo $d_e['originality']?></option>
							<?php 

								for($i=0; $i<=10;$i=$i+0.5)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        
                    </td>
                </tr>

                

            
			
			
			      <thead class="thead-dark">
                    <tr>
                        <th colspan="24"> Inventor Communication (30) </th>
                     </tr>
                    </thead>

                <tr>
                    <td colspan="4">
                        
                            <label for="email">LogBook: </label>
                            <select name="logbook" style="margin-left: 164px">
							<option value="<?php echo $d_e['logbook']?>" selected><?php echo $d_e['logbook']?></option>
							<?php 

								for($i=0; $i<=5;$i=$i+0.5)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        
                    </td>
				</tr>
                <tr>    
                
                    <td colspan="4">
                        
                            <label for="email">Display Board: </label>
                            <select  name="display_board" style="margin-left: 127px">
							<option value="<?php echo $d_e['display_board']?>" selected><?php echo $d_e['display_board']?></option>
							<?php 

								for($i=0; $i<=5;$i=$i+0.5)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        
                    </td>
					</tr>
                <tr>    
                    <td colspan="4">
                        
                            <label for="email">  Prototype:  </label>
                            <select  name="prototype" style="margin-left: 152px">
							<option value="<?php echo $d_e['prototype']?>" selected><?php echo $d_e['prototype']?></option>
							<?php 

								for($i=0; $i<=5;$i=$i+0.5)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        
                    </td>
					</tr>
                <tr>    
                    <td colspan="4">
                        
                            <label for="email"> Online Pitch: </label>
                            <select  name="online_pitch" style="margin-left: 135px">
							<option value="<?php echo $d_e['online_pitch']?>" selected><?php echo $d_e['online_pitch']?></option>
							<?php 

								for($i=0; $i<=5;$i=$i+0.5)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        
                    </td>
					</tr>
					<tr>
                    <td colspan="8">
					
					
					
					
                        <div class="form-group">
                            <label for="email"> Q&A:  </label>
							
							<textarea  style="margin-left: 180px;
    width: 360px;
    height: 200px;" placeholder="Questions that are to be asked during Live Q & A" name="question_asked">
							<?php echo $d_e['question_asked']?>
							</textarea>
						
						</div>	
					</td>	
					</tr>
                <tr>    		
						<br>
						 <!--<td colspan="4">
					    
						<label for="email"> Live Pitch and Q&A Score: </label>
                            <select  name="live_qa" style="margin-left: 36px">
							<option value="0" selected><?php echo $d_e['live_qa']?></option>
							<?php 

								for($i=0; $i<=10;$i=$i+0.5)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        
						</td>-->
                    
               
				
				
				</tr>
				
				<tr>
				<td>
				<div class="form-group">
				<button type="submit" class="btn btn-primary" name="submit">Submit Evaluation</button>	
				</div>
				</td>
				</tr>

            
        
				<!--</td>
				</tr>-->
				</form>
			</table>
              
		
			
		
		
    
				
    </div>   
	
		<div class="col-9">	
		<table class="table table-borderless">
		<br>
            <h3>Video Pitch:</h3>
           <br>
		<br>
		<?php if ($youtube_id == '') {?>
		<div class="form-group">
			<video width="500" height="400" controls>
			  <source src="<?php echo '../Team/'.$video_pitch?>" type="video/mp4">
			  <source src="<?php echo '../Team/'.$video_pitch?>" type="video/ogg">
			</video>
				</div>	
		<?php } else {?>		
		<div class="form-group">
			<iframe width="500" height="400" src="https://www.youtube.com/embed/<?php echo $youtube_id?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>	
		<?php }?>
		<p>Don't forget to click on "Submit Evaluation" to record your evaluation.</p>
		</table>		
        </div>  
	</div>
</body>
</html>