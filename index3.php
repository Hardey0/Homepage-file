<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index3.php" method="post">
    <label>username:</label><br>
    <input type = "text" name="username"> <br>
    <label>Password:</label><br>
    <input type = "password" name="password"><br>
    <!-- <input type="text" name="login" placeholder="login"><br> -->
    <input type="submit" value="log in">
</form>

</body>
</html>

<?php
echo "{$_POST["username"]} <br>";
echo "{$_POST["password"]} <br>";
?> 
