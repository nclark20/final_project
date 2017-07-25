<?php
    session_start();
    session_unset();
include("dbconnect.php");
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <title>Virtual Travel Agent</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    
    </head>
    <body class = "for_login">
        <?php
            include("header.php");
        ?>
        
        <!--<h1>Virtual Travel Agent</h1>-->
        
       <form action="index.php" method="post" class = "log">
            Username: <input type="text" name="user" class = "log02">
           <br>
            Password: &nbsp;<input type="password" name="password" class = "log02">
           <br>
            <input type="submit" value = "Login" class = "for_sub">
            
        </form> 
        
        <form action = "register.php" method = "post" class = "log_2">
            <input type = "submit" onclick = "register.php" value = "Register" class = "for_sub">
        </form>
        
        
        
        
        
    </body>
</html>
