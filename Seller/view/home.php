<html>
<head>
    <link rel="stylesheet" href="../CSS/homepage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="menu">
         <a href="#"> Home </a> 

         &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;
         &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;
         &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;
        
        

        
         <a href="producthome.php"> Products </a> 
         <a href="advertisinghome.php"> Advertising </a> 
         <a href="deliveryhome.php"> Delivery </a> 
         <a href="contactadmin.php"> Contact Admin </a> 
         <a href="feedback.php">Feedback </a>
         <a href="updateaccount.php"> Account </a> 

         <a href="../index.php">Log Out</a>

    </div>

    <div class="body">
    <table>
        <tr>
        <td><img id="img1" class="image1" src="../Images/rice.jpg" alt="Rice"></td>
        <td><img id="img2" class="image2" src="../Images/potato.jpg" alt="Potato"></td>
        <td><img id="img3" class="image3" src="../Images/oil.jpg" alt="Oil"></td>

    </tr>
</table>
        <br>
        <br>
        <input type="button" id="button1" value="Prev"></input> <input type="button" class="button2" value="Next"></input>

    </div>

    <!-- Jquery -->
    <script>
    $(document).ready(function(){
        $("#img1").show();
        $(".image2").hide();
        $(".image3").hide();
       

        $(".button2").click(function(){
            $("#img1").hide();
            $(".image2").show();
            $(".image3").hide();
            
        })
        $("#button1").click(function(){
            $("#img1").show();
            $(".image2").hide();
            $(".image3").hide();
        })
        $(".button2").dblclick(function(){
            $("#img1").hide();
            $(".image2").hide();
            $(".image3").show();
        })

    });
    </script>

<div class="footer1">
<footer>
  <p>We Belive In Quality<br>
  <p>@All Right reserve In Company Policy</p>
  <p>Build in 2021 </p>
</footer>

</body>

</html>