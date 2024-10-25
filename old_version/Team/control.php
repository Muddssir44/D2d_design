<?php 
session_start();
if(($_SESSION['user_type'] !== "Mentor"))
{
session_unset();
session_destroy();
header("location:../index.php");
exit;
}
 ?>	
 
