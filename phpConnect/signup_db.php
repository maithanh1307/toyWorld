<?php
require_once('connectData.php');
global $conn;
if (isset($_POST['register_btn'])) {
    $email = $_POST['email_signup'];
    $pass = $_POST['password_signup'];

    $check_email_query = "SELECT email FROM user WHERE email ='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($conn,$check_email_query);

    if (mysqli_num_rows($check_email_query_run)>0) {
        $_SESSION['status'] = "Email already exists";
    }
    else {
        $query = "INSERT INTO user (email,password) VALUES ('$email','$pass')";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            echo '<script>';
            echo 'alert("Sign up successfully!");';
            echo 'window.location.href = "signin.php";'; 
            echo '</script>';
            exit();
        }
        else {
            $_SESSION['status'] = "Failed";
            header("Location: signin.php");
        }
    }
 }
?>
