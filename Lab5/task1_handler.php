<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    echo "Name entered: " . $name;
} else {
    echo "No data received.";
}
?>
