<?php
    $conn = mysqli_connect('localhost', 'root', '', 'softwareengineering');
    if ($conn) {
        mysqli_query($conn, "SET NAMES 'UTF8'");
        //echo 'successfully';
    }
    else {
        echo 'failed connect';
    }
?>