<?php
include '../admin.auth.php';

include('./config.php'); 


if(isset($_GET['eventid']))
{
    
$eventid = $_GET['eventid'];

	
	$query = mysqli_query($conn,"DELETE FROM events WHERE id='$eventid'");
	if($query){

	echo "<script type='text/javascript'>
	alert('Deleted Successfully');
    window.history.back()
	</script>";}
}



if(isset($_GET['mentorid']))
{
    
$mentorid = $_GET['mentorid'];

	
	$query = mysqli_query($conn,"DELETE FROM mentors_pic WHERE id='$mentorid'");
	if($query){

	echo "<script type='text/javascript'>
	alert('Deleted Successfully');
    window.history.back()
	</script>";}
}






?>