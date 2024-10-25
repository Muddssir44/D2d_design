<?php 
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$team_id = $_GET['team_id'];

extract($_POST);
if(isset($_POST['submit']))
{
	$insert = mysqli_query($con,"insert into tbl_judge_assessment values ('',$team_id,$id,'$identifying_understanding','$ideating','$designing_building','$testing_refinging','$value_propoition','$market_potential','$social_value','$originality','$logbook','$display_board','$prototype','$online_pitch','$question_asked','$live_qa')");
	$iid = mysqli_insert_id($con);
	if($iid)
	{
		echo"<script>alert('Evaluation Entered Successfully')</script>";
		header("location:home.php");
	}
	else 
		echo"<script>alert('Evaluation insertion Failed')</script>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Evaluate Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="shortcut icon" href="http://emuinvent.emuem.org/favicon.png">
</head>

<body>

    <div class="jumbotron col-md-12">
       <img class="card-img-top" src="images/emulogo.png" alt="logo image" style="width:100%">
    </div>

    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Links -->
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    View
                </a>
                <div class="dropdown-menu"  id="mainNavbar">
					<a class="dropdown-item" href="teams.php">Assigned Teams</a>
                   
                </div>
            </li>

            <!--<li class="nav-item">
                <a class="nav-link" href="addStudent.html">Add Student</a>
            </li>

            <li class="nav-item" id="addAccount">
				<a class="nav-link" href="addUser.html">Add Account</a>
            </li>-->
			
			
			<li class="nav-item">
				<a href="JudgeDetails.php?id=<?php echo $id?>"><button type="button" id="signout-btn" onclick="signOutUser()" style="margin-left:100px;" class="btn btn-danger">Profile</button></a>
                <a href="logout.php"><button type="button" id="signout-btn" onclick="signOutUser()" style="margin-left:50px;" class="btn btn-danger"> SignOut </button></a>
            </li>
			
        </ul>
    </nav>

	<div class="container d-flex justify-content-left col-md-12">
        <div class="col-12">
            <table class="table">
                <thead class="thead-dark" id="table">
                    <tr>
						<th scope="col">Team ID</th>
                        <th scope="col">Team Name</th>
						<th scope="col">Project Description</th>
                        <th scope="col">Video Pitch</th>
                        <th scope="col">LogBook</th>
						<th scope="col">Team Members</th>
                       
                    </tr>
                </thead>
				<tbody> 
				
				<?php 
				$q_team = mysqli_query($con,"select distinct tt.id as team_id,tt.project_team_name as project_name,tt.project_description,tu.first_name, tu.last_name,tt.video_pitch, tt.log_book
											from tbl_team tt, tbl_judge_team tj, tbl_team_mentor ttm, tbl_team_member tm , tbl_user tu
											where tj.user_id = $id 
											and tt.id = $team_id
											and tt.id = ttm.team_id
											and ttm.user_id = tu.id

									");	
									
				while ($r_team = mysqli_fetch_assoc($q_team))					
				{
					$team_id = $r_team['team_id'];
				$team_m_q = mysqli_query($con, "select GROUP_CONCAT(student_first_name) as members from tbl_team_member where team_id = $team_id");
				$team_m_r = mysqli_fetch_assoc($team_m_q);
				
				?>
											
												<tr> 
													<td><a href="viewteams.php?team_id=<?php echo $r_team['team_id']?>"><?php echo $r_team['team_id']?></a></td> 
													<td><a href="viewteams.php?team_id=<?php echo $r_team['team_id']?>"><?php echo $r_team['project_name']?></a></td> 
													<td><a href="viewteams.php?team_id=<?php echo $r_team['team_id']?>"><?php echo $r_team['project_description']?></a></td> 
													<td><iframe frameborder="0" height="100" width="100" 
														src="https://www.youtube.com/embed/sA9DwvbQ-hI">
													  </iframe></a></td> 
													<td><a href="<?php echo $r_team['log_book']?>">LogBook-<?php echo $r_team['log_book']?></a></td>  
													<td><?php echo $team_m_r['members']?></td>  
													
												</tr> 
				<?php } ?>								
												
											</tbody> 
            </table>
        </div>

    </div>


    <div class="container d-flex justify-content-left col-md-10">
	<form method="post" enctype="multipart/form-data">
        <div class="col-9">

            <br>
            <h3> Evaluation:</h3>
            <br>

            <!--<div class="form-group">
                <label for="studentType">Select Account Type:</label>
                <select class="form-control" id="accountType">
                    <option>Select account type</option>
                    <option value="superUser">Super User</option>
                    <option value="administrator">Administrator</option>
                    <option value="student">Student</option>
                </select>
            </div>-->

            <table class="table table-borderless">

                <thead class="thead-dark">
                    <tr>
                        <th colspan="3"> Invention Process (45) </th>
                     </tr>
                    </thead>

                <tr>
                    <td>
                        <div class="form-group">
                            <label for="email"> <b> Identifying & Understanding: </b> </label>
                            <select class="form-control" name="identifying_understanding" >
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=15; $i++)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        </div>
                    </td>

                    
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="email"> <b> Ideating: </b> </label>
                            <select class="form-control" name="ideating" >
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=10; $i++)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        </div>
                    </td>
                </tr>
				
				<tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="email"> <b> Designing & Building: </b> </label>
                            <select class="form-control" name="designing_building" >
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=10; $i++)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        </div>
                    </td>
                </tr>
				
				<tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="email"> <b> Testing & Refining: </b> </label>
                            <select class="form-control" name="testing_refinging" >
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=10; $i++)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        </div>
                    </td>
                </tr>

                

            </table>
            
			<table class="table table-borderless">

                <thead class="thead-dark">
                    <tr>
                        <th colspan="3"> Invention Impact (25) </th>
                     </tr>
                    </thead>

                <tr>
                    <td>
                        <div class="form-group">
                            <label for="email"> <b> Value Proposition: </b> </label>
                            <select class="form-control" name="value_propoition" >
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=5; $i++)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        </div>
                    </td>

                    
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="email"> <b> Market Potential: </b> </label>
                            <select class="form-control" name="market_potential" >
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=5; $i++)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        </div>
                    </td>
                </tr>
				
				<tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="email"> <b> Social Value: </b> </label>
                            <select class="form-control" name="social_value" >
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=5; $i++)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        </div>
                    </td>
                </tr>
				
				<tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="email"> <b> Originality: </b> </label>
                            <select class="form-control" name="originality" >
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=10; $i++)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        </div>
                    </td>
                </tr>

                

            </table>
			
			
			<table class="table table-borderless">

                <thead class="thead-dark">
                    <tr>
                        <th colspan="3"> Inventor Communication (30) </th>
                     </tr>
                    </thead>

                <tr>
                    <td>
                        <div class="form-group">
                            <label for="email"> <b> LogBook: </b> </label>
                            <select class="form-control" name="logbook" >
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=5; $i++)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        </div>
                    </td>

                    
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="email"> <b> Display Board: </b> </label>
                            <select class="form-control" name="display_board" >
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=5; $i++)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        </div>
                    </td>
                </tr>
				
				<tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="email"> <b> Prototype: </b> </label>
                            <select class="form-control" name="prototype" >
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=5; $i++)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        </div>
                    </td>
                </tr>
				
				<tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="email"> <b> Online Pitch: </b> </label>
                            <select class="form-control" name="online_pitch" >
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=5; $i++)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        </div>
                    </td>
                </tr>
				
				<tr>
                    <td colspan="2">
					
					
					
					
                        <div class="form-group">
                            <label for="email"> <b>Live Pitch and Q&A: </b> </label>
							
							<textarea class="form-control" placeholder="Questions that are to be asked during Live Q & A" name="question_asked"></textarea>
							<br>
							
                            <select class="form-control" name="live_qa" >
							<option value="0" selected>Select points</option>
							<?php 

								for($i=1; $i<=10; $i++)
								{

									echo "<option value=".$i.">".$i."</option>";
								}
								?> 
                        </div>
                    </td>
                </tr>

                

            </table>
			
		<div id="alertBox"> </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit Evaluation</button>	
        </div>
		</form>
    </div>

</body>
<script src="js/addUser.js"></script>
<script src="js/general.js"></script>
</html>