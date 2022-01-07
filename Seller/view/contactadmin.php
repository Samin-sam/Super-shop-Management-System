<?php
include("../control/contactadminhandle.php");
echo "<h1> Contact Admin </h1>";
echo "<h3><a href=home.php>Home Page</a></h3>";
echo "<h6><a href=../control/logout.php> Log Out</a></h6>";

?>
<html>
    <head>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <fieldset>
                     <legend> Customer Query </legend>  
                     <form method="post" action="">
                     
                     Seller Name: &nbsp;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; <input type="text" name="sname" id="sname" placeholder="Name"><br>
                     <br>
                     Seller Username: &nbsp;&#160;&#160;&#160;&#160;&#160;&#160;&#160; <input type="text" name="suname" id="suname" placeholder="user name"><br>
                     <br> 
                     Seller NID: &nbsp;&nbsp;&#160;&#160;&#160;&#160;&#160;&#160;&#160; <input type="text" name="snid" id="snid" placeholder="NID"><br>
                     <br>
                     Seller Phone: &nbsp;&nbsp;&#160;&#160;&#160;&#160;&#160;&#160;&#160; <input type="text" name="sphone" id="sphone" placeholder="Phone"><br>
                     <br>
                     Seller Query: &nbsp;&nbsp;&#160;&#160;&#160;&#160;&#160;&#160;&#160; <textarea name="squery" id="squery"></textarea>
                     <br>
                     <br>
                     <input type="submit" name="submit" id="submit" value="SUBMIT">   
                     <input type="reset" name="reset" id="reset" value="RESET"><br>
                     </form>     
                    </fieldset>
                    <p name="para" id="para"></p>
                </td>

            </tr>
        </table>
        <?php 
    if(empty($error)){
        $error = "";
    }else{
        echo $error;
    }
    ?>
</html>
<?php
echo "<h6><a href=../control/logout.php> Log Out</a></h6>";
?>