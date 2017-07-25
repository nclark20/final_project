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
        <!--<a href = "login.php"><h1>Virtual Travel Agent</h1></a> -->
        
        <?php 
            include("header.php");
        ?>
        
        <h2>Car Rental</h2>
        
         <?php
        echo "Signed in as: " . $_SESSION['user'];
    include("dbconnect.php");
$sql = "SELECT carnum, type, location, dailyprice FROM cars";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $i = $row["carnum"];
        echo "<br>Car #: ". $row["carnum"]. " ". $row["type"]. " pick-up " . $row["location"] . " Price: $". $row["dailyprice"] . " daily.";
        echo "<form method='post' action='addCar.php'>";
        echo "<input type ='submit' name='$i' value='Add to cart'>";
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