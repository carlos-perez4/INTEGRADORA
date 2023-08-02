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
    <title>Oro Films</title>
    <link rel="stylesheet" href="CSS/styless.css">
   
</head>
<body>

            <main>
            <a href="index.php" class="logo">  Oro Films</a>
            <input type="checkbox" id="menu" />
        <a href="controlador/controlador_cerrar_sesion.php">Salir</a>
            </main>
    <div>
        <center>
             <h3>PELICULAS</h3>
        </center>
       
        <table border="2px" width="100%"> 
            <thead class="titulos">
                <th colspan="9"><a href="insertar.php">NUEVA PELICULA</a></th>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Fecha</th>
                    <th>Descripcion</th>
                    <th>Plataforma</th>
                    <th>Categoria</th>
                    <th>Imagen</th>
                    <th colspan="2">Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("conexion.php");

                    $query = "SELECT * FROM pelicula";
                    $resultado = $conexion->query($query);
                    while($row = $resultado->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['titulo']; ?></td>
                        <td><?php echo $row['fecha_lanzamiento']; ?></td>
                        <td><?php echo $row['descripcion']; ?></td>
                        <td><?php echo $row['plataforma']; ?></td>
                        <td><?php echo $row['categoria']; ?></td>
                        <td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);  ?>" alt="" /></td>
                        <th><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></th>
                        <th><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></th>
                    </tr>

                <?php
                 }
                
                ?>
            </tbody>
        </table>
        </div>
    
   
        <div>
            <center>
       
            <h3>SERIES</h3>

            </center>
        <table border="2px"  width="100%"> 
            <thead>
                <th colspan="9"><a href="insertar_serie.php">NUEVA SERIE</a></th>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Fecha</th>
                    <th>Descripcion</th>
                    <th>Plataforma</th>
                    <th>Categoria</th>
                    <th>Imagen</th>
                    <th colspan="2">Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("conexion.php");

                    $query = "SELECT * FROM serie";
                    $resultado = $conexion->query($query);
                    while($row = $resultado->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['titulo']; ?></td>
                        <td><?php echo $row['fecha_lanzamiento']; ?></td>
                        <td><?php echo $row['descripcion']; ?></td>
                        <td><?php echo $row['plataforma']; ?></td>
                        <td><?php echo $row['categoria']; ?></td>
                        <td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);  ?>" alt="" /></td>
                        <th><a href="modificar_serie.php?id=<?php echo $row['id']; ?>">Modificar</a></th>
                        <th><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></th>
                    </tr>

                <?php
                 }
                
                ?>
            </tbody>
        </table>
        </div>


        <div>
            <center>
       
            <h3>CONTACTOS</h3>

            </center>
        <table border="2px"  width="100%"> 
            <thead>
               
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Mensaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("conexion.php");

                    $query = "SELECT * FROM contacto";
                    $resultado = $conexion->query($query);
                    while($row = $resultado->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['telefono']; ?></td>
                        <td><?php echo $row['correo']; ?></td>
                        <td><?php echo $row['mensaje']; ?></td>
                          
                    </tr>

                <?php
                 }
                
                ?>
            </tbody>
        </table>
        </div>
</body>
</html>