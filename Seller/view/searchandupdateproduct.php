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
                <div id="searchProduct">
                    <fieldset>
                     <legend> Search Product </legend>  
                     <form method="post" action="" >
                     Product ID: &nbsp;&nbsp; <input type="text" name="pid" id="spid" placeholder="Product ID"><br>
                     <br>
                     <input type="submit" name="search" onclick = "handleFunctionAjax()" value="search">  
                     <input type="reset" name="reset" value="RESET"><br>
                     </form>     
                    </fieldset>
                </div>
                 </td> 
            </tr>
                <tr>
                    <td>
                    <fieldset>
                     <legend> Update Product </legend>  
                     <form method="post" action="">
                     Product ID: &nbsp;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; <input type="text" name="pid" value="<?php echo $pid ?>"><br>
                     <br>
                     Product Name: &nbsp;&#160;&#160;&#160;&#160;&#160;&#160;&#160; <input type="text" name="pname" value="<?php echo $pname ?>"><br>
                     <br> 
                     Product Price: &nbsp;&nbsp;&#160;&#160;&#160;&#160;&#160;&#160;&#160; <input type="text" name="pprice" value="<?php echo $pprice ?>"><br>
                     <br>  
                     Product Quantity: &nbsp;&nbsp;&#160; <input type="text" name="pquantity" value="<?php echo $pquantity ?>"><br>
                     <br>  
        
                     <label for="ptype">Product Category: </label>
                     <select name="ptype">
                     <option value="Baby" <?php if($ptype == "Baby"){echo $ptype; }?>>Baby</option>
                     <option value="Beverages" <?php if($ptype == "Beverages"){echo $ptype; }?>>Beverages</option>
                     <option value="Breakfast & Cereal" <?php if($ptype == "Breakfast & Cereal"){echo $ptype; }?>>Breakfast & Cereal</option>
                     <option value="Cookies, Snacks & Candy" <?php if($ptype == "Cookies, Snacks & Candy"){echo $ptype; }?>>Cookies, Snacks & Candy</option>
                     <option value="Produce: Fruits & Vegetables" <?php if($ptype == "Produce: Fruits & Vegetables"){echo $ptype; }?>>Produce: Fruits & Vegetables</option>
                     <option value="Meat & Seafood" <?php if($ptype == "Meat & Seafood"){echo $ptype; }?>>Meat & Seafood</option>
                     <option value="Miscellaneous – gift cards/wrap, batteries, etc" <?php if($ptype == "Miscellaneous – gift cards/wrap, batteries, etc"){echo $ptype; }?>>Miscellaneous – gift cards/wrap, batteries, etc</option>
                     <option value="Health & Beauty, Personal Care & Pharmacy – pharmacy items, shampoo, toothpaste" <?php if($ptype == "Health & Beauty, Personal Care & Pharmacy – pharmacy items, shampoo, toothpaste"){echo $selected; }?>>Health & Beauty, Personal Care & Pharmacy – pharmacy items, shampoo, toothpaste</option>
                     <option value="International Cuisine" <?php if($ptype == "International Cuisine"){echo $ptype; }?>>International Cuisine</option>
                     <option value="Frozen Foods" <?php if($ptype == "Frozen Foods"){echo $ptype; }?>>Frozen Foods</option>
                     <option value="Dairy, Eggs & Cheese" <?php if($ptype == "Dairy, Eggs & Cheese"){echo $ptype; }?>>Dairy, Eggs & Cheese</option>
                     </select><br>
                     <br> 
                     Product Placed: &nbsp;&nbsp;&#160;&#160;&#160;&#160;&#160; <input type="date" name="pdate" value="<?php echo $pdate ?>"><br>
                     <br>
                     <input type="submit" name="update" value="UPDATE"><br>    
                     <input type="reset" name="reset" value="RESET"><br>
                     </form>     
                    </fieldset>
                    </td>

                </tr>
        </table>
         <!-- Java Script File -->
         <script src="../JS/searchProductHandle.js"></script>
    </body>
    <?php echo $error; ?>
</html>
<?php  
echo "<h6><a href=../control/logout.php> Log Out</a></h6>";
?>