<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "RETAIL";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$email,$password)
 {
 $result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $email."' AND Password='". $password."'");
 return $result;
 }
 
 //For Product Add
 function AddProduct($conn,$table,$pid,$pname,$pprice,$pquantity,$ptype,$pdate)
 {
 $result = $conn->query("INSERT INTO products (Product_ID, Product_Name, Product_Price, Product_Quantity, Product_Type, Product_E_Date)
 VALUES ('$pid', '$pname', '$pprice', '$pquantity', '$ptype', '$pdate')");
 return $result;
 }

 //For Search Product
 function SearchProduct($conn,$table,$pid)
 {
    $result = $conn->query("SELECT * FROM products WHERE Product_ID Like '%{$pid}%'");
    return $result;
 }

 function addQuery($conn,$table,$sname,$suname,$snid,$sphone,$squery){
      $result=$conn->query("INSERT INTO adminquery (Seller_Name, Seller_Uname,Seller_NID,Seller_Phone,Seller_Query) VALUES ('$sname','$suname','$snid','$sphone','$squery')");
      return $result;

 }


 //For Update Product
 function UpdateProduct($conn,$table,$pid,$pname,$pprice,$pquantity,$ptype,$pdate)
 {
     $sql = "UPDATE $table SET Product_ID='$pid', Product_Name='$pname',Product_Price='$pprice',Product_Quantity='$pquantity',Product_Type='$ptype', Product_E_Date='$pdate' WHERE Product_ID='$pid'";
     $result=$conn->query($sql);
     return $result;
 }

 //For Delete Product
 function DeleteProduct($conn,$table,$pid){
     $sql="DELETE FROM products WHERE Product_ID='$pid'";
     $result=$conn->query($sql);
     return $result;
 }

 //For Add Advertising
 function AddAdvertising($conn,$table,$aid,$adetails){
     $sql="INSERT INTO advertisinginfo (Advertising_ID, Advertising_Details) VALUES ('$aid','$adetails')";
     $result=$conn->query($sql);
     return $result;
 }

 //For Delete Addvertising
 function DeleteAdvertising($conn,$table,$aid){
    $sql="DELETE FROM advertisinginfo WHERE Advertising_ID='$aid'";
    $result=$conn->query($sql);
    return $result;
}

//Assign Delivery
function assignDelivery($conn,$table,$purid,$traid,$opl,$dmid,$pdm){
$result=$conn->query("INSERT INTO deliveryhandle (Purchase_ID,Transaction_ID,Order_Placed,Delivery_Man_ID,Phone_DM) VALUES ('$purid','$traid','$opl','$dmid','$pdm')");
if($result == true){
    return $result;
}
}

//Assign Delivery Update
function UpdateDelivery($conn,$table,$purid,$traid,$opl,$dmid,$pdm){
    $result=$conn->query("UPDATE $table SET Purchase_ID='$purid', Transaction_ID='$traid', Order_Placed = '$opl', Delivery_Man_ID='$dmid', Phone_DM='$pdm' WHERE Delivery_Man_ID='$dmid'");
    return $result;
}

//Delete Delivery 
function DeleteDelivery($conn,$table,$dmid){
    $result=$conn->query("DELETE FROM deliveryhandle WHERE Delivery_Man_ID='$dmid'");
    return $result;
}


 //For Close Connection
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>