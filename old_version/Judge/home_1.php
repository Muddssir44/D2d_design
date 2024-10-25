<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome to EMUINVENT</title>
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




    <div class="container" id="mainBody">
        <br>
        <h2>Select Team</h2>
        <br>
		<button type="button" onclick="window.open('teams.php', '_self');"
            class="btn btn-secondary col-md-5">Assigned Teams</button>
        
        
    </div>





    <!-- Firebase App is always required and must be first -->
    <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-app.js"></script>

    <!-- Add additional services that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-database.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

   

</body>
<script src="js/home.js"></script>
<script src="js/general.js"></script>

</html>