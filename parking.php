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
        <h2>Parking</h2>
        
         <?php
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