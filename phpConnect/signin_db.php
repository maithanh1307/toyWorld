<?php
require_once('connectData.php');

function login($username, $password) {
    global $conn;

    $sql = "SELECT * FROM user WHERE email = ?";
    
    $stm = $conn->prepare($sql);
    $stm->bind_param('s', $username);
    
    if (!$stm->execute())
        return false;

    $result = $stm->get_result();
    if ($result->num_rows !== 1) 
        return false;

    $data = $result->fetch_assoc();

    // Check if passwords match
    if ($password === $data['passWord']) {
        return true;
    } else {
        return false;
    }
}
?>
