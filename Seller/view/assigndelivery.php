<?php
include("../control/assigndeliverycontrol.php");
echo "<h3><a href=home.php>Home Page</a></h3>";

?>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/assigndeliveryhandle.css">
    </head>
    <body>
        <table>
            <tr>
                <td>
                <div id="divform">
                    <fieldset>
                     <legend> Assign Delivery </legend>  
                     <h1 id="heading1"> Assign Delivery </h1>
                     <form method="post" action="">
                     <label for="purid" id="lpurid">Purchase ID: </label>
                     <input type="text" name="purid" id="purid" placeholder="Purchase ID"><br>
                     <br>
                     <label for="traid" id="ltraid">Transaction ID: </label>
                     <input type="text" name="traid" id="traid" placeholder="Transaction ID"><br>
                     <br> 
                     <label for="opl" id="lopl">Order Placed: </label>
                     <input type="date" name="opl" id="opl" placeholder="Order Placed"><br>
                     <br>
                     <label for="dmid" id="ldmid">Delivery Man ID: </label>
                     <input type="text" name="dmid" id="dmid" placeholder="Delivery Man ID"><br>
                     <br>
                    
                     <label for="pdm" id="lpdm">Phone NO DM: </label>
                     <input type="text" name="pdm" id="pdm" placeholder="Phone NO"><br>
                     <br>
                     <input type="submit" name="add" id="add" value="ADD">   
                     <input type="reset" name="reset" id="reset" value="RESET"><br>
                     </form>     
                    </fieldset>
                    <p name="para" id="para"></p>
                </div>
                </td>

            </tr>
        </table>

        <!-- JavaScript File -->
        <script src="../JS/addProductHandle.js"></script>
        
    </body>
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