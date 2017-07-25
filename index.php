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
         
        <!--<div class = "for_header">
        <ul>
        <li class = "headr">Virtual Travel Agent</li>
        <li><a href="login.php" class = "headr01">Login</a></li>
        <li><a href="flight.php" class = "headr01">Flights</a></li>
        <li><a href="car.php" class = "headr01">Cars</a></li>
        <li><a href="parking.php" class = "headr01">Parking</a></li>
        </ul>
        <!--<h1 class = "header">Virtual Travel Agent</h1>-->
            
        <?php
            include("header.php");
        ?>
        
            
           
            <div class = "for_h_php">
                <?php
                $_SESSION['user'] = $_POST["user"];
                echo "Welcome: " . $_SESSION['user'];   
                ?>
            </div> 
            
        
              
        <!--</div>-->
        
        <!--<div id="first_row">
            <div class = "for_index_page_flight">
                <h2 class = "for_index_page_flight_header"><a href = "flight.php" class = "for_links">Flights</a></h2> 
            <a href = "flight.php"><img src = "plane01.png" alt = "Plane"></a>
            <a href = "flight.php"><img src = "plane_01.png" alt = "Plane"></a>
                
                
            
        </div>-->
            <a href = "flight.php"><p class = "for_p">Flights</p></a>
                
        <a href = "car.php"><p class = "for_p01">Rental Cars</p></a>
        
        <a href = "parking.php"><p class = "for_p02">Parking</p></a>
        
        <!--<br>
        <div class = "for_index_page">
            <h2>Car</h2>
            <a href = "car.php"><img src = "car_01.png" alt = "Car"></a>
        
        </div>
        </div>-->
        <!--<div id="second_row">
        <div class = "for_index_page">
            <h2>Parking</h2>
            <a href = "parking.php"><img src = "parking_01.png" alt = "Park"></a>
        
        </div>
        </div>-->
    </body>
</html>