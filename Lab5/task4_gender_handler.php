<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
        echo "You selected: " . $gender;
    } else {
        echo "No gender selected.";
    }
}
?>
