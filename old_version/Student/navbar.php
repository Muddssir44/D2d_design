<?php 

$url= $_SERVER['REQUEST_URI'];

include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];
$team = $_SESSION['teamName'];
$mentor_id = $_SESSION['mentor_id'];
$email = $_SESSION['email'];

if(isset($_GET['year']))
{
	$year = $_GET['year'];
}
else {
$year = date("Y");
}
if(isset($_GET['year']))
{
	$year = $_GET['year'];
}
else {
$year = date("Y");
}

$timezone = date_default_timezone_set('America/New_York');
$date = date('Y-m-d H:i:s');
$today_at_midnight = strtotime('midnight');

$date_check = '2022-02-27 00:00:00';
?>


<nav class="navbar navbar-expand bg-dark navbar-dark" style="margin-top:20px;width:100%;">
			<!-- Links -->
			<ul class="navbar-nav">

				<li class="nav-item" style="font-weight: bold;">
					<a class="nav-link" href="http://dare2design.eduedgetech.com/" target="_blank">Home</a>
				</li>
				
				<li class="nav-item" style="font-weight: bold;<?php if($url =='/Student/home.php' || strpos($url,'team') !== false) { echo 'background-color: #4CAF50;'; }?>">
					<a class="nav-link" href="home.php">My Teams</a>
				</li>
				<?php if (($year) == date("Y")) { 
						if($date <= $date_check)
						{
				
				$q_team_1 = mysqli_query($con,"select *
				from tbl_team_member ttm
				where ttm.student_id = $id 
                and ttm.team_id is null");
				$c_rows = mysqli_num_rows($q_team_1);
				#echo 'this is count'.$c_rows;
				if($c_rows > 0 )
				{
				
				?>
				<li class="nav-item" style="font-weight: bold;<?php if($url == '/Student/teams.php') { echo 'background-color: #4CAF50;'; }  ?>" >
					<a class="nav-link" href="teams.php">Add Teams</a>
				</li>
				<?php } } }?> 
				
				
				
				
				
				
				<li class="nav-item dropdown" style="font-weight: bold;<?php if($url =='/Student/home_previous.php?year_1=2021') { echo 'background-color: #4CAF50;'; }  ?>">
					<!--<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Last Year Events
					</a>-->
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
				
						<a class="dropdown-item" href="home_previous.php?year_1=<?php echo $y; ?>"><?php echo $y; ?></a>
					<?php } ?>	
					</div>
				
				</li>
				
				
				
				 <li class="nav-item dropdown" style="font-weight: bold;<?php if($url == '/Student/mentor.php') { echo 'background-color: #4CAF50;'; }  ?>">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						<?php echo $name?>
					</a>
					<div class="dropdown-menu"  id="mainNavbar">
						<a class="dropdown-item" href="mentor.php">User Profile</a>
						<a class="dropdown-item" href="edit_member_details.php?student_log_id=<?php echo $id;?>">Student Profile</a>
						<a class="dropdown-item" href="logout.php">Logout</a>
						
					</div>
				</li>
				<!--<li class="nav-item" style="font-weight: bold;" >
					<a class="nav-link" href="Photo-video waiver form1.pdf" target="_blank">Download Photo Consent Form</a>
				</li>

                                      <li class="nav-item" style="font-weight: bold;" >
					<a class="nav-link" href="http://logbook.eduedgetech.com/page1.php?std_Id=<?php echo $id;?>&userName=<?php echo $name;?>&teamName="<?php echo $team;?> target="_blank">LogBook</a>
				</li>

				<!--<li class="nav-item">
					<a class="nav-link" href="addStudent.html">Add Student</a>
				</li>

				<li class="nav-item" id="addAccount">
					<a class="nav-link" href="addUser.html">Add Account</a>
				</li>-->
			</ul>
		</nav>