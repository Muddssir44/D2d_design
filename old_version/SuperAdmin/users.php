<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];
$year = date("Y");

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
    <title>EMUiNVENT Users</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="shortcut icon" href="http://emuinvent.org/favicon.png">
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
                    <a class="dropdown-item" href="add_judges.php">Judges</a>
                </div>
            </li>
			
			
			<li class="nav-item dropdown" style="font-weight: bold;">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    View
                </a>
                <div class="dropdown-menu"  id="mainNavbar">
                    <a class="dropdown-item" href="users.php">Users</a>
					<a class="dropdown-item" href="teams.php">Teams</a>
                    <a class="dropdown-item" href="judges.php">Judges</a>
                </div>
            </li>
			
			<!--<li class="nav-item dropdown" style="font-weight: bold;">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    View
                </a>
                <div class="dropdown-menu"  id="mainNavbar">
                    <a class="dropdown-item" href="teams.php">Teams</a>
                    <a class="dropdown-item" href="judges.php">Judges</a>
                </div>
            </li>-->
			
			
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
    <style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
  width:100%;
}

/* Style tab links */
.tablink {
  background-color: #343a40;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
    background-color: #4CAF50;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
  width:100%;
}


</style>
</head>
<body>

<button class="tablink" onclick="openPage('Home', this,'green')">General Users</button>
<button class="tablink" onclick="openPage('News', this,'green')" id="defaultOpen">Mentors</button>
<button class="tablink" onclick="openPage('Contact', this,'green')">Students</button>

<div id="Home" class="tabcontent" style="width:100%">
   <div class="container d-flex justify-content-left col-md-12">
        <div class="col-12">
		<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" 		placeholder="Search for the user first name..">
            <table class="table" id="myTable" style="margin-block-start: 8px">
                <thead class="thead-dark" id="table">
                    <tr>
						<th scope="col">First Name</th>
						<th scope="col">Last Name</th>
						<th scope="col">Email</th>
						<th scope="col">Phone</th>
						<th scope="col">Address</th>
						<th scope="col">User Type</th>
						<th scope="col">Status</th>
						<th> Actions </th>
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				$q_team = mysqli_query($con,"select * from tbl_user where Year = '$year' and user_type = 'General User' and deleted = 0 order by is_approved asc,id desc");	
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
				$id = $r_team['id'];
				?>
											
					<tr> 
						<td><?php echo $r_team['first_name']?></td> 
						<td><?php echo $r_team['last_name']?></td> 
						<td><a href="JudgeDetails.php?id=<?php echo $r_team['id'];?>"><?php echo $r_team['email']?></a></td> 
						<td><?php echo $r_team['phone']?></td> 
						<td><?php echo $r_team['address']?></td> 
						<td><?php echo $r_team['user_type']?></td> 
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
                        <a href="UserDetails.php?id=<?php echo $r_team['id']?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">View Details</button></a>
						<a onClick="return confirm('Are you sure you want to delete?')" href="delete.php?id=<?php echo $r_team['id']?>&table=tbl_user&return=users" class="btn mini purple"> Delete</a>
                 
                        </td> 
				    </tr> 
				<?php } ?>								
												
											</tbody> 
            </table>
        </div>

    </div>
</div>

<div id="News" class="tabcontent" style="width:100%">
   <div class="container d-flex justify-content-left col-md-12">
        <div class="col-12">
		<input type="text" class="form-control" id="myInput1" onkeyup="myFunction1()" placeholder="Search for the user first name..">
            <table class="table" id="myTable1" style="margin-block-start: 8px">
                <thead class="thead-dark" id="table">
                    <tr>
						<th scope="col">First Name</th>
						<th scope="col">Last Name</th>
						<th scope="col">Email</th>
						<th scope="col">Phone</th>
						<th scope="col">Address</th>
						<th scope="col">User Type</th>
						<th scope="col">No of Teams</th>
						<th scope="col">Status</th>
						<th> Actions </th>
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				$q_team = mysqli_query($con,"select * from tbl_user where Year = '$year' and user_type = 'Mentor' and deleted = 0 order by is_approved asc,id desc");	
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
				$id = $r_team['id'];
				#$user_id = $r_team['id'];
				$q_c = mysqli_query($con,"select count(team_id) as count_teams from tbl_team_mentor where user_id = $id and team_id in (select id from tbl_team where deleted = 0 and year = '$year')");
				$r_c = mysqli_fetch_assoc($q_c);
				?>
											
					<tr> 
						<td><?php echo $r_team['first_name']?></td> 
						<td><?php echo $r_team['last_name']?></td> 
						<td><a href="user_details.php?id=<?php echo $r_team['id'];?>"><?php echo $r_team['email']?></a></td> 
						<td><?php echo $r_team['phone']?></td> 
						<td><?php echo $r_team['address']?></td> 
						<td><?php echo $r_team['user_type']?></td> 
						<td><a href="home_mentor.php?id=<?php echo $r_team['id']?>"><?php echo $r_c['count_teams']?></a></td> 
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
                        <!--<a href="home_mentor.php?id=<?php echo $r_team['id']?>" class="btn mini purple"> View Teams </a>-->
						<a href="JudgeDetails.php?id=<?php echo $r_team['id']?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">View Details</button></a>
						<a onClick="return confirm('Are you sure you want to delete?')" href="delete.php?id=<?php echo $r_team['id']?>&table=tbl_user&return=users" class="btn mini purple"> Delete</a>
                 
                        </td> 
				    </tr> 
				<?php } ?>								
												
											</tbody> 
            </table>
        </div>

    </div>
</div>

<div id="Contact" class="tabcontent" style="width:100%">
   <div class="container d-flex justify-content-left col-md-12">
        <div class="col-12">
		<input type="text" class="form-control" id="myInput2" onkeyup="myFunction2()" placeholder="Search for the user first name..">
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
				$q_team = mysqli_query($con,"select * from tbl_user where Year = '$year' and user_type = 'Student' and deleted = 0 order by is_approved asc,id desc");	
									
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
                        <a href="StudentDetails.php?id=<?php echo $r_team['id']?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">View Details</button></a>
						<a onClick="return confirm('Are you sure you want to delete?')" href="delete.php?id=<?php echo $r_team['id']?>&table=tbl_user&return=users" class="btn mini purple"> Delete</a>
                 
                        </td> 
				    </tr> 
				<?php } ?>								
												
											</tbody> 
            </table>
        </div>

    </div>
</div>



<script>
function openPage(pageName,elmnt,color='white') {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
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
<script>
function myFunction1() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");
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
<script>
function myFunction2() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable2");
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