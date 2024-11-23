<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree Selection</title>
</head>
<body>
    <form action="task5_degree_form_current.php" method="post">
        <label for="degrees">Select Degrees:</label><br>
        <input type="checkbox" name="degree[]" value="Bachelor"> Bachelor<br>
        <input type="checkbox" name="degree[]" value="Master"> Master<br>
        <input type="checkbox" name="degree[]" value="PhD"> PhD<br>
        <input type="submit" value="Submit">
    </form>

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
</body>
</html>
