<?php
$host = "localhost";
$useername = "pediforte";
$password = "pedifortedb";
$db_name = "ade";

$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
if (isset($_POST["Sign Up"])){
   $firtname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $phoneno = $_POST['phonenumber'];
   $password = $_POST['password'];
   $confirm_p = $_POST['confirm_password'];

}
if($password !== $confirm_p){
    echo "werey try again";
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
   
}