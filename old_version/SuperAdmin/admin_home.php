<?php
include('../database/config.php'); 
include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];


$interest_q = mysqli_query($con,"select count(*) as count from tbl_user where user_type not in ('SuperUser')");
$interest_d = mysqli_fetch_assoc($interest_q);

$volunteer_q = mysqli_query($con,"select count(*) as count from tbl_user where interested like '%Volunteering%'");
$volunteer_d = mysqli_fetch_assoc($volunteer_q);

$judges_q = mysqli_query($con,"select count(*) as count from tbl_user where interested like '%Judging%'");
$judges_d = mysqli_fetch_assoc($judges_q);

$mentor_q = mysqli_query($con,"select count(*) as count from tbl_user where interested like '%Mentoring%'");
$mentor_d = mysqli_fetch_assoc($mentor_q);

$team_q = mysqli_query($con,"select count(*) as count from tbl_team");
$team_d = mysqli_fetch_assoc($team_q);



$comple_c_q = mysqli_query($con,"select count(*) as count from tbl_team where (video_pitch is not null and log_book!='') ");
$complete_c_d = mysqli_fetch_assoc($comple_c_q);


$incomple_q = mysqli_query($con,"select count(*) as count from tbl_team where (video_pitch is null or log_book='' or log_book is null) ");
$incomplete_d = mysqli_fetch_assoc($incomple_q);


$incomple_l_q = mysqli_query($con,"select count(*) as count from tbl_team tt where log_book is null");
$incomplete_l_d = mysqli_fetch_assoc($incomple_l_q);

$incomple_v_q = mysqli_query($con,"select count(*) as count from tbl_team tt where video_pitch is null");
$incomplete_v_d = mysqli_fetch_assoc($incomple_v_q);


$school_d_q = mysqli_query($con,"select count(distinct student_school_district) as count from tbl_team_member");
$school_d_d = mysqli_fetch_assoc($school_d_q);

$school_d_aa = mysqli_query($con,"select count(*)as count from tbl_team where id in (select team_id from tbl_team_member where student_school_district like '%Ann Arbor%')");
$school_aa_d = mysqli_fetch_assoc($school_d_aa);

$school_d_la = mysqli_query($con,"select count(*)as count from tbl_team where id in (select team_id from tbl_team_member where student_school_district like '%Livonia%')");
$school_la_d = mysqli_fetch_assoc($school_d_la);

$school_d_pc = mysqli_query($con,"select count(*)as count from tbl_team where id in (select team_id from tbl_team_member where student_school_district like '%Plymouth%')");
$school_pc_d = mysqli_fetch_assoc($school_d_pc);

$school_d_sa = mysqli_query($con,"select count(*)as count from tbl_team where id in (select team_id from tbl_team_member where student_school_district like '%Saline%')");
$school_sa_d = mysqli_fetch_assoc($school_d_sa);

$tot_j_q = mysqli_query($con,"select count(*)as count from tbl_user where user_type='Judge'");
$tot_j_d = mysqli_fetch_assoc($tot_j_q);

$conf_j_q = mysqli_query($con,"select count(*)as count from tbl_user where user_type='Judge' and judge_confirm='Y'");
$conf_j_d = mysqli_fetch_assoc($conf_j_q);


$prof_j_q = mysqli_query($con,"select count(*)as count from tbl_user where user_type='Judge' and category like 'Professional%'");
$prof_j_d = mysqli_fetch_assoc($prof_j_q);

$fac_j_q = mysqli_query($con,"select count(*)as count from tbl_user where user_type='Judge' and category='Faculty'");
$fac_j_d = mysqli_fetch_assoc($fac_j_q);

$stud_j_q = mysqli_query($con,"select count(*)as count from tbl_user where user_type='Judge' and category='Student'");
$stud_j_d = mysqli_fetch_assoc($stud_j_q);

$other_j_q = mysqli_query($con,"select count(*)as count from tbl_user where user_type='Judge' and category = 'Others'");
$other_j_d = mysqli_fetch_assoc($other_j_q);

$pt_j_q = mysqli_query($con,"select count(*)as count from tbl_user where user_type='Judge' and category like '%Pre-service%'");
$pt_j_d = mysqli_fetch_assoc($pt_j_q);

$k_j_q = mysqli_query($con,"select count(*)as count from tbl_user where user_type='Judge' and category = 'K-12 teachers'");
$k_j_d = mysqli_fetch_assoc($k_j_q);

$j_ass_q = mysqli_query($con,"select  distinct user_id, count(*) as count from tbl_judge_team group by (user_id)");
$j_ass_d = mysqli_fetch_assoc($j_ass_q);
$count_j = mysqli_num_rows($j_ass_q);

