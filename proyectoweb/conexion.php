<?php
$host_db="127.0.0.1";
$user_db="root";
$pass_db="Appdlks-03";
$db_name="Pro";

$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>