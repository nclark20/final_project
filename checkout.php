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
        <h2>Checkout</h2>
        
        
<?php
            include("dbconnect.php");
            $name = $_SESSION['user'];
            $sql = "SELECT username, flight, car, parking FROM user WHERE username='$name'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $flight_price = $row['flight']*300;
       $car_price = $row['car']*30;
       $park_price = $row['parking']*10;
           
        echo "<br>User: ". $row["username"]. " has ". $row["flight"] . " flight(s) and  " . $row["car"] . " car(s) and " . $row["parking"] . " parking." ;
        echo "<p>Total cost: " . $flight_price . " + " . $car_price = $row['car']*30; . " + " . $park_price . "=" .  $flight_price + $car_price + $park_price;
        
        
    }
} else {
    echo "0 results";
}
        echo "<br>";
       
        ?>
    </body>
</html>