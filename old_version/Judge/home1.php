<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];



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

<body>

        <div class="jumbotron col-md-12">
       <img class="card-img-top" src="images/emulogo.png" alt="logo image" style="width:100%">
    </div>

    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Links -->
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
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
        <div class="col-12">
            <table class="table">
                <thead class="thead-dark" id="table">
                    <tr>
						<!--<th scope="col">Team ID</th>-->
                        <th scope="col">Team Name</th>
                        <!--<th scope="col">Team Mentor</th>-->
                        <th scope="col">Video Pitch</th>
                        <th scope="col">LogBook</th>
						<th scope="col">Team Members</th>
						<th scope="col">Team Category</th>
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
													<td><a href ="<?php echo $r_team['video_pitch']?>">Video Pitch</a></td> 
													<td><a href="<?php echo $r_team['log_book']?>">LogBook</a></td>  
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

    

</body>
</html>	