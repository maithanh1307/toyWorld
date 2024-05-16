<?php
    require_once 'connectData.php';
    if(isset($_GET['orderID'])) {
        $orderID = $_GET['orderID'];
    }
    $sql = "DELETE FROM orders WHERE orderID = '$orderID'";
    $query = mysqli_query($conn, $sql);
    header('Location: ../admin/checkout.php');
?>