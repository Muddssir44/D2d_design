<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];
$year = date("Y");

$interest_q = mysqli_query($con,"select count(*) as count from tbl_user where user_type not in ('SuperUser') and year = '$year' and deleted = 0");
$interest_d = mysqli_fetch_assoc($interest_q);

$user_app_q = mysqli_query($con,"select count(*) as count from tbl_user where user_type not in ('SuperUser') and year = '$year' and deleted = 0 and is_approved = 1");
$user_app_d = mysqli_fetch_assoc($user_app_q);

$user_dapp_q = mysqli_query($con,"select count(*) as count from tbl_user where user_type not in ('SuperUser') and year = '$year' and deleted = 0 and is_approved = 0");
$user_dapp_d = mysqli_fetch_assoc($user_dapp_q);


$volunteer_q = mysqli_query($con,"select count(*) as count from tbl_user where user_type = 'Student' and year = '$year' and deleted = 0 and is_approved = 1");
$volunteer_d = mysqli_fetch_assoc($volunteer_q);

$judges_q = mysqli_query($con,"select count(*) as count from tbl_user where user_type='Judge' and year = '$year' and deleted = 0");
$judges_d = mysqli_fetch_assoc($judges_q);

$mentor_q = mysqli_query($con,"select count(*) as count from tbl_user where user_type = 'Mentor' and year = '$year' and deleted = 0");
$mentor_d = mysqli_fetch_assoc($mentor_q);

$team_q = mysqli_query($con,"select count(*) as count from tbl_team where year = '$year' and deleted = 0");
$team_d = mysqli_fetch_assoc($team_q);

$generaluser_q = mysqli_query($con,"select count(*) as count from tbl_user where user_type='General User' and year = '$year' and deleted = 0");
$generaluser_d = mysqli_fetch_assoc($generaluser_q);


$comple_c_q = mysqli_query($con,"select count(*) as count from tbl_team where (video_pitch is not null and log_book!='') and year = '$year' and deleted = 0");
$complete_c_d = mysqli_fetch_assoc($comple_c_q);


$incomple_q = mysqli_query($con,"select count(*) as count from tbl_team where (video_pitch is null or log_book='' or log_book is null) and year = '$year' and deleted = 0");
$incomplete_d = mysqli_fetch_assoc($incomple_q);


$incomple_l_q = mysqli_query($con,"select count(*) as count from tbl_team tt where video_pitch is not null and (log_book='' or log_book is null) and year = '$year' and deleted = 0");
$incomplete_l_d = mysqli_fetch_assoc($incomple_l_q);

$incomple_v_q = mysqli_query($con,"select count(*) as count from tbl_team tt where (video_pitch is null or video_pitch = '') and year = '$year' and deleted = 0");
$incomplete_v_d = mysqli_fetch_assoc($incomple_v_q);


$team_k = mysqli_query($con,"select count(*) as count from tbl_team where year = '$year' and deleted = 0 and category = 'K-2'");
$team_k_r = mysqli_fetch_assoc($team_k);

$team_3 = mysqli_query($con,"select count(*) as count from tbl_team where year = '$year' and deleted = 0 and category = '3-5'");
$team_3_r = mysqli_fetch_assoc($team_3);

$team_6 = mysqli_query($con,"select count(*) as count from tbl_team where year = '$year' and deleted = 0 and category = '6-8'");
$team_6_r = mysqli_fetch_assoc($team_6);

$team_9 = mysqli_query($con,"select count(*) as count from tbl_team where year = '$year' and deleted = 0 and category = '9-12'");
$team_9_r = mysqli_fetch_assoc($team_9);


$student_p_q = mysqli_query($con,"select count(*) as count  from tbl_team_member where team_id in (select id from tbl_team where year = '$year' and deleted = 0) and t_shirt_size <> '' and photo_consent_form <> '' and deleted = 0");
$student_p_d = mysqli_fetch_assoc($student_p_q);

$student_p_q_n = mysqli_query($con,"select count(*) as count  from tbl_team_member where team_id in (select id from tbl_team where year = '$year' and deleted = 0) and (t_shirt_size is null or photo_consent_form is null) and deleted = 0");
$student_p_d_n = mysqli_fetch_assoc($student_p_q_n);


