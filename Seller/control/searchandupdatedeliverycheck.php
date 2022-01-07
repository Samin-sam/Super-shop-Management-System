<?php
include("../model/database.php");
$error="";
$purid=$traid=$opl=$dmid=$pdm="";
if(isset($_POST['search'])){
   if(empty($_POST['dmid'])){
       $error="Please fill up";
   }else{
       $dmid=$_POST['dmid'];
       $connection = new db();
       $conobj=$connection->OpenCon();
       $productupdate=$connection->SearchProduct($conobj,"deliveryhandle",$dmid);
       if ($productupdate->num_rows > 0) {
 
        // output data of each row
            while($row = $productupdate->fetch_assoc()) {
                $purid=$row["Purchase_ID"];
                $traid=$row["Transaction_ID"];
                $opl=$row["Order_Placed"];
                $dmid=$row["Delivery_Man_ID"];
                $pdm=$row["Phone_DM"];
       
            }
       
        }else{
            echo "0 results";
        }  

    }
}else{

}

if(isset($_POST['update'])){
        $purid=$_POST['purid'];
        $traid=$_POST['traid'];
        $opl=$_POST['opl'];
        $dmid=$_POST['dmid'];
        $pdm=$_POST['pdm'];
        
        
            $connection = new db();
            $conobj=$connection->OpenCon();
            $assignDelivery=$connection->UpdateDelivery($conobj,"deliveryhandle",$purid,$traid,$opl,$dmid,$pdm);
            if($assignDelivery === TRUE){
                echo "Delivery Updated Successfully";

                //header("location:updateproduct.php");       
                }else{
                    echo "Error: " . $assignDelivery . "<br>" . $assignDelivery->error;
                    }                   
    }else{
    $error="Please Submit";
}

?>