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

        <?php
            include("dbconnect.php");
         ?>
         <form method="post" action="process.php" class = "log">
         First Name: <input type="text" name="firstName"><br>
         Last Name: <input type="text" name="lastName"><br>
         Email: <input type="text" name="email"><br>
         Expiration: <input type="text" name="exp"><br>
         Credit card number: <input type="text" name="number"><br>
         Credit card type: <select>
                    <option value="Visa">Visa</option>
                    <option value="MC">Master Card</option>
                    <option value="amEX">American Express</option>
                    <option value="Dis">Discover</option>
                            </select> <br>
         Address: <input type="text" name="address"><br>
         Zip code: <input type="text" name="zip"><br>
         <br>
         <input type="submit" name="submit" value="Submit Payment">
         </form>

    </body>    
    </html>