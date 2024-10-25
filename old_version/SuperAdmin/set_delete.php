<?php
$tab = $_GET['table'];
$id = $_GET['id'];
#$return = $_GET['return'];
#echo $return;
$mentor_id = $_GET['mentor_id'];
include('../database/config.php'); 
#include('control.php'); 

if(($tab) == 'tbl_team')
{
	#echo 'isnide tab';
	$query = mysqli_query($con,"update tbl_team set deleted = 1 where id = $id");
	if($query)
	{ mysqli_query($con,"update tbl_team_member set team_id = NULL where team_id = $id"); }
}

elseif(($tab)== 'tbl_team_member')
{
	$q = "update tbl_team_member set team_id = NULL where id = $id";
	mysqli_query($con,"update tbl_team_member set team_id = NULL where id = $id");
	#echo 'error'.$q;
}

mysqli_close($con);
header("location:home_mentor.php?id=".$mentor_id);




?>