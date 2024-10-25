<?php
$tab = $_GET['table'];
$id = $_GET['id'];
$return = $_GET['return'];
#echo $return;
include('../database/config.php'); 
include('control.php'); 



mysqli_query($con,"DELETE FROM `$tab` WHERE `id` = $id LIMIT 1");
mysqli_close($con);
echo "<script>alert('Deleted Sucessfully')</script>";

ob_start();   
 if(strpos($return,'.php')!==false)
{
	header("location:$return");
}else
{
header("location: $return.php");   
}
 ob_flush();
      exit(0);
?>