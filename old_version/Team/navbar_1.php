<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="http://emuinvent.org" target="_blank" class="<?php if(($url == '/index.php') || ($url == '/')) { echo 'active'; }  ?>">Home</a>
  
  <div class="dropdown">
    <button class="dropbtn">My Teams <?php echo $year;?> 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
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
				
						<a href="home1.php?year=<?php echo $y; ?>" class="<?php if(($url =='/Team/home1.php?year=2020') ||($url =='/Team/home1.php?year=2021') || ($url =='/Team/home1.php') || (strpos($url,'team') !== false) ) { echo 'active'; }  ?>"><?php echo $y; ?></a>
					<?php } ?>		
	 
    </div>
  </div> 
  <a href="teams.php" class="<?php if($url == '/Team/teams.php') { echo 'active'; }  ?>">Add Teams</a>
  <div class="dropdown">
    <button class="dropbtn">Last Year Events
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
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
				
						<a href="home_previous.php?year=<?php echo $y; ?>" class="<?php if($url =='/Team/home_previous.php?year=2020') { echo 'active'; }  ?>"><?php echo $y; ?></a>
					<?php } ?>		
	 
    </div>
  </div> 
  <a href="students.php" class="<?php if($url == '/Team/students.php') { echo 'active'; }  ?>">Approve Student Registration</a>
  <div class="dropdown">
    <button class="dropbtn"><?php echo $name?>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
	<a href="mentor.php" class="<?php if($url == '/Team/mentor.php') { echo 'active'; }  ?>">Profile</a>
	<a href="logout.php">Logout</a>	
	 
    </div>
  </div>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
