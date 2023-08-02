<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$query = "INSERT INTO contacto(`nombre`, `telefono`, `correo`, `mensaje`) VALUES('$nombre','$telefono','$correo','$mensaje') ";
$resultado = $conexion->query($query);

if($resultado){
    header("Location: contacto.php");
 
 }
 else{
     echo "no inserto";
 }

?>