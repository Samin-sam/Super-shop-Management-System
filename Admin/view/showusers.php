<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Description">
    <title>Display User</title>
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

<h1>Users Information</h1>
<?php

    $query = "SELECT * FROM users";
    $hostname = 'localhost';
    $db_name = 'signup';
    $username = 'root';
    $password = '';



    try{

       $db = new mysqli($hostname, $username, $password, $db_name);

        // Check connection
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        //Select Query
        $result = $db->query($query);


        //Loop all the records using fetch records
        while ($users = $result->fetch_assoc()) {
            echo "<b>Username:</b> " . $users['username']."\n" ;
            echo "<b>Email:</b> " . $users['email']."<br />\n";
        }

        //close the connection to DB
        $db->close();

    }catch(Exception $e)
    {
        $error_message = $e->getMessage();
        echo "<p>Error message: $error_message </p>";
    }

?>
</center>

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
<a href="searchuser.php"> Search Users</a><br>
  <a href="insertuser.php">Insert New Users</a><br>
  <a href="updateuser.php">Update User Profile</a><br>
  <a href="deleteuser.php">Delete User</a><br>
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

</body>
</html>