$j_ass_3q = mysqli_query($con,"select  distinct user_id, count(*) as count from tbl_judge_team group by (user_id) having count(user_id) = 3");
$j_ass_3d = mysqli_fetch_assoc($j_ass_3q);
$count_3j = mysqli_num_rows($j_ass_3q);

$j_ass_4q = mysqli_query($con,"select  distinct user_id, count(*) as count from tbl_judge_team group by (user_id) having count(user_id) = 4");
$j_ass_4d = mysqli_fetch_assoc($j_ass_4q);
$count_4j = mysqli_num_rows($j_ass_4q);


$j_ass_5q = mysqli_query($con,"select  distinct user_id, count(*) as count from tbl_judge_team group by (user_id) having count(user_id) = 5");
$j_ass_5d = mysqli_fetch_assoc($j_ass_5q);
$count_5j = mysqli_num_rows($j_ass_5q);

$j_ass_6q = mysqli_query($con,"select  distinct user_id, count(*) as count from tbl_judge_team group by (user_id) having count(user_id) = 6");
$j_ass_6d = mysqli_fetch_assoc($j_ass_6q);
$count_6j = mysqli_num_rows($j_ass_6q);


$j_ass_3q = mysqli_query($con,"select  distinct user_id, count(*) as count from tbl_judge_team group by (user_id) having count(user_id) = 3");
$j_ass_3d = mysqli_fetch_assoc($j_ass_3q);
$count_3j = mysqli_num_rows($j_ass_3q);




$k_ass_q = mysqli_query($con,"select team_id, count(team_id) from tbl_judge_team group by team_id");
$count_k = mysqli_num_rows($k_ass_q);

$k_ass_2q = mysqli_query($con,"select team_id, count(team_id) from tbl_judge_team group by (team_id) having count(team_id) < 3");
$count_2k = mysqli_num_rows($k_ass_2q);


$k_ass_3q = mysqli_query($con,"select team_id, count(team_id) from tbl_judge_team group by (team_id) having count(team_id) = 3");
$count_3k = mysqli_num_rows($k_ass_3q);


$k_ass_4q = mysqli_query($con,"select team_id, count(team_id) from tbl_judge_team group by (team_id) having count(team_id) = 4");
$count_4k = mysqli_num_rows($k_ass_4q);


$k_ass_5q = mysqli_query($con,"select team_id, count(team_id) from tbl_judge_team group by (team_id) having count(team_id) = 5");
$count_5k = mysqli_num_rows($k_ass_5q);

$k_ass_6q = mysqli_query($con,"select team_id, count(team_id) from tbl_judge_team group by (team_id) having count(team_id) = 6");
$count_6k = mysqli_num_rows($k_ass_6q);


$j_ass_3q = mysqli_query($con,"select  distinct user_id, count(*) as count from tbl_judge_team group by (user_id) having count(user_id) = 3");
$j_ass_3d = mysqli_fetch_assoc($j_ass_3q);
$count_3j = mysqli_num_rows($j_ass_3q);


