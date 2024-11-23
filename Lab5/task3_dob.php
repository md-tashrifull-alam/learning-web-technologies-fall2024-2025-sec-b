<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3: Date of Birth Input</title>
</head>
<body>
    <h1>Task 3: Date of Birth Input</h1>

    <!-- Form to process and display on the same page -->
    <form action="" method="post">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" value="<?php echo isset($_POST['dob']) ? htmlspecialchars($_POST['dob']) : ''; ?>">
        <button type="submit">Submit</button>
    </form>

    <?php 
    // Display the submitted date
    if (isset($_POST['dob']) && !empty($_POST['dob'])): 
    ?>
        <p>You entered: <?php echo htmlspecialchars($_POST['dob']); ?></p>
    <?php endif; ?>
</body>
</html>
