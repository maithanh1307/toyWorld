<?php
    $conn = new mysqli('localhost', 'root', '', 'softwareengineering');

    if ($conn->connect_error) {
        die('Connection failed'. $conn->connect_error);
    }

    $sql = 'SELECT * from feedbacks';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '
            <tr style="text-align: center;">
                <td>'.$row['feedBackID'].'</td>
                <td>
                    <p class="mt-4">'.$row['email'].'</p>
                </td>
                <td>
                    <p class="mt-4">'.$row['comment'].'</p>
                </td>
            </tr> ';
        }
    }
?>