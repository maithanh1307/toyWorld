<?php
    require_once 'connectData.php';
    if(isset($_GET['email'])) {
        $email = $_GET['email'];
    }
    $sql = "DELETE FROM user WHERE email = '$email'";
    $query = mysqli_query($conn, $sql);
    header('Location: ../admin/contact1.php');
?>