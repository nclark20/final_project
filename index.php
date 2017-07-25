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
            <div class = "for_h_php">
                <?php
                $_SESSION['user'] = $_POST["user"];
                echo "Welcome: " . $_SESSION['user'] . " "; 
                if($_SESSION['user'] == 'admin'){
                    echo "<a href='http://localhost:8888/phpMyAdmin/db_structure.php?server=1&db=travel1&token=385faa9bb7b7e6f7a45f5ebb1b3d7bd9'><button>Admin</button></a>";
                }  
                ?>
            </div> 
            
            <a href = "flight.php"><p class = "for_p">Flights</p></a>
                
        <a href = "car.php"><p class = "for_p01">Rental Cars</p></a>
        
        <a href = "parking.php"><p class = "for_p02">Parking</p></a>
        
    </body>
</html>