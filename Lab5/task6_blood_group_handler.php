<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $blood_group = $_POST['blood_group'];
    echo "You selected: " . $blood_group;
}
?>
