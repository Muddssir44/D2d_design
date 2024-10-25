<?php
$database="eduedget001_dare2design";
$con=mysqli_connect("emuem001.mysql.guardedhost.com","eduedget001_dare2design","t3!cg7cu2rTH","eduedget001_dare2design");
if (mysqli_connect_errno())
{ 
echo "Could not connect to database";
}
mysqli_select_db($con,$database);
?>