<!DOCTYPE html>
<html>
<head>
  <title>Message us</title>
  <link rel="stylesheet" type="text/css" href="./css/msgcss.css">
   <script defer src="msg.js"></script>
</head>
<body>

<div id="header">
  <h1 align="center">Welcome To The Natural Shop</h1>
  <h2 align="left">

        <font size="4">
      <a href="HomePage.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
    </font>
  </h2>
        </div>  





<div class="wrapper">
  <h2>Complain</h2>
  <div id="error_message">
     
  </div>
  <form action="" id="myform" onsubmit = "return validate();">
    <div class="input_field">
        <input type="text" placeholder="Name" id="name">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Topic" id="subject">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Phone" id="phone">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Email" id="email">
    </div>
    <div class="input_field">
        <textarea placeholder="Message" id="message"></textarea>
    </div>
    <div class="btn">
        <input type="submit">
    </div>
  </form>
</div>

</body>
</html>