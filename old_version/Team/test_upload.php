<?php
include('../database/config.php'); 
include('control.php'); 

ini_set('memory_limit','256M');
$id = $_SESSION['id'];
$name = $_SESSION['name'];

$team_id = $_GET['team_id'];

extract($_POST);
echo "outside if ";
if(isset($_POST['submit']))
{
	
	echo $_FILES['fileToUpload']['size'];
if($_FILES['fileToUpload']['size'] > 0 ){
	echo "<script>alert('inside if')</script>";
$target_dir = "test_upload/";
$target_file_video = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$video_path=$_FILES['fileToUpload']['name'];
mysqli_query($con,"update tbl_team set video_pitch  = 'test_upload/$video_path' where id = $team_id");
}
}

?>

<form method="post" enctype="multipart/form-data" >
				<table>
                
				<tr>
                    <td colspan="6">
                        
                           <div >
                            <label for="pwd"><b>Upload Video Pitch:</b></label>
                            <input type="file" class="form-control" name="fileToUpload" placeholder="Upload video">
                        </div>
                        <br>
						<br>
						<p><b>-OR-</b></p>
						
						<div >
                            <label for="pwd"><b>Update Video Pitch Link:</b></label>
                            <input type="text" class="form-control" id="studentEmail" name="video_pitch_link" placeholder="Upload video">
                        </div>
						
                    </td>
					</tr>
<tr>
				<td>
				<div class="form-group">
				<button type="submit" class="btn btn-primary" name="submit">Update</button>	
				</div>
				</td>
				</tr>					
					
					</form>
			</table>