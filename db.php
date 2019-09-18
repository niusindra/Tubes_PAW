<?php
$dbServer = "localhost";
$username = "root";
$password = "";
$dbName = "tubespaw";
 
try {
    $con = new PDO("mysql:host={$dbServer};dbname={$dbName}", $username, $password);
}catch(PDOException $exception){ //to handle connection error
    echo "Connection error: " . $exception->getMessage();
}
?>

hapie