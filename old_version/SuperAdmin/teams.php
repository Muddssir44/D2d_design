<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];
$category='';

extract($_POST);
if(isset($_POST['submit']))
{	
$category = $_POST['team_category'];
}

if(isset($_GET['year']))
{
	$year = $_GET['year'];
}
else {
$year = date("Y");
}
if(isset($_GET['category'])) { 
$category = $_GET['category'];
$query = "select distinct ttm.user_id, tt.id as team_id,tt.project_team_name as project_name,tt.project_description,tt.category,tt.video_pitch, tt.log_book
				from tbl_team tt, tbl_team_mentor ttm
				where ttm.team_id = tt.id
				and tt.year = '$year'
				and tt.deleted = 0
				and category = '$category' order by tt.project_team_name asc";
}
else {
$query = "select distinct ttm.user_id, tt.id as team_id,tt.project_team_name as project_name,tt.project_description,tt.category,tt.video_pitch, tt.log_book
				from tbl_team tt, tbl_team_mentor ttm
				where ttm.team_id = tt.id
				and tt.year = '$year'
				and tt.deleted = 0 order by category asc";
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
    top:0;
    bottom:0;
    left:0;
    right:0;
    
   
}
</style>
 <?php include('../header.php'); ?>
<div id="wrapper">
<body>

    <?php include('navbar.php');?>
    <br>
    <div class="container d-flex justify-content-left col-md-12">
        <div class="col-12">
		<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for Team names..">
		<br>
            <table class="table" id="myTable" style="margin-block-start: -20px;font-size: 1.0rem;">
                <thead class="thead-dark" id="table">
                    <tr>
						<th>Team Name</th>
						<th>Team Description</th>
						<th>Category</th>
						<th>Team Members</th>
                        <th>Video Pitch</th>
                        <th>LogBook</th>
						<th>Status</th>
						<?php if (($year) == date("Y")) { ?>
                        <th>Actions</th>
						<?php } ?>
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				#echo $query;
				
				$q_team = mysqli_query($con,$query);	
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
					$team_id = $r_team['team_id'];
				$team_m_q = mysqli_query($con, "select GROUP_CONCAT(student_first_name) as members from tbl_team_member where team_id = $team_id and deleted = 0");
				$team_m_r = mysqli_fetch_assoc($team_m_q);
				$mentor_id = $r_team['user_id'];
				
				
				
				?>
											
					<tr> 
						<td><a href="viewteams.php?team_id=<?php echo $r_team['team_id']?>&mentor_id=<?php echo $mentor_id?>"><?php echo $r_team['project_name']?></a></td> 
						<td><a href="viewteams.php?team_id=<?php echo $r_team['team_id']?>&mentor_id=<?php echo $mentor_id?>"><?php echo $r_team['project_description']?></a></td> 
						<td><a href="viewteams.php?team_id=<?php echo $r_team['team_id']?>&mentor_id=<?php echo $mentor_id?>"><?php echo $r_team['category']?></a></td> 
						<td><?php echo $team_m_r['members']?></td>  
						<?php if($r_team['video_pitch']) {?>
						<td><a href ="<?php echo $r_team['video_pitch']?>" target="_blank">Video Pitch</a></td> 
						<?php } else { ?>
						<td></td> 
						<?php } if($r_team['log_book']) {  ?>
						<td><a href="../<?php echo $r_team['log_book']?>">LogBook</a></td>  
						<?php } else { ?>
						<td></td>
						<?php } if(isset($r_team['log_book']) && isset($r_team['video_pitch'])) { ?>
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
						<?php if (($year) == date("Y")) { ?>
						<td>
						<a href="viewteams.php?team_id=<?php echo $team_id?>&mentor_id=<?php echo $mentor_id;?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">Edit</button></a>
						<a href="edit_team.php?team_id=<?php echo $team_id?>&mentor_id=<?php echo $mentor_id?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">Upload Files</button></a>
						<a onClick="return confirm('Are you sure you want to delete?')" href="set_delete.php?id=<?php echo $team_id?>&table=tbl_team&mentor_id=<?php echo $mentor_id;?>" class="btn mini purple"> Delete</a>
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
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</body>
<div>
</html>	