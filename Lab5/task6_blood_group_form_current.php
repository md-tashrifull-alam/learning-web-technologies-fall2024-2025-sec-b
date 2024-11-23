<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Group Selection</title>
</head>
<body>
    <form action="task6_blood_group_form_current.php" method="post">
        <label for="blood_group">Select Blood Group:</label><br>
        <select name="blood_group">
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="O+">O+</option>
            <option value="AB+">AB+</option>
            <option value="A-">A-</option>
            <option value="B-">B-</option>
            <option value="O-">O-</option>
            <option value="AB-">AB-</option>
        </select><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $blood_group = $_POST['blood_group'];
        echo "You selected: " . $blood_group;
    }
    ?>
</body>
</html>
