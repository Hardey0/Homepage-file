<?php
session_start();
// connect to database using mysqli procedural technique
$host = "localhost";
$username = "pediforte";
$password = "pedifortedb";
$db_name = "php_auth";

// Create connection
$conn = mysqli_connect($host, $username, $password, $db_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['registration'])) {
    $name = $_POST['username'];
    $password = $_POST['password'];
    $confirm_p = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    // validate form
    if($password !== $confirm_p) {
        echo "don't try it";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location: register.php?err=email');
    }
    if (strlen($phone) < 11) {
        header('location: register.php?err=phone');
    }
    if ($gender === 'gender') {
        $g = "male";
    } else {
        $g = "female";
    }
    $hashed_password = hash('sha256', $password);
    $sql = "INSERT INTO users (username, password, email, phone, gender)
    VALUES('$name','$hashed_password', '$email', '$phone', '$g')";

    try{
        mysqli_query($conn, $sql);
        echo "Reg succcessful!";
    } catch(Exception $e) {
        echo "Error happened: $e";
    }
}

// if (isset($_POST ['logi'])) {
//     $email= $_POST['email'];
//     $password = $_POST['password'];
//     $query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
//     try{
//         $data = mysqli_query($conn, $query);
//     var
//     }
// }
// process login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    try {
        $data = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($data);
        if ($user == null) {
            // no user with email found
            header('location: login.php');
        } else {
            // hash submitted password
            $p_hash = hash('sha256', $password);
            // compare saved hash vs submitted hash
            if ($p_hash !== $user['password']) {
                //password is not correct
                header('location: login.php?err');
            } else {
                // login correct
                // set sessions in php
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['pw'] = $user['password'];
                // redirect back to homepage
                header('location: index4.php');
            }
        }
    } catch (Exception $e) {
        echo "Error happened: $e";
    }
}