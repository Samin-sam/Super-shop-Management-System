
<!DOCTYPE html>
<html>
<head>
	<title>Insert Product</title>

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
	<h1> Insert Product </h1>
<form action="" method="POST">
  
<input type="text" name="Name" placeholder="Enter Product Name"/  > <br/>
<input type="text" name="Price" placeholder="Enter Product Price"/  > <br/>

    <input  type="submit" name="insert" value="Insert Product">
</form>

</center>

</body>
</html>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'productinfo');



if(isset($_POST['insert']))
{
	$Name = $_POST['Name'];
	$Price= $_POST['Price'];

	$query = " INSERT INTO `product`(`Name`, `Price`) VALUES ('$Name','$Price') ";
	$query_run = mysqli_query($connection,$query);

if($query_run)
{
	echo'<script type="text/javascript"> alert("Product Inserted")</script>';
}
else
{
	echo'<script type="text/javascript"> alert("Product Not Inserted")</script>';
}

}


?>
