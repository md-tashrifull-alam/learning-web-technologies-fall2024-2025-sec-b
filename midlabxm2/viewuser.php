<?php
session_start();


if (!isset($_SESSION['logged_in_user'])) {
    header('Location: login.html'); 
    exit();
}


$users = $_SESSION['users'];
?>

<html>
<head>
    <title>View Users</title>
</head>
<body>
    <h2>User List</h2>
    <a href="home.php">Back</a> | 
    <a href="logout.php">Logout</a>
    <br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>User Type</th>
        </tr>

        <?php
       
        foreach ($users as $userid => $user) {
        ?>
        <tr>
            <td><?php echo $user['userid']; ?></td>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['user_type']; ?></td> 
        </tr>
        <?php } ?>
    </table>
</body>
</html>
