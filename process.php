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
        <!--<a href = "login.php"><h1>Virtual Travel Agent</h1></a>-->
        
        <?php 
            include("header.php"); 
        ?>

        <h2>THANK YOU FOR YOUR ORDER.</h2>

        <?php
            include("dbconnect.php");
            $msg = "Thank you for your order.";
            $email = $_POST["email"];
            mail($email, "Order Confirmation", $msg);

            $name = $_SESSION['user'];
        $sql1 = "UPDATE user SET car = 0, flight = 0, parking = 0  WHERE username='$name'";
        if ($conn->query($sql1) === TRUE) {
            echo "";
        } else {
             echo "Error updating record: " . $conn->error;
            }


         ?>
        </body>
        </html>