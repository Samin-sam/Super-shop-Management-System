<?php
include('../control/logincheck.php');
?>
<!DOCTYPE html>
<html>
    <head>
       <title>
           Login Page
       </title>
       <!-- CSS --> 
       <link rel="stylesheet" href="../CSS/loginhandle.css">
    </head>
    <body class="body">
        <h1 id="heading1"> Login Page</h1>
        <div class="login">
            <form method="POST" action="">
            <fieldset>
            <legend id="legend"> Login </legend>
            <label for="email" id="emaillabel">Email: </label> &nbsp;&#160;&#160;&#160;&#160;&#160;&#160;&nbsp;&nbsp;
            <input type="email" name="email" id="email" placeholder="Email"><br>
            <br>
            <label for="password" id="passwordlabel">Password: </label>&#160;&#160;
            <input type="password" name="password" id="password" placeholder="password"><br>
            <br>
            <input type="submit" name="submit" id="submit" value="Login">
            <input type="reset" name="reset" id="reset" value="RESET">

            </fieldset>
            </form>
        </div>
            <br>
          
         
    </body>
</html>