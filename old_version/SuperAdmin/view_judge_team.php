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
<body>
<?php include('../header.php'); ?>
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
						<th scope="col">Team Name</th>
						<th scope="col">Category</th>
                        <th>Delete Record</th>
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				if($judge_id !=='')
				{
					$q_team = mysqli_query($con,"select distinct tj.id, first_name, last_name , project_team_name, tt.category 
					from `tbl_judge_team` tj, tbl_user tu, tbl_team tt
					WHERE tj.user_id=$judge_id
					and tu.id = tj.user_id
					and tj.team_id = tt.id and tj.year = '$year'");	
				}
				else
				{
				$q_team = mysqli_query($con,"select distinct tj.id, first_name, last_name , project_team_name, tt.category 
					from `tbl_judge_team` tj, tbl_user tu, tbl_team tt
					WHERE tj.user_id=tu.id
					and tu.id = tj.user_id
					and tj.team_id = tt.id and tj.year = '$year'");	
				}					
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
				
				?>
											
					<tr> 
						<td><?php echo $r_team['first_name'].' '.$r_team['last_name']?></td> 
						<td><?php echo $r_team['project_team_name']?></a></td> 
						<td><?php echo $r_team['category']?></a></td> 
						<td><a href="delete_ja.php?id=<?php echo $r_team['id']?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">Delete</button></a></td> 
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