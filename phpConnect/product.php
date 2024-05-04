<?php
    $conn = new mysqli('localhost', 'root', '', 'softwareengineering');

    if ($conn->connect_error) {
        die('Connection failed'. $conn->connect_error);
    }

    $sql = 'SELECT * from products';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { 
            echo '
            <tr>
                <td>'.$row['productID'].'</td>
                <td>
                    <img style="width: 60px" src="../admin/images/layout_img/'.$row['imageProducts'].'" class="img-fluid">
                </td>
                <td>
                    <p class="mt-4">'.$row['toyName'].'</p>
                </td>
                <td>
                    <p class="mt-4">'.$row['typeOfToy'].'</p>
                </td>
                <td>
                    <p class="mt-4">'.$row['Description'].'</p>
                </td>
                <td>
                    <p class="mt-4">'.$row['price'].'</p>
                </td>
                <td>
                    <a href="#">
                        <i class="fa-light fa-trash-o fa-xl yellow_color"></i>
                    </a>
                    <i class="fa-light fa-pipe fa-xl"></i>
                    <a href="#">
                        <i class="fa-light fa-pencil fa-xl yellow_color"></i>
                    </a>
                </td>
            </tr> ';
        }
    }
?>