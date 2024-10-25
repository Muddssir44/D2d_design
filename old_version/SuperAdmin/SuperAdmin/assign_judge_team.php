<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];

extract($_POST);
if(isset($_POST['submit']))
{	
$judge_id = $_POST['judge_id'];
$team_id_1 = $_POST['team_id_1'];
$team_id_2 = $_POST['team_id_2'];
$team_id_3 = $_POST['team_id_3'];
$team_id_4 = $_POST['team_id_4'];
$team_id_5 = $_POST['team_id_5'];
$team_id_6 = $_POST['team_id_6'];
#echo $judge_id;
#$teams = $_POST['team_id'];
if ($team_id_1 != ''){
#echo $i;
$sql = "INSERT INTO `tbl_judge_team` (`team_id`,`user_id`) VALUES ('$team_id_1','$judge_id')";
$c = mysqli_query($con,$sql);
#$jt_id = mysqli_insert_id;
}
if ($team_id_2 != ''){
#echo $i;
$sql = "INSERT INTO `tbl_judge_team` (`team_id`,`user_id`) VALUES ('$team_id_2','$judge_id')";
$c = mysqli_query($con,$sql);
#$jt_id = mysqli_insert_id;
}
if ($team_id_3 != ''){
#echo $i;
$sql = "INSERT INTO `tbl_judge_team` (`team_id`,`user_id`) VALUES ('$team_id_3','$judge_id')";
$c = mysqli_query($con,$sql);
#$jt_id = mysqli_insert_id;
}
if ($team_id_4 != ''){
#echo $i;
$sql = "INSERT INTO `tbl_judge_team` (`team_id`,`user_id`) VALUES ('$team_id_4','$judge_id')";
$c = mysqli_query($con,$sql);
#$jt_id = mysqli_insert_id;
}
if ($team_id_5 != ''){
#echo $i;
$sql = "INSERT INTO `tbl_judge_team` (`team_id`,`user_id`) VALUES ('$team_id_5','$judge_id')";
$c = mysqli_query($con,$sql);
#$jt_id = mysqli_insert_id;
}
if ($team_id_6 != ''){
#echo $i;
$sql = "INSERT INTO `tbl_judge_team` (`team_id`,`user_id`) VALUES ('$team_id_6','$judge_id')";
$c = mysqli_query($con,$sql);
#$jt_id = mysqli_insert_id;
}


}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<style>
html, body {
    top:0;
    bottom:0;
    left:0;
    right:0;
    
   
}
</style>
<script type="text/javascript">
$(document).ready(function(){
var team = [];
var cat = '';
$('#team_category').on('change',function(){
var category = $(this).val();
//alert(category);
if(category){
	cat = category;
	
						$.ajax({
							type:'POST',
							url:'ajaxData_cat.php',
							data:'cat='+category,
							success:function(html){
								$('#team_id_1').html(html);
							}
						}); 
					}else{
						category = '';
						cat = category;
						$.ajax({
							type:'POST',
							url:'ajaxData.php',
							data:'cat='+category,
							success:function(html){
								$('#team_id_1').html(html);
							}
						}); 
					}



$('#team_id_1').on('change',function(){
var team1_id = $(this).val();
if(team1_id){
	//alert(team1_id);
	team.push(team1_id);
	console.log(team);
	dataString = team;
	console.log(cat);
							$.ajax({
							type:'POST',
							url:'ajaxData_team2.php',
							data:  {id_data :JSON.stringify(dataString), caty: cat}, 
							success:function(html){
								$('#team_id_2').html(html);
							}
						}); 
					}else{
						alert('going in else');
						$.ajax({
							type:'POST',
							url:'ajaxData.php',
							data:'cat='+cat,
							success:function(html){
								$('#team_id_2').html(html);
							}
						}); 
					}

});

$('#team_id_2').on('change',function(){
var team2_id = $(this).val();
if(team2_id){
	//alert(team2_id);
	team.push(team2_id);
	console.log(team);
	dataString = team;
	console.log(cat);
							$.ajax({
							type:'POST',
							url:'ajaxData_team3.php',
							data:  {id_data :JSON.stringify(dataString), caty: cat}, 
							success:function(html){
								$('#team_id_3').html(html);
							}
						}); 
					}else{
						alert('going in else');
						$.ajax({
							type:'POST',
							url:'ajaxData.php',
							data:'cat='+cat,
							success:function(html){
								$('#team_id_3').html(html);
							}
						}); 
					}

});

$('#team_id_3').on('change',function(){
var team3_id = $(this).val();
if(team3_id){
	//alert(team3_id);
	team.push(team3_id);
	console.log(team);
	dataString = team;
	console.log(cat);
							$.ajax({
							type:'POST',
							url:'ajaxData_team4.php',
							data:  {id_data :JSON.stringify(dataString), caty: cat}, 
							success:function(html){
								$('#team_id_4').html(html);
							}
						}); 
					}else{
						alert('going in else');
						$.ajax({
							type:'POST',
							url:'ajaxData.php',
							data:'cat='+cat,
							success:function(html){
								$('#team_id_4').html(html);
							}
						}); 
					}

});

$('#team_id_4').on('change',function(){
var team4_id = $(this).val();
if(team4_id){
	//alert(team4_id);
	team.push(team4_id);
	console.log(team);
	dataString = team;
	console.log(cat);
							$.ajax({
							type:'POST',
							url:'ajaxData_team5.php',
							data:  {id_data :JSON.stringify(dataString), caty: cat}, 
							success:function(html){
								$('#team_id_5').html(html);
							}
						}); 
					}else{
						alert('going in else');
						$.ajax({
							type:'POST',
							url:'ajaxData.php',
							data:'cat='+cat,
							success:function(html){
								$('#team_id_5').html(html);
							}
						}); 
					}

});

$('#team_id_5').on('change',function(){
var team5_id = $(this).val();
if(team5_id){
	//alert(team5_id);
	team.push(team5_id);
	console.log(team);
	dataString = team;
	console.log(cat);
							$.ajax({
							type:'POST',
							url:'ajaxData_team5.php',
							data:  {id_data :JSON.stringify(dataString), caty: cat}, 
							success:function(html){
								$('#team_id_6').html(html);
							}
						}); 
					}else{
						alert('going in else');
						$.ajax({
							type:'POST',
							url:'ajaxData.php',
							data:'cat='+cat,
							success:function(html){
								$('#team_id_6').html(html);
							}
						}); 
					}

});

});
});
</script>   
<body>
<div id="wrapper">
   <div class="jumbotron col-md-12" style="font-size: 16px;
    height: 10em;margin-block-start: -55px;">
       <img class="card-img-top" src="images/emulogo.png" alt="logo image" style="width:99%;height: 226px;">
    </div>

	<nav class="navbar navbar-expand bg-dark navbar-dark" style="    margin-top: 140px;
    width: 1289px;
    left: 2.3%;">
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
                    <!--<a class="dropdown-item" href="teams.php">Teams</a>-->
                    <a class="dropdown-item" href="add_judges.php">Judges</a>
                </div>
            </li>
			
			
			<li class="nav-item dropdown" style="font-weight: bold;">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    View
                </a>
                <div class="dropdown-menu"  id="mainNavbar">
                    <a class="dropdown-item" href="teams.php">Teams</a>
                    <a class="dropdown-item" href="judges.php">Judges</a>
                </div>
            </li>
			
			
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




        <div class="container d-flex justify-content-left col-md-10">
        <div class="col-9">
		<form method="post" enctype="multipart/form-data" >

            <br>
            <h3>Assign Judge Vs Teams:</h3>
            <br>
			<table class="table table-borderless">
			
			
			<tr>
			<td>
           
                <label for="studentType">Select Judge:</label>
                <select class="form-control" id="judge_id" name="judge_id">
                    <option>Select Judge type</option>
					<?php 
					$q_j = mysqli_query($con,"select * from tbl_user where user_type='Judge' and judge_confirm = 'Y' order by first_name asc");
					while($d_j = mysqli_fetch_assoc($q_j))
					{
						$jid  = $d_j['id'];
						$s_c = mysqli_query($con,"select count(*) as count from tbl_judge_team where user_id = $jid");
						$d_c = mysqli_fetch_assoc($s_c);
					
					?>
                    <option value="<?php echo $d_j['id']?>"><?php echo $d_j['first_name'].' '.$d_j['last_name']. '-' .$d_j['category'].' ('.$d_c['count'].')'?></option>
					<?php }?>
                    </select>
            
			</td>
			</tr>
			<tr>
			<td>
			
                <label for="studentType">Select Team Category:</label>
                <select class="form-control" id="team_category" name="team_category">
					<option value="">Select Team Category</option>
					<option value="">Select Team Category</option>
					<?php 
					$q_t = mysqli_query($con,"select distinct category from tbl_team where category !=' '");
					while($d_t = mysqli_fetch_assoc($q_t))
					{
						
					?>
                    <option value="<?php echo $d_t['category']?>"><?php echo $d_t['category']?></option>
					<?php }?>
                </select>
            
			</td>
			</tr>
			<tr>
			<td>
			
			    <label for="studentType">Select Team-1:</label>
                <select class="form-control" id="team_id_1" name="team_id_1">
				<option selected>Select Team-1</option>
			   </select>
            
			</td>
			</tr>
            
			<tr>
			<td>
			
			    <label for="studentType">Select Team-2:</label>
                <select class="form-control" id="team_id_2" name="team_id_2" >
				<option selected>Select Team-2</option>
					
                </select>
            
			</td>
			</tr>
			
			<tr>
			<td>
			
			    <label for="studentType">Select Team-3:</label>
                <select class="form-control" id="team_id_3" name="team_id_3" >
				<option selected>Select Team-3</option>
					
                </select>
            
			</td>
			</tr>
			
			<tr>
			<td>
			
			    <label for="studentType">Select Team-4:</label>
                <select class="form-control" id="team_id_4" name="team_id_4" >
				<option selected>Select Team-4</option>
					
                </select>
            
			</td>
			</tr>
			
			
			<tr>
			<td>
			
			    <label for="studentType">Select Team-5:</label>
                <select class="form-control" id="team_id_5" name="team_id_5" >
				<option selected>Select Team-5</option>
					
                </select>
            
			</td>
			</tr>
			
			
			<tr>
			<td>
			
			    <label for="studentType">Select Team-6:</label>
                <select class="form-control" id="team_id_6" name="team_id_6" >
				<option selected>Select Team-6</option>
					
                </select>
            
			</td>
			</tr>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<tr>
			<td>

           
			<br>
			<br>
            
            <div class="form-group">
				<button type="submit" class="btn btn-primary" name="submit">Submit</button>	
				</div>
			</td>
			</tr>
		</table>	
		</form>	
        </div>
    </div>



    
</div>
</body>

</html>