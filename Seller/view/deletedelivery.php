<?php
include("../control/deletedeliverycheck.php");
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
                    <label for="dmid" id="ldmid">Delivery Man ID: </label>
                     <input type="text" name="dmid" placeholder="Delivery Man ID"><br>
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