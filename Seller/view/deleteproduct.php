<?php
include("../control/deletecheck.php");
echo "<h1> Delete Product </h1>";
echo "<h3><a href=home.php>Home Page</a></h3>";

?>
<html>
    <head>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <fieldset>
                     <legend> Delete Product </legend>  
                     <form method="post" action="">
                     Product ID: &nbsp;&nbsp; <input type="text" name="pid" placeholder="Product ID"><br>
                     <br>
                     <input type="submit" name="delete" value="DELETE">  
                     <input type="reset" name="reset" value="RESET"><br>
                     </form>     
                    </fieldset>
                </td>
            </tr>
            </table>
    </body>
    <?php echo $error; ?>
</html>


<?php
echo "<h6><a href=../control/logout.php> Log Out</a></h6>";
?>