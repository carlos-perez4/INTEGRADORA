<?php
include ("conexion.php");

$id = $_REQUEST['id'];

$nombre = $_POST['titulo'];
$fecha = $_POST['fecha_lanzamiento'];
$descripcion = $_POST['descripcion'];
$plataforma = $_POST['plataforma'];
$categoria = $_POST['categoria'];
$autor = $_POST['autor'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "UPDATE pelicula SET titulo='$nombre', fecha_lanzamiento='$fecha', descripcion='$descripcion', plataforma='$plataforma', categoria='$categoria',autor='$autor', imagen='$imagen'  WHERE id = '$id'";
$resultado = $conexion->query($query);

if($resultado){
   header("Location: crud.php");

}
else{
    echo "no modifico";
}
?>

