<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once('./adminpanel/superadmin/database.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'vendor/autoload.php';

class API extends DBConnection
{
    public function __construct()
    {
        parent::__construct();
    }
    public function __destruct()
    {
        parent::__destruct();
    }
    function registration()
    {
        //Import PHPMailer classes into the global namespace
        //These must be at the top of your script, not inside a function







        function sendemail($e1, $m1, $message)
        {
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'inventemu@gmail.com';                     //SMTP username
                $mail->Password   = 'pjit iztk ggsw scge';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('inventemu@gmail.com', 'EMUINVENT');
                $mail->addAddress($e1,'');     //Add a recipient



                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = $m1;
                $email_template = $message;
                $mail->Body    = $email_template;
                // $mail->addCustomHeader('Header-Name', $header);


                $mail->send();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
        extract($_POST);
        $first_name = $this->conn->real_escape_string($_POST['fname']);
        $last_name = $this->conn->real_escape_string($_POST['lname']);
        $phone = $this->conn->real_escape_string($_POST['contact']);
        $address = $this->conn->real_escape_string($_POST['address']);
        $email = $this->conn->real_escape_string($_POST['email']);
        $password = $this->conn->real_escape_string($_POST['password']);
        $user_type = $this->conn->real_escape_string($_POST['category']);
        $year = date('Y');

        $existing_email_query = "SELECT * FROM tbl_user WHERE email = '$email'";
        $existing_email_result = $this->conn->query($existing_email_query);

        if ($existing_email_result->num_rows > 0) {
            $resp['status'] = 'Failed';
            $resp['msg'] = 'Email already exists';
        } else {
            $to = $email;
             $subject = "EMUiNVENT Sign Up Confirmation";

            

            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            $mentor_id = $_POST['mentor_id'];
            $q_m = $this->conn->query("select * from tbl_user where id = $mentor_id");
            $r_m = $q_m->fetch_assoc();
            $mentor_name = $r_m['first_name'];
            $message = 'Please Wait for 24 Hours to get Registered. If you are a Student Please Contact your Mentor. Others may Contact emu_invent@emich.edu';
            $message_admin = '<html><body>';
            $message_admin .= '<p style="color:#080;font-size:18px;">Dear Admin,</p>';
            $message_admin .= '<p style="color:#080;font-size:18px;">The following user requested to register for the EMUiNVENT. Please find the details below:</p>';
            $message_admin .= '<p style="color:#080;font-size:18px;">User Type: ' . $user_type . '</p>';
            $message_admin .= '<p style="color:#080;font-size:18px;">User first name: ' . $first_name . '</p>';
            $message_admin .= '<p style="color:#080;font-size:18px;">User last name: ' . $last_name . '</p>';
            $message_admin .= '<p style="color:#080;font-size:18px;">User email: ' . $email . '</p>';
            $message_admin .= '<p style="color:#080;font-size:18px;">User phone: ' . $phone . '</p>';
            $message_admin .= '<p style="color:#080;font-size:18px;">User address: ' . $address . '</p>';
            // $message1 .= '<p style="color:#080;font-size:18px;"> Please approve or disapprove the team/student(s) using the following <a href="https://emuinvent.infoedmedia.com/login.php">link</a> and login with your credentials and click on <b>Approve/Disapprove student registration</b>, without which student will not be able to upload their details for the EMUiNVENT competition.</p>';
            $message_admin .= '<br><p style="color:#080;font-size:18px;">EMUiNVENT</p>';
            $message_admin .= '</body></html>';

            $subject1 = "EMUiNVENT New User Registration - User type - $user_type ";




            $to1 = 'yaseen@infoedmedia.com';


            $message1 = '<html><body>';
            $message1 .= '<p style="color:#080;font-size:18px;">Dear Admin,</p>';
            $message1 .= '<p style="color:#080;font-size:18px;">The following user requested to register for the EMUiNVENT and have selected '.$mentor_name.' as their mentor. Please find the details below:</p>';
            $message1 .= '<p style="color:#080;font-size:18px;">User Type: ' . $user_type . '</p>';
            $message1 .= '<p style="color:#080;font-size:18px;">User first name: ' . $first_name . '</p>';
            $message1 .= '<p style="color:#080;font-size:18px;">User last name: ' . $last_name . '</p>';
            $message1 .= '<p style="color:#080;font-size:18px;">User email: ' . $email . '</p>';
            $message1 .= '<p style="color:#080;font-size:18px;">User phone: ' . $phone . '</p>';
            $message1 .= '<p style="color:#080;font-size:18px;">User address: ' . $address . '</p>';
            // $message1 .= '<p style="color:#080;font-size:18px;"> Please approve or disapprove the team/student(s) using the following <a href="https://emuinvent.infoedmedia.com/login.php">link</a> and login with your credentials and click on <b>Approve/Disapprove student registration</b>, without which student will not be able to upload their details for the EMUiNVENT competition.</p>';
            $message1 .= '<br><p style="color:#080;font-size:18px;">EMUiNVENT</p>';
            $message1 .= '</body></html>';

            $query = "INSERT INTO tbl_user (first_name, last_name, phone, email, password, user_type, address,Year) VALUES ('$first_name', '$last_name', '$phone', '$email', '$password', '$user_type', '$address','$year')";

            if ($this->conn->query($query)) {
                if ($user_type == 'Student') {
                    $id = $this->conn->insert_id;
                    $mentor_id = $_POST['mentor_id'];
                    $q_m = $this->conn->query("select * from tbl_user where id = $mentor_id");
                    $r_m = $q_m->fetch_assoc();

                    $query_m = "insert into tbl_student_mentor (student_id,mentor_id) values ('$id','$mentor_id')";
                    $result = $this->conn->query($query_m);


                    $mentor_email = $r_m['email'];
                    $mentor_name = $r_m['first_name'];

                    $to2 = $mentor_email;



                    $subject3 = "EMUiNVENT New Student Approval";



                    $message3 = '<html><body>';
                    $message3 .= '<p style="color:#080;font-size:18px;">Dear ' . $mentor_name . ',</p>';
                    $message3 .= '<p style="color:#080;font-size:18px;">The following student requested to register for the EMUiNVENT and have selected you as a teacher/Mentor	. Please find the details below:</p>';
                    $message3 .= '<p style="color:#080;font-size:18px;">User Type: ' . $user_type . '</p>';
                    $message3 .= '<p style="color:#080;font-size:18px;">User first name: ' . $first_name . '</p>';
                    $message3 .= '<p style="color:#080;font-size:18px;">User last name: ' . $last_name . '</p>';
                    $message3 .= '<p style="color:#080;font-size:18px;">User email: ' . $email . '</p>';
                    $message3 .= '<p style="color:#080;font-size:18px;">User phone: ' . $phone . '</p>';
                    $message3 .= '<p style="color:#080;font-size:18px;">User address: ' . $address . '</p>';
                    $message3 .= '<p style="color:#080;font-size:18px;"> Please approve or disapprove the team/student(s) using the following <a href="https://emuinvent.infoedmedia.com/login.php">link</a> and login with your credentials and click on <b>Approve/Disapprove student registration</b>, without which student will not be able to upload their details for the EMUiNVENT competition.</p>';
                    $message3 .= '<br><p style="color:#080;font-size:18px;">EMUiNVENT</p>';
                    $message3 .= '</body></html>';
                    // email is sending to mentor
                    sendemail($to2, $subject3, $message3);
                    sendemail($to1, $subject1, $message1);
                }else{
                    sendemail($to1, $subject1, $message_admin);
                }
                    // email is sending to student 
                    sendemail($to,$subject,$message) ;


                        $resp['status'] = 'Success';
                        $resp['msg'] = "Sign up confirmation has been sent to Admin!";

                } else {
                    $resp['status'] = 'Failed';
                    $resp['msg'] = 'Unable to Register. Please try again.';
                }
            }

            return json_encode($resp);
        }
    }


$action = isset($_GET['action']) ? $_GET['action'] : '';
$api = new API();
switch ($action) {


    case ('registration'):
        echo $api->registration();
        break;

    default:
        echo json_encode(array('status' => 'failed', 'error' => 'unknown action'));
        break;
}
