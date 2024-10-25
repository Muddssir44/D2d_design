<?php
include('../database/config.php'); 
include('control.php'); 

$student_id = $_POST['student_id'];
$photo_consent = $_POST['photo_consent'];
$video_link = $_POST['video_link'];


if($photo_consent == 'Yes')
{
	$photo_consent = 1;
}
if($photo_consent == 'No')
{
	$photo_consent = 0;
}


$query = mysqli_query($con,"update tbl_team_member set photo_consent = $photo_consent where id = $student_id");
if($query)
{
	echo "<script>alert('Deleted Sucessfully')</script>";
}
else 
{
	#$q = "update $tab set deleted = 1 where id = $id";
	echo 'error'.$query;
}


if($_POST['video_link'])
{
	$q1 = mysqli_query($con,"update tbl_team_member set video_exp_link = '$video_link' where id = $student_id");
	if($q1)
	{
		echo "<script>alert('Updated Sucessfully')</script>";
	}
	else 
	{
		//$q = "update $tab set deleted = 1 where id = $id";
		//echo 'error'.$q;
		echo "<script>alert('update error'".$q1.")</script>";
	}
}

mysqli_close($con);

?>