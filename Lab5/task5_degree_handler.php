<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['degree'])) {
        $degrees = $_POST['degree'];
        echo "You selected: " . implode(", ", $degrees);
    } else {
        echo "No degrees selected.";
    }
}
?>
