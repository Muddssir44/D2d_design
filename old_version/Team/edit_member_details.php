<?php
include('../database/config.php'); 
include('control.php'); 
$url= $_SERVER['REQUEST_URI'];
$id = $_SESSION['id'];
$year = date("Y");


$timezone = date_default_timezone_set('America/New_York');
$date = date('Y-m-d H:i:s');
$today_at_midnight = strtotime('midnight');

$date_check = '2021-02-27 00:00:00';

if (($year) == date("Y")) { 
						if($date <= $date_check)
						{
} else { echo "<script>alert('Submission deadline is 02/26/2021 12:00:00')</script>";
	echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";	    } }

if($_GET['student_log_id'])
{
	$id_s = $_GET['student_log_id'];
	#echo 'isndie'.$id_s;
	
	$q_s = mysqli_query($con,"select * from tbl_team_member where student_id = $id_s");
	$r_s = mysqli_fetch_assoc($q_s);
	$student_id = $r_s['id'];
	#echo 'isndie'.$student_id;
}
else {
$student_id = $_GET['student_id'];
}
$name = $_SESSION['name'];
$mentor_id = $_SESSION['mentor_id'];
$q = mysqli_query($con,"select * from tbl_team_member where id = $student_id");
$r = mysqli_fetch_assoc($q);

$url = $r['video_exp_link'];
preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
$youtube_id = $match[1];



extract($_POST);
if(isset($_POST['submit']))
{
	#echo 'inside if';
	$q = ("update tbl_team_member set student_first_name = '$first_name', 
												student_last_name = '$last_name',
												student_grade = '$student_grade',
												student_school_name = '$student_school_name',
												student_school_district = '$student_school_district',
												t_shirt_size = '$student_tshirt',
												photo_consent = '$photo_consent',
												video_exp_link = '$video_exp_link'
												where id = $student_id");
	$q_u=mysqli_query($con,$q);
	if($_FILES['fileToUpload']['size'] > 0 ){
	#echo "<script>alert('inside if')</script>";
		 $maxsize = 25242880; // 5MB
   if(isset($_FILES['fileToUpload']['name']) && $_FILES['fileToUpload']['name'] != ''){
       $name = $_FILES['fileToUpload']['name'];
       $target_dir = "../test_upload/";
       $target_file = $target_dir . $_FILES["fileToUpload"]["name"];

       // Select file type
       $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($extension,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['fileToUpload']['size'] >= $maxsize) || ($_FILES["fileToUpload"]["size"] == 0)) {
             $_SESSION['message'] = "File too large. File must be less than 5MB.";
			 echo '<script>alert(File too large. File must be less than 5MB.)</script>';
          }else{
             // Upload
             if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file)){
               // Insert record
               $query = "update tbl_team_member set video_exp_link = '".$target_file."' where id = $student_id";

               mysqli_query($con,$query);
               $_SESSION['message'] = "Upload successfully.";
			   echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";
             }
          }

       }else{
          $_SESSION['message'] = "Invalid file extension.";
		  echo '<script>alert(Invalid file extension)</script>';
       }
   }else{
       $_SESSION['message'] = "Please select a file.";
	    echo '<script>alert(Please select a file)</script>';
   }
   #header('location: home.php');
   #exit;
   #echo $_SESSION['message'];
 
		}
	
		if($_FILES['log_book']['size'] > 0 ){
	#echo "<script>alert('inside if')</script>";
	$target_dir = "../test_upload/";
	$target_file = $target_dir . basename($_FILES["log_book"]["name"]);
	$doc_path=$_FILES['log_book']['name'];
	mysqli_query($con,"update tbl_team_member set photo_consent_form='../test_upload/$doc_path' where id = $student_id");
	echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";
	}
	#echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";
	
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Student Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="shortcut icon" href="http://emuinvent.emuem.org/favicon.png">
</head>
<?php include('../header.php');?>
<style>
html, body {
    top:0;
    bottom:0;
    left:0;
    right:0;
    
   
}
</style>

