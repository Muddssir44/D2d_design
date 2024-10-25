<?php 
ob_start();
session_start();
if(($_SESSION['user_type']) <>	 "General User")
{
session_unset();
session_destroy();
header("location:../index.php");
exit;
}
 ?>	
 
