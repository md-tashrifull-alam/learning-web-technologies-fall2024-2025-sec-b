<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1: Retain Name Input</title>
</head>
<body>
    <h1>Enter Your Name</h1>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input 
            type="text" 
            id="name" 
            name="name" 
            value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>"
        >
        <button type="submit">Submit</button>
    </form>

    <?php if (isset($_POST['name'])): ?>
        <p>You entered: <?php echo htmlspecialchars($_POST['name']); ?></p>
    <?php endif; ?>
</body>
</html>
