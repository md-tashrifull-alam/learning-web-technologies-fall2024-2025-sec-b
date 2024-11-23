<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1: Name Input</title>
</head>
<body>
    <h1>Task 1: Display Name on Current Page</h1>
    
    <!-- Form to take name input and display it -->
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']);
        echo "<p>You entered: $name</p>";
    }
    ?>
</body>
</html>
