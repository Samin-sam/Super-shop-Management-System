
<!DOCTYPE html>
<html>
<head>
	<title>Update User</title>

<link rel="stylesheet" type="text/css" href="./css/form.css">


</head>
<body>

	<div>
    <h2 align="center">Users Information </h2> 
</div>
    <div id="header">
  <h1 align="center">Welcome To The Natural Shop</h1>
  <h2 align="center">

        <font size="4">
      <a href="HomePage.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="login.php">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="Register.php">Sign Up</a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="ContactUs.php">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="Admin.php">Admin Panel</a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="login.php?logout='1'";>logout</a>
  </font>
</h2>
</div>

<center>
	<h1> Update User Details </h1>
<form action="" method="POST">
 <input type="text" name="id" placeholder="Enter your ID"/  > <br/> 
<input type="text" name="username" placeholder="Enter New User Name"/  > <br/>
<input type="text" name="email" placeholder="Enter Your New Email Address To Update It"/  > <br/>
<input type="text" name="password" placeholder="Enter New password "/  > <br/>

    <input  type="submit" name="update" value="Update User Information">
</form>

</center>

</body>
</html>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'signup');



if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	//$query = "UPDATE `users` SET `username`='$_POST[username]' `email`='$_POST[email]' WHERE id='$_POST[id]' ";
	$query = "UPDATE `users` SET `username`='$_POST[username]',`email`='$_POST[email]',`password`='$_POST[password]' WHERE id='$_POST[id]' ";
	$query_run = mysqli_query($connection,$query);

if($query_run)
{
	echo'<script type="text/javascript"> alert("user Information updated")</script>';
}
else
{
	echo'<script type="text/javascript"> alert("user Information Not updated")</script>';
}

}


?>