$school_d_q = mysqli_query($con,"select count(distinct student_school_district) as count from tbl_team_member where year = '$year' and deleted = 0");
$school_d_d = mysqli_fetch_assoc($school_d_q);

$school_d_aa = mysqli_query($con,"select count(*)as count from tbl_team where id in (select team_id from tbl_team_member where student_school_district like '%Ann Arbor%') and year = '$year' and deleted = 0");
$school_aa_d = mysqli_fetch_assoc($school_d_aa);

$school_d_la = mysqli_query($con,"select count(*)as count from tbl_team where id in (select team_id from tbl_team_member where student_school_district like '%Livonia%') and year = '$year' and deleted = 0");
$school_la_d = mysqli_fetch_assoc($school_d_la);

$school_d_pc = mysqli_query($con,"select count(*)as count from tbl_team where id in (select team_id from tbl_team_member where student_school_district like '%Plymouth%') and deleted = 0");
$school_pc_d = mysqli_fetch_assoc($school_d_pc);

$school_d_sa = mysqli_query($con,"select count(*)as count from tbl_team where id in (select team_id from tbl_team_member where student_school_district like '%Saline%') and year = '$year' and deleted = 0");
$school_sa_d = mysqli_fetch_assoc($school_d_sa);

$tot_j_q = mysqli_query($con,"select count(*)as count from tbl_user where user_type='Judge' and year = '$year' and deleted = 0");
$tot_j_d = mysqli_fetch_assoc($tot_j_q);

$conf_j_q = mysqli_query($con,"select count(*)as count from tbl_user where user_type='Judge' and judge_confirm='Y' and year = '$year' and deleted = 0");
$conf_j_d = mysqli_fetch_assoc($conf_j_q);


$prof_j_q = mysqli_query($con,"select count(*)as count from tbl_user where user_type='Judge' and category like 'Professional%' and year = '$year' and deleted = 0");
$prof_j_d = mysqli_fetch_assoc($prof_j_q);

$fac_j_q = mysqli_query($con,"select count(*)as count from tbl_user where user_type='Judge' and category='Faculty' and year = '$year' and deleted = 0");
$fac_j_d = mysqli_fetch_assoc($fac_j_q);

$stud_j_q = mysqli_query($con,"select count(*)as count from tbl_user where user_type='Judge' and category='Student' and year = '$year' and deleted = 0");
$stud_j_d = mysqli_fetch_assoc($stud_j_q);

$other_j_q = mysqli_query($con,"select count(*)as count from tbl_user where user_type='Judge' and category = 'Others' and year = '$year' and deleted = 0");
$other_j_d = mysqli_fetch_assoc($other_j_q);

$pt_j_q = mysqli_query($con,"select count(*)as count from tbl_user where user_type='Judge' and category like '%Pre-service%' and year = '$year' and deleted = 0");
$pt_j_d = mysqli_fetch_assoc($pt_j_q);

$k_j_q = mysqli_query($con,"select count(*)as count from tbl_user where user_type='Judge' and category = 'K-12 teachers' and year = '$year' and deleted = 0");
$k_j_d = mysqli_fetch_assoc($k_j_q);

$j_ass_q = mysqli_query($con,"select  distinct user_id, count(*) as count from tbl_judge_team where year = '$year' group by (user_id)");
$j_ass_d = mysqli_fetch_assoc($j_ass_q);
$count_j = mysqli_num_rows($j_ass_q);

$j_ass_3q = mysqli_query($con,"select  distinct user_id, count(*) as count from tbl_judge_team where year = '$year' group by (user_id) having count(user_id) <=3");
$j_ass_3d = mysqli_fetch_assoc($j_ass_3q);
$count_3j = mysqli_num_rows($j_ass_3q);

$j_ass_4q = mysqli_query($con,"select  distinct user_id, count(*) as count from tbl_judge_team where year = '$year' group by (user_id) having count(user_id) = 4");
$j_ass_4d = mysqli_fetch_assoc($j_ass_4q);
$count_4j = mysqli_num_rows($j_ass_4q);


