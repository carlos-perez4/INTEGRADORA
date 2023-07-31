<?php 
session_start();
if (empty($_SESSION["id"])){
    header("Location: index.php");
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>aqui va el crud</h2>
    <a href="controlador/controlador_cerrar_sesion.php">Salir</a>
</body>
</html>