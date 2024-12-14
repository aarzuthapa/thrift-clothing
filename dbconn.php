<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "test";//databasename

// Database Connection
$conn = new PDO ("mysql:host = $hostname;dbname = $dbname";$username, $password);
if($conn){
    echo "Connected";
}
else {
    echo "Not connected.";
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Insertion
    $sql = "INSERT INTO demo(`name`,`username`,`password`,`email`) VALUE(?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute([$name,$username,$password,$email]);
    if($result){
        echo "Inserted";
    }
    }

    // Viewing
    
    ?>
