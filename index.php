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
    <body>
        <a href = "index.php"><h1>Virtual Travel Agent</h1></a>
        <?php
        $_SESSION['user'] = $_POST["user"];
        echo "Signed in as: " . $_SESSION['user'];
        
        
        ?>
        <div id="first_row">
        <div class = "selection01">
           <h2>Flights</h2> 
            <a href = "flight.php"><img src = "plane01.png" alt = "Plane"></a>
            
        </div>
        
        <div class = "selection01">
            <h2>Car</h2>
            <a href = "car.php"><img src = "car_01.png" alt = "Car"></a>
        
        </div>
        </div>
        <div id="second_row">
        <div class = "selection01">
            <h2>Parking</h2>
            <a href = "parking.php"><img src = "parking_01.png" alt = "Park"></a>
        
        </div>
        </div>
    </body>
</html>