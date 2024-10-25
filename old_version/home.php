<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];
if(isset($_GET['year']))
{
	$year = $_GET['year'];
}
else {
$year = date("Y");
}

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
height:100%;
    width:100%;
    padding:0;
    margin:0;    
}
table { 
    table-layout:fixed;
}
th { 
    overflow: auto; 
	max-width:100%;
	white-space:nowrap;
}
td { 
    overflow: auto; 
	max-width:100%;
white-space:nowrap;
}
@media only screen and (max-width: 480px) {
    /* horizontal scrollbar for tables if mobile screen */
    .tablemobile {
        overflow-x: auto;
        display: block;
    }
}
</style>
 <?php include('../header.php');?>
<div id="wrapper" style="margin-top:20px;width:100%;">
<body>

   

		<nav class="navbar navbar-expand bg-dark navbar-dark" style="margin-top:20px;width:100%;">
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
						<a class="dropdown-item" href="teams.php">Teams</a>
						
					</div>
				</li>
				
				<li class="nav-item dropdown" style="font-weight: bold;">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Previous year
					</a>
					<div class="dropdown-menu"  id="mainNavbar">	
					<?php 
					$q_y = mysqli_query($con,"select distinct year
				from tbl_team tt, tbl_team_mentor ttm
				where ttm.user_id = $id 
				and ttm.team_id = tt.id
				and tt.deleted = 0");
					
					while($q_y_d = mysqli_fetch_assoc($q_y))
					{
					$y = $q_y_d['year'];
					?>
				
						<a class="dropdown-item" href="home.php?year=<?php echo $y; ?>"><?php echo $y; ?></a>
					<?php } ?>	
					</div>
				
				</li>
				
				 <li class="nav-item dropdown" style="font-weight: bold;">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						<?php echo $name?>
					</a>
					<div class="dropdown-menu"  id="mainNavbar">
						<a class="dropdown-item" href="mentor.php">Profile</a>
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
    <div style="width:100%">
        <div class="col-12">
            <table class="table" style="margin-block-start: -20px">
                <thead class="thead-dark" id="table">
                    <tr>
						<th>Team Name</th>
						<th>Team Description</th>
						<th>Category</th>
						<th>Team Members</th>
                        <th>Video Pitch</th>
                        <th>LogBook</th>
						<th>Complete</th>
						<?php if (($year) == date("Y")) { ?>
                        <th>Actions</th>
						<?php } ?>
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				$q_team = mysqli_query($con,"select distinct tt.id as team_id,tt.project_team_name as project_name,tt.project_description,tt.category,tt.video_pitch, tt.log_book
				from tbl_team tt, tbl_team_mentor ttm
				where ttm.user_id = $id 
				and ttm.team_id = tt.id
				and year = '$year'
				and tt.deleted = 0");	
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
					$team_id = $r_team['team_id'];
				$team_m_q = mysqli_query($con, "select GROUP_CONCAT(student_first_name) as members from tbl_team_member where team_id = $team_id");
				$team_m_r = mysqli_fetch_assoc($team_m_q);
				
				
				
				
				?>
											
					<tr> 
						<td><a href="viewteams.php?team_id=<?php echo $r_team['team_id']?>"><?php echo $r_team['project_name']?></a></td> 
						<td><a href="viewteams.php?team_id=<?php echo $r_team['team_id']?>"><?php echo $r_team['project_description']?></a></td> 
						<td><a href="viewteams.php?team_id=<?php echo $r_team['team_id']?>"><?php echo $r_team['category']?></a></td> 
						<td><?php echo $team_m_r['members']?></td>  
						<?php if($r_team['video_pitch']) {?>
						<td><a href ="<?php echo $r_team['video_pitch']?>" target="_blank">Video Pitch</a></td> 
						<?php } else { ?>
						<td></td> 
						<?php } if($r_team['log_book']) {  ?>
						<td><a href="<?php echo $r_team['log_book']?>">LogBook</a></td>  
						<?php } else { ?>
						<td></td>
						<?php } if(isset($r_team['log_book']) && isset($r_team['video_pitch'])) { ?>
						<td><?php echo 'Complete' ; ?></td>  
						<?php } else { ?>
						<td><?php echo 'Incomplete' ; ?></td>  
						<?php } ?>
						<?php if (($year) == date("Y")) { ?>
						<td>
						<a href="edit_team.php?team_id=<?php echo $team_id?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">Update Details</button></a>
						<a onClick="return confirm('Are you sure you want to delete?')" href="set_delete.php?id=<?php echo $team_id?>&table=tbl_team&return=home" class="btn mini purple"> Delete</a>
						</td> 
						<?php } ?>
						</td> 
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

</body>
<div>
</html>	