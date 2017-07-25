<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Virtual Travel Agent</title>
    <link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body class="zero_index">
   
    <?php
            include("header.php");
        ?>
        <div class="for_h_php">
            <?php
                                echo "Signed in as: " . $_SESSION['user'] . " "; 
                if($_SESSION['user'] == 'admin'){
                    echo "<a href='http://localhost:8888/phpMyAdmin/db_structure.php?server=1&db=travel1&token=385faa9bb7b7e6f7a45f5ebb1b3d7bd9'><button>Admin</button></a>";
                }  
                ?>
        </div>
        <h2>Checkout</h2>  
        <?php
            include("dbconnect.php");
            $name = $_SESSION['user'];
            $sql = "SELECT username, flight, car, parking FROM user WHERE username='$name'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
       $flight_price = $row['flight']*300;
       $car_price = $row['car']*30;
       $park_price = $row['parking']*10;
        $total = $flight_price+$car_price+$park_price;
           
        echo "<br>You have ". $row["flight"] . " flight(s) and  " . $row["car"] . " car(s) and " . $row["parking"] . " parking." ;
        echo "<p>Total cost: $" . $total;

    }
} else {
    echo "0 results";
}
        echo "<br>";
       
        ?>

            <form method="post" action="emptycart.php">
                <input type="submit" name="submit" value="Empty cart">

            </form>

            <br>

            <form method="post" action="payment.php">
                <input type="submit" name="submit" value="Pay">

            </form>
</body>

</html>