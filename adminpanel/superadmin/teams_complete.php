<?php 
include 'config.php';
$category='';
$current_year=date('Y');
extract($_POST);
if(isset($_POST['submit']))
{	
$category = $_POST['team_category'];
}
echo '
<div class="page-header">
<h3 class="page-title">
  <span class="page-title-icon  text-white me-2">
    <i class="mdi mdi-view-dashboard"></i>
  </span> Dashboard ->
  <span class="subtitle">Omplete Teams</span>
</h3>

<nav aria-label="breadcrumb">
  <ul class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">
    <button id="reloadButton" class="btn page-title-icon btn-sm text-white" onclick="location.reload();">Back</button>
    </li>
  </ul>
</nav>
</div>
<div class="row">
<div class="col-12 grid-margin">
<div class="card">
  <div class="card-body">';

  if($category!=='')
  {
  $q_team = mysqli_query($conn,"select distinct tt.id as team_id,tt.project_team_name as project_name,tt.project_description,tt.category,tt.video_pitch, tt.log_book
  from tbl_team tt where category = '$category' and log_book is not null and video_pitch is not null and year='$current_year'  and deleted=0");	
  }
  else
  {
      $q_team = mysqli_query($conn,"select distinct tt.id as team_id,tt.project_team_name as project_name,tt.project_description,tt.category,tt.video_pitch, tt.log_book
  from tbl_team tt where (video_pitch is not null and log_book!='') and year='$current_year'  and deleted=0");	
  }
  $no_row = mysqli_num_rows($q_team);

  echo'  <h4 class="card-title">Total :'.$no_row.'</h4>
    
    <div class="table-responsive">
      <table class="table team_table table1">
     
        <thead class="table-dark">
        <tr>
        <th style="white-space:nowrap; font-size:medium;" scope="col">Team Name</th>
        <th style="white-space:nowrap; font-size:medium;" scope="col">Team Description</th>
        <th style="white-space:nowrap; font-size:medium;" scope="col">Category</th>
        <th style="white-space:nowrap; font-size:medium;" scope="col">Video Pitch</th>
        <th style="white-space:nowrap; font-size:medium;" scope="col">LogBook</th>
        <th style="white-space:nowrap; font-size:medium;" scope="col">Team Members</th>
        <th style="white-space:nowrap; font-size:medium;"> View Details</th>
    </tr>
        </thead>
        <tbody>';
        
       
                            
        while ($r_team = mysqli_fetch_assoc($q_team))					
        {
            $youtube_id='';
            $url = $r_team['video_pitch'];
        if(preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
            {
                $youtube_id = $match[1];
            }
            $team_id = $r_team['team_id'];
        $team_m_q = mysqli_query($conn, "SELECT GROUP_CONCAT(s.student_first_name) AS members
        FROM tbl_team_member tm
        JOIN student s ON tm.student_id = s.student_id
        WHERE tm.team_id = $team_id");
        $team_m_r = mysqli_fetch_assoc($team_m_q);
				
				
          
          echo '	<tr> 
          <td><a href="viewteams.php?team_id='.$r_team["team_id"].'">'.$r_team["project_name"].'</a></td> 
          <td><a href="viewteams.php?team_id='.$r_team["team_id"].'">'.$r_team["project_description"].'</a></td> 
          <td><a href="viewteams.php?team_id='.$r_team["team_id"].'">'.$r_team["category"].'</a></td> ';
          
           if ($r_team['video_pitch']!='') {
              if ($youtube_id!='') { 
       
       echo'         <td><a href="'.$r_team["video_pitch"].'" target="_blank">Video Pitch</a></td> ';
               } else {
               echo ' 
              <td><a href ="http://grading.emuem.org/Team/'.$r_team['video_pitch'].'" target="_blank">Video Pitch</a></td> 
              ';
             } 
              } else {
                echo '
              <td>Video Pitch</td>' 
             ; 
             } if ($r_team['log_book']!='') {

                echo     ' <td><a href="http://grading.emuem.org/Team/ '.$r_team['log_book'].'" target="_blank">LogBook</a></td>  ';
               } else {
                    echo ' <td>LogBook</td>';  
             }
             $encoded_team_id = base64_encode($team_id);
          echo '<td>'.$team_m_r["members"].'</td>  
          <td><a href="edit_team.php?team_id='.$encoded_team_id.'"><button type="button" style="margin:0px;"  class="btn btn-gradient-success btn-sm"  onclick="edit(this)">Update</button></a></td> 
      </tr> 
       ';
           } 
        echo '</tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>';



?>