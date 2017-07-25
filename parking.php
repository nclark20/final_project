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
        
        <h2>Parking</h2>
        
         <?php
        echo "Signed in as: " . $_SESSION['user'];
    include("dbconnect.php");
$sql = "SELECT spacenum, type, price FROM parking";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>Parking #: ". $row["spacenum"]. " ". $row["type"]. " price: $" . $row["price"];
        echo "<form method='post' action='addPark.php'>";
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