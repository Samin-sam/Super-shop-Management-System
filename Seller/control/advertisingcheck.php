<?php
include("../model/database.php");
session_start();
$error="";
if(isset($_POST['addadvertising'])){
   if(empty($_POST['aid']) || empty($_POST['adetails'])){
       $error = "Please Fill Up";
   }
   else{
       $aid=$_POST['aid'];
       $adetails=$_POST['adetails'];
       if(preg_match("/[a-zA-Z0-9]/", $aid)){
           if(preg_match("/^[a-zA-Z-' ]*$/",$adetails)){
               $connection=new db();
               $conobj=$connection->OpenCon();
               $addadvertising=$connection->AddAdvertising($conobj,"advertisinginfo",$aid,$adetails);
               if($addadvertising === True){
                   echo "New Advertising Created";
                   header("location:addadvertising.php");
               }else{
                    echo "Error: " . $addadvertising . "<br>" . $addadvertising->error;
               }

            }else{  
               $error = "Name Cannot Take Number or Special Character";

            }
        }else{
            $error = "Id can only Number and Character";

        }
       
    }
}else{
    $error = "Please Submit";

}
?>