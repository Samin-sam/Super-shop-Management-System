<?php
include("../model/database.php");
session_start();
$error="";
if(isset($_POST['update'])){
    if(empty($_POST['pid']) || empty($_POST['pname']) || empty($_POST['pprice']) || empty($_POST['pquantity']) || empty($_POST['ptype']) || empty($_POST['pdate'])){
        
        $error="Please fill Up";

    }
    else{
        $pid=$_POST['pid'];
        $pname=$_POST['pname'];
        $pprice=$_POST['pprice'];
        $pquantity=$_POST['pquantity'];
        $ptype=$_POST['ptype'];
        $pdate=$_POST['pdate'];
        if(preg_match("/[a-zA-Z0-9]/", $pid)){

            if(preg_match("/^[a-zA-Z-' ]*$/",$pname)){

                if(preg_match("/^[1-9][0-9]*$/",$pprice)){
    
                    if(preg_match("/^[1-9][0-9]*$/",$pquantity)){

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
                        $error="Quantity Must be Number";
                    }
    
                }else{
                    $error="Price Must be Number";
                }
    
            }else{
                $error="Name Cannot Contain Number or Special Character";
            }

        }else{
            $error="Product Id Must be Number and Alphabets";
        }
        
    }
}
else{
    $error="Please Submit";
}
?>