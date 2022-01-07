
<!DOCTYPE html>
<html>
<head>
	<title>Search Product</title>

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
	<h1> Search your desired product </h1>
<form action="" method="POST">
  
<input type="text" name="name" placeholder="Enter Product Name To Search"/  > <br/>

    <input name="search" type="submit" value="Search Data">
</form>


<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'productinfo');



if(isset($_POST['search']))
{
	$name = $_POST['name'];

	$query = "SELECT * FROM product where name='$name'";
	$query_run = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($query_run))
{ 

?>
       <form action="" method="POST">
       	Name: <input type="text" name="name" value="<?= $row['Name']; ?>" /><br>
       	Price: <input type="text" name="price"value="<?php echo $row['Price'] ?>" /><br>
       	
       </form>

	<?php
}
}


?>




</center>
<br>


</body>
</html>
