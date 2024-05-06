<?php
    require_once 'connectData.php';
    if(isset($_GET['customerID'])) {
        $customerID = $_GET['customerID'];
    }
    $sql = "DELETE FROM user WHERE customerID = '$customerID'";
    $query = mysqli_query($conn, $sql);
    header('Location: ../admin/contact1.php');
?>