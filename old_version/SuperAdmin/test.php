<?php 
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];
$year = date("Y");


$count_comp_j = 0;
$count_comp1_j = 0;
$count_comp2_j = 0;
$count_comp3_j = 0;
$count_comp4_j = 0;
$count_comp5_j = 0;
$count_comp6_j = 0;
$j_c_e = mysqli_query($con,"select user_id, count(user_id) as count from tbl_judge_team where year = '$year' group by (user_id)");
while($row = mysqli_fetch_assoc($j_c_e))
{
	$user_id = $row['user_id'];
	$count_tj = $row['count'];
	$q_c = mysqli_query($con,"select count(user_id) as count from tbl_judge_assessment 
				 where user_id = $user_id and (identifying_understanding is not null 
                 and ideating is not null
                 and designing_building is not null
                 and testing_refinging is not null
                 and value_propoition is not null
                 and market_potential is not null
                 and social_value is not null
                 and originality is not null
                 and logbook is not null
                 and prototype is not null
                 and online_pitch is not null) and team_id in(select id from tbl_team where year = '2021')");
	$j_c = mysqli_fetch_assoc($q_c);
	
	$count_tja = $j_c['count'];
	if($count_tj == $count_tja)
	{
		$count_comp_j = $count_comp_j + 1;
		echo 'Complete Judges '.$user_id;
	}
	else 
	{
		if(($count_tj-$count_tja) == 1)
		{
			$count_comp1_j = $count_comp1_j + 1;
			
			echo 'This is the judge with 1 left $count_comp1_j'.$user_id;
		}
		if(($count_tj-$count_tja) == 2)
		{
			$count_comp2_j = $count_comp2_j + 1;
			echo 'This is the judge with 2 left $count_comp2_j'.$user_id;
		}
		if(($count_tj-$count_tja) == 3)
		{
			$count_comp3_j = $count_comp3_j + 1;
			echo 'This is the judge with 3 left $count_comp3_j'.$user_id;
		}
		if(($count_tj-$count_tja) == 4)
		{
			$count_comp4_j = $count_comp4_j + 1;
			echo 'This is the judge with 4 left $count_comp4_j'.$user_id;
		}
		if(($count_tj-$count_tja) == 5)
		{
			$count_comp5_j = $count_comp5_j + 1;
			echo 'This is the judge with 5 left $count_comp5_j'.$user_id;
		}
		if(($count_tj-$count_tja) == 6)
		{
			$count_comp6_j = $count_comp6_j + 1;
			echo 'This is the judge with 6 left $count_comp6_j'.$user_id;
		}
		
	}
	
}

$count_comp_t = 0;
$count_comp1_t = 0;
$count_comp2_t = 0;
$count_comp3_t = 0;
$count_comp4_t = 0;
$count_comp5_t = 0;
$count_comp6_t = 0;
$t_c_e = mysqli_query($con,"select team_id, count(team_id) as count from tbl_judge_team where year = '$year' group by (team_id)");
while($row_t = mysqli_fetch_assoc($t_c_e))
{
	$team_id = $row_t['team_id'];
	$count_t = $row_t['count'];
	$q_tc = mysqli_query($con,"select count(team_id) as count from tbl_judge_assessment where team_id = $team_id and (identifying_understanding is not null 
                 and ideating is not null
                 and designing_building is not null
                 and testing_refinging is not null
                 and value_propoition is not null
                 and market_potential is not null
                 and social_value is not null
                 and originality is not null
                 and logbook is not null
                 and prototype is not null
                 and online_pitch is not null)");
	$t_c = mysqli_fetch_assoc($q_tc);
	
	$count_ta = $t_c['count'];
	if(($count_t)==($count_ta))
	{	
		$count_comp_t = $count_comp_t + 1;
		#echo $team_id;
	}
	else 
	{
		if((($count_t)-($count_ta))==1)
		{
			$count_comp1_t = $count_comp1_t + 1;
			#echo 'this is the test '.$team_id;
		}
		if(($count_t-$count_ta)==2)
		{
			$count_comp2_t = $count_comp2_t + 1;
		}
		if(($count_t-$count_ta)==3)
		{
			$count_comp3_t = $count_comp3_t + 1;
		}
		if(($count_t-$count_ta)==4)
		{
			$count_comp4_t = $count_comp4_t + 1;
		}
		if(($count_t-$count_ta)==5)
		{
			$count_comp5_t = $count_comp5_t + 1;
		}
		if(($count_t-$count_ta)==6)
		{
			$count_comp6_t = $count_comp6_t + 1;
		}
		
	}
	
}
?>