<body>
<div id="wrapper">
    <?php include('navbar.php');?>





     <div class="container d-flex justify-content-left col-md-10">
        <div class="col-9">
		<form method="post" enctype="multipart/form-data" >
            <br>
            <h3> Student Details:</h3>
            <br>

            <table class="table table-borderless">

                <thead class="thead-dark">
                    <tr>
                        <th colspan="3"> Basic Information </th>
                     </tr>
                    </thead>

                <tr>
                    <td>
                        <div class="form-group">
                            <label for="email"> <b> Student First Name: </b> </label>
                            <input type="text" class="form-control" name="first_name" id="student_first_name" value="<?php echo $r['student_first_name']?>">
                        </div>
                    </td>
					
				</tr>	
				<tr>

                    <td>
                        <div class="form-group">
                            <label for="email"><b> Student Last Name:</b></label>
                            <input type="text" class="form-control" name="last_name" id="student_last_name" value="<?php echo $r['student_last_name']?>">
                        </div>
                    </td>
				</tr>
				<tr>	
                   <td>	
                        <div>
						<label for="studentType">Student Grade:</label>
						<select name="student_grade" class="form-control" required>
							<option>Select Student Grade</option>
							<option value="K" <?php if($r['student_grade'] == 'K') { echo 'selected';}?>>K</option>
							<option value="1" <?php if($r['student_grade'] == '1') { echo 'selected';}?>>1</option>
							<option value="2" <?php if($r['student_grade'] == '2') { echo 'selected';}?>>2</option>
							<option value="3" <?php if($r['student_grade'] == '3') { echo 'selected';}?>>3</option>
							<option value="4" <?php if($r['student_grade'] == '4') { echo 'selected';}?>>4</option>
							<option value="5" <?php if($r['student_grade'] == '5') { echo 'selected';}?>>5</option>
							<option value="6" <?php if($r['student_grade'] == '6') { echo 'selected';}?>>6</option>
							<option value="7" <?php if($r['student_grade'] == '7') { echo 'selected';}?>>7</option>
							<option value="8" <?php if($r['student_grade'] == '8') { echo 'selected';}?>>8</option>
							<option value="9" <?php if($r['student_grade'] == '9') { echo 'selected';}?>>9</option>
							<option value="10" <?php if($r['student_grade'] == '10') { echo 'selected';}?>>10</option>
							<option value="11" <?php if($r['student_grade'] == '11') { echo 'selected';}?>>11</option>
							<option value="12" <?php if($r['student_grade'] == '12') { echo 'selected';}?>>12</option>
							
						</select>
						</div>
					</td>
                </tr>

                <tr>
                   <td>	
                        <div >
                            <label>
                                T-Shirt Size
                            </label>
                            <select name="student_tshirt" class="form-control" required>
							<option>Select Student Shirt Size</option>
							<option value="Youth Small" <?php if($r['t_shirt_size'] == 'Youth Small') { echo 'selected';}?>>Youth Small</option>
							<option value="Youth Medium" <?php if($r['t_shirt_size'] == 'Youth Medium') { echo 'selected';}?>>Youth Medium</option>
							<option value="Youth Large" <?php if($r['t_shirt_size'] == 'Youth Large') { echo 'selected';}?>>Youth Large</option>
							<option value="Adult Small" <?php if($r['t_shirt_size'] == 'Adult Small') { echo 'selected';}?>>Adult Small</option>
							<option value="Adult Medium" <?php if($r['t_shirt_size'] == 'Adult Medium"') { echo 'selected';}?>>Adult Medium</option>
							<option value="Adult Large" <?php if($r['t_shirt_size'] == 'Adult Large') { echo 'selected';}?>>Adult Large</option>
							<option value="Adult X-Large" <?php if($r['t_shirt_size'] == 'Adult X-Large') { echo 'selected';}?>>Adult X-Large</option>
							
							
						</select>
                        </div>
					</td>
                </tr>

                <tr>

                    <td>	
						<div >
                            <label>
                                School Name
                            </label>
                            <input type="text"required autocomplete="off" class="form-control" name="student_school_name" value="<?php echo $r['student_school_name']?>"/>
                        </div>
					</td>	
                </tr>
				
				<tr>

                    <td>		
						<div >
                            <label>
                                School District
                            </label>
                            <input type="text"required autocomplete="off" class="form-control" name="student_school_district" value="<?php echo $r['student_school_district']?>"/>
                        </div>
					
                    </td>
                </tr>
				<tr>
				<td>
                       
                          <div >
                            
							<label for="pwd">Parent has given consent to photograph the student:</label>
                            <input type="radio" name="photo_consent" value="1"  <?php if(($r['photo_consent']) == 1 ) { echo 'Checked'; }?> />Yes
							<input type="radio" name="photo_consent" value="0"   <?php if(($r['photo_consent']) == 0 ) { echo 'Checked'; }?>/> No
                        </div>
                        
                    </td>
				</tr>
				<tr>	
					
                    <td>
                        
                          <div >
                            <label for="pwd">Attach your photo consent form:</label>
                           <p><a class="nav-link" href="Photo-video waiver form1.pdf" target="_blank">Download the original Photo Consent Form to sign and upload</a></p>
                            <?php if(($r['photo_consent_form']) != '') { ?>
							<p><a href="../<?php echo $r['photo_consent_form']?>" target="_blank">Previous Uploaded consent form </a></p>		
							<?php } ?>
							<input type="file" class="form-control" id="studentEmail" name="log_book" placeholder="Upload photo consent form">
                        </div>
                        
                    </td>
				</tr>	
				<tr>	
					<td>
					<div  >
					 <label for="pwd">Please record a minute-long video about your experience with the invention process (optional) :</label>
					<br>                           
						   <div >
                            <label for="pwd">Upload Recording File :</label>
                            <input type="file" class="form-control" name="fileToUpload" placeholder="Upload video">
							<p>Video Should be less than 5MB</p>
                        </div>
                        <br>
						<p><b>-OR-</b></p>
						
						<div >
                            <label for="pwd">Upload Youtube Video link:</label>
                            <input type="text" class="form-control" id="video_exp_link" name="video_exp_link" placeholder="Youtube video Link">					
                        </div>
                        </div>
					</td>
				</tr>

					

               <!-- <tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="studentType"><b>t_shirt_size:</b></label>
                            <select class="form-control" id="SelectDepartment" name="t_shirt_size">
							<option selected value="<?php echo $r['t_shirt_size']?>"><?php echo $r['t_shirt_size']?></option>
                                <option value="Professional">Professional/Engineers</option>
                                <option value="Faculty">Faculty </option>
								<option value="K-12 Teachers">K-12 Teachers </option>
                                <option value="Student">Student</option>
                                <option value="Pre-Service Students">Pre-Service Students</option>
								<option value="Others">Others</option>
                            </select>
                        </div>

                    </td>
                </tr>-->

               

            </table>

            <div id="alertBox"> </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
			</form>
			
			<?php if($r['video_exp_link']) { ?>
			<div class="col-9">	
				<table class="table table-borderless">
				<br>
					<h3> Optional Video :</h3>
				   <br>
				<br>
				<?php if ($youtube_id=='') {?>
				<div class="form-group">
					<video width="300" height="300" controls>
					  <source src="<?php echo $r['video_exp_link']?>" type="video/mp4">
					  <source src="<?php echo $r['video_exp_link']?>" type="video/ogg">
					</video>
						</div>	
				<?php } else {?>		
				<div class="form-group">
					<iframe width="300" height="300" src="https://www.youtube.com/embed/<?php echo $youtube_id?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>	
				<?php }?>
				</table>		
        </div>  
	<?php } ?>	
			
        </div>
    </div>

    <!-- <div class="container d-flex justify-content-center col-md-8">
        <p class="dbtn">
            <button type="button" id="signout-btn" onclick="signOutUser()" class="btn btn-danger"> SignOut </button>
        </p>
    </div> -->




    
    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->
</div>
</body>
</html>