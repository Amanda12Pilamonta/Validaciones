<?php
$serverName = "localhost";
$dbName ="datos";
$userName = "root";
$password = "";

$conn = mysqli_connect($serverName, $userName, $password,$dbName);
if(!$conn){
    die("Error en la conexion :".mysqli_connect_error());
}

