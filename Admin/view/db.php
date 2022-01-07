<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "productinfo";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 function Search($conn,$table,$pname)
 {
$result = $conn->query("SELECT * FROM $table WHERE P_Name='$pname' OR P_ID='$pname' OR P_Desc='$pname'");
 return $result;
 }



function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>