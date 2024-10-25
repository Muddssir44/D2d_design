<?php 
include('../database/config.php'); 
include('control.php'); 
session_start();

$id = $_SESSION['id'];
$name = $_SESSION['name'];
$judge_id = $_SESSION['judge_id'];
$year = date("Y");
//Include database configuration file

$cat = $_POST['cat'];

if(isset($_POST["cat"])){
    //Get all state data
    $query2 = mysqli_query($con,"SELECT * FROM tbl_team WHERE category = '$cat' and year = '$year' and deleted = 0 and id not in (select team_id from tbl_judge_team where user_id = $judge_id and year = '$year') ORDER BY project_team_name ASC");
    
    //Count total number of rows
   
        echo '<option value="">Select Team-1</option>';
        while($row2 = mysqli_fetch_assoc($query2)){ 
            $tid = $row2['id'];
		$s_c = mysqli_query($con,"select count(*) as count from tbl_judge_team where team_id = $tid and year = '$year'");
		$d_c = mysqli_fetch_assoc($s_c);
        echo '<option value='.$row2['id'].'>'.$row2['project_team_name'].'- Team Category -'.$row2['category'].'-('.$d_c['count'].')</option>';
        }
    
}
else{
	echo '<option value="">team'.$cat.'</option>';
}


?>