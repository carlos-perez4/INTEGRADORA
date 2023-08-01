<?php
include ("conexion.php");

$id = $_REQUEST['id'];

$query = "DELETE FROM pelicula WHERE id = '$id'";
$resultado = $conexion->query($query);

if($resultado){
   header("Location: crud.php");

}
else{
    echo "no elimino";
}
?>


<?php
include ("conexion.php");

$id = $_REQUEST['id'];

$query = "DELETE FROM serie WHERE id = '$id'";
$resultado = $conexion->query($query);

if($resultado){
   header("Location: crud.php");

}
else{
    echo "no elimino";
}
?>