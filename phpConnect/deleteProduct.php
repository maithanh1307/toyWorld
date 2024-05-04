<?php
    require_once 'connectData.php';
    if(isset($_GET['productID'])) {
        $productID = $_GET['productID'];
    }
    $sql = "DELETE FROM products WHERE productID = $productID";
    $query = mysqli_query($conn, $sql);
    header('Location: ../admin/products.php');
    
?>