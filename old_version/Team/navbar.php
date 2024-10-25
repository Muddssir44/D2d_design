<?php 

$url= $_SERVER['REQUEST_URI'];

include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];
$email = $_SESSION['email'];
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

$date_check = '2021-02-27 00:00:00';
?>
<style>

</style>
<nav class="navbar navbar-expand bg-dark navbar-dark" style="margin-top:20px;width:100%;">
			<!-- Links -->
			<ul class="navbar-nav">

				<li class="nav-item" style="font-weight: bold;<?php if($url == 'http://emuinvent.org/index.php') { echo 'background-color: #4CAF50;'; }  ?>" >
					<a class="nav-link" href="http://emuinvent.org" target="_blank">Home</a>
				</li>
				
				<!--<li class="nav-item" style="font-weight: bold;">
					<a class="nav-link" href="home.php">My Teams</a>
				</li> -->
				
				<li class="nav-item dropdown" style="font-weight: bold;<?php if(($url =='/Team/home.php?year=2020') ||($url =='/Team/home.php?year=2021') || ($url =='/Team/home.php') || (strpos($url,'team') !== false) ) { echo 'background-color: #4CAF50;'; }  ?>" >
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >
						My Teams <?php echo $year;?>
					</a>
					<div class="dropdown-menu"  id="mainNavbar">	
					<?php 
					$current = date("Y");
					$q_y = mysqli_query($con,"select distinct year
				from tbl_team tt, tbl_team_mentor ttm
				where ttm.team_id = tt.id
				and tt.deleted = 0 order by year desc
				");
					
					while($q_y_d = mysqli_fetch_assoc($q_y))
					{
					$y = $q_y_d['year'];
					?>
				
						<a class="dropdown-item" href="home.php?year=<?php echo $y; ?>"><?php echo $y; ?></a>
					<?php } ?>	
					</div>
				
				</li>
				<?php if (($year) == date("Y")) { 
						if($date <= $date_check)
						{ ?>
				<li class="nav-item" style="font-weight: bold;<?php if($url == '/Team/teams.php') { echo 'background-color: #4CAF50;'; }  ?>" >
					<a class="nav-link" href="teams.php">Add Teams</a>
				</li>
				<?php } } ?>
				
				
				
				<li class="nav-item dropdown" style="font-weight: bold;<?php if($url =='/Team/home_previous.php?year=2020') { echo 'background-color: #4CAF50;'; }  ?>" >
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
				
				<li class="nav-item" style="font-weight: bold;<?php if($url == '/Team/students.php') { echo 'background-color: #4CAF50;'; }  ?>" >
					<a class="nav-link" href="students.php">Approve Student Registration</a>
				</li>
				
				 <li class="nav-item dropdown" style="font-weight: bold;<?php if($url == '/Team/mentor.php') { echo 'background-color: #4CAF50;'; }  ?>" >
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						<?php echo $name?>
					</a>
					<div class="dropdown-menu"  id="mainNavbar">
						<a class="dropdown-item" href="mentor.php">Profile</a>
						<a class="dropdown-item" href="logout.php">Logout</a>
						
					</div>
				</li>
				
				<!--<li class="nav-item" style="font-weight: bold;" >
					<a class="nav-link" href="Photo-video waiver form1.pdf" target="_blank">Download Photo Consent Form</a>
				</li> -->
				

				<!--<li class="nav-item">
					<a class="nav-link" href="addStudent.html">Add Student</a>
				</li>

				<li class="nav-item" id="addAccount">
					<a class="nav-link" href="addUser.html">Add Account</a>
				</li>-->
			</ul>
</nav>