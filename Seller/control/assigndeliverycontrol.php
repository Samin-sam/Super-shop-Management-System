<?php
include("../model/database.php");
session_start();
$error="";
if(isset($_POST['add'])){
    if(empty($_POST['purid']) || empty($_POST['traid']) || empty($_POST['opl']) || empty($_POST['dmid']) || empty($_POST['pdm'])){
        
        $error="Please fill Up";

    }
    else{
        $purid=$_POST['purid'];
        $traid=$_POST['traid'];
        $opl=$_POST['opl'];
        $dmid=$_POST['dmid'];
        $pdm=$_POST['pdm'];
        if(preg_match("/[a-zA-Z0-9]/", $purid)){

            if(preg_match("/[a-zA-Z0-9]/",$traid)){

                if(preg_match("/[a-zA-Z0-9]/",$dmid)){
    
                

                       $connection=new db();
                       $conobj=$connection->OpenCon();
                       $asdelivery=$connection->assignDelivery($conobj,"deliveryhandle",$purid,$traid,$opl,$dmid,$pdm);
                       
                        if($asdelivery == true){ 
                        echo "Delivery Assigned Successfully";
                        header("location:assigndelivery.php");
                        
                        }else{
                        echo "Error: " . $asdelivery . "<br>" . $asdelivery->error;
                 
                        }
                        
                    
    
                }else{
                    $error="Delivery Man ID Cannot contains Special Character";
                }
    
            }else{
                $error="Transaction ID Cannot contains Special Character";
            }

        }else{
            $error="Purchase ID Must be Number and Alphabets";
        }
        
    }
}
else{
    $error="Please Submit";
}
?>