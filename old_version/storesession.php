<?php 
session_start();
include('database/config.php'); 
//echo '<script>alert("this is in the session script")</script>';

	if($_POST['email'])
	{
		//echo '<script>alert("this is inside if loop")</script>';
		$email = $_POST['email'];
		$q = mysqli_query($con,"select * from tbl_user where email = '$email'");
		$cnt = mysqli_num_rows($q);
		if($cnt > 0) 
		{
			$users_arr = 'Record already exsist in the DB';
			echo json_encode($users_arr);
		}
		
		
		//$_SESSION['user_type'] = $_POST['user_type'];
	}


?>