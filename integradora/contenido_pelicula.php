<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Oro Films</title>
        <link rel="stylesheet" href="CSS/resena.css">
        <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
<header class="#">
        <div class="back">   
        <div class="menu container">
            
            <a href="index.php" class="logo">  Oro Films</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="IMG/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>        
                
            </nav>        
            <a href="index.php" class="btn-1">Iniciar Sesión</a>
        </div>
        </div>
     </header>    
<section class="contenedors sombras">
       
                <div class="resena">
                <?php
                    include("conexion.php");
                    $id = $_REQUEST['id'];

                    $query = "SELECT * FROM pelicula WHERE id ='$id' ";
                    $resultado = $conexion->query($query);
                   while ($row = $resultado->fetch_assoc()){

                   
                ?>
                         <div class="text-container">
                        <h4><?php echo $row['titulo']; ?> <span> ( <?php echo $row['fecha_lanzamiento']; ?> )</span></h4>
                        
                        <p1>
                                <h5>PLATAFORMAS</h5>
                                <?php echo $row['plataforma']; ?>
                         </p1>
                         <p2>
                                <h5>CATEGORIA</h5>
                                <?php echo $row['categoria']; ?>
                         </p2>
                                <h6>SINOPSIS</h6>
                        <p><?php echo $row['descripcion']; ?></p>
                        
                        </div>
                        <img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);  ?>" alt="" />
                       
                 <?php
                 
                }
                 ?>        
                </div>
                <a class="ver" href="https://cuevana3.eu/">Ver Ahora</a>
</section>
     
                



<footer >
     <div class="footer-content">
          <h3>Oro Films</h3>
          <div class="footer-section">
            <h3>Acerca de Nosotros</h3>
            <p>Somos Estudiantes creando una pagina de donde ver peliculas</p>
          </div>
          <div class="footer-section">
            <h1>Enlaces</h1>
            <ul>
              <li><a href="index.php">Inicio</a></li>
              <li><a href="nosotros.php">Nosotros</a></li>
              <li><a href="contacto.php">Contacto</a></li>
              <li><a href="http://www.utim.edu.mx/">Utim</a></li>
            </ul>
          </div>
          <div class="footer-section">
            <h1>Contacto</h1>
            <p>Dirección: Universidad Tecnologica de Izucar de Matamoros</p>
            <p>Email: ortizosorio543@gmail.com</p>
            <p>Teléfono: +52 1 2431040638</p>
          </div>
        </div>
        <div class="footer-bottom">
          
          <p>Derechos de autor &copy; 2023 OroFilm. Todos los derechos reservados.</p>
        </div>
     </footer>
</body>
</html>