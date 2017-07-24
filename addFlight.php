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
        <h2>Add a flight</h2>
        <?php
            include("dbconnect.php");
            $name = $_SESSION['user'];
        $sql1 = "UPDATE user SET flight= flight+1 WHERE username='$name'";
        if ($conn->query($sql1) === TRUE) {
    echo "Cart updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
            $sql = "SELECT username, flight, car, parking FROM user WHERE username='$name'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $i = $row["carnum"];
        echo "<br>User: ". $row["username"]. " has ". $row["flight"]. " flight(s) and  " . $row["car"] . " car(s) and " . $row["parking"] . " parking." ;
        
    }
} else {
    echo "0 results";
}

        ?>
        <form action="checkout.php" method="post">
        <input type='submit' name='submit' value='Checkout'>
        </form>
        
    </body>
</html>