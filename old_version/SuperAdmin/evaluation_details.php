<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];

extract($_POST);
if(isset($_POST['submit']))
{	
$judge_id = $_POST['judge_id'];
#echo $judge_id;
$teams = $_POST['team_id'];
foreach ($teams as $i){
#echo $i;
$sql = "INSERT INTO `tbl_judge_team` (`team_id`,`user_id`) VALUES ('$i','$judge_id')";
$c = mysqli_query($con,$sql);
#$jt_id = mysqli_insert_id;
if($c)
{
	echo 'success';
}
else
	echo 'failed';

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
                <a class="nav-link" href="liveqa_teams.php">Live QA</a>
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



<div class="container d-flex justify-content-left col-md-12" >
        <div class="col-12">
		
		
		
            <table class="table" style="margin-block-start: -20px">
                <thead class="thead-dark" id="table">
                    <tr>
						<!--<th scope="col">Team ID</th>-->
                        <th scope="col" >Team Name</th>
                        <!--<th scope="col">Team Mentor</th>-->
                        <th scope="col" >Video Pitch</th>
                        <th scope="col" >LogBook</th>
						<th scope="col" >Team Members</th>
						<th scope="col" >Team Category</th>
                        <th> View Details</th>
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				$q_team = mysqli_query($con,"select distinct tt.id as team_id,tt.project_team_name as project_name,tt.category as category,tu.first_name, tu.last_name,tt.video_pitch, tt.log_book
											from tbl_team tt, tbl_judge_team tj, tbl_team_mentor ttm, tbl_team_member tm , tbl_user tu
											where tj.team_id = tt.id
											and tt.id = ttm.team_id
											and ttm.user_id = tu.id

									");	
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
					$team_id = $r_team['team_id'];
				$team_m_q = mysqli_query($con, "select GROUP_CONCAT(student_first_name) as members from tbl_team_member where team_id = $team_id");
				$team_m_r = mysqli_fetch_assoc($team_m_q);
				
				$q_e = mysqli_query($con,"select * from tbl_judge_assessment where team_id = $team_id and user_id = $id");
				$r_q_e = mysqli_num_rows($q_e);
				$d_q_e = mysqli_fetch_assoc($q_e);
				
				
				?>
											
												<tr> 
													<!--<td><a href="viewteams.php?team_id=<?php echo $r_team['team_id']?>"><?php echo $r_team['team_id']?></a></td>-->
													<td><?php echo $r_team['project_name']?></td> 
													<!--<td><?php echo $r_team['first_name'].' '.$r_team['last_name']?></td> -->
													<td><a href ="<?php echo $r_team['video_pitch']?>" target="_blank">Video Pitch</a></td> 
													<td><a href="<?php echo $r_team['log_book']?>" target="_blank">LogBook</a></td>  
													<td><?php echo $team_m_r['members']?></td>  
													<td><?php echo $r_team['category']?></td>  
													<?php if($r_q_e) { ?>
													<td><a href="update_evaluation_team.php?id=<?php echo $d_q_e['id']?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">Update Evaluation</button></a></td> 
													<?php }else{ ?>
													<td><a href="evaluate_team.php?team_id=<?php echo $r_team['team_id']?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">Evaluate Team</button></a></td> 
													<?php }?>
												</tr> 
				<?php } ?>								
												
											</tbody> 
            </table>
        </div>

    </div>
   
</div>
</body>

</html>	
	