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
    <title>Teams List</title>
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
						<th scope="col">Team Name</th>
						<th scope="col">Judge</th>
						<th scope="col">Category</th>
                        <!--<th>Delete Record</th>-->
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				$count_tja= 0 ;
				$team_id_1 = array();
				$t_c_e = mysqli_query($con,"select team_id, count(team_id) as count from tbl_judge_team where year = '$year' group by (team_id)");
				while($row_t = mysqli_fetch_assoc($t_c_e))
				{
					$team_id = $row_t['team_id'];
					$count_tj = $row_t['count'];
					$q_c = mysqli_query($con,"select count(team_id) as count from tbl_judge_assessment where team_id = $team_id and (identifying_understanding is not null 
                 and ideating is not null
                 and designing_building is not null
                 and testing_refinging is not null
                 and value_propoition is not null
                 and market_potential is not null
                 and social_value is not null
                 and originality is not null
                 and logbook is not null
                 and prototype is not null
                 and online_pitch is not null)");
				$j_c = mysqli_fetch_assoc($q_c);
				$count_tja = $j_c['count'];
					if(($count_tj-$count_tja)== 5)
					{
						array_push($team_id_1,$team_id);
						
					}
				}		
				$stuff = $team_id_1;
				#$list =  implode(", ", $stuff);    //prints 1, 2, 3
				$list = join(',', $stuff);  

				
				$qu_c = mysqli_query($con,"select project_team_name,GROUP_CONCAT(judge_name) as judge_list, GROUP_CONCAT(category) as category from (  select tt.project_team_name, tt.category, concat(first_name,' ',last_name) as judge_name FROM tbl_user tu, tbl_judge_team tj, tbl_team tt
										where tj.team_id in ($list) and user_id not in (select user_id from tbl_judge_assessment where team_id in ($list))
										and tj.team_id = tt.id
										and tj.user_id = tu.id and tt.year = '$year') t 
                                        group by (project_team_name)");
				
				while($qu_d = mysqli_fetch_assoc($qu_c))
					{		
				?>
											
					<tr> 
						<td><?php echo $qu_d['project_team_name']?></a></td> 
						<td><?php echo $qu_d['judge_list']?></td> 
						<td><?php echo $qu_d['category']?></a></td> 
						<!--<td><a href="delete_ja.php?id=<?php echo $qu_d['id']?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">Delete</button></a></td> -->
				    </tr> 
					<?php }?>							
												
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