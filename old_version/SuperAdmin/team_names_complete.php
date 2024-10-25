<?php 
include('../database/config.php'); 
include('control.php'); 

$count_comp_t = 0;
$count_comp1_t = 0;
$count_comp2_t = 0;
$count_comp3_t = 0;
$count_comp4_t = 0;
$count_comp5_t = 0;
$count_comp6_t = 0;
$t_c_e = mysqli_query($con,"select team_id, count(team_id) as count from tbl_judge_team group by (team_id)");
while($row_t = mysqli_fetch_assoc($t_c_e))
{
	$team_id = $row_t['team_id'];
	#echo 't'.$team_id.'\n';
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
                 and display_board is not null
                 and prototype is not null
                 and online_pitch is not null)");
	$t_c = mysqli_fetch_assoc($q_tc);
	
	$count_ta = $t_c['count'];
	#echo 'count_t'.$count_t.'\n';
	#echo 'count_ta'.$count_ta.'\n';
	if($count_t == $count_ta)
	{	
		$count_comp_t = $count_comp_t + 1;
		echo $row_t['team_id'];
	}
	else 
	{
		if(($count_t-$count_ta) == 1)
		{
			$count_comp1_t = $count_comp1_t + 1;
		}
		if(($count_t-$count_ta) == 2)
		{
			$count_comp2_t = $count_comp2_t + 1;
		}
		if(($count_t-$count_ta) == 3)
		{
			$count_comp3_t = $count_comp3_t + 1;
		}
		if(($count_t-$count_ta) == 4)
		{
			$count_comp4_t = $count_comp4_t + 1;
		}
		if(($count_t-$count_ta) == 5)
		{
			$count_comp5_t = $count_comp5_t + 1;
		}
		if(($count_t-$count_ta) == 6)
		{
			$count_comp6_t = $count_comp6_t + 1;
		}
		
	}
	
}
?>