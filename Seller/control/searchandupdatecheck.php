<?php
include("../model/database.php");
$error="";
$pname=$pid=$pprice=$pquantity=$pdate=$ptype="";
if(isset($_POST['search'])){
   if(empty($_POST['pid'])){
       $error="Please fill up";
   }else{
       $pid=$_POST['pid'];
       $connection = new db();
       $conobj=$connection->OpenCon();
       $productupdate=$connection->SearchProduct($conobj,"products",$pid);
       if ($productupdate->num_rows > 0) {
 
        // output data of each row
            while($row = $productupdate->fetch_assoc()) {
                $pid=$row["Product_ID"];
                $pname=$row["Product_Name"];
                $pprice=$row["Product_Price"];
                $pquantity=$row["Product_Quantity"];
                $ptype=$row["Product_Type"];
                $pdate=$row["Product_E_Date"];
       
            }
       
        }else{
            echo "0 results";
        }  

    }
}else{

}

if(isset($_POST['update'])){
        $pid=$_POST['pid'];
        $pname=$_POST['pname'];
        $pprice=$_POST['pprice'];
        $pquantity=$_POST['pquantity'];
        $ptype=$_POST['ptype'];
        $pdate=$_POST['pdate'];
        
        
            $connection = new db();
            $conobj=$connection->OpenCon();
            $productupdate=$connection->UpdateProduct($conobj,"products",$pid,$pname,$pprice,$pquantity,$ptype,$pdate);
            if($productupdate === TRUE){
                echo "Product Updated Successfully";

                //header("location:updateproduct.php");       
                }else{
                    echo "Error: " . $productupdate . "<br>" . $productupdate->error;
                     }                   
    }else{
    $error="Please Submit";
}

?>