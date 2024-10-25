<?php
include('../database/config.php'); 
include('control.php'); 
$url= $_SERVER['REQUEST_URI'];

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

   

		<?php include('navbar.php');?>
    <br>
   <div class="container d-flex justify-content-left col-md-12">
        <div class="col-12">
		<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for Team names..">
		<br>
            <table class="table" id="myTable" style="margin-block-start: -20px">
                <thead class="thead-dark" id="table">
                    <tr>
						<th scope="col">Team Name</th>
						<th scope="col">Team Description</th>
						<th scope="col">Team Members</th>
						<th scope="col">Video Pitch</th>
                       <!-- <th> View Details</th>-->
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				$q_team = mysqli_query($con,"select distinct tt.id as team_id,tt.project_team_name as project_name,tt.project_description,tt.category,tt.video_pitch, tt.log_book
				from tbl_team tt where tt.year = '$year' and tt.deleted = 0 order by project_team_name");	
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
					$youtube_id='';
					$url = $r_team['video_pitch'];
				if(preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
					{
						$youtube_id = $match[1];
					}
					$team_id = $r_team['team_id'];
				$team_m_q = mysqli_query($con, "select GROUP_CONCAT(concat(student_first_name,' ',student_last_name)) as members from tbl_team_member where team_id = $team_id");
				$team_m_r = mysqli_fetch_assoc($team_m_q);
				
				?>
											
					<tr> 
						<td><?php echo $r_team['project_name']?></td> 
						<td><?php echo $r_team['project_description']?></td> 
						<td><?php echo $team_m_r['members']?></td>  
						<?php if ($r_team['video_pitch']!='') {
							if ($youtube_id!='') { ?>
						<td><a href ="<?php echo $r_team['video_pitch']?>" target="_blank">Video Pitch</a></td> 
							<?php } else {?>
							<td><a href ="http://emuinvent.emuem.org/Team/<?php echo $r_team['video_pitch']?>" target="_blank">Video Pitch</a></td> 
							<?php } ?>
							<?php } else {?>
							<td>Video Pitch</td> 
							<?php }?>
						
						<!--<td><a href="edit_team.php?team_id=<?php echo $team_id?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">Update Details</button></a></td> -->
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