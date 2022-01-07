<?php
include("../model/database.php");
session_start();
$error="";
if(isset($_POST['add'])){
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
                       $productadd=$connection->AddProduct($conobj,"products",$pid,$pname,$pprice,$pquantity,$ptype,$pdate);
                       if($productadd === TRUE){
                        echo "Product Added Successfully";
                        header("location:addproduct.php");
                        
                        }else{
                        echo "Error: " . $productadd . "<br>" . $productadd->error;
                 
                        }

                        //Create Json
                        $formdata = array(
                            'Product_ID'=> $pid,
                            'Product_Name'=> $pname,
                            'Product_Price'=> $pprice,
                            'Product_Quantity'=> $pquantity,
                            'Product_Type'=> $ptype,
                            'Product_E_Date'=>$pdate,

                         );
                         $existingdata = file_get_contents('mydata.json');
                         $tempJSONdata = json_decode($existingdata);
                         $tempJSONdata[] =$formdata;
                         //Convert updated array to JSON
                         $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
                         
                         //write json data into data.json file
                         if(file_put_contents("mydata.json", $jsondata)) {
                              echo "You Data saved<br>";
                          }
                         else 
                              echo "Sorry Not saved";
                  
                       $data = file_get_contents("mydata.json");
                       $myjsondata = json_decode($data);
                  
                       foreach($myjsondata as $myobject)
                       {
                       foreach($myobject as $key=>$value)
                      {
                          echo "Here ".$key." is ".$value."<br>";
                      } 
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