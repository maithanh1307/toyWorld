<?php
    $conn = new mysqli('localhost', 'root', '', 'softwareengineering');

    if ($conn->connect_error) {
        die('Connection failed'. $conn->connect_error);
    }

    $sql = 'SELECT * from carts';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '
            <li>
                <img src="../admin/images/layout_img/'.$row['imageProducts'].'" class="img-fluid2" alt="Image">
                <h6 class="mt-2"><b>'.$row['toyName'].'</b></h6>
                <p><span class="price">'.$row['price'].'</span></p>
            </li>';
        }
    }
?>