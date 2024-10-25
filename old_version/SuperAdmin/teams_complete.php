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
            <table class="table" id="myTable" style="margin-block-start: -20px">
                <thead class="thead-dark" id="table">
                    <tr>
						<th scope="col">Team Name</th>
						<th scope="col">Team Description</th>
						<th scope="col">Category</th>
                        <th scope="col">Video Pitch</th>
                        <th scope="col">LogBook</th>
						<th scope="col">Team Members</th>
                        <th> View Details</th>
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				$q_team = mysqli_query($con,"select distinct ttm.user_id, tt.id as team_id,tt.project_team_name as project_name,tt.project_description,tt.category,tt.video_pitch, tt.log_book
				from tbl_team tt, tbl_team_mentor ttm
				where ttm.team_id = tt.id
				and tt.year = '$year'
				and tt.video_pitch is not null
				and tt.log_book is not null
				and tt.deleted = 0 order by category asc");	
				
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
					$mentor_id = $r_team['user_id'];
					$youtube_id='';
					$url = $r_team['video_pitch'];
				if(preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
					{
						$youtube_id = $match[1];
					}
					$team_id = $r_team['team_id'];
				$team_m_q = mysqli_query($con, "select GROUP_CONCAT(student_first_name) as members from tbl_team_member where team_id = $team_id");
				$team_m_r = mysqli_fetch_assoc($team_m_q);
				
				
				?>
											
					<tr> 
						<td><a href="viewteams.php?team_id=<?php echo $r_team['team_id']?>&mentor_id=<?php echo $mentor_id?>"><?php echo $r_team['project_name']?></a></td> 
						<td><a href="viewteams.php?team_id=<?php echo $r_team['team_id']?>&mentor_id=<?php echo $mentor_id?>"><?php echo $r_team['project_description']?></a></td> 
						<td><a href="viewteams.php?team_id=<?php echo $r_team['team_id']?>&mentor_id=<?php echo $mentor_id?>"><?php echo $r_team['category']?></a></td> 
						<?php if ($r_team['video_pitch']!='') {
							if ($youtube_id!='') { ?>
						<td><a href ="<?php echo $r_team['video_pitch']?>" target="_blank">Video Pitch</a></td> 
							<?php } else {?>
							<td><a href ="../<?php echo $r_team['video_pitch']?>" target="_blank">Video Pitch</a></td> 
							<?php } ?>
							<?php } else {?>
							<td>Video Pitch</td> 
							<?php } if ($r_team['log_book']!='') {?>
									<td><a href="../<?php echo $r_team['log_book']?>" target="_blank">LogBook</a></td>  
							<?php } else {?>
									<td>LogBook</td>  
							<?php }?>
						<td><?php echo $team_m_r['members']?></td>  
						<td><a href="edit_team.php?team_id=<?php echo $team_id?>&mentor_id=<?php echo $mentor_id?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">Update Details</button></a></td> 
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