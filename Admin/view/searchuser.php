
<!DOCTYPE html>
<html>
<head>
	<title>Search user</title>

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
	<h1> Search user </h1>
<form action="" method="POST">
  
<input type="text" name="id" placeholder="Enter Search id To Search"/  > <br/>

    <input name="search" type="submit" value="Search user">
</form>


<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'signup');



if(isset($_POST['search']))
{
	$id = $_POST['id'];

	$query = "SELECT * FROM users where id='$id'";
	$query_run = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($query_run))
{ 
     
?>     
        <h2>User Details</h2>
       <form action="" method="POST">
       	Username: <input type="text" name="username" value="<?= $row['username']; ?>" />
       </br>
       	Email: <input type="text" name="email"value="<?php echo $row['email'] ?>" />
       </form>

	<?php
}
}


?>




</center>
<br>


</body>
</html>
