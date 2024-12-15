<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $userid = $_POST['userid'];
    $user_type = $_POST['user_type'];  
    $name = $_POST['name'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

   
    if ($password != $confirm_password) {
        echo "Passwords do not match!";
        exit;
    }

   
    $_SESSION['users'][$userid] = [
        'userid' => $userid,
        'user_type' => $user_type,
        'password' => $password,
        'name' => $name,
    ];

   
    header('Location: login.html');
    exit();
}
?>
