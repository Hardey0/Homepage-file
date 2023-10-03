<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
.center-form {
  justify-content: center;
  align-items: center;
  height: 100vh;
}

form {
  width: 400px;
  padding: 20px;
  background-color: #f1f1f1;
  border-radius: 5px;
}

h4 {
  text-align: center;
  margin-bottom: 20px;
}

input[type="text"], input[type="password"], input[type="tel"], input[type="email"] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 4px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  border-radius: 4px;
  width: 100%;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

</style>

</head>
<body>
    <?php
    if (isset($_GET['err'])) {
        $error = $_GET['err'];
        echo "<h4 style='color:red'>$error</h4>";
    }
    ?>
    <div class="center-form">
    <form method="post" action="process.php">
    <h4>Register</h4>
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required><br>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required><br>

  <label for="confirm_password">Confirm Password:</label>
  <input type="password" id="confirm_password" name="confirm_password" required><br>

  <label for="email">Email:</label>
  <input type="text" id="email" name="email" required><br>

  <label for="gender">Gender:</label>
  <select id="gender" name="gender" required>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
  </select><br>

  <label for="phone">Phone Number:</label>
  <input type="tel" id="phone" name="phone" required><br>

  <input type="submit" value="Submit" name="registration">
</form>
    </div>
</body>
</html>

