<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['degree']) && count($_POST['degree']) >= 2) {
        echo "<h2>You selected the following degrees:</h2>";
        echo "<ul>";
        foreach ($_POST['degree'] as $degree) {
            echo "<li>" . htmlspecialchars($degree) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "You must select at least two degrees!";
    }
} else {
    echo "Invalid request!";
}
?>
