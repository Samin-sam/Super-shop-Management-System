//Creating a function For Ajax to Handle Search
function handleFunctionAjax(){

            var pid=document.getElementById("spid").value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
            }else{
                document.getElementById("demo").innerHTML= this.statusText;
            }
            };
            xhttp.open("POST", "../control/searchandupdatecheck.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("pid="+pid);
         

 }
        