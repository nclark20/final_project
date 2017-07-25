<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <title>Virtual Travel Agent</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    
    </head>
    <body class = "zero_index">


<?php
    include("header.php");
?>

        
<form method="post" action="adduser.php">
  Create Username:<br>
  <input type="text" name="username1">
  <br><br>
 Create Password:<br>
  <input type="password" name="password1">
        
        <button type="submit">Register</button>
</form>
        
        

        
        
    </body>
</html>
