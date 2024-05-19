<?php
  include 'conexion.php';

  $nombre = $_POST["nombre"];
  $edad = $_POST["edad"];
  $correo = $_POST["correo"];
  $artista = $_POST["artista"];
  $explicacion = $_POST["explicacion"];
  $sql = "insert into usuarios (nombre, edad, correo, artista, explicacio) values ('$nombre', '$edad', '$correo','$artista','$explicacion')";
  $conexion->query($sql);
  $conexion->close();
  header("location: index.html");
?>