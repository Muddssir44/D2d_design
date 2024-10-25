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

if(isset($_GET['status'])) {
	
	if($_GET['status'] == 'Complete')	
	{
	$query = "select * from tbl_user where id in(select student_id from tbl_team_member where team_id in (select id from tbl_team where year = '2021' and deleted = 0) and t_shirt_size <> '' and photo_consent_form <> '' and deleted = 0)";
	} 
	if($_GET['status'] == 'Inomplete')	
	{
	$query = "select * from tbl_user where id in(select student_id from tbl_team_member where team_id in (select id from tbl_team where year = '2021' and deleted = 0) and (t_shirt_size is null or photo_consent_form is null) and deleted = 0)";
	} 
}
else 
{
	$query = "select * from tbl_user where Year = '$year' and user_type = 'Student' order by is_approved asc,id desc";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Volunteers Lists</title>
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
<?php include('../header.php');?>
<div id="wrapper">
<body>
<?php include("navbar.php")?>
    <br>
    <div class="container d-flex justify-content-left col-md-12">
        <div class="col-12">
		<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for first name..">
             <table class="table" id="myTable2" style="margin-block-start: 8px">
                <thead class="thead-dark" id="table">
                    <tr>
						<th scope="col">First Name</th>
						<th scope="col">Last Name</th>
						<th scope="col">Email</th>
						<th scope="col">Phone</th>
						<th scope="col">Mentor Name</th>
						<!--<th scope="col">Mentor Email</th>-->
						<!--<th scope="col">User Type</th>-->
						<th scope="col">Status</th>
						<th> Actions </th>
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				$q_team = mysqli_query($con,$query);	
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
				$id = $r_team['id'];
				$q_mn = mysqli_query($con,"select * from tbl_user where id in (select mentor_id from tbl_student_mentor where student_id = $id)");
				$r_mn = mysqli_fetch_assoc($q_mn);
				?>
											
					<tr> 
						<td><?php echo $r_team['first_name']?></td> 
						<td><?php echo $r_team['last_name']?></a></td> 
						<td><?php echo $r_team['email']?></td> 
						<td><?php echo $r_team['phone']?></td> 
						<td><a href="JudgeDetails.php?id=<?php echo $r_mn['id'];?>"><?php echo $r_mn['first_name'].' '.$r_mn['last_name']?></a></td>
						<!--<td><a href="user_details.php?id=<?php echo $r_mn['id'];?>"><?php echo $r_mn['email']?></a></td> --?
						<!--<td><?php echo $r_team['user_type']?></a></td> -->
						<td><?php 
						if(($r_team['user_type'] <> 'Student') && (($r_team['is_approved']) == 1)) { 
						echo 'Approved by admin';
						}
						elseif(($r_team['user_type'] <> 'Student') && (($r_team['is_approved']) == 0)) { 
						echo 'Not Approved by admin';
						}
						elseif(($r_team['user_type'] == 'Student') && (($r_team['is_approved']) == 0)) {
							
							$q = mysqli_query($con,'select * from tbl_student_mentor where student_id = '.$r_team['id']);
							$r = mysqli_fetch_assoc($q);
							if(($r['approve']) == 0) 
							{
								echo 'Disapproved by Mentor ';
							}
							if(($r['approve']) == 1) 
							{
								echo 'Approved by Mentor and waiting for Admin Approval';
							}
							if(($r['approve']) == -1) 
							{
								echo 'Waiting for Mentor approval';
							}
						}
						
						elseif(($r_team['user_type'] == 'Student') && (($r_team['is_approved']) == 1)) {
							
							$q = mysqli_query($con,'select * from tbl_student_mentor where student_id = '.$r_team['id']);
							$r = mysqli_fetch_assoc($q);
							if(($r['approve']) == 0) 
							{
								echo 'Disapproved by Mentor';
							}
							if(($r['approve']) == 1) 
							{
								echo 'Approved by Mentor and approved by Admin';
							}
							if(($r['approve']) == -1) 
							{
								echo 'Waiting for Mentor approval';
							}
						}
						
						echo $r_team['judge_confirm']?></a></td>
						<td>
						<?php if($r_team['is_approved'] == 0) { ?>
						<!--<a href="edit_team.php?team_id=<?php echo $team_id?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">Update Details</button></a>-->
                        <a onClick="return confirm('Do you want to approve the user?')" href="approve.php?id=<?php echo $r_team['id']?>&table=tbl_user&return=users&flag=1" class="btn mini purple"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">Approve</button></a>
						<!--<a onClick="return confirm('Do you want to disapprove the user?')" href="approve.php?id=<?php echo $r_team['id']?>&table=tbl_user&return=users&flag=0" class="btn mini purple"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">Disapprove</button></a>-->
						<?php } else { ?>
						<a onClick="return confirm('Do you want to disapprove the user?')" href="approve.php?id=<?php echo $r_team['id']?>&table=tbl_user&return=users&flag=0" class="btn mini purple"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">Disapprove</button></a>
						<?php } ?>
                        <a href="StudentDetails.php?id=<?php echo $r_team['id']?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">View Login Details</button></a>
						<a href="edit_member_details.php?student_log_id=<?php echo $r_team['id']?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">View Student Details</button></a>
						<a onClick="return confirm('Are you sure you want to delete?')" href="delete.php?id=<?php echo $r_team['id']?>&table=tbl_user&return=users" class="btn mini purple"> Delete</a>
                 
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