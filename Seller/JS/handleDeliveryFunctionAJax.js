//Creating a function For Ajax to Handle Search
function handledeliveryFunctionAjax(){

    var dmid=document.getElementById("dmid").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("para").innerHTML = this.responseText;
    }else{
        document.getElementById("para").innerHTML= this.statusText;
    }
    };
    xhttp.open("POST", "../control/searchandupdatedeliverycheck.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("dmid="+dmid);
 

}
