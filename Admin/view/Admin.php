<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }


?>
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>

<div>
	<h2 align="center">Admin Panel </h2> 
</div>
	<div id="header">
  <h1 align="center">Welcome To The Natural Shop</h1>
  <h2 align="center">

        <font size="4">
      <a href="HomePage.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="login.php">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="Register.php">Sign Up</a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="ContactUs.php">Contact Us</a>
      <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="login.php?logout='1'";>logout</a> </p>
    <?php endif ?> 
       

        </font>
  </h2>
  </div> 


        <table align="center" border="2" cellspacing="0">
   <tr>
    <td> 
  

<h3 align="center">

<a href="Products.php">Products</a><br>
  <a href="Users.php">Users</a>

</h3>




<br>

<div>
  
    <h5 align="left"> 

      <a href="Terms.php">Terms & Conditions</a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="AboutUs.php">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;
  </h5>

</div>

<div>
    <h5 align="right">Copyrighted @ The Natural Shop:2021</h5>
</div>
  </td>
    </tr>
  </table>

    <!-- logged in user information -->
   <!--  
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="login.php?logout='1'";>logout</a> </p>
    <?php endif ?>
    -->
</div>

</body>
</html>