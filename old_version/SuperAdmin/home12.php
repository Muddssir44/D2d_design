<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];


$comple_c_q = mysqli_query($con,"select count(*) as count from tbl_team where (video_pitch is not null and log_book!='') ");
$complete_c_d = mysqli_fetch_assoc($comple_c_q);


$incomple_l_q = mysqli_query($con,"select count(*) as count from tbl_team tt where log_book is null");
$incomplete_l_d = mysqli_fetch_assoc($incomple_l_q);

$incomple_v_q = mysqli_query($con,"select count(*) as count from tbl_team tt where video_pitch is null");
$incomplete_v_d = mysqli_fetch_assoc($incomple_v_q);

$assigned_judge_q = mysqli_query($con,"select count(*) as count from tbl_judge_team");
$assigned_judge_d = mysqli_fetch_assoc($assigned_judge_q);

$complete_online_eval_q = mysqli_query($con,"select count(tjt.id) as count
from tbl_judge_team tjt, tbl_judge_assessment tja
where tjt.user_id = tja.user_id
and tjt.team_id = tja.team_id
and identifying_understanding is not null 
                 and ideating is not null
                 and designing_building is not null
                 and testing_refinging is not null
                 and value_propoition is not null
                 and market_potential is not null
                 and social_value is not null
                 and originality is not null
                 and logbook is not null
                 and display_board is not null
                 and prototype is not null
                 and online_pitch is not null
                 ");
$complete_online_eval_d = mysqli_fetch_assoc($complete_online_eval_q);

$incomplete_online_eval_q = mysqli_query($con,"select distinct count(t.id) as count from ((select distinct id from tbl_judge_team where id not in (SELECT T1.id
FROM tbl_judge_team t1
    INNER JOIN tbl_judge_assessment T2 ON T2.user_id = T1.user_id AND T2.team_id = T1.team_id))
union 
(select distinct tjt.ID
from tbl_judge_team tjt, tbl_judge_assessment tja
where tjt.user_id = tja.user_id
and tjt.team_id = tja.team_id
and (identifying_understanding is null 
                 or ideating is null
                 or designing_building is null
                 or testing_refinging is null
                 or value_propoition is null
                 or market_potential is null
                 or social_value is null
                 or originality is null
                 or logbook is null
                 or display_board is null
                 or prototype is null
                 or online_pitch is null))) t


");
$incomplete_online_eval_d = mysqli_fetch_assoc($incomplete_online_eval_q);


$complete_live_eval_q = mysqli_query($con,"select count(*) as count from tbl_judge_team where team_id in (select team_id from tbl_judge_assessment where live_qa is not null)");
$complete_live_eval_d = mysqli_fetch_assoc($complete_live_eval_q);

$incomplete_live_eval_q = mysqli_query($con,"select count(*) as count from tbl_judge_team where team_id not in (select team_id from tbl_judge_assessment where live_qa is not null)");
$incomplete_live_eval_d = mysqli_fetch_assoc($incomplete_live_eval_q);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/widget.css" type="text/css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
   
 <div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="dbox dbox--color-1">
				<div class="dbox__icon">
					<i class="glyphicon glyphicon-cloud"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count"><?php echo $complete_c_d['count']?></span>
					<span class="dbox__title">Completed Teams</span>
				</div>
				
				<div class="dbox__action">
					<a href="teams_complete.php"><button class="dbox__action__btn">More Info</button></a>
				</div>				
			</div>
		</div>
		<div class="col-md-4">
			<div class="dbox dbox--color-2">
				<div class="dbox__icon">
					<i class="glyphicon glyphicon-download"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count"><?php echo $incomplete_l_d['count']?></span>
					<span class="dbox__title">Incomplete Teams without Logbook</span>
				</div>
				
				<div class="dbox__action">
					<a href="teams_incomplete_logbook.php"><button class="dbox__action__btn">More Info</button></a>
				</div>				
			</div>
		</div>
		<div class="col-md-4">
			<div class="dbox dbox--color-3">
				<div class="dbox__icon">
					<i class="glyphicon glyphicon-heart"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count"><?php echo $incomplete_v_d['count']?></span>
					<span class="dbox__title">Incomplete Teams without Video Pitch</span>
				</div>
				
				<div class="dbox__action">
					<a href="teams_incomplete_videopitch.php"><button class="dbox__action__btn">More Info</button></a>
				</div>				
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="dbox dbox--color-1">
				<div class="dbox__icon">
					<i class="glyphicon glyphicon-cloud"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count"><?php echo $assigned_judge_d['count']?></span>
					<span class="dbox__title">Assigned Judge Evaluations</span>
				</div>
				
				<div class="dbox__action">
					<a href="teams_complete.php"><button class="dbox__action__btn">More Info</button></a>
				</div>				
			</div>
		</div>
		<div class="col-md-4">
			<div class="dbox dbox--color-2">
				<div class="dbox__icon">
					<i class="glyphicon glyphicon-download"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count"><?php echo $incomplete_online_eval_d['count']?></span>
					<span class="dbox__title">Incomplete Online Judge Evaluations</span>
				</div>
				
				<div class="dbox__action">
					<a href="teams_incomplete_logbook.php"><button class="dbox__action__btn">More Info</button></a>
				</div>				
			</div>
		</div>
		<div class="col-md-4">
			<div class="dbox dbox--color-3">
				<div class="dbox__icon">
					<i class="glyphicon glyphicon-heart"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count"><?php echo $complete_online_eval_d['count']?></span>
					<span class="dbox__title">Complete Online Judge Evaluations</span>
				</div>
				
				<div class="dbox__action">
					<a href="teams_incomplete_videopitch.php"><button class="dbox__action__btn">More Info</button></a>
				</div>				
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="dbox dbox--color-3">
				<div class="dbox__icon">
					<i class="glyphicon glyphicon-heart"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count"><?php echo $complete_live_eval_d['count']?></span>
					<span class="dbox__title">Complete Live Judge Evaluations</span>
				</div>
				
				<div class="dbox__action">
					<a href="teams_incomplete_videopitch.php"><button class="dbox__action__btn">More Info</button></a>
				</div>				
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="dbox dbox--color-3">
				<div class="dbox__icon">
					<i class="glyphicon glyphicon-heart"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count"><?php echo $incomplete_live_eval_d['count']?></span>
					<span class="dbox__title">InComplete Live Judge Evaluations</span>
				</div>
				
				<div class="dbox__action">
					<a href="teams_incomplete_videopitch.php"><button class="dbox__action__btn">More Info</button></a>
				</div>				
			</div>
		</div>
		
		
	</div>
</div>
</body>
</html>	