<?php
include("../control/searchandupdatecheck.php");
echo "<h1> Search and Update Product </h1>";
echo "<h6><a href=../view/home.php> Home Page</a></h6>";
?>


<html>
    <head>
    </head>
    <body>
        <table>
            <tr>
                <td>
                <div id="searchdelivery">
                    <fieldset>
                     <legend> Search Delivery </legend>  
                     <form method="post" action="" >
                     <label for="dmid" id="dmid">Delivery Man ID: </label>
                     <input type="text" name="dmid" id="spid" placeholder="Product ID"><br>
                     <br>
                     <input type="submit" name="search" onclick = "handledeliveryFunctionAjax()" value="search">  
                     <input type="reset" name="reset" value="RESET"><br>
                     </form>     
                    </fieldset>
                </div>
                 </td> 
            </tr>
                <tr>
                    <td>
                    <fieldset>
                     <legend> Update Assign Delivery </legend>  
                     <form method="post" action="">
                     <label for="puid" id="lpuid">Purchase ID: </label>
                     <input type="text" name="puid" value="<?php echo $purid ?>"><br>
                     <br>
                     <label for="traid" id="ltraid">Transaction ID: </label>
                     <input type="text" name="traid" value="<?php echo $traid ?>"><br>
                     <br> 
                     <label for="opl" id="lopl">Order Placed: </label>
                     <input type="text" name="opl" value="<?php echo $opl ?>"><br>
                     <input type="text" name="dmid" hidden=true value="<?php echo $dmid ?>"><br>
                     <br>  
                     <label for="pdm" id="lpdm">Transaction ID: </label>
                     <input type="text" name="pdm" value="<?php echo $pdm ?>"><br>
                     <br>
                     <input type="submit" name="update" value="UPDATE">   
                     <input type="reset" name="reset" value="RESET"><br>
                     </form>     
                    </fieldset>
                    </td>

                </tr>
        </table>
        <div name="demodiv">
            <p id="para"></p>
        </div>
         <!-- Java Script File -->
         <script src="../JS/handleDeliveryFunctionAjax.js"></script>
    </body>
    <?php echo $error; ?>
</html>
<?php  
echo "<h6><a href=../control/logout.php> Log Out</a></h6>";
?>