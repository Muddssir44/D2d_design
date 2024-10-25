<?php
$database="emuem001_grading";
$con=mysqli_connect("emuem001.mysql.guardedhost.com","emuem001_grading","mH6dF9*8hf","emuem001_grading");
if (mysqli_connect_errno())
{ 
echo "Could not connect to database";
}
mysqli_select_db($con,$database);
?>