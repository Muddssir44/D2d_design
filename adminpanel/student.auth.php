<?php 
error_reporting(0);
session_start(); 

if(isset($_SESSION['user_type']) ){
    if(($_SESSION['user_type'] != 'Student')){
    
    header("Location:./../../logout.php");
    }
}else{
  echo  '<script>alert("Please Login First")</script>';
  echo  '<script>window.location.href = "./../../logout.php"</script>';

}



?>