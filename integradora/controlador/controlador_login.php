<?php
session_start();
if(!empty($_POST["btningresar"])) {
 if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
    $usuario=$_POST["usuario"];
    $password=$_POST["password"];
    $sql=$conexion->query("select * from admin where usuario='$usuario' and clave='$password' ");
    if ($datos=$sql->fetch_object()) {
         $_SESSION["id"]=$datos->id;
        $_SESSION["nombre"]=$datos->nombre;
        $_SESSION["apellido"]=$datos->apellido;
        header("location: crud.php");
       
    } else {
        echo "<div> Acceso denegado</div>";
    }
    
 } else {
    echo "CAMPOS VACIOS";
 }
 
}
?>