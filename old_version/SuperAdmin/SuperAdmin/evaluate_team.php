<?php 
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$team_id = $_GET['team_id'];
$name = $_SESSION['name'];
$v_q = mysqli_query($con,"select * from tbl_team where id = $team_id");
$v_d = mysqli_fetch_assoc($v_q);

$video_pitch = $v_d['video_pitch'];
				$url = $video_pitch;
				preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
				$youtube_id = $match[1];
extract($_POST);
if(isset($_POST['submit']))
{
	$insert = mysqli_query($con,"insert into tbl_judge_assessment values ('',$team_id,$id,'$identifying_understanding','$ideating','$designing_building','$testing_refinging','$value_propoition','$market_potential','$social_value','$originality','$logbook','$display_board','$prototype','$online_pitch','$question_asked','$live_qa')");
	$iid = mysqli_insert_id($con);
	if($iid)
	{
		echo"<script>alert('Evaluation Entered Successfully')</script>";
		header("location:home.php");
	}
	else 
		echo"<script>alert('Evaluation insertion Failed')</script>";
}
$video_pitch = '';

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
		
		<table class="table" style="margin-left: -110px;">
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
				$q_team = mysqli_query($con,"select distinct tt.id as team_id,tt.project_team_name as project_name,tt.project_description,tt.category,tu.first_name, tu.last_name,tt.video_pitch, tt.log_book
											from tbl_team tt, tbl_judge_team tj, tbl_team_mentor ttm, tbl_team_member tm , tbl_user tu
											where tj.user_id = $id 
											and tt.id = $team_id
											and tt.id = ttm.team_id
											and ttm.user_id = tu.id

									");	
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
					$team_id = $r_team['team_id'];
				$team_m_q = mysqli_query($con, "select GROUP_CONCAT(student_first_name) as members from tbl_team_member where team_id = $team_id");
				$team_m_r = mysqli_fetch_assoc($team_m_q);
				$video_pitch = $r_team['video_pitch'];
				?>
											
												<tr> 
													<!--<td><?php echo $r_team['team_id']?></a></td> -->
													<td><?php echo $r_team['project_name']?></a></td> 
													<td><?php echo $r_team['project_description']?></td> 
													<td><?php echo $r_team['category']?></td>
													<!--<td><iframe frameborder="0" height="100" width="100" 
														src="https://www.youtube.com/embed/sA9DwvbQ-hI">
													  </iframe></a></td> -->
													<td><a href="<?php echo $r_team['log_book']?>" target="_blank">LogBook</a></td>  
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
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=15; $i++)
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
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=10; $i++)
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
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=10; $i++)
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
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=10; $i++)
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
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=5; $i++)
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
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=5; $i++)
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
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=5; $i++)
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
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=10; $i++)
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
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=5; $i++)
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
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=5; $i++)
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
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=5; $i++)
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
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=5; $i++)
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
    height: 200px;" placeholder="Questions that are to be asked during Live Q & A" name="question_asked"></textarea>
						
						</div>	
					</td>	
					</tr>
                <tr>    		
						<br>
						 <td colspan="4">
					     
						<label for="email"> Live Pitch and Q&A Score: </label>
                            <select  name="live_qa" style="margin-left: 36px">
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=10; $i++)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        
						</td>
                    
               
				
				
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
            <h3><?php echo $video_pitch?> Video Pitch:</h3>
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
		</table>		
        </div>   
</div>
</div>
</body>
</html>