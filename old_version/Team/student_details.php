<?php
include('../database/config.php'); 

for($i = 0; $i < count($_POST['student_first_name']); $i++)
{
    $student_first_name = mysqli_real_escape_string($con, $_POST['student_first_name'][$i]);
    $student_last_name = mysqli_real_escape_string($con, $_POST['student_last_name'][$i]);
    $student_grade = mysqli_real_escape_string($con, $_POST['student_grade'][$i]);
    $student_tshirt = mysqli_real_escape_string($con, $_POST['student_tshirt'][$i]);
	$student_school_name = mysqli_real_escape_string($con, $_POST['student_school_name'][$i]);
	$student_school_district = mysqli_real_escape_string($con, $_POST['student_school_district'][$i]);
	$team_id = $_POST['team_id'];
	
	
    if (empty(trim($team_id))) continue;

    $sql = "INSERT INTO tbl_team_member(team_id,student_first_name,student_last_name,student_grade,student_school_name,student_school_district,t_shirt_size)
            VALUES('$team_id','$student_first_name','$student_last_name','$student_grade','$student_school_name','$student_school_district','$student_tshirt')";
    mysqli_query($con, $sql);
}

if(mysqli_error($con))
{
    echo "Database error occured".$sql.mysqli_error($con);
}
else
{
    echo $i . " rows added";
	#header("location:home.php");
}
?>