<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];

$team_id = $_GET['team_id'];
$q_t = mysqli_query($con,"select * from tbl_team where id = $team_id");
$d_t = mysqli_fetch_assoc($q_t);
$team_name = $d_t['project_team_name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Evaluation Team Lists</title>
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

    <br>
    <div class="container d-flex justify-content-left col-md-12" >
	<div class="col-12">
		<h3><?php echo 'Team Name: '.$team_name?></h3>
		
		
		<table class="table table-borderless" style="margin-block-start: -5px;">
                <thead class="thead-dark" id="table">
				
                    <tr>
						<th scope="col">Evaluation Text</th>
						<?php 
						$q_j = mysqli_query($con,"select * from tbl_judge_team where team_id = $team_id and user_id in (select user_id from tbl_judge_assessment where team_id = $team_id) order by user_id asc");
						$count = mysqli_num_rows($q_j);
						#echo $count;
						$i=1;
						while($d_j = mysqli_fetch_assoc($q_j))
						{
						?>
						<th scope="col"><a href="JudgeDetails.php?id=<?php echo $d_j['user_id']?>">Judge<?php echo $i;?></a></th>
						<?php $i++;} 
						$q_j = mysqli_query($con,"select * from tbl_judge_team where team_id = $team_id and user_id not in (select user_id from tbl_judge_assessment where team_id = $team_id) order by user_id");
						#$count = mysqli_num_rows($q_j);
						#echo $count;
						$i=$count+1;
						while($d_j = mysqli_fetch_assoc($q_j))
						{
						?>
						<th scope="col"><a href="JudgeDetails.php?id=<?php echo $d_j['user_id']?>">Judge<?php echo $i;?></a></th>
						<?php $i++;} ?>
						</tr>
				
                </thead>
			<?php 
			
			$sql = mysqli_query($con,"describe tbl_judge_assessment");
				while($d = mysqli_fetch_assoc($sql))
				{
					$col_name_val = '';
					$col_name = $d['Field'];
					
					if($col_name != 'id' && $col_name!='team_id' && $col_name!='user_id')
					{
						
						$q_team = mysqli_query($con,"select team_id,GROUP_CONCAT(ifnull($col_name,'Incomplete') order by user_id SEPARATOR '; ') as val, group_concat(user_id order by user_id SEPARATOR ', ') as judges from tbl_judge_assessment
						where team_id = $team_id order by user_id asc");	
				

				$r_team = mysqli_fetch_assoc($q_team);
				
				$string = $r_team['val'];
				#echo $string;
				$string = preg_replace('/\.$/', '', $string); //Remove dot at end if exists
				$array = explode('; ', $string); //split string into array seperated by ', '
				$judges_list = $r_team['judges'];
				$string_j = preg_replace('/\.$/', '', $judges_list); //Remove dot at end if exists
				$array_j= explode(', ', $string_j); //split string into array seperated by ', '
				#$array_j = arsort($array_j);
				#print_r($array_j);
				if($col_name == 'identifying_understanding')
					{
						$col_name_val = 'Identifying & Understanding';
					}
					else if($col_name == 'ideating')
					{
						$col_name_val = 'Ideating';
					}
					else if($col_name == 'designing_building')
					{
						$col_name_val = 'Designing & Building';
					}
					else if($col_name == 'testing_refinging')
					{
						$col_name_val = 'Testing & Refinging';
					}
					else if($col_name == 'value_propoition')
					{
						$col_name_val = 'Value Proportion';
					}
					else if($col_name == 'market_potential')
					{
						$col_name_val = 'Market Potential';
					}
					else if($col_name == 'social_value')
					{
						$col_name_val = 'Social Value';
					}
					else if($col_name == 'originality')
					{
						$col_name_val = 'Originality';
					}
					else if($col_name == 'logbook')
					{
						$col_name_val = 'LogBook';
					}
					else if($col_name == 'display_board')
					{
						$col_name_val = 'Display Board';
					}
					else if($col_name == 'prototype')
					{
						$col_name_val = 'Prototype';
					}
					else if($col_name == 'online_pitch')
					{
						$col_name_val = 'Online Pitch';
					}
					else if($col_name == 'question_asked')
					{
						$col_name_val = 'Q & A';
					}
					else if($col_name == 'live_qa')
					{
						$col_name_val = 'Live QA';
					}	
					
            ?>		
				<tbody>								
					<tr> 
					<td style="width: 40px;"><?php echo $col_name_val?></td> 
					<?php 
					$i=0;
					foreach($array as $value) //loop over values
					{
						#echo $array_j[$i];
					?>
					<td style="width: 10px;"><a href="update_evaluation_team.php?judge_id=<?php echo $array_j[$i]?>&team_id=<?php echo $team_id?>"><?php echo $value . PHP_EOL;?></a></td> 
					<?php $i++;}
					$q = "select user_id from tbl_judge_team 
					where team_id = $team_id and user_id not in 
					(select user_id from tbl_judge_assessment where team_id = $team_id order by user_id asc) order by user_id asc";
					$qu_q = mysqli_query($con,$q);
					while($qu_d = mysqli_fetch_assoc($qu_q))
					{
						
					?>
					<td style="width: 10px;"><a href="evaluate_team.php?judge_id=<?php echo $qu_d['user_id']?>&team_id=<?php echo $team_id?>">Incomplete</a></td> 
					<?php } ?>
					
			</tr> 
												</tbody>
				<?php }} ?>									
												
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