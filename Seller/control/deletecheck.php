<?php
include("../model/database.php");
$error="";
if(isset($_POST['delete'])){
   if(empty($_POST['pid'])){
       $error="Please fill up";
   }else{
       $pid=$_POST['pid'];
       $connection = new db();
       $conobj=$connection->OpenCon();
       $productdelete=$connection->DeleteProduct($conobj,"products",$pid);
       if($productdelete === True){
       echo "Product Deleted";
       }else{
        echo "Error: " . $productdelete . "<br>" . $productdelete->error;
       }
    }
       
}else{

}

?>