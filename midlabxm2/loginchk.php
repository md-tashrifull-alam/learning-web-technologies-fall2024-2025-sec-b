<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_userid = $_POST['userid'];
    $login_password = $_POST['password'];

    
    if (isset($_SESSION['users'][$login_userid])) {
       
        $user = $_SESSION['users'][$login_userid];

        
        if ($user['password'] === $login_password) {
            
            $_SESSION['logged_in_user'] = $login_userid;

            
            header('Location: home.php');
            exit();
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "No user found with that User ID!";
    }
} else {
    
    header('Location: login.html');
    exit();
}
?>
