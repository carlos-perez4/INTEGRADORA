
<?php
                    include("conexion.php");
                    $id = $_REQUEST['id'];

                    $query = "SELECT * FROM pelicula WHERE id ='$id' ";
                    $resultado = $conexion->query($query);
                    $row = $resultado->fetch_assoc();
                ?>
                