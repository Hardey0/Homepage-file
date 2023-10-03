<?php
//connect to database from php
$host = "localhost";
$username = "pediforte";
$password = "pedifortedb";
$db_name = "ade_form";


$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn){
    die("connection failed: " . mysqli_connect_error());
}
if (isset($_POST["REGISTRATION"])){
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $password= $_POST['password'];
   $confirm_password = $_POST['confirm_password'];
   $gender =$_POST['gender'];
   if($password != $confirm_password){
    header('location:register2.php?err=correct your password');
   }
}
// try{
//     mysqli_query($conn, $sql);
//     echo "Reg succcessful!";
// } catch(Exception $e) {
//     echo "Error happened";
// }