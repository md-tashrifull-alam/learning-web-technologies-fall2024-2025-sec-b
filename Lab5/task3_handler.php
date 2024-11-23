<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dob = htmlspecialchars($_POST['dob']);
    echo "Date of Birth entered: " . $dob;
} else {
    echo "No data received.";
}
?>
