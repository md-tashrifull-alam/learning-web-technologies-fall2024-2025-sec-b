<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender Selection</title>
</head>
<body>
    <form action="task4_gender_form_retained.php" method="post">
        <label for="gender">Select Gender:</label><br>
        <input type="radio" id="male" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Male') echo 'checked'; ?>>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Female') echo 'checked'; ?>>
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="Other" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Other') echo 'checked'; ?>>
        <label for="other">Other</label><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gender = $_POST['gender'];
        echo "You selected: " . $gender;
    }
    ?>
</body>
</html>
