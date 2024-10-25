<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];

$year = $_GET['year'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mentors Lists</title>
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
		<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for first name..">
            <table class="table" id="myTable" style="margin-block-start: 8px">
                <thead class="thead-dark" id="table">
                    <tr>
						<th scope="col">First Name</th>
						<th scope="col">Last Name</th>
						<th scope="col">Email</th>
						<th scope="col">Phone no</th>
						<th scope="col">No of teams</th>
                        <th> View Details</th>
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				$q_team = mysqli_query($con,"select distinct id,first_name, last_name, email,phone from tbl_user where user_type = 'Mentor' and year = '$year' order by first_name asc");	
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
				$user_id = $r_team['id'];
				$q_c = mysqli_query($con,"select count(team_id) as count_teams from tbl_team_mentor where user_id = $user_id and team_id in (select id from tbl_team where deleted = 0 and year = '$year')");
				$r_c = mysqli_fetch_assoc($q_c);
				?>
											
					<tr> 
						<td><?php echo $r_team['first_name']?></td> 
						<td><?php echo $r_team['last_name']?></a></td> 
						<td><?php echo $r_team['email']?></a></td> 
						<td><?php echo $r_team['phone']?></a></td> 
						<td><a href="home_mentor.php?id=<?php echo $r_team['id']?>"><?php echo $r_c['count_teams']?></a></td> 
						<td><a href="JudgeDetails.php?id=<?php echo $r_team['id']?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">View Details</button></a></td> 
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