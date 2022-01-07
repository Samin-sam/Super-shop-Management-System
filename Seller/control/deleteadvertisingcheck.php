<?php
include("../model/database.php");
$error="";
if(isset($_POST['delete'])){
   if(empty($_POST['aid'])){
       $error="Please fill up";
   }else{
       $aid=$_POST['aid'];
       $connection = new db();
       $conobj=$connection->OpenCon();
       $advertisingdelete=$connection->DeleteAdvertising($conobj,"advertisinginfo",$aid);
       if($advertisingdelete === True){
       echo "Advertising Deleted";
       }else{
        echo "Error: " . $advertisingdelete . "<br>" . $advertisingdelete->error;
       }
    }
       
}else{

}

?>