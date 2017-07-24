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
        
        <h2>Flights</h2>
        
 <?php
        
        echo "Signed in as: " . $_SESSION['user'];
    include("dbconnect.php");
$sql = "SELECT flight_num, origin, destination, seats, price FROM flights";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>Flight #: ". $row["flight_num"]. " ". $row["origin"]. "--> " . $row["destination"] . " Price: $". $row["price"] . " Available seats: " . $row["seats"] . " ";
        echo "<form method='post' action='addFlight.php'>";
        echo "<input type ='submit' name='submit' value='Add to cart'>";
        echo "</form>";
        echo "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
        
    
    </body>
</html>