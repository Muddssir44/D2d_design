<?php 
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];
$json = json_decode(file_get_contents("php://input"));
$array = array();
$cat_arr = array();
$year = date("Y");
$judge_id = $_SESSION['judge_id'];
//Include database configuration file
#$cat = json_decode($_GET['caty']);
$team_id = json_decode($_POST['id_data']);
$array = ($team_id);
#echo $array;
$stuff = $array;
    #$list =  implode(", ", $stuff);    //prints 1, 2, 3
    $list = join(',', $stuff);  


$cat = $_POST['caty'];
echo $cat;
if($list){
	if ($cat)
	{
	//Get all state data
    $query2 = mysqli_query($con,"SELECT * FROM tbl_team WHERE id not in ($list) and category = '$cat' and year = '$year' and deleted = 0 and id not in (select team_id from tbl_judge_team where user_id = $judge_id and year = '$year') ORDER BY project_team_name ASC");
    #$q = "SELECT * FROM tbl_team WHERE id not in ($list) and category = '$cat' ORDER BY project_team_name ASC";
    //Count total number of rows
   
        echo '<option value="">Select Team-2'.$q.'</option>';
        while($row2 = mysqli_fetch_assoc($query2)){ 
        $tid = $row2['id'];
		$s_c = mysqli_query($con,"select count(*) as count from tbl_judge_team where team_id = $tid and year = '$year'");
		$d_c = mysqli_fetch_assoc($s_c);
        echo '<option value='.$row2['id'].'>'.$row2['project_team_name'].'- Team Category -'.$row2['category'].'-('.$d_c['count'].')</option>';
        }
        
    
}
else 
{
	$query2 = mysqli_query($con,"SELECT * FROM tbl_team WHERE id not in ($list) and year = '$year' and deleted = 0 ORDER BY project_team_name ASC");
   # $q = "SELECT * FROM tbl_team WHERE id not in ($list) ORDER BY project_team_name ASC";
    //Count total number of rows
   
        echo '<option value="">Select Team-2'.$q.'</option>';
        while($row2 = mysqli_fetch_assoc($query2)){ 
            echo '<option value='.$row2['id'].'>'.$row2['project_team_name'].'- Team Category -'.$row2['category'].'</option>';
        }
}
}
else{
	echo '<option value="">team'.$team_id.'</option>';
}


?>