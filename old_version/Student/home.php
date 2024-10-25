<?php
include('../database/config.php'); 
include('control.php'); 
$url= $_SERVER['REQUEST_URI'];

$id = $_SESSION['id'];
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$teamName= $_SESSION['teamName'];
$mentor_id = $_SESSION['mentor_id'];
if(isset($_GET['year']))
{
	$year = $_GET['year'];
}
else {
$year = date("Y");
}


$timezone = date_default_timezone_set('America/New_York');
$date = date('Y-m-d H:i:s');
$today_at_midnight = strtotime('midnight');

$date_check = '2032-02-27 00:00:00';


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
    <div style="width:100%">
        <div class="col-12">
            <table class="table" style="margin-block-start: -20px;font-size: 1.0rem;">
                <thead class="thead-dark" id="table">
                    <tr>
						<th>Team Name</th>
						<th>Project Description</th>
						<th>Category</th>
						<th>Team Members</th>
                        <th>Video Pitch</th>
                        <th>eLogBook</th>
                        <th>LogBookCopy</th>
						<th>Status</th>
						<?php if (($year) == date("Y")) { ?>
                        <th>Actions</th>
						<?php } ?>
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				$q_team = mysqli_query($con,"select distinct tt.id as team_id,tt.project_team_name as project_name,tt.project_description,tt.category,tt.video_pitch, tt.log_book
				from tbl_team tt, tbl_team_mentor ttm, tbl_student_mentor ts,tbl_team_member ttmb
				where ttmb.student_id = $id 
                and ttmb.team_id is not null
				and ttmb.team_id = tt.id
				and year = '$year'
				and tt.deleted = 0");	
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
					$team_id = $r_team['team_id'];
				$team_m_q = mysqli_query($con, "select GROUP_CONCAT(student_first_name) as members from tbl_team_member where team_id = $team_id and deleted = 0");
				$team_m_r = mysqli_fetch_assoc($team_m_q);
				
				
				
				
				?>

                <?php     $teamName=$r_team['project_name'];
                          $_SESSION['teamName'] = $teamName;
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
						<?php }   ?>
						<td><a href="http://logbook.eduedgetech.com/page1.php?std_Id=<?php echo $id;?>&team_id=<?php echo $r_team['team_id'];?>" target="_blank">LogBook</a></td>  
						
						<?php if($r_team['log_book']) { ?>
						<td><a href="<?php echo $r_team['log_book']?>"/>LogBookCopy </td>
						<?php } else { ?>
						<td></td> 
						<?php }   ?>
						<?php  if(isset($r_team['log_book']) && isset($r_team['video_pitch'])) { ?>
						<td><?php echo 'Complete' ; ?></td>  
						<?php } else { 
						if(empty($r_team['log_book'])) {
							$text = 'No LogBook';
						} 	
						if(empty($r_team['video_pitch'])) {
							$text = $text.' No Video Pitch';
						} 	
						?>
						<td title="<?php echo $text;?>"><?php echo 'Incomplete' ; ?></td>  
						<?php } ?>
						<?php if (($year) == date("Y")) { 
						if($date <= $date_check)
						{?>
						<td>
						<a href="viewteams.php?team_id=<?php echo $team_id?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">Edit</button></a>
						<a href="edit_team.php?team_id=<?php echo $team_id?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">Upload Files</button></a>
						<a onClick="return confirm('Are you sure you want to delete?')" href="set_delete.php?id=<?php echo $team_id?>&table=tbl_team&return=home" class="btn mini purple"> Delete</a>
						</td> 
						<?php } } ?>
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