<?php
include("../control/addproductcheck.php");
echo "<h3><a href=home.php>Home Page</a></h3>";

?>
<html>
    <head>
        
        <link rel="stylesheet" href="../CSS/addproducthandle.css">
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <div id="divform">
                    <fieldset>
                     <legend id="legend"> Product </legend>  
                     <h1 id="heading1">Add Product </h1>
                     <form method="post" action="" onsubmit="return validateForm()">
                     <label for="pid" id="lpid">Product ID: </label>
                     <input type="text" name="pid" id="pid" placeholder="Product ID"><br>
                     <br>
                     <label for="pname" id="lpname">Product Name: </label>
                     <input type="text" name="pname" id="pname" placeholder="Product Name"><br>
                     <br> 
                     <label for="pprice" id="lpprice">Product Price: </label>
                     <input type="text" name="pprice" id="pprice" placeholder="Product Price"><br>
                     <br>  
                     <label for="pquantity" id="lpquantity">Product Quantity: </label>
                     <input type="text" name="pquantity" id="pquantity" placeholder="Product Quantity"><br>
                     <br>  
                     <label for="ptype" id="lptype">Product Category: </label>
                     <select name="ptype" id="ptype">
                     <option value="Baby">Baby</option>
                     <option value="Beverages">Beverages</option>
                     <option value="Breakfast & Cereal">Breakfast & Cereal</option>
                     <option value="Cookies, Snacks & Candy">Cookies, Snacks & Candy</option>
                     <option value="Produce: Fruits & Vegetables">Produce: Fruits & Vegetables</option>
                     <option value="Meat & Seafood">Meat & Seafood</option>
                     <option value="Miscellaneous – gift cards/wrap, batteries, etc">Miscellaneous – gift cards/wrap, batteries, etc</option>
                     <option value="Health & Beauty, Personal Care & Pharmacy – pharmacy items, shampoo, toothpaste">Health & Beauty, Personal Care & Pharmacy – pharmacy items, shampoo, toothpaste</option>
                     <option value="International Cuisine">International Cuisine</option>
                     <option value="Frozen Foods">Frozen Foods</option>
                     <option value="Dairy, Eggs & Cheese">Dairy, Eggs & Cheese</option>
                     </select><br>
                     <br> 
                     <label for="pdate" id="lpdate">Product Placed: </label>
                     <input type="date" name="pdate" id="pdate" placeholder="Product Placed"><br>
                     <br>
                     <input type="submit" name="add" id="add" value="ADD">  
                     <input type="reset" name="reset" id="reset" value="RESET"><br>
                     </form>     
                    </fieldset>
                    </div>
                    <p name="para" id="para"></p>
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