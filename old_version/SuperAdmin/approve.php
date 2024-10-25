<?php
$tab = $_GET['table'];
$id = $_GET['id'];
$return = $_GET['return'];
$flag = $_GET['flag'];
#echo $return;
include('../database/config.php'); 
include('control.php'); 


$q = mysqli_query($con,"update tbl_user set is_approved = $flag where id = $id");
if($q)
{
	$query = mysqli_query($con, "select * from tbl_user where id = $id");
	$row = mysqli_fetch_assoc($query);
	
		  $to = $row['email'];
		  $username = $row['email'];
		  $password = $row['password'];
		  $name = $row['first_name'];
		  $user_type = $row['user_type'];
		  if($flag == 1)
		  {
	
	      	
		
         $subject = "EMUiNVENT User Registration-Acceptance";
        // $body = "Dear $name,
		//We are excited to welcome your team(s) for participation in the EMUiNVENT competition. Please login using  :Username: $username, Password: $password @ http://emuinvent.emuem.org/login.php to provide all details of the participating teams. Closer to the video submission deadline, you will receive another email with details of submission.EMUiNVENT 2021 will be entirely online. So please make sure you visit the submission system and provide all the information and materials in a timely manner.After the submission of videos is completed, a panel of professionals will judge all student projects. We will announce awards and winners in a broadcasted awards ceremony on March 12. You will receive more details about the ceremony and how to access it in the coming weeks.For more information and all deadlines, visit the https://emich.edu/emuinvent website. If you have questions, please email emu_invent@emich.edu.
		//EMUiNVENT Team";
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		 
		if(($user_type) == 'Mentor')	  { 	 
		// Compose a simple HTML email message
		$message = '<html><body>';
		$message .= '<p style="color:#080;font-size:18px;">Dear '.$name.',</p>';
		$message .= '<p style="color:#080;font-size:18px;">We are excited to welcome your team(s) for participation in the EMUiNVENT competition.You have two options for registering your teams. You can either register them and upload their materials yourself or have your teams do the registration.</p>';
		$message .= '<p style="color:#080;font-size:18px;"><b>Managing teams through mentor account:</b>To register the teams through your own mentor/ teacher account, login using the following credentials @ <a href="http://emuinvent.emuem.org/login.php">EMUiNVENT Login</a>:';
		$message .='<p style="color:#080;font-size:18px;">Username: '.$username.', Password: '.$password.' to provide all details of the participating teams.</p>';
		$message .= '<p style="color:#080;font-size:18px;"><b>Managing teams through student accounts:</b>You can also have your students submit and manage their respective projects. For the students to be ableto manage their registration and materials, please ask them to first register to the site (emuinvent.org).You will get an email to approve/disapprove their registrations (make sure you have registered as a mentor before your students start registering). Once you approve the student registration, they will be able to add their team and upload their material. <b>Please note that one student can register one team only. </b> </p>';
		$message .='<p style="color:#080;font-size:18px;">EMUiNVENT 2021 will be entirely online. So please make sure you or your team(s) visit our website and provide all the information and materials in a timely manner. February 26, 2021 is the deadline for registration.</p>';
		$message.= '<p style="color:#080;font-size:18px;">After the submission of all materials (including photo consent form, logbook, and pitch video etc) is completed, a panel of professionals will judge all student projects. </p>
		<p style="color:#080;font-size:18px;">We will announce awards and winners in a broadcasted awards ceremony on March 12th.</p>
		<p style="color:#080;font-size:18px;">You will receive more details about the ceremony and how to access it in the coming weeks. For more information and all deadlines, visit the EMUiNVENT website (www.emuinvent.org). If you have questions, please email, emu_invent@emich.edu.</p>';
		$message .= '<br><p style="color:#080;font-size:18px;">EMUiNVENT</p>';	
		$message .= '</body></html>';	
		}
		
	if(($user_type) == 'Student')	  { 	 
		// Compose a simple HTML email message
		$message = '<html><body>';
		$message .= '<p style="color:#080;font-size:18px;">Dear '.$name.',</p>';
		$message .= '<p style="color:#080;font-size:18px;">We are excited to welcome you and your team to the EMUiNVENT competition.</p>';
		$message .= '<p style="color:#080;font-size:18px;">Please login using the following credentials @ <a href="http://emuinvent.emuem.org/login.php">EMUiNVENT Login</a>:';
		$message .='<p style="color:#080;font-size:18px;">Username: '.$username.', Password: '.$password.' to provide all details of the participating teams.</p>';
		$message .='<p style="color:#080;font-size:18px;">EMUiNVENT 2021 will be entirely online. So please make sure you or your team visit our website and provide all the information and materials in a timely manner. February 26, 2021 is the deadline for registration and submission of all material. The submission site will be closed after Feb 26, 2021. </p>';
		$message.= ' <p style="color:#080;font-size:18px;">After the submission of all materials (including photo consent form, logbook, and pitch video, etc) is completed, a panel of professionals will judge all student projects. </p>
		<p style="color:#080;font-size:18px;">We will announce awards and winners in a broadcasted awards ceremony on March 12th.</p>
		<p style="color:#080;font-size:18px;">You will receive more details about the ceremony and how to access it in the coming weeks. For more information and all deadlines, visit the EMUiNVENT website (www.emuinvent.org). If you have questions, please email, emu_invent@emich.edu.</p>';
		$message .= '<br><p style="color:#080;font-size:18px;">EMUiNVENT</p>';	
		$message .= '</body></html>';	
		
		$student_id = $row['id'];
		$student_first_name = $row['first_name'];
		$student_last_name = $row['last_name'];
		$q_students = mysqli_query($con,"select * from tbl_team_member where student_id = $student_id and deleted = 0");
		$c_r = mysqli_num_rows($q_students);
		if($c_r < 1) { 
		mysqli_query($con,"insert into tbl_team_member (id,team_id,student_id,student_first_name,student_last_name) values (NULL,NULL,$student_id,'$student_first_name','$student_last_name')");
		}
		
		}
		
	if(($user_type) == 'General User') {
		$message = '<html><body>';
		$message .= '<p style="color:#080;font-size:18px;">Dear '.$name.',</p>';
		$message .= '<p style="color:#080;font-size:18px;">We are excited to welcome you to EMUiNVENT website. You should be able to view student presentation from this year & previous year.</p>';
		$message .= '<p style="color:#080;font-size:18px;">Please login using the following credentials @ <a href="http://emuinvent.emuem.org/login.php">EMUiNVENT Login</a>:';
		$message .='<p style="color:#080;font-size:18px;">Username: '.$username.', Password: '.$password.'.</p>';
		$message.= '<p style="color:#080;font-size:18px;"> If you have questions, please email emu_invent@emich.edu.</p>';
		$message .= '<br><p style="color:#080;font-size:18px;">EMUiNVENT</p>';	
		$message .= '</body></html>';
		
	}		
    if (mail($to, $subject, $message, $headers)) {
		
		  echo 'Your mail has been sent successfully.';
				
			
        //$message ="Dear $name,
		//We are excited to welcome your team(s) for participation in the EMUiNVENT competition. Please login using  :Username: $username, Password: $password @ http://emuinvent.emuem.org/login.php to provide all details of the participating teams. Closer to the video submission deadline, you will receive another email with details of submission.EMUiNVENT 2021 will be entirely online. So please make sure you visit the submission system and provide all the information and materials in a timely manner.After the submission of videos is completed, a panel of professionals will judge all student projects. We will announce awards and winners in a broadcasted awards ceremony on March 12. You will receive more details about the ceremony and how to access it in the coming weeks.For more information and all deadlines, visit the https://emich.edu/emuinvent website. If you have questions, please email emu_invent@emich.edu.
		//EMUiNVENT Team";
         } else {
       echo 'Unable to send email. Please try again.';
         }
		
	}
	 else 
		{
		 $subject = "EMUiNVENT User Registration-Rejection";
        $headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		 
		if(($user_type) == 'Mentor')	  { 	 
		// Compose a simple HTML email message
		$message = '<html><body>';
		$message .= '<p style="color:#080;font-size:18px;">Dear '.$name.',</p>';
		$message .= '<p style="color:#080;font-size:18px;">Thank you for signing up to participate in EMUiNVENT. We reviewed the information you provided. Unfortunately, at this time you do not meet the requirements for participation in EMUiNVENT.  </p>';
		$message.= ' <p style="color:#080;font-size:18px;">If you think this is in error or if you can provide more information about your eligibility, please email us at emu_invent@emich.edu</p>
		<p style="color:#080;font-size:18px;">EMUiNVENT 2021 will be entirely online.</p>
		<p style="color:#080;font-size:18px;">For more information and all deadlines, visit the <a href="https://emich.edu/emuinvent">EMUiNVENT website</a>. If you have questions, please email emu_invent@emich.edu.</p>';
		$message .= '<br><p style="color:#080;font-size:18px;">EMUiNVENT</p>';	
		$message .= '</body></html>';	
		}
		else {
		$message = '<html><body>';
		$message .= '<p style="color:#080;font-size:18px;">Dear '.$name.',</p>';
		$message .= '<p style="color:#080;font-size:18px;">Thank you for your interest in the EMUiNVENT. Unfortunately we will not be able to approve your registration request.</p>';
		$message.= '<p style="color:#080;font-size:18px;">If you have questions, please email emu_invent@emich.edu.</p>';
		$message .= '<br><p style="color:#080;font-size:18px;">EMUiNVENT</p>';	
		$message .= '</body></html>';		
		}
        if (mail($to, $subject, $message, $headers)) {
		
		  #echo 'Your mail has been sent successfully.';
				
			
        //$message ="Dear $name,
		//We are excited to welcome your team(s) for participation in the EMUiNVENT competition. Please login using  :Username: $username, Password: $password @ http://emuinvent.emuem.org/login.php to provide all details of the participating teams. Closer to the video submission deadline, you will receive another email with details of submission.EMUiNVENT 2021 will be entirely online. So please make sure you visit the submission system and provide all the information and materials in a timely manner.After the submission of videos is completed, a panel of professionals will judge all student projects. We will announce awards and winners in a broadcasted awards ceremony on March 12. You will receive more details about the ceremony and how to access it in the coming weeks.For more information and all deadlines, visit the https://emich.edu/emuinvent website. If you have questions, please email emu_invent@emich.edu.
		//EMUiNVENT Team";
         } else {
					echo 'Unable to send email. Please try again.';
         }
		}			
		
}
else {
	
}
mysqli_close($con);
echo "<script>alert('Updated Sucessfully')</script>";

ob_start();   
 if(strpos($return,'.php')!==false)
{
	header("location:$return");
}else
{
header("location: $return.php");   
}
 ob_flush();
      exit(0);
?>