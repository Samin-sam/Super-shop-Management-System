
<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>

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
	<h1> Delete User </h1>
<form action="" method="POST">
  
<input type="text" name="id" placeholder="Enter User ID you want to Delete"/  > <br/>

    <input  type="submit" name="delete" value="Delete ID">
</form>

</center>

</body>
</html>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'signup');



if(isset($_POST['delete']))
{
	$id = $_POST['id'];

	$query = " DELETE FROM `users` WHERE id='$id' ";
	$query_run = mysqli_query($connection,$query);

if($query_run)
{
	echo'<script type="text/javascript"> alert("User Deleted")</script>';
}
else
{
	echo'<script type="text/javascript"> alert("User Not Deleted")</script>';
}



}


?>
