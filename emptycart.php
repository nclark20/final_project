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
         <div class = "for_h_php">
                <?php
                echo "Signed in as: " . $_SESSION['user'] . " "; 
                if($_SESSION['user'] == 'admin'){
                    echo "<a href='http://localhost:8888/phpMyAdmin/db_structure.php?server=1&db=travel1&token=385faa9bb7b7e6f7a45f5ebb1b3d7bd9'><button>Admin</button></a>";
                }  
                ?>
            </div> 

        <?php
            include("dbconnect.php");
            $name = $_SESSION['user'];
        $sql1 = "UPDATE user SET car = 0, flight = 0, parking = 0  WHERE username='$name'";
        if ($conn->query($sql1) === TRUE) {
            echo "Cart emptied successfully";
        } else {
             echo "Error updating record: " . $conn->error;
            }

         ?>

    </body>    
    </html>