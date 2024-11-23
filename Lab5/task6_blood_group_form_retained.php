<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Group Selection</title>
</head>
<body>
    <form action="task6_blood_group_form_retained.php" method="post">
        <label for="blood_group">Select Blood Group:</label><br>
        <select name="blood_group">
            <option value="A+" <?php if(isset($_POST['blood_group']) && $_POST['blood_group'] == 'A+') echo 'selected'; ?>>A+</option>
            <option value="B+" <?php if(isset($_POST['blood_group']) && $_POST['blood_group'] == 'B+') echo 'selected'; ?>>B+</option>
            <option value="O+" <?php if(isset($_POST['blood_group']) && $_POST['blood_group'] == 'O+') echo 'selected'; ?>>O+</option>
            <option value="AB+" <?php if(isset($_POST['blood_group']) && $_POST['blood_group'] == 'AB+') echo 'selected'; ?>>AB+</option>
            <option value="A-" <?php if(isset($_POST['blood_group']) && $_POST['blood_group'] == 'A-') echo 'selected'; ?>>A-</option>
            <option value="B-" <?php if(isset($_POST['blood_group']) && $_POST['blood_group'] == 'B-') echo 'selected'; ?>>B-</option>
            <option value="O-" <?php if(isset($_POST['blood_group']) && $_POST['blood_group'] == 'O-') echo 'selected'; ?>>O-</option>
            <option value="AB-" <?php if(isset($_POST['blood_group']) && $_POST['blood_group'] == 'AB-') echo 'selected'; ?>>AB-</option>
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
