<?php
include('../database/config.php'); 
#include('control.php'); 

$id = $_POST['id'];
$target_dir_1 = "../test_upload";
$tmp_name = $_FILES["photo_form"]["tmp_name"];
$name = $_FILES["photo_form"]["name"];
if(move_uploaded_file($tmp_name, "$target_dir_1/$name") ){
    #$_SESSION["uploaded_file"] =  "$dir/$name";
	//$_SESSION["image_name"] = "$name";
	$path = "$target_dir_1/$name";
	$q = mysqli_query($con,"update tbl_team_member set photo_consent_form='$path' where id = $id");
	if($q)
	{
		move_uploaded_file($_FILES["photo_form"]["tmp_name"],$target_file_1);

	}
	else
	{
		echo '<script>alert("error")</script>';
	}
	
    /*$type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
	$_SESSION["uploaded_file"] = $base64; */
	
}



?>