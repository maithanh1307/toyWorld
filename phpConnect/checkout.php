<?php
    $conn = new mysqli('localhost', 'root', '', 'softwareengineering');

    if ($conn->connect_error) {
        die('Connection failed'. $conn->connect_error);
    }

    $sql = 'SELECT * from orders';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { 
            echo '
            <tr>
                <td>'.$row['orderID'].'</td>
                <td>
                    '.$row['email'].'
                </td>
                <td>
                    <p class="mt-4">'.$row['firstName'].'</p>
                </td>
                <td>
                    <p class="mt-4">'.$row['lastName'].'</p>
                </td>
                <td>
                    COD
                </td>
                <td>
                    <p class="mt-4">'.$row['total'].'</p>
                </td>
                <td>
                    <a href="../phpConnect/deleteCheckOut.php?orderID='.$row['orderID'].'">
                        <i class="fa-light fa-trash-o fa-xl yellow_color"></i>
                    </a>
                </td>
            </tr> ';
        }
    }
?>