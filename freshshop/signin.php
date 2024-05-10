<?php
require_once('../phpConnect/signin_db.php');
require_once('../phpConnect/signup_db.php');
session_start();
// if (isset($_SESSION['email'])) {
//     header('Location:index.php');
//     die();
// }
// hihi
$email = '';
$password = '';
$error = ''; 

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login_result = login($email, $password);
    if ($login_result === 'admin') {
        // If login as admin, redirect to admin page
        header('Location: ../admin/index.php');
        exit();
    } elseif ($login_result === false) {
        $error = 'Wrong email or password';
    } else {
        // For regular user login
        $_SESSION['email'] = $email;
        header('Location: index.php');
        exit();
    }
}

?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin & Register Form</title>
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo01.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">


    <script src="js/scriptS.js" defer></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <span class="hamburger-btn material-symbols-rounded">menu</span>
            <a href="#" class="logo">
                <img src="images/logo01.png" alt="logo">
                <h2>Miniature World</h2>
            </a>
            <ul class="links">
                <span class="close-btn material-symbols-rounded">close</span>
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
            <button href="index.php " class="login-btn">LOG IN</button>
        </nav>
    </header>

    <div class="blur-bg-overlay"></div>
    <div class="form-popup">
         <span class="close-btn material-symbols-rounded">close</span>
        <div class="form-box login">
            <div class="form-details ">
                <h2>Welcome Back</h2>
                <p>Please login using your personal information to stay connected with us.</p>
            </div>
            <div class="form-content">
                <h2 class="headcomment">LOGIN</h2>
                <form action="" method = "post">
                    <div class="input-field">
                        <input type="text" required name="email">
                        <label>Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" required name="password">
                        <label>Password</label>
                    </div>
                    <?php 
                        if ($error !== '') {
                            echo "<script>";
                            echo "alert('$error');"; // Hiển thị thông báo alert với nội dung từ biến $error
                            echo "</script>";
                        }
                    ?>

                    <a href="#" class="forgot-pass-link">Forgot password?</a>
                    <button type="submit">Log In</button>
                </form>
                <div class="bottom-link">
                    Don't have an account?
                    <a href="#" id="signup-link">Signup</a>
                </div>
            </div>
        </div> 
         <div class="form-box signup">
            <div class="form-details">
                <h2>Create Account</h2>
                <p>To become a part of our community, please sign up using your personal information.</p>
            </div>
            <div class="form-content">
                <h2 class="headcomment">SIGNUP</h2>
                <form action="#" method = "post">
                    <div class="input-field">
                        <input type="text" required name="email_signup">
                        <label>Enter your email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" required name="password_signup">
                        <label>Create password</label>
                    </div>
                    <div class="policy-text">
                        <input type="checkbox" id="policy">
                        <label for="policy">
                            I agree the
                            <a href="#" class="option">Terms & Conditions</a>
                        </label>
                    </div>
                    <button type="submit" name="register_btn">Sign Up</button>
                    
                </form>
                <div class="bottom-link">
                    Already have an account? 
                    <a href="#" id="login-link">Login</a>
                </div>
            </div>
        </div> 
    </div>
</body>
</html>