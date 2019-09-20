<?php
$dbServer = "localhost";
$username = "root";
$password = "";
$dbName = "tubespaw";
$con = mysqli_connect($dbServer,$username,$password,$dbName);
if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: ". mysqli_connect_error();
}
?>