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
    <body>
        <h1>Virtual Travel Agent</h1>
       <form action="index.php" method="post">
            Username: <input type="text" name="user">
           <br>
            Password: <input type="password" name="password">
           <br>
            <input type="submit">
        
        </form> 
        
        
    </body>
</html>
