
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oro Films</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
     <header class="header">
        
        <div class="menu container">
            
            <a href="index.php" class="logo">  Oro Films</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="IMG/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Peliculas</a></li>
                    <li><a href="#">Series</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>        
                
            </nav>        
    
            <a href="#" class="hero__cta">Iniciar Sesión</a>

        </div>

        <div class="header-content container">
            <div class="header-1">
                <img src="IMG/venom.png" alt="">
                <a href="#" class="btn-2">Ver ahora</a>
            </div>
            <div class="header-2">
                <h1>Las mejores Peliculas </h1>
                <img src="IMG/play.png" alt="o">
            </div>
        </div>
     </header>

     <section class="modal ">
        <div class="modal_container">
            <img src="IMG/sesion-icono.png" class="modal_img">
            <h2 class="modal_title">¡Bienvenido a Oro Films!</h2>
            <form method="POST" action="">
  
    <?php
    include "conexion.php";
    include "controlador/controlador_login.php";
    ?>
    <div>
        <h5>Usuario</h5>
        <input id="usuario" type="text" name="usuario" placeholder="USUARIO" class="usuario">
    </div>
    <div>
        <h5>Contraseña</h5>
        <input type="password" id="input" name="password" placeholder="CONTRASEÑA" class="contra">
    </div>
    <input class="btn-3" name="btningresar" type="submit" value="INICIA SESION">
            <a href="#" class="modal_close">Cerrar Modal</a>
        </div>
     </section>

     <section class="movies container">
            <h2>PELICULAS</h2>
            <hr>

            <div class="box-container-1">

                <div class="box-1">

                <div class="content">
                <?php
                    include("conexion.php");

                    $query = "SELECT * FROM pelicula";
                    $resultado = $conexion->query($query);
                    while($row = $resultado->fetch_assoc()){
                ?>

                <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);  ?>" alt="" />
                <a href="contenido.php"><?php echo $row['titulo']; ?>  </a>
                <?php
                 }
                
                ?>
                </div>
                </div>
            </div>
            <div class="load-more" id="load-more-1">CARGAR MAS</div>
        </section>

        <section class="movies container">
            <h2>SERIES</h2>
            <hr>

            <div class="box-container-2">

                <div class="box-2">

                <div class="content">
                <?php
                    include("conexion.php");
                    $query = "SELECT * FROM serie";
                    $resultado = $conexion->query($query);
                    while($row = $resultado->fetch_assoc()){
                ?>
                
                <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);  ?>" alt="" />
                <a href="contenido.php"><?php echo $row['titulo']; ?>  </a>
                <?php
                 }
                
                ?>
                </div>
                </div>
            </div>
            <div class="load-more" id="load-more-2">CARGAR MAS</div>
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
              <li><a href="#">Peliculas</a></li>
              <li><a href="#">Series</a></li>
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

    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
</body>
</html>