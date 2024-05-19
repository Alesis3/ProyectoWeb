
<?php
include 'conexion.php';

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$correo = $_POST["correo"];
$artista = $_POST["artista"];
$explicacion = $_POST["explicacion"];

$sql = "INSERT INTO usuarios (nombre, edad, correo, artista, explicacion) VALUES ('$nombre', '$edad', '$correo', '$artista', '$explicacion')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar usuario: " . $conexion->error;
}

$conexion->close();
?>
