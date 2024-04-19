<?php
// Database connection parameters
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "Rockandroll1850065952";
$dbName = "bd_bancovirtual";

// Create connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*if ($conn){
    echo "Conexion Ok";
}else{
    echo "Fallo en la conexion";
}*/

