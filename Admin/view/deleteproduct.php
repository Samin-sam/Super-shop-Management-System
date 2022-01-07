
<!DOCTYPE html>
<html>
<head>
	<title>Delete Product</title>

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
	<h1> Delete Product </h1>
<form action="" method="POST">
  
<input type="text" name="Name" placeholder="Enter Product Name you want to Delete"/  > <br/>

    <input  type="submit" name="delete" value="Delete Product">
</form>

</center>

</body>
</html>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'productinfo');



if(isset($_POST['delete']))
{
	$Name = $_POST['Name'];

	$query = " DELETE FROM `product` WHERE Name='$Name' ";
	$query_run = mysqli_query($connection,$query);

if($query_run)
{
	echo'<script type="text/javascript"> alert("Product Deleted")</script>';
}
else
{
	echo'<script type="text/javascript"> alert("Product Not Deleted")</script>';
}



}


?>
