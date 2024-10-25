<?php 
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];
$year = date("Y");
//Include database configuration file

#$cat = $_POST['cat'];

if(isset($_POST["cat"])){
    //Get all state data
    $query2 = mysqli_query($con,"SELECT * FROM tbl_team where year = '$year' and deleted = 0 ORDER BY project_team_name ASC");
    
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
	echo '<option value="">team</option>';
}


?>