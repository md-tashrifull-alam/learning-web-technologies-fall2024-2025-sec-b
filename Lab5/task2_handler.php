<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    echo "Email entered: " . $email;
} else {
    echo "No data received.";
}
?>
