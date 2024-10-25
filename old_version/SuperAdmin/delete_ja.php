<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];

$jid  = $_GET['id'];

$d = mysqli_query($con,"delete from tbl_judge_team where id = $jid");
if($d)
{
	header('location:view_judge_team.php');
}
else 
{
	echo 'Failed';
}

?>