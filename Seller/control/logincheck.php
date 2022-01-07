<?php
include('../model/database.php');
session_start(); 
 $error="";
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Please fill up";
}
else
{
$email=$_POST['email'];
$password=$_POST['password'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"sellerinfo",$email,$password);

if ($userQuery->num_rows > 0) {
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;

header("location:home.php");

}
else {
$error = "Your Entered Email or Password is invalid";
}

$connection->CloseCon($conobj);

}
}


?>
