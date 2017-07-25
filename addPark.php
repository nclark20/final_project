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
        <h2>Add a parking spot</h2>
        <?php
            include("dbconnect.php");
            $name = $_SESSION['user'];
        $sql1 = "UPDATE user SET parking= parking+1 WHERE username='$name'";
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