$count_comp_j = 0;
$count_comp1_j = 0;
$count_comp2_j = 0;
$count_comp3_j = 0;
$count_comp4_j = 0;
$count_comp5_j = 0;
$count_comp6_j = 0;
$j_c_e = mysqli_query($con,"select user_id, count(user_id) as count from tbl_judge_team group by (user_id)");
while($row = mysqli_fetch_assoc($j_c_e))
{
	$user_id = $row['user_id'];
	$count_tj = $row['count'];
	$q_c = mysqli_query($con,"select count(user_id) as count from tbl_judge_assessment where user_id = $user_id and (identifying_understanding is not null 
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
$t_c_e = mysqli_query($con,"select team_id, count(team_id) as count from tbl_judge_team group by (team_id)");
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
                 and display_board is not null
                 and prototype is not null
                 and online_pitch is not null)");
	$t_c = mysqli_fetch_assoc($q_tc);
	
	$count_ta = $t_c['count'];
	if($count_t==$count_ta)
	{	
		$count_comp_t = $count_comp_t + 1;
		echo $team_id;
	}
	else 
	{
		if(($count_t-$count_ta)==1)
		{
			$count_comp1_t = $count_comp1_t + 1;
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

$results_912_q = mysqli_query($con,"select group_concat(project_name SEPARATOR '; ') as team_name from (select team_id, tt.project_team_name as project_name, tt.category, avg(total) as total
										from tbl_team tt, stut_tot st
										where tt.id = st.team_id
                                        and tt.category = '9-12'
										group by(team_id)
                                        order by total desc
                                        limit 3
                                        ) t");
										
$r = mysqli_fetch_assoc($results_912_q);
$teams_9 = $r['team_name'];

$results_68_q = mysqli_query($con,"select group_concat(project_name) as team_name from (select team_id, tt.project_team_name as project_name, tt.category, avg(total) as total
										from tbl_team tt, stut_tot st
										where tt.id = st.team_id
                                        and tt.category = '6-8'
										group by(team_id)
                                        order by total desc
                                        limit 3
                                        ) t");
										
$r_6 = mysqli_fetch_assoc($results_68_q);
$teams_6 = $r_6['team_name'];

$results_35_q = mysqli_query($con,"select group_concat(project_name) as team_name from (select team_id, tt.project_team_name as project_name, tt.category, avg(total) as total
										from tbl_team tt, stut_tot st
										where tt.id = st.team_id
                                        and tt.category = '3-5'
										group by(team_id)
                                        order by total desc
                                        limit 3
                                        ) t");
										
$r_3 = mysqli_fetch_assoc($results_35_q);
$teams_3 = $r_3['team_name'];

$results_k2_q = mysqli_query($con,"select group_concat(project_name) as team_name from (select team_id, tt.project_team_name as project_name, tt.category, avg(total) as total
										from tbl_team tt, stut_tot st
										where tt.id = st.team_id
                                        and tt.category = 'K-2'
										group by(team_id)
                                        order by total desc
                                        limit 3
                                        ) t");
										
$r_k = mysqli_fetch_assoc($results_k2_q);
$teams_k = $r_k['team_name'];

										

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
</style>
<body>
<div id="wrapper">
  <?php include('../header.php'); ?>

	<nav class="navbar navbar-expand bg-dark navbar-dark" style="    margin-top: 125px;
        width: 1278px;
    left: 2.3%;">
        <!-- Links -->
        <ul class="navbar-nav">

            <li class="nav-item" style="font-weight: bold;">
                <a class="nav-link" href="home.php">Home</a>
            </li>
			
			
			
			
			 <li class="nav-item dropdown" style="font-weight: bold;">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <?php echo $name?>
                </a>
                <div class="dropdown-menu"  id="mainNavbar">
					<a class="dropdown-item" href="profile.php">Profile</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                    
                </div>
            </li>

            <!--<li class="nav-item">
                <a class="nav-link" href="addStudent.html">Add Student</a>
            </li>

            <li class="nav-item" id="addAccount">
				<a class="nav-link" href="addUser.html">Add Account</a>
            </li>-->
        </ul>
    </nav>

    <br>
   
 <div class="jumbotron col-md-12" style="font-size: 14px;
    height: 10em;    margin-block-start: -129px;">
	<div class="row">
		<div class="col-md-4">
			<div class="dbox dbox--color-1">
				<!--<div class="dbox__icon">
					<i class="glyphicon glyphicon-cloud"></i>
				</div>-->
				<div class="dbox__body" style="align:left;height:235px">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center"><font color="white"><h3>INTERESTS:<?php echo $interest_d['count']?></h3></font></th>
					</tr>
					</thead>
					<tbody align="center"> 
					<tr>
					<td style="width:40px;"><span class="dbox__title">Volunteers</span></td>
					<td style="width:75px;"><span class="dbox__title">Judges</span></td>
					<td style="width:75px;"><span class="dbox__title">Teams</span></td>
					<td style="width:40px;"><span class="dbox__title">Mentors</span></td>
					</tr>
					<tr>
					<td><span class="dbox__count"><?php echo $volunteer_d['count']?></span></td>
					<td><span class="dbox__count"><?php echo $judges_d['count']?></span></td>
					<td><span class="dbox__count"><?php echo $team_d['count']?></span></td>
					<td><span class="dbox__count"><?php echo $mentor_d['count']?></span></td>
					</tr>
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>-->
					
				</div>
				
							
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="dbox dbox--color-1" style="height:235px">
				<!--<div class="dbox__icon">
					<i class="glyphicon glyphicon-cloud"></i>
				</div>-->
				<div class="dbox__body" style="align:left">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center"><font color="white"><h3>Teams:<?php echo $team_d['count']?></h3></font></th>
					</tr>
					</thead>
					<tbody align="center"> 
					<tr>
					<td><span class="dbox__title">Complete</span></td>
					<td><span class="dbox__title">Incomplete</span></td>
					<td><span class="dbox__title">Missing LogBook</span></td>
					<td><span class="dbox__title">Missing Video Pitches</span></td>
					</tr>
					
					<tr>
					
					<td><span class="dbox__count"><?php echo $complete_c_d['count']?></span></td>
					<td><span class="dbox__count"><?php echo $incomplete_d['count']?></span></td>
					<td><span class="dbox__count"><?php echo $incomplete_l_d['count']?></span></td>
					<td><span class="dbox__count"><?php echo $incomplete_v_d['count']?></span></td>
					</tr>
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>-->
					
				</div>
				
							
			</div>
		</div>
		
		
		<div class="col-md-4">
			<div class="dbox dbox--color-1" style="height:235px">
				<!--<div class="dbox__icon">
					<i class="glyphicon glyphicon-cloud"></i>
				</div>-->
				<div class="dbox__body" style="align:left">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center"><font color="white"><h3>School:Districts:<?php echo $school_d_d['count'];?></h3></font></th>
					</tr>
					</thead>
					<tbody align="center"> 
					<tr>
					<td><span class="dbox__title">Plymouth Canton Public Schools</span></td>
					<td><span class="dbox__title">Livonia Public Schools</span></td>
					<td><span class="dbox__title">Ann Arbor Public Schools</span></td>
					<td><span class="dbox__title">Saline Public Schools</span></td>
					</tr>
					<tr>
					
					<td><span class="dbox__count"><?php echo $school_pc_d['count']?></span></td>
					<td><span class="dbox__count"><?php echo $school_la_d['count']?></span></td>
					<td><span class="dbox__count"><?php echo $school_aa_d['count']?></span></td>
					<td><span class="dbox__count"><?php echo $school_sa_d['count']?></span></td>
					</tr>
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>-->
					
				</div>
				
							
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="dbox dbox--color-2">
				
				<div class="dbox__body" style="align:left;margin-block-start: -69px;">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center"><font color="white"><h3>Total Judges:<?php echo $tot_j_d['count'];?></h3></font></th>
					<th><font color="white"><h3>Confirmed Judges:<?php echo $conf_j_d['count'];?> </h3></font></th>
					
					</tr>
					</thead>
					<tbody align="center"> 
					<tr>
					<td><span class="dbox__title">Professionals</span></td>
					<td><span class="dbox__title">Faculty</span></td>
					<td><span class="dbox__title">Pre-Service Teachers</span></td>
					</tr>
					
					<tr>
					<td><span class="dbox__count"><?php echo $prof_j_d['count']?></span></td>
					<td><span class="dbox__count"><?php echo $fac_j_d['count']?></span></td>
					<td><span class="dbox__count"><?php echo $pt_j_d['count']?></span></td>
					</tr>
					
					<tr>
					<td><span class="dbox__title">K-12 Teachers</span></td>
					<td><span class="dbox__title">Student</span></td>
					<td><span class="dbox__title">Others</span></td>
					</tr>
					
					
					<tr>
					<td><span class="dbox__count"><?php echo $k_j_d['count']?></span></td>
					<td><span class="dbox__count"><?php echo $stud_j_d['count']?></span></td>
					<td><span class="dbox__count"><?php echo $other_j_d['count']?></span></td>					
					</tr>
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>-->
					
				</div>
				
						
			</div>
		</div>
		<div class="col-md-4">
			<div class="dbox dbox--color-2" style="height: 367px;margin-block-start: -7px;">
				
				<div class="dbox__body" style="align:left">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center"><font color="white"><h3>Judges Assignment:<?php echo $count_j;?></h3></font></th>
					</tr>
					</thead>
					<tbody align="center"> 
					<tr>
					<td><span class="dbox__title">3 Teams</span></td>
					<td><span class="dbox__count"><?php echo $count_3j?></span></td>
					</tr>
					<tr>
					<td><span class="dbox__title">4 Teams</span></td>
					<td><span class="dbox__count"><?php echo $count_4j?></span></td>
					</tr>
					<tr>
					<td><span class="dbox__title">5 Teams</span></td>
					<td><span class="dbox__count"><?php echo $count_5j?></span></td>
					</tr>
					
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>-->
					
				</div>
				
								
			</div>
		</div>
		
		<div class="col-md-4" >
			<div class="dbox dbox--color-2" style="height: 367px;margin-block-start: -7px;">
				
				<div class="dbox__body" style="align:left">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center"><font color="white"><h3>Team's Judges:<?php echo $count_k;?></h3></font></th>
					</tr>
					</thead>
					<tbody align="center"> 
					<tr>
					<td><span class="dbox__title">Teams with less than 3 Judges</span></td>
					<td><span class="dbox__count"><?php echo $count_2k?></span></td>
					</tr>
					<tr>
					<td><span class="dbox__title">Teams with 3 Judges</span></td>
					<td><span class="dbox__count"><?php echo $count_3k?></span></td>
					</tr>
					<tr>
					<td><span class="dbox__title">Teams with 4 Judges</span></td>
					<td><span class="dbox__count"><?php echo $count_4k?></span></td>
					</tr>
					<tr>
					<td><span class="dbox__title">Teams with 5 Judges</span></td>
					<td><span class="dbox__count"><?php echo $count_5k?></span></td>
					</tr>
					
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>-->
					
				</div>
				
							
			</div>
		</div>
		
			
		<div class="col-md-4">
			<div class="dbox dbox--color-3" style="background: cornflowerblue;margin-block-start: -7px;">
				
				<div class="dbox__body" style="align:left">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center"><font color="white"><h3>No Of Judges Completed evaluations:<?php echo $count_comp_j;?></h3></font></th>
					</tr>
					</thead>
					<tbody align="center"> 
					<tr>
					<td><span class="dbox__title">Judges With 1 incomplete Evaluation</span></td>
					<td><span class="dbox__count"><?php echo $count_comp1_j?></span></td>
					</tr>
					<tr>
					<td><span class="dbox__title">Judges With 2 incomplete Evaluation</span></td>
					<td><span class="dbox__count"><?php echo $count_comp2_j?></span></td>
					</tr>
					<tr>
					<td><span class="dbox__title">Judges With 3 incomplete Evaluation</span></td>
					<td><span class="dbox__count"><?php echo $count_comp3_j?></span></td>
					</tr>
					<tr>
					<td><span class="dbox__title">Judges With 4 incomplete Evaluation</span></td>
					<td><span class="dbox__count"><?php echo $count_comp4_j?></span></td>
					</tr>
					<tr>
					<td><span class="dbox__title">Judges With 5 incomplete Evaluation</span></td>
					<td><span class="dbox__count"><?php echo $count_comp5_j?></span></td>
					</tr>
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>-->
					
				</div>
						
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="dbox dbox--color-3" style="background: cornflowerblue;margin-block-start: -7px;">
				
				<div class="dbox__body" style="align:left">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center"><font color="white"><h3>No Of Teams with Completed evaluations:<?php echo $count_comp_t;?></h3></font></th>
					</tr>
					</thead>
					<tbody align="center"> 
					<tr>
					<td><span class="dbox__title">Teams With 1 incomplete Evaluation</span></td>
					<td><span class="dbox__count"><?php echo $count_comp1_t?></span></td>
					</tr>
					<tr>
					<td><span class="dbox__title">Teams With 2 incomplete Evaluation</span></td>
					<td><span class="dbox__count"><?php echo $count_comp2_t?></span></td>
					</tr>
					<tr>
					<td><span class="dbox__title">Teams With 3 incomplete Evaluation</span></td>
					<td><span class="dbox__count"><?php echo $count_comp3_t?></span></td>
					</tr>
					<tr>
					<td><span class="dbox__title">Teams With 4 incomplete Evaluation</span></td>
					<td><span class="dbox__count"><?php echo $count_comp4_t?></span></td>
					</tr>
					<tr>
					<td><span class="dbox__title">Teams With 5 incomplete Evaluation</span></td>
					<td><span class="dbox__count"><?php echo $count_comp5_t?></span></td>
					</tr>
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>-->
					
				</div>
				
							
							
			</div>
		</div>
		
		<!--<div class="col-md-4" >
			<div class="dbox dbox--color-3" style="height: 470px;background:cornflowerblue;margin-block-start: -7px;">
				
				<div class="dbox__body" style="align:left">
				 <table style="margin-block-start: -43px;">
					<thead>
					<tr>
					<th align="Center"><font color="white"><h3>Results Till Date:</th>
					</tr>
					</thead>

					<tbody align="center"> 
					<tr>
					<td><span class="dbox__title">K-2</span></td>
					<td><span class="dbox__title"><?php echo $teams_k?></span></td>
					</tr>
					<tr>
					<td><span class="dbox__title">3-5</span></td>
					<td><span class="dbox__title"><?php echo $teams_3?></span></td>
					</tr>
					<tr>
					<td><span class="dbox__title">6-8</span></td>
					<td><span class="dbox__title"><?php echo $teams_6?></span></td>
					</tr>
					
					<tr>
					<td><span class="dbox__title">9-12</span></td>
					<td><span class="dbox__title"><?php echo $teams_9?></span></td>
					
					</tr>
					
					</tbody>
					</table>
					
					
                <!--<span class="dbox__count"><?php echo $complete_c_d['count']?></span>-->
					
				<!--</div>
				
				
				
								
			</div>
		</div>-->
		
		
	</div>
</div>
</body>
</html>	

