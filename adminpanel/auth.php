<?php 
error_reporting(0);
session_start(); 

if(!isset($_SESSION['user_type']) ){
    echo  '<script>alert("Please Login First")</script>';
  echo  '<script>window.location.href = "./../../logout.php"</script>';
  exit;

}



?>