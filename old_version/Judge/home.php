<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];
$year = date("Y");

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
   

	<nav class="navbar navbar-expand bg-dark navbar-dark" style="    margin-top: 10px;
    width: 1288px;
    left: 2.3%;">
        <!-- Links -->
        <ul class="navbar-nav">

            <li class="nav-item" style="font-weight: bold;">
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
        </ul>
    </nav>

    <br>
    <div class="container d-flex justify-content-left col-md-12" >
        <div class="col-12">
		
		
		
            <table class="table" style="margin-block-start: -20px">
                <thead class="thead-dark" id="table">
                    <tr>
						<!--<th scope="col">Team ID</th>-->
                        <th scope="col" >Team Name</th>
                        <!--<th scope="col">Team Mentor</th>-->
                        <th scope="col" >Video Pitch</th>
                        <th>eLogBook</th>
                        <th>LogBookCopy</th>	
						<th scope="col" >Team Members</th>
						<th scope="col" >Team Category</th>
						<th scope="col" >Status</th>
                        <th> View Details</th>
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				$q_team = mysqli_query($con,"select distinct tt.id as team_id,tt.project_team_name as project_name,tt.category as category,tu.first_name, tu.last_name,tt.video_pitch, tt.log_book
											from tbl_team tt, tbl_judge_team tj, tbl_team_mentor ttm, tbl_team_member tm , tbl_user tu
											where tj.user_id = $id 
											and tj.team_id = tt.id
											and tt.id = ttm.team_id
											and ttm.user_id = tu.id
											and tj.year = '$year'

									");	
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
					$youtube_id='';
				$url = $r_team['video_pitch'];
				if(preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
					{
						$youtube_id = $match[1];
					}
	
					$status = 'Incomplete';
					$team_id = $r_team['team_id'];
				$team_m_q = mysqli_query($con, "select GROUP_CONCAT(student_first_name) as members from tbl_team_member where team_id = $team_id");
				$team_m_r = mysqli_fetch_assoc($team_m_q);
				
				$q_e = mysqli_query($con,"select * from tbl_judge_assessment where team_id = $team_id and user_id = $id");
				$r_q_e = mysqli_num_rows($q_e);
				$d_q_e = mysqli_fetch_assoc($q_e);
				if ($d_q_e['id'])
				{
				$st_q = mysqli_query($con,"select count(*) as count From tbl_judge_assessment 
					where team_id = $team_id and user_id = $id  and  (identifying_understanding is null or ideating is null
					or designing_building is null or testing_refinging is null or value_propoition is null
					or market_potential is null or social_value is null or originality is null or logbook is null
					or prototype is null or online_pitch is null or question_asked is null
					)");
				$st_d = mysqli_fetch_assoc($st_q);
				$c = $st_d['count'];
				if($c == 0)
				{
					$status = 'Complete';
				}
				else{
					$status = 'Incomplete';
				}
				}

				?>
											
												<tr> 
													<!--<td><a href="viewteams.php?team_id=<?php echo $r_team['team_id']?>"><?php echo $r_team['team_id']?></a></td>-->
													<td><?php echo $r_team['project_name']?></td> 
													<!--<td><?php echo $r_team['first_name'].' '.$r_team['last_name']?></td> -->
													<?php if ($youtube_id!='') { ?>
													<td><a href="<?php echo $r_team['video_pitch']?>" target="_blank">Video Pitch</a></td> 
													<?php } else {?>
													<td><a href="<?php echo 'http://emuinvent.emuem.org/Team/'.$r_team['video_pitch']?>" target="_blank">Video Pitch</a></td> 
													<?php }   ?>
						<td><a href="https://logbook.eduedgetech.com/emuinvent_ElogbookV1/template.php?team_id=<?php echo $r_team['team_id'];?>" target="_blank">LogBook</a></td>  
						
						<?php if($r_team['log_book']) { ?>
						<td><a href="<?php echo $r_team['log_book']?>"/>LogBookCopy </td>
						<?php } else { ?>
						<td></td> 
						<?php }   ?>
															<td><?php echo $team_m_r['members']?></td>  
													<td><?php echo $r_team['category']?></td>  
													<td><?php echo $status?></td> 
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

    <!-- <div class="container d-flex justify-content-center col-md-8">
        <p class="dbtn">
            <button type="button" id="signout-btn" onclick="signOutUser()" class="btn btn-danger"> SignOut </button>
        </p>
    </div> -->




    <!-- Firebase App is always required and must be first -->
    <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-app.js"></script>

    <!-- Add additional services that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-database.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

    
</div>
</body>
</html>	