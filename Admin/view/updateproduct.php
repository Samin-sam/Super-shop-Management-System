
<!DOCTYPE html>
<html>
<head>
	<title>Update Product</title>

<link rel="stylesheet" type="text/css" href="./css/form.css">


</head>
<body>
	<div>
    <h2 align="center">Product Information </h2> 
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
	<h1> Update product details </h1>
<form action="" method="POST">
  
<input type="text" name="Name" placeholder="Enter Product Name"/  > <br/>
<input type="text" name="Price" placeholder="Enter Product Price To Update"/  > <br/>

    <input  type="submit" name="update" value="Update Data">
</form>

</center>

</body>
</html>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'productinfo');



if(isset($_POST['update']))
{
	$name = $_POST['Name'];

	$query = "UPDATE `product` SET `Price`='$_POST[Price]' WHERE name='$_POST[Name]' ";
	$query_run = mysqli_query($connection,$query);

if($query_run)
{
	echo'<script type="text/javascript"> alert("Data updated")</script>';
}
else
{
	echo'<script type="text/javascript"> alert("Data Not updated")</script>';
}

}


?>
