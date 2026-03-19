<?php
$host = "sql7.freesqldatabase.com";
$usuario = "sql7820250";
$password = "Akashdick";
$base_datos = "sql7820250";

$conexion = new mysqli($host, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8mb4");
?>
