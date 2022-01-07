<?php
include("../model/database.php");
$error="";
if(isset($_POST["submit"])){
    if(empty($_POST['sname']) || empty($_POST['suname']) || empty($_POST['snid']) || empty($_POST['sphone']) || empty($_POST['squery'])){
        
        $error="Please fill Up";

}else{
    $sname=$_POST['sname'];
    $suname=$_POST['suname'];
    $snid=$_POST['snid'];
    $sphone=$_POST['sphone'];
    $squery=$_POST['squery'];

    if(preg_match("/^[a-zA-Z-' ]*$/",$sname)){
        if(preg_match("/^[a-zA-Z-' ]*$/",$suname)){
            if(preg_match("/^[1-9][0-9]*$/", $snid)){
                if(preg_match("/^[1-9][0-9]*$/", $sphone)){
                    if(preg_match("/[a-zA-Z0-9]/",$squery)){

                        $connection=new db();
                        $conobj=$connection->openCon();
                        $queryadd=$conobj->addQuery($conobj,"adminquery",$sname,$suname,$snid,$sphone,$squery);
                        if($queryadd == true){
                            $error = "Query Updated";
                        }else{
                            $error = "Sorry Updated";
                        }

                    }else{
                            $error="Query Cannot contain special character";
                    }

                }else{

                    $error="Phone Cannot be String or special character";

                }

            }else{
                $error="NID Cannot be String or special character";
            }

        }else{
            $error="User Name Cannot be Number or special character";
        }


    }else{
        $error="Name Cannot be Number or special character";
    }



}
}else{
    
}


?>