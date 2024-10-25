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
<body>
<div id="wrapper">
    

	<?php include('navbar.php');?>

    <br>
    <div class="container d-flex justify-content-left col-md-12" >
        <div class="col-12">
		
		
		
            <table class="table" style="margin-block-start: -20px">
                <thead class="thead-dark" id="table">
                    <tr>
						<!--<th scope="col">Team ID</th>-->
                        <th scope="col" >Team Name</th>
                        <!--<th scope="col">Team Mentor</th>-->
                        <th scope="col" >Category</th>
                        <th scope="col" >Scores</th>
						<!--<th scope="col" >Team Members</th>
						<th scope="col" >Team Category</th>-->
						<th scope="col" >Status</th>
                        <th> View Details</th>
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				$q_team = mysqli_query($con,"select team_id, tt.project_team_name as project_name, tt.category, avg(total) as total
										from tbl_team tt, stut_tot st
										where tt.id = st.team_id
                                        and tt.category = '6-8'
										and tt.year = '$year'
										group by(team_id)
                                        order by total desc
									");	
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
					$team_id = $r_team['team_id'];				
				$q_e = mysqli_query($con,"select * from tbl_judge_assessment where team_id = $team_id");
				$r_q_e = mysqli_num_rows($q_e);
				$d_q_e = mysqli_fetch_assoc($q_e);
				if ($d_q_e['id'])
				{
				$st_q = mysqli_query($con,"select sum(count_a) as count from (select count(*) as count_a from tbl_judge_team where team_id = $team_id and user_id not in (select user_id from tbl_judge_assessment where team_id = $team_id) union (select count(*) as count_a From tbl_judge_assessment 
					where team_id = $team_id and  (identifying_understanding is null or ideating is null
					or designing_building is null or testing_refinging is null or value_propoition is null
					or market_potential is null or social_value is null or originality is null or logbook is null
					or prototype is null or online_pitch is null or question_asked is null
					))) t");
				$st_d = mysqli_fetch_assoc($st_q);
				$c = $st_d['count'];
				if($c == 0)
				{
					$status = 'Complete';
				}
				else{
					$status = 'Incomplete';
				}
				}

				?>
											
												<tr> 
													<!--<td><a href="viewteams.php?team_id=<?php echo $r_team['team_id']?>"><?php echo $r_team['team_id']?></a></td>-->
													<td><?php echo $r_team['project_name']?></td> 
													<td><?php echo $r_team['category']?></td>  
													<td><?php echo $r_team['total']?></td>  
													<td><?php echo $status?></td> 
													<td><a href="view_evaluations.php?team_id=<?php echo $r_team['team_id']?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">View Evaluations</button></a></td> 
													
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




    <!-- Firebase App is always required and must be first -->
    <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-app.js"></script>

    <!-- Add additional services that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-database.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

    
</div>
</body>
</html>	