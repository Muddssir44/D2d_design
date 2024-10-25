<?php 
ob_start();
session_start();
if(($_SESSION['user_type'] !== "Organizer"))
{
session_unset();
session_destroy();
header("location:index.php");
exit;
}
 ?>	
 
