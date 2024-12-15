<?php
session_start();


if (!isset($_SESSION['logged_in_user'])) {
    header('Location: login.html'); 
    exit();
}


$userid = $_SESSION['logged_in_user'];
$user = $_SESSION['users'][$userid];
?>

<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome, <?php echo $user['name']; ?>!</h1>

    <br><br>
    <a href="viewuser.php">profile</a>
    <br><br>
    <a href="chngepass.html">change password</a>
    <br><br>
    <a href="viewuser.php">View Users</a> 
    <br><br>
    <a href="logout.php">Logout</a>
</body>
</html>
