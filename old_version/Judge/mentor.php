<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mentor Details</title>
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



    <div class="container d-flex justify-content-left col-md-10">
        <div class="col-9">

            <br>
            <h3> View Menotor Details:</h3>
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
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="email">Mentor First Name:</label>
                            <input type="text" readonly class="form-control" id="accountName" placeholder="Enter your name" value="Steve">
                        </div>
                    </td>

                </tr>
				
				<tr>
                    <td>
                        <div class="form-group">
                            <label for="email">Mentor Last Name:</label>
                            <input type="text" readonly class="form-control" id="accountName" placeholder="Enter your name" value="Rhode">
                        </div>
                    </td>

                </tr>

                <tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="email">Mentor Email:</label>
                            <input type="text" readonly class="form-control" id="accountEmail"
                                placeholder="Enter email" value="rohdesteve@gmail.com">
                        </div>
                    </td>
                </tr>
				
				 <tr>
                    <td>
                        <div class="form-group">
                            <label for="email">Phone Number:</label>
                            <input type="password" readonly class="form-control" id="accountPassword"
                                placeholder="Enter password" value="734-000-0000">
                        </div>
                    </td>

                  
                </tr>
				
				
				 <tr>
                    <td>
                        <div class="form-group">
                            <label for="email">School Name:</label>
                            <input type="password" readonly class="form-control" id="accountPassword"
                                placeholder="" >
                        </div>
                    </td>

                  
                </tr>
				
				<tr>
                    <td>
                        <div class="form-group">
                            <label for="email">School District:</label>
                            <input type="password" readonly class="form-control" id="accountPassword"
                                placeholder="">
                        </div>
                    </td>

                  
                </tr>
				
				<tr>
                    <td>
                        <div class="form-group">
                            <label for="email">School County:</label>
                            <input type="password" readonly class="form-control" id="accountPassword"
                                placeholder="">
                        </div>
                    </td>

                  
                </tr>

                <tr>
                    <td>
                        <div class="form-group">
                            <label for="email">School County:</label>
                            <input type="password" readonly class="form-control" id="accountPassword"
                                placeholder="">
                        </div>
                    </td>

                  
                </tr>

            </table>
            
        </div>
    </div>
	
	

    <!-- Firebase App is always required and must be first -->
    <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-app.js"></script>

    <!-- Add additional services that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-storage.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->


</body>
<script src="js/addUser.js"></script>
<script src="js/general.js"></script>
</html>