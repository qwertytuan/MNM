<?php
function getDB() {
$database_host = 'localhost'; 
$username = 'root'; 
$password = 'root'; 
$database_name = 'QuanlySV'; 

$conn = mysqli_connect($database_host, $username, $password, $database_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    return $conn;
}
}
?>