<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
session_start();
include './adminpanel/superadmin/config.php';
if (isset($_POST['login'])) {
$userEmail = $_POST['email'];
$userPassword = $_POST['password'];
$login_q= mysqli_query($conn, "select * from tbl_user where email = '$userEmail' and password = '$userPassword'");
$login_d = mysqli_fetch_assoc($login_q);

if (mysqli_num_rows($login_q) > 0) {
$_SESSION['id']=$login_d['id'];
$_SESSION['name'] = $login_d['first_name'];
$_SESSION['user_type'] = $login_d['user_type'];
$_SESSION['email'] = $login_d['email'];
        if ($_SESSION['user_type'] == 'SuperUser') {
            header("Location:././adminpanel/superadmin/grading.php");
        } elseif ($_SESSION['user_type'] == 'Organizer') {
            header("Location:admin/admin_home.php");
        } elseif ($_SESSION['user_type'] == 'Judge') {
            header("Location:././adminpanel/judges/home.php");
        } elseif ($_SESSION['user_type'] == 'Mentor') {
            header("Location:././adminpanel/mentor/home.php");
        } elseif ($_SESSION['user_type'] == 'General User') {
            header("Location:././adminpanel/generaluser/home.php");
        } elseif ($_SESSION['user_type'] == 'Student') {
            $userid = $_SESSION['id'];
            $usertype = $_SESSION['user_type'];
            $login_q_s = mysqli_query($conn, "select * from tbl_student_mentor where student_id = $userid and approve = 1");
            $c_rows = mysqli_num_rows($login_q_s);
            if ($c_rows > 0) {
                $row = mysqli_fetch_assoc($login_q_s);
                $_SESSION['mentor_id'] = $row['mentor_id'];
                header("Location:././adminpanel/student/home.php");
            } else {
                $_SESSION['error_msg'] = "User not approved";
                header("Location: login.php");
            }
        } else {
$_SESSION['error_msg']="Invalid LogIn";
header('Location:login.php');
        }
    } else {
        $_SESSION['error_msg']="Invalid LogIn";
        header('Location:login.php');
    }
}
?>
