
<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }
    .container h2 {
      text-align: center;
    }
    .container form {
      display: flex;
      flex-direction: column;
    }
    .container label {
      margin-bottom: 5px;
      font-weight: bold;
    }
    .container input[type="text"],
    .container input[type="password"] {
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }
    .container input[type="submit"] {
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .container input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login Form</h2>
    <?php
    if (isset($_GET['err'])) {
        echo "<h4 style='color: red'>Invalid email or password<h4>";
    }
    ?>
    <form method="post" action="process.php">
      <label for="email">Email:</label>
      <input type="text" id="email" name="email" placeholder="Enter your email">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password">
      <input type="submit" value="Login" name="login">
    </form>
  </div>
</body>
</html>
