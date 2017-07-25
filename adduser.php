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


<?php
    include("header.php");
    include("dbconnect.php");
?>


<?php
    $username = $_POST["username1"];
    $password = $_POST["password1"];

    echo "<p>Thank you for registering $username !</p>";
 



require('dbconnect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username1']) && isset($_POST['password1'])){
        $username = $_POST['username1'];
        

        
        $password = $_POST['password1'];
        
        $query = "INSERT INTO `user` (username, password, flight, car, parking) VALUES ('$username', '$password', 0, 0, 0)";
        $result = mysqli_query($conn, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>

</body>
</html>