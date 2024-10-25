<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];


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

    <br>
    <div class="container d-flex justify-content-left col-md-12" >
        <div class="col-12">
		
		
		
            <table class="table" style="margin-block-start: -20px">
                <thead class="thead-dark" id="table">
                    <tr>
						<!--<th scope="col">Team ID</th>-->
                        <th scope="col" >Team Name</th>
                        <!--<th scope="col">Team Mentor</th>-->
                        <th scope="col" >Category</th>
                        <th scope="col" >Scores</th>
						<!--<th scope="col" >Team Members</th>
						<th scope="col" >Team Category</th>-->
						<th scope="col" >Status</th>
                        <th> View Details</th>
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				$q_team = mysqli_query($con,"select team_id, tt.project_team_name as project_name, tt.category, avg(total) as total
										from tbl_team tt, stut_tot st
										where tt.id = st.team_id
										group by(team_id)
									");	
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
					$team_id = $r_team['team_id'];				
				$q_e = mysqli_query($con,"select * from tbl_judge_assessment where team_id = $team_id");
				$r_q_e = mysqli_num_rows($q_e);
				$d_q_e = mysqli_fetch_assoc($q_e);
				if ($d_q_e['id'])
				{
				$st_q = mysqli_query($con,"select count(*) as count From tbl_judge_assessment 
					where team_id = $team_id and  (identifying_understanding is null or ideating is null
					or designing_building is null or testing_refinging is null or value_propoition is null
					or market_potential is null or social_value is null or originality is null or logbook is null
					or display_board is null or prototype is null or online_pitch is null or question_asked is null
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
													<td><?php echo $r_team['category']?></td>  
													<td><?php echo $r_team['total']?></td>  
													<td><?php echo $status?></td> 
													<td><a href="view_evaluations.php?team_id=<?php echo $r_team['team_id']?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">View Evaluations</button></a></td> 
													
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