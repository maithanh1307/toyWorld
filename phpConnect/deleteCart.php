<?php
    require_once 'connectData.php';

    if(isset($_GET['productID'])) {
        $productID = $_GET['productID'];
        $sql = "DELETE FROM carts WHERE productID = ?";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $productID); 

        if ($stmt->execute()) {
            header('Location: ../freshshop/cart.php');
            exit();
        } else {
            echo "Lỗi: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
?>
