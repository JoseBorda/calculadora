<?php 

// creando conexion de base de datos 

$server = "localhost";
$pass = "";
$user = "root";
$bd = "";

$database = new mysqli($server, $user, $pass, $bd);

if ($database->connect_error) {
    die ("Conexion fallida " . $database->connect_error);
} else {
    echo "Conexion exitosa";
}




?>