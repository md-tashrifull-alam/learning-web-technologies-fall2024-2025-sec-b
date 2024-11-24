<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    echo "Email entered: " . $email;
} else {
    echo "No data received.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = htmlspecialchars($_POST['password']);
    echo "Password entered: " . $password;
} else {
    echo "No data received.";
}

?>
