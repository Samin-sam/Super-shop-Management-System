<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Description">
    <title>Products</title>
      <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>

<div>
    <h2 align="center">Products Information </h2> 
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
<a href="displyproduct.php"> Display Products</a><br>
<a href="searchproduct.php"> Search Products</a><br>
  <a href="insertproduct.php">Insert Products</a><br>
  <a href="updateproduct.php">Update Products</a><br>
  <a href="deleteproduct.php">Delete Products</a><br>
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
