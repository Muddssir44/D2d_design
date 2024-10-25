<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];



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

	 <nav class="navbar navbar-expand bg-dark navbar-dark" style="margin-top:20px;width:100%;">
			<!-- Links -->
			<ul class="navbar-nav">

				<li class="nav-item" style="font-weight: bold;">
					<a class="nav-link" href="http://emuinvent.org" target="_blank">Home</a>
				</li>
				
				<li class="nav-item" style="font-weight: bold;">
					<a class="nav-link" href="home.php">My Teams</a>
				</li>
				
				<li class="nav-item dropdown" style="font-weight: bold;">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Add Teams
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
					$current = date("Y");
					$q_y = mysqli_query($con,"select distinct year
				from tbl_team tt, tbl_team_mentor ttm
				where ttm.team_id = tt.id
				and tt.deleted = 0
				and year <> $current");
					
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
						Last Year Events
					</a>
					<div class="dropdown-menu"  id="mainNavbar">	
					<?php 
					
					$current = date("Y");
					$q_y = mysqli_query($con,"select distinct year
				from tbl_team tt, tbl_team_mentor ttm
				where ttm.team_id = tt.id
				and tt.deleted = 0
				and year <> $current");
					
					while($q_y_d = mysqli_fetch_assoc($q_y))
					{
					$y = $q_y_d['year'];
					?>
				
						<a class="dropdown-item" href="home_previous.php?year=<?php echo $y; ?>"><?php echo $y; ?></a>
					<?php } ?>	
					</div>
				
				</li>
				
				<li class="nav-item" style="font-weight: bold;">
					<a class="nav-link" href="students.php">Approve/Disapprove Student Registration</a>
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
    <div class="container d-flex justify-content-left col-md-12">
        <div class="col-12">
		<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for the user first name..">
            <table class="table" id="myTable" style="margin-block-start: 8px">
                <thead class="thead-dark" id="table">
                    <tr>
						<th scope="col">First Name</th>
						<th scope="col">Last Name</th>
						<th scope="col">Email</th>
						<th scope="col">Phone</th>
						<th scope="col">Address</th>
						<th scope="col">User Type</th>
						<th> Actions </th>
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				$q_team = mysqli_query($con,"select tu.*, ts.approve from tbl_user tu, tbl_student_mentor ts where tu.id = ts.student_id
				and ts.mentor_id = $id and ts.approve = -1");	
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
				
				?>
											
					<tr> 
						<td><?php echo $r_team['first_name']?></td> 
						<td><?php echo $r_team['last_name']?></a></td> 
						<td><?php echo $r_team['email']?></a></td> 
						<td><?php echo $r_team['phone']?></a></td> 
						<td><?php echo $r_team['address']?></a></td> 
						<td><?php echo $r_team['user_type']?></a></td> 
						<!--<td><?php echo $r_team['judge_confirm']?></a></td> -->
						<td>
						
						<!--<a href="edit_team.php?team_id=<?php echo $team_id?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  >Update Details</button></a>-->
                        <a onClick="return confirm('Do you want to approve the Student?')" href="approve.php?id=<?php echo $r_team['id']?>&flag=1" class="btn mini purple"><button type="button" style="margin:0px;"  class="btn-success btn-sm">Approve</button></a>
						<a onClick="return confirm('Do you want to disapprove the Student?')" href="approve.php?id=<?php echo $r_team['id']?>&flag=0" class="btn mini purple"><button type="button" class="btn-success btn-sm" style="margin:0px;background-color:red">Disapprove</button></a>
						<!--<a onClick="return confirm('Do you want to disapprove the user?')" href="approve.php?id=<?php echo $r_team['id']?>&table=tbl_user&return=users&flag=0" class="btn mini purple"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  >Disapprove</button></a>-->
						
                 
                        </td> 
				    </tr> 
				<?php } ?>								
												
											</tbody> 
            </table>
			<br><br><br>
			
			<div><p><b>Approved Users</b></p></div>
			<table class="table" id="myTable" style="margin-block-start: 8px">
                <thead class="thead-dark" id="table">
                    <tr>
						<th scope="col">First Name</th>
						<th scope="col">Last Name</th>
						<th scope="col">Email</th>
						<th scope="col">Phone</th>
						<th scope="col">Address</th>
						<th scope="col">User Type</th>
						<th> Actions </th>
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				$q_team = mysqli_query($con,"select tu.*, ts.approve from tbl_user tu, tbl_student_mentor ts where tu.id = ts.student_id
				and ts.mentor_id = $id and ts.approve = 1");	
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
				
				?>
											
					<tr> 
						<td><?php echo $r_team['first_name']?></td> 
						<td><?php echo $r_team['last_name']?></a></td> 
						<td><?php echo $r_team['email']?></a></td> 
						<td><?php echo $r_team['phone']?></a></td> 
						<td><?php echo $r_team['address']?></a></td> 
						<td><?php echo $r_team['user_type']?></a></td> 
						<!--<td><?php echo $r_team['judge_confirm']?></a></td> -->
						<td>
						
						<a onClick="return confirm('Do you want to disapprove the Student?')" href="approve.php?id=<?php echo $r_team['id']?>&flag=0" class="btn mini purple"><button type="button" style="margin:0px;"  class="btn-success btn-sm" style="margin:0px;background-color:red">Disapprove</button></a>
					
                 
                        </td> 
				    </tr> 
				<?php } ?>								
												
											</tbody> 
            </table>
			<br><br><br>
			<div><p><b>DisApproved Users</b></p></div>
			<table class="table" id="myTable" style="margin-block-start: 8px">
                <thead class="thead-dark" id="table">
                    <tr>
						<th scope="col">First Name</th>
						<th scope="col">Last Name</th>
						<th scope="col">Email</th>
						<th scope="col">Phone</th>
						<th scope="col">Address</th>
						<th scope="col">User Type</th>
						<th> Actions </th>
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				$q_team = mysqli_query($con,"select tu.*, ts.approve from tbl_user tu, tbl_student_mentor ts where tu.id = ts.student_id
				and ts.mentor_id = $id and ts.approve = 0");	
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
				
				?>
											
					<tr> 
						<td><?php echo $r_team['first_name']?></td> 
						<td><?php echo $r_team['last_name']?></a></td> 
						<td><?php echo $r_team['email']?></a></td> 
						<td><?php echo $r_team['phone']?></a></td> 
						<td><?php echo $r_team['address']?></a></td> 
						<td><?php echo $r_team['user_type']?></a></td> 
						<!--<td><?php echo $r_team['judge_confirm']?></a></td> -->
						<td>
						
						<a onClick="return confirm('Do you want to Approve the Student?')" href="approve.php?id=<?php echo $r_team['id']?>&flag=1" class="btn mini purple"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  >Approve</button></a>
						
						

                 
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