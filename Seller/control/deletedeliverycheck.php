<?php
include("../model/database.php");
$error="";
if(isset($_POST['delete'])){
   if(empty($_POST['dmid'])){
       $error="Please fill up";
   }else{
       $dmid=$_POST['dmid'];
       $connection = new db();
       $conobj=$connection->OpenCon();
       $deletedelivery=$connection->DeleteDelivery($conobj,"deliveryhandle",$dmid);
       if($deletedelivery === True){
       echo "Assigned Delivery Deleted";
       }else{
        echo "Error: " . $deletedelivery . "<br>" . $deletedelivery->error;
       }
    }
       
}else{

}

?>