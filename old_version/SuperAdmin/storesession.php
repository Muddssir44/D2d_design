<?php 

session_start();
if($_POST['judge_id'])
{
$_SESSION['judge_id'] = $_POST['judge_id'];
}

?>