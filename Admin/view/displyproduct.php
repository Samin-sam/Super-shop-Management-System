<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Description">
    <title>Display</title>
</head>

<body>
<h1>Product Information</h1>
<?php

    $query = "SELECT * FROM product";
    $hostname = 'localhost';
    $db_name = 'productinfo';
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
        while ($product = $result->fetch_assoc()) {
            echo "Name: " . $product['Name']."<br />\n";
            echo "Price: " . $product['Price']."<br />\n";
        }

        //close the connection to DB
        $db->close();

    }catch(Exception $e)
    {
        $error_message = $e->getMessage();
        echo "<p>Error message: $error_message </p>";
    }

?>
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
