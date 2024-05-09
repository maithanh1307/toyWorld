<?php
    require_once('connectData.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Kiểm tra xem nút "Save" đã được ấn hay chưa
        if (isset($_POST["save_cart_btn"])) {
            // Lấy dữ liệu từ form
            $toyName = $_POST["toyName"];
            $newQuantity = $_POST["quantity"];
            $newTotalCost = $_POST["total_cost"];
            echo $toyName;
            echo $newQuantity;
            echo $newTotalCost;
            // Cập nhật dữ liệu trong cơ sở dữ liệu
            $sql = "UPDATE carts SET quantity = ?, total = ? WHERE toyName = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("iis", $newQuantity, $newTotalCost, $toyName);
    
            if ($stmt->execute()) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
    
            // Đóng prepared statement
            $stmt->close();
        }
    }
?>
