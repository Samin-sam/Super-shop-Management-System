<?php
include("../control/deleteadvertisingcheck.php");
echo "<h1> Delete Advertising </h1>";
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
                     <legend> Delete Advertising </legend>  
                     <form method="post" action="">
                     Product ID: &nbsp;&nbsp; <input type="text" name="aid" placeholder="Advertising ID"><br>
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