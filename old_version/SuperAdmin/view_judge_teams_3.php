<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];

$judge_id='';
extract($_POST);
if(isset($_POST['submit']))
{	
$judge_id = $_POST['judge_id'];
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
    <title>Judge List</title>
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
<body>
<div id="wrapper">
    

	<?php include('navbar.php');?>




        <div class="container d-flex justify-content-left col-md-12">
        <div class="col-12">
		<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" style="margin-block-start: 10px;" placeholder="Search for Judge names..">
		<br>
            <table class="table" id="myTable" style="margin-block-start: -11px">
                <thead class="thead-dark" id="table">
                    <tr>
						<th scope="col">Judge</th>
						<th scope="col">Email</th>
						<th scope="col">Team Name</th>
						<th scope="col">Category</th>
                        
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				
				$q_team = mysqli_query($con,"select  distinct user_id, GROUP_CONCAT(team_id) as team_list ,count(*) as count from tbl_judge_team where year = '$year' group by (user_id) having count(user_id) <= 3");	
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
					$user_id = $r_team['user_id'];
					$list = $r_team['team_list'];
					
					$q_n = mysqli_query($con,"select concat(first_name,' ',last_name) as judge_name,email from tbl_user where id = $user_id and year = '$year'");
					$d_n = mysqli_fetch_assoc($q_n);
					
					$q_t = mysqli_query($con,"select group_concat(project_team_name) as team_name, group_concat(category) as category from tbl_team where id in ($list) and year = '$year'");
					$q_d = mysqli_fetch_assoc($q_t);
				
				?>
											
					<tr> 
						<td><a href="JudgeDetails.php?id=<?php echo $user_id?>"><?php echo $d_n['judge_name']?></a></td> 
						<td><a href="JudgeDetails.php?id=<?php echo $user_id?>"><?php echo $d_n['email']?></a></td> 
						<td><?php echo $q_d['team_name']?></a></td> 
						<td><?php echo $q_d['category']?></a></td> 
						
				    </tr> 
				<?php } ?>								
												
											</tbody> 
            </table>
        </div>

    </div>



    
</div>
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

</html>