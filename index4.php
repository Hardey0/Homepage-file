<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = null;
}
// get cookie
if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#about">About</a>
        <?php
        if ($username == null) {
        ?>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        <?php
        } else {
        ?>
            <a href="#">Logout</a>
        <?php
        }
        ?>
    </div>
    <div>
        <h1>Welcome</h1>
        <?php
        if ($username == null) {
            echo "<p>Please login to continue</p>";
        } else {
            echo "<p>Welcome to your page $username</p>";
        }
        ?>
        
</div>
</body>