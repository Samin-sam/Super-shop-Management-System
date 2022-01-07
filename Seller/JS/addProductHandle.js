//Function For Validation
function validateForm(){

//Handle Add Product Form Validation
var pid=document.getElementById("pid").value;
var pname=document.getElementById("pname").value;
var pprice=document.getElementById("pprice").value;
var pquantity=document.getElementById("pquantity").value;
var pdate=document.getElementById("pdate").value;
var para=document.getElementById("para");


//Pattern
var patternId=/[a-zA-Z0-9]/;
var patternName=/^[a-zA-Z-' ]*$/;
var patternNumber=/^[1-9][0-9]*$/;
var patternDate=/^((0?[1-9]|1[012])[- /.](0?[1-9]|[12][0-9]|3[01])[- /.](19|20)?[0-9]{2})*$/;

//Test with Pattern
/**
resultId=patternId.test(pid);
resultName=patternName.test(pname);
resultPrice=patternNumber.test(pprice);
resultPquantity=patternNumber.test(pquantity);
resultDate=patternDate.test(pdate);
 */


//Logical Checking Validation
if(pid == "" ||  pname == "" ||  pprice == "" || pquantity == "" ||pdate == ""){
    para.innerHTML="Please at First Fill Up The Form"
    return false;
}else{
    if(patternId.test(pid) == true){

        if(patternName.test(pname) == true){

            if(patternNumber.test(pprice) == true){

                if(patternNumber.test(pquantity) == true){

                    if(patternDate.test(pdate) == true){
                        //para.innerHTML="We succesfully done Javascript Validation";
                    
                        console.log("Done");
                        return true;

                    }else{
                        para.innerHTML="Please Enter Validate Date";
                        return false;
                    }

                }else{
                    para.innerHTML="Product Quantity Cannot contains string or Character"
                    return false;
                }

            }else{
                para.innerHTML="Product Price Cannot contains string or Character";
                return false;
            }

        }else{
            para.innerHTML="Product Name Cannot Contains Number";
            return false;
        }

    }else{
        para.innerHTML="Product Id Cannot Contains Number or Special Character";
        return false;
    }
}
}
