<?php

echo "<h1> Add Advertising </h1>";
echo "<h3><a href=home.php>Home Page</a></h3>";
include("../control/advertisingcheck.php");

?>
<html>
    <head>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <fieldset>
                     <legend> Add Adverting </legend>  
                     <form method="post" action="">
                     Advertising ID: &nbsp;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; <input type="text" name="aid" placeholder="Advertising ID"><br>
                     <br>
                     Advertising Details: &nbsp;&#160;&#160;&#160;&#160;&#160;&#160;&#160; <input type="text" name="adetails" placeholder="Advertising Details"><br>
                     <br> 
                     <input type="submit" name="addadvertising" value="ADD">  
                     <input type="reset" name="reset" value="RESET"><br>
                     </form>     
                    </fieldset>
                </td>
                <td>
                 <img src="sale.jpg" alt="">
                </td>

            </tr>
        </table>
    </body>
    <?php echo $error; ?>
</html>

<?php

echo "<h6><a href=../control/logout.php> Log Out</a></h6>";

?>