$j_ass_5q = mysqli_query($con,"select  distinct user_id, count(*) as count from tbl_judge_team where year = '$year' group by (user_id) having count(user_id) = 5");
$j_ass_5d = mysqli_fetch_assoc($j_ass_5q);
$count_5j = mysqli_num_rows($j_ass_5q);

$j_ass_6q = mysqli_query($con,"select  distinct user_id, count(*) as count from tbl_judge_team where year = '$year' group by (user_id) having count(user_id) = 6");
$j_ass_6d = mysqli_fetch_assoc($j_ass_6q);
$count_6j = mysqli_num_rows($j_ass_6q);


$k_ass_q = mysqli_query($con,"select team_id, count(team_id) from tbl_judge_team where year = '$year' group by team_id");
$count_k = mysqli_num_rows($k_ass_q);

$k_ass_2q = mysqli_query($con,"
select GROUP_CONCAT(concat(first_name,' ', last_name)) as judge_list , project_team_name, tt.category 
															from `tbl_judge_team` tj, tbl_user tu, tbl_team tt
															WHERE tj.user_id=tu.id
															and tu.id = tj.user_id
															and tj.team_id = tt.id
															and tt.year = '$year'
                                        					group by (project_team_name)
                                        					having count(project_team_name) < 3");
$count_2k = mysqli_num_rows($k_ass_2q);


$k_ass_3q = mysqli_query($con,"select team_id, count(team_id) from tbl_judge_team where year = '$year' group by (team_id) having count(team_id) = 3");
$count_3k = mysqli_num_rows($k_ass_3q);


$k_ass_4q = mysqli_query($con,"select team_id, count(team_id) from tbl_judge_team where year = '$year' group by (team_id) having count(team_id) = 4");
$count_4k = mysqli_num_rows($k_ass_4q);


$k_ass_5q = mysqli_query($con,"select team_id, count(team_id) from tbl_judge_team where year = '$year' group by (team_id) having count(team_id) = 5");
$count_5k = mysqli_num_rows($k_ass_5q);

$k_ass_6q = mysqli_query($con,"select team_id, count(team_id) from tbl_judge_team where year = '$year' group by (team_id) having count(team_id) = 6");
$count_6k = mysqli_num_rows($k_ass_6q);


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
                 and online_pitch is not null) and team_id in(select id from tbl_team where year = '$year')");
	$j_c = mysqli_fetch_assoc($q_c);
	
	$count_tja = $j_c['count'];
	if($count_tj == $count_tja)
	{
		$count_comp_j = $count_comp_j + 1;
	}
	else 
	{
		if(($count_tj-$count_tja) == 1)
		{
			$count_comp1_j = $count_comp1_j + 1;
			
			#echo 'This is the judge with 1 left $count_comp1_j'.$user_id;
		}
		if(($count_tj-$count_tja) == 2)
		{
			$count_comp2_j = $count_comp2_j + 1;
		}
		if(($count_tj-$count_tja) == 3)
		{
			$count_comp3_j = $count_comp3_j + 1;
		}
		if(($count_tj-$count_tja) == 4)
		{
			$count_comp4_j = $count_comp4_j + 1;
		}
		if(($count_tj-$count_tja) == 5)
		{
			$count_comp5_j = $count_comp5_j + 1;
		}
		if(($count_tj-$count_tja) == 6)
		{
			$count_comp6_j = $count_comp6_j + 1;
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

$results_912_q = mysqli_query($con,"select group_concat(concat(project_name,'-',(@row_number:=@row_number + 1)) SEPARATOR '<br>') as team_name from (select team_id, tt.project_team_name as project_name, tt.category, avg(total) as total from tbl_team tt, stut_tot st where tt.id = st.team_id and tt.category = '9-12' and year = '$year' group by(team_id) order by total desc limit 3 ) t, (SELECT @row_number := 0) r");
										
$r = mysqli_fetch_assoc($results_912_q);
$teams_9 = $r['team_name'];

$results_68_q = mysqli_query($con,"select group_concat(concat(project_name,'-',(@row_number:=@row_number + 1)) SEPARATOR '<br>') as team_name from (select team_id, tt.project_team_name as project_name, tt.category, avg(total) as total from tbl_team tt, stut_tot st where tt.id = st.team_id and tt.category = '6-8' and year = '$year' group by(team_id) order by total desc limit 3 ) t, (SELECT @row_number := 0) r");
										
$r_6 = mysqli_fetch_assoc($results_68_q);
$teams_6 = $r_6['team_name'];

#$sel = "SET @row_number=0;";
$sel = "select group_concat(concat(project_name,'-',(@row_number:=@row_number + 1)) SEPARATOR '<br>') as team_name 
from (select team_id, tt.project_team_name as project_name, tt.category, avg(total) as total
										from tbl_team tt, stut_tot st
										where tt.id = st.team_id
                                        and tt.category = '3-5'
										and year = '$year'
										group by(team_id)
                                        order by total desc
                                        limit 3
                                        ) t, (SELECT @row_number := 0) r";
										#echo $sel;
$results_35_q = mysqli_query($con, $sel);


#$results_35_q = mysqli_query($con,"");
										
$r_3 = mysqli_fetch_assoc($results_35_q);
$teams_3 = $r_3['team_name'];

$results_k2_q = mysqli_query($con,"select group_concat(concat(project_name,'-',(r.a)) SEPARATOR '<br>') as team_name from (select team_id, tt.project_team_name as project_name, tt.category, avg(total) as total from tbl_team tt, stut_tot st where tt.id = st.team_id and tt.category = 'K-2' and year = '$year' group by(team_id) order by total desc limit 3 ) t, (SELECT (@row_number := 1) as a) r");
										
$r_k = mysqli_fetch_assoc($results_k2_q);
$teams_k = $r_k['team_name'];



#$sel_q = mysqli_query($con,"select count(distinct team_id) as count from tbl_judge_assessment where live_qa is not null");
#$live_complete_pitches=mysqli_fetch_assoc($sel_q);										

#$sel_aq = mysqli_query($con,"select count(distinct team_id) as count from tbl_judge_assessment where live_qa is null");
#$live_incomplete_pitches=mysqli_fetch_assoc($sel_aq);										

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/widget.css" type="text/css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="shortcut icon" href="http://emuinvent.emuem.org/favicon.png">
</head>
<style>
html, body {
    top:0;
    bottom:0;
    left:0;
    right:0;
    
   
}
h2, .h2 {
    font-size: 20px;
}
</style>
 <?php include('../header.php'); ?>
<body>
<div id="wrapper">


	<?php include('navbar.php');?>
    <br>
   
 <div class="jumbotron col-md-12" style="font-size: 14px;
    height: 10em;    margin-block-start: -129px;">
	<div class="row">
	
	
	
	<!--<div class="col-md-4" >
			<div class="dbox dbox--color-1" style="height: 235px;">
				
				<div class="dbox__body" align="left">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center"><a href="live_complete.php" style="text-color:white"><font color="white"><h2>Live Complete Pitches:<?php echo $live_complete_pitches['count']?></h2></font></a></th>
					</tr>
					</thead>
					<tbody> 
					<tr>
					<td style="width:40px"><a href="live_complete.php" style="text-color:white"><span class="dbox__title" style=" font-size: 25px;">Complete</span></a></td>
					<td style="width:175px;"><a href="live_incomplete.php" style="text-color:white"><span class="dbox__title" style=" font-size: 25px;">Incomplete</span></a></td>
					</tr>
					<tr>
					<td style="width:40px"><a href="live_complete.php"><span class="dbox__count"><?php echo $live_complete_pitches['count']?></span></a></td>
					<td style="width:175px"><a href="live_incomplete.php"><span class="dbox__count"><?php echo $live_incomplete_pitches['count']?></span></a></td>
					
					</tr>
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>
					
				</div>
				
						
			</div>
		</div> -->
	
	
	<div class="col-md-6" >
			<div class="dbox dbox--color-1" style="height: 235px;">
				
				<div class="dbox__body" align="left">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center" style="width:160px"><a href="users.php" style="text-color:white"><font color="white"><h2>Users:<?php echo $interest_d['count']?> Approved: <?php echo $user_app_d['count'];?> Unapproved: <?php echo $user_dapp_d['count'];?></h2></font></a></th>
					</tr>
					</thead>
					<tbody> 
					<tr>
					<td style="height: 45px;width: 100px;"><a href="mentors.php?year=<?php echo $year;?>" style="text-color:white"><span class="dbox__title" style=" font-size: 25px;">Mentors</span></a></td>
					<td style="height: 45px;width: 100px;"><a href="volunteers.php?year=<?php echo $year;?>" style="text-color:white"><span class="dbox__title" style=" font-size: 25px;">Students</span></a></td>
					<td style="height: 45px;width: 100px;"><a href="teams.php?year=<?php echo $year;?>" style="text-color:white"><span class="dbox__title" style=" font-size: 25px;">Teams</span></a></td>
					<td style="height: 45px;width: 100px;"><a href="judges.php?year=<?php echo $year;?>" style="text-color:white"><span class="dbox__title" style=" font-size: 25px;">Judges</span></a></td>
					<td style="height: 45px;width: 170px;"><a href="generalusers.php?year=<?php echo $year;?>" style="text-color:white"><span class="dbox__title" style=" font-size: 25px;">General Users</span></a></td>
					
					
					</tr>
					<tr>
					<td style="height: 45px;width: 100px;"><span class="dbox__count"><?php echo $mentor_d['count']?></span></td>
					<td style="height: 45px;width: 100px;"><a href="judges.php"><span class="dbox__count"><?php echo $volunteer_d['count']?></span></a></td>
					<td style="height: 45px;width: 100px;"><span class="dbox__count"><?php echo $team_d['count']?></span></td>
					<td style="height: 45px;width: 100px;"><span class="dbox__count"><?php echo $judges_d['count']?></span></td>
					<td style="height: 45px;width: 100px;"><span class="dbox__count"><?php echo $generaluser_d['count']?></span></td>
					</tr>
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>-->
					
				</div>
				
						
			</div>
		</div>
	
		
		
		
		<div class="col-md-6">
			<div class="dbox dbox--color-1">
				<!--<div class="dbox__icon">
					<i class="glyphicon glyphicon-cloud"></i>
				</div>-->
				<div class="dbox__body" align="left" style="height:235px">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center" style="width:304px"><a href="teams.php" style="text-color:white"><font color="white"><h2>Team Submissions:<?php echo $team_d['count']?></h2></font></a></th>
					</tr>
					</thead>
					<tbody> 
					<tr>
					<td style="height: 30px;width: 100px;"><a href="teams_complete.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Complete</span></a></td>
					<td style="height: 30px;width: 170px;;"><a href="teams_incomplete.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Incomplete</span></a></td>
					<td style="height: 30px;width: 200px;;"><a href="teams_incomplete_logbook.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">W/t LogBooks</span></a></td>
					<td style="height: 30px;width: 200px;"><a href="teams_incomplete_videopitch.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">W/t Videos</span></a></td>
					</tr>
					<tr>
					<td style="height: 30px;width: 100px;"><span class="dbox__count"><?php echo $complete_c_d['count']?></span></td>
					<td style="height: 30px;width: 170px;"><span class="dbox__count"><?php echo $incomplete_d['count']?></span></td>
					<td style="height: 30px;width: 170px;"><span class="dbox__count"><?php echo $incomplete_l_d['count']?></span></td>
					<td style="height: 30px;width: 170px;"><span class="dbox__count"><?php echo $incomplete_v_d['count']?></span></td>
					</tr>
					
					
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>-->
					
				</div>
				
							
			</div>
		</div>
		
		
		<!--<div class="col-md-6" >
			<div class="dbox dbox--color-2" style="height: 367px;margin-block-start: -7px;">
				
				<div class="dbox__body" align="left">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center"><a href="judges.php" style="text-color:white"><font color="white"><h2>Total Judges:<?php echo $tot_j_d['count'];?></h2></font></a></th>
					<th align="Center"><a href="confirm_judges.php" style="text-color:white"><font color="white"><h2>Confirmed Judges:<?php echo $conf_j_d['count'];?></h2></font></a></th>
					</tr>
					</thead>
					<tbody align="center"> 
					<tr>
					<td><a href="judges.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Professionals</span></td>
					<td><a href="judges.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Faculty</span></td>
					<td><a href="judges.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Pre-Service Teachers</span></td>
					</tr>
					
					<tr>
					<td><span class="dbox__count"><?php echo $prof_j_d['count']?></span></td>
					<td><span class="dbox__count"><?php echo $fac_j_d['count']?></span></td>
					<td><span class="dbox__count"><?php echo $pt_j_d['count']?></span></td>
					</tr>
					
					<tr>
					<td><a href="judges.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">K-12 Teachers</span></td>
					<td><a href="judges.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Student</span></td>
					<td><a href="judges.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Others</span></td>
					</tr>
					
					
					<tr>
					<td><span class="dbox__count"><?php echo $k_j_d['count']?></span></td>
					<td><span class="dbox__count"><?php echo $stud_j_d['count']?></span></td>
					<td><span class="dbox__count"><?php echo $other_j_d['count']?></span></td>					
					</tr>
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>--
					
				</div>
				
						
			</div>
		</div> -->
		
		<div class="col-md-6" >
			<div class="dbox dbox--color-1" style="height: 235px;">
				
				<div class="dbox__body" align="left">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center" style="width:160px"><a href="users.php" style="text-color:white"><font color="white"><h2>Team Categories</h2></font></a></th>
					</tr>
					</thead>
					<tbody> 
					<tr>
					<td style="height: 45px;width: 100px;"><a href="teams.php?year=<?php echo $year;?>&category=K-2" style="text-color:white"><span class="dbox__title" style=" font-size: 25px;"> K-2 </span></a></td>
					<td style="height: 45px;width: 100px;"><a href="teams.php?year=<?php echo $year;?>&category=3-5" style="text-color:white"><span class="dbox__title" style=" font-size: 25px;"> 3-5 </span></a></td>
					<td style="height: 45px;width: 100px;"><a href="teams.php?year=<?php echo $year;?>&category=6-8" style="text-color:white"><span class="dbox__title" style=" font-size: 25px;"> 6-8 </span></a></td>
					<td style="height: 45px;width: 100px;"><a href="teams.php?year=<?php echo $year;?>&category=9-12" style="text-color:white"><span class="dbox__title" style=" font-size: 25px;"> 9-12 </span></a></td>
					
					
					
					</tr>
					<tr>
					
					<td style="height: 45px;width: 100px;"><span class="dbox__count"><?php echo $team_k_r['count']?></span></td>
					<td style="height: 45px;width: 100px;"><a href="judges.php"><span class="dbox__count"><?php echo $team_3_r['count']?></span></a></td>
					<td style="height: 45px;width: 100px;"><span class="dbox__count"><?php echo $team_6_r['count']?></span></td>
					<td style="height: 45px;width: 100px;"><span class="dbox__count"><?php echo $team_9_r['count']?></span></td>
					
					</tr>
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>-->
					
				</div>
				
						
			</div>
		</div>
	
		
		
		
		<div class="col-md-6">
			<div class="dbox dbox--color-1">
				<!--<div class="dbox__icon">
					<i class="glyphicon glyphicon-cloud"></i>
				</div>-->
				<div class="dbox__body" align="left" style="height:235px">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center" style="width:304px"><a href="volunteers.php" style="text-color:white"><font color="white"><h2>Student Registrations:<?php echo $volunteer_d['count']?></h2></font></a></th>
					</tr>
					</thead>
					<tbody> 
					<tr>
					<td style="height: 30px;width: 100px;"><a href="volunteers.php?status=Complete" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Complete</span></a></td>
					<td style="height: 30px;width: 170px;;"><a href="volunteers.php?status=Inomplete" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Incomplete</span></a></td>
					</tr>
					<tr>
					<td style="height: 30px;width: 100px;"><span class="dbox__count"><?php echo $student_p_d['count']?></span></td>
					<td style="height: 30px;width: 170px;"><span class="dbox__count"><?php echo $student_p_d_n['count']?></span></td>
					
					</tr>
					
					
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>-->
					
				</div>
				
							
			</div>
		</div>
		
		<div class="col-md-6" >
			<div class="dbox dbox--color-2" style="height: 367px;margin-block-start: -7px;">
				
				<div class="dbox__body" align="left">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center"><a href="view_team_judge.php" style="text-color:white"><font color="white"><h2>Teams Allocation to Judges:<?php echo $count_k;?></h2></font></a></th>
					</tr>
					</thead>
					<tbody> 
					<tr>
					<td style="width: 400px;"><a href="view_team2_judge.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Teams with less than 3 Judges</span></a></td>
					<td><a href="view_team2_judge.php" style="text-color:white"><span class="dbox__count"><?php echo $count_2k?></span></a></td>
					</tr>
					<tr>
					<td style="width: 400px;"><a href="view_team3_judge.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Teams with 3 Judges</span></a></td>
					<td><a href="view_team3_judge.php" style="text-color:white"><span class="dbox__count"><?php echo $count_3k?></span></a></td>
					</tr>
					<tr>
					<td style="width: 400px;"><a href="view_team4_judge.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Teams with 4 Judges</span></a></td>
					<td><a href="view_team4_judge.php" style="text-color:white"><span class="dbox__count"><?php echo $count_4k?></span></a></td>
					</tr>
					<tr>
					<td style="width: 400px;"><span class="dbox__title" style="font-size: 25px;">Teams with 5 Judges</span></td>
					<td><span class="dbox__count"><?php echo $count_5k?></span></td>
					</tr>
					
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>-->
					
				</div>
				
							
			</div>
		</div>
		
		<div class="col-md-6" >
			<div class="dbox dbox--color-2" style="height: 367px;margin-block-start: -7px;">
				
				<div class="dbox__body" align="left">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center"><a href="view_judge_teams.php" style="text-color:white"><font color="white"><h2>Judges Allocation to Teams:<?php echo $count_j;?></h2></font></a></th>
					</tr>
					</thead>
					<tbody> 
					<tr>
					<td style="width: 400px;"><a href="view_judge_teams_3.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">3 Teams and less than 3</span></a></td>
					<td><a href="view_judge_teams_3.php" style="text-color:white"><span class="dbox__count"><?php echo $count_3j?></span></a></td>
					</tr>
					<tr>
					<td style="width: 400px;"><a href="view_judge_teams_4.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">4 Teams</span></a></td>
					<td><a href="view_judge_teams_4.php" style="text-color:white"><span class="dbox__count"><?php echo $count_4j?></span></a></td>
					</tr>
					<tr>
					<td style="width: 400px;"><a href="view_judge_teams_5.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">5 Teams</span></a></td>
					<td><a href="view_judge_teams_5.php" style="text-color:white"><span class="dbox__count"><?php echo $count_5j?></span></a></td>
					</tr>
					
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>-->
					
				</div>
				
							
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="dbox dbox--color-3" style="background: cornflowerblue;margin-block-start: -7px;height:625px">
				
				<div class="dbox__body" style="align:left">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center"><a href="complete_judges.php" style="text-color:white"><font color="white"><h2>No Of Judges Completed evaluations:<?php echo $count_comp_j;?></h2></font></a></th>
					</tr>
					</thead>
					<tbody align="center"> 
					<tr>
					<td><a href="incomplete1_judges.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Judges With 1 incomplete Evaluation</span></a></td>
					<td><a href="incomplete1_judges.php" style="text-color:white"><span class="dbox__count"><?php echo $count_comp1_j?></span></a></td>
					</tr>
					<tr>
					<td><a href="incomplete2_judges.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Judges With 2 incomplete Evaluation</span></a></td>
					<td><a href="incomplete2_judges.php" style="text-color:white"><span class="dbox__count"><?php echo $count_comp2_j?></span></a></td>
					</tr>
					<tr>
					<td><a href="incomplete3_judges.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Judges With 3 incomplete Evaluation</span></a></td>
					<td><a href="incomplete3_judges.php" style="text-color:white"><span class="dbox__count"><?php echo $count_comp3_j?></span></a></td>
					</tr>
					<tr>
					<td><a href="incomplete4_judges.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Judges With 4 incomplete Evaluation</span></a></td>
					<td><a href="incomplete4_judges.php" style="text-color:white"><span class="dbox__count"><?php echo $count_comp4_j?></span></a></td>
					</tr>
					<tr>
					<td><a href="incomplete5_judges.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Judges With 5 incomplete Evaluation</span></a></td>
					<td><a href="incomplete5_judges.php" style="text-color:white"><span class="dbox__count"><?php echo $count_comp5_j?></span></a></td>
					</tr>
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>-->
					
				</div>
						
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="dbox dbox--color-3" style="background: cornflowerblue;margin-block-start: -7px;height:625px">
				
				<div class="dbox__body" style="align:left">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center"><a href="complete_teams.php" style="text-color:white"><font color="white"><h2>No Of Teams with Completed evaluations:<?php echo $count_comp_t;?></h2></font></a></th>
					</tr>
					</thead>
					<tbody align="center"> 
					<tr>
					<td><a href="incomplete1_teams.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Teams With 1 incomplete Evaluation</span></a></td>
					<td><a href="incomplete1_teams.php" style="text-color:white"><span class="dbox__count"><?php echo $count_comp1_t?></span></a></td>
					</tr>
					<tr>
					<td><a href="incomplete2_teams.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Teams With 2 incomplete Evaluation</span></a></td>
					<td><a href="incomplete2_teams.php" style="text-color:white"><span class="dbox__count"><?php echo $count_comp2_t?></span></a></td>
					</tr>
					<tr>
					<td><a href="incomplete3_teams.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Teams With 3 incomplete Evaluation</span></a></td>
					<td><a href="incomplete3_teams.php" style="text-color:white"><span class="dbox__count"><?php echo $count_comp3_t?></span></a></td>
					</tr>
					<tr>
					<td><a href="incomplete4_teams.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Teams With 4 incomplete Evaluation</span></a></td>
					<td><a href="incomplete4_teams.php" style="text-color:white"><span class="dbox__count"><?php echo $count_comp4_t?></span></a></td>
					</tr>
					<tr>
					<td><a href="incomplete5_teams.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">Teams With 5 incomplete Evaluation</span></a></td>
					<td><a href="incomplete5_teams.php" style="text-color:white"><span class="dbox__count"><?php echo $count_comp5_t?></span></a></td>
					</tr>
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>-->
					
				</div>
				
							
							
			</div>
		</div>
		
		<div class="col-md-4" >
			<div class="dbox dbox--color-3" style="background: cornflowerblue;margin-block-start: -7px;height:625px">
				
				<div class="dbox__body" style="align:left;">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center"><a href="evaluation_results.php" style="text-color:white"><font color="white"><h2>Current Results:</h2></a></font></th>
					</tr>
					</thead>

					<tbody> 
					<tr>
					<td><a href="results_k2.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">K-2</span></a></td>
					<td><a href="results_k2.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;"><?php echo $teams_k?></span></a></td>
					</tr>
					<tr>
					<td><a href="results_35.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">3-5</span></a></td>
					<td><a href="results_35.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;"><?php echo $teams_3?></span></a></td>
					</tr>
					<tr>
					<td><a href="results_68.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">6-8</span></a></td>
					<td><a href="results_68.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;"><?php echo $teams_6?></span></a></td>
					</tr>
					
					<tr>
					<td><a href="results_912.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;">9-12</span></a></td>
					<td><a href="results_912.php" style="text-color:white"><span class="dbox__title" style="font-size: 25px;"><?php echo $teams_9?></span></a></td>
					
					</tr>
					
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>-->
					
				</div>
				
				
				
								
			</div>
		</div>
		
		
		
		
		
	</div>
</div>
</body>
</html>	

