<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2: Retain Email Input</title>
</head>
<body>
    <h1>Enter Your Email</h1>
    <form action="" method="post">
        <label for="email">Email:</label>
        <input 
            type="email" 
            id="email" 
            name="email" 
            value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
        >
        <button type="submit">Submit</button>
    </form>

    <?php if (isset($_POST['email'])): ?>
        <p>You entered: <?php echo htmlspecialchars($_POST['email']); ?></p>
    <?php endif; ?>
</body>
</html>
