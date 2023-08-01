<?php
include ("conexion.php");

$nombre = $_POST['titulo'];
$fecha = $_POST['fecha_lanzamiento'];
$descripcion = $_POST['descripcion'];
$plataforma = $_POST['plataforma'];
$categoria = $_POST['categoria'];
$autor = $_POST['autor'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "INSERT INTO pelicula(`titulo`, `fecha_lanzamiento`, `descripcion`, `plataforma`, `categoria`, `autor`, `imagen`) VALUES('$nombre','$fecha','$descripcion','$plataforma','$categoria','$autor','$imagen') ";
$resultado = $conexion->query($query);

if($resultado){
   header("Location: crud.php");

}
else{
    echo "no inserto";
}
?>

