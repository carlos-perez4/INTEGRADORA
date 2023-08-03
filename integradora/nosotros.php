<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oro Films</title>
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
            <a href="#" class="hero__cta">Iniciar Sesión</a>
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
     
     <main> 
        <h2 class="N">CONOCE SOBRE NOSOTROS</h2>
        <div class="ser">
    
        <div class="parrafo">
                <img loading="lazy" src="IMG/nosotros.png" alt="Nosotros">
                <blockquote>
                !! BIENVENIDOS A ORO FILMS ¡¡
            </blockquote>
                 <br>
            <p>
                Somos un equipo multidisciplinario compuesto por los estudiantes de la Carrera de Infraestructura de Redes Digitales en la Universidad Tecnología de Izucar de Matamoros.
                Entusiastas del cine y la tecnología. Cada miembro aporta habilidades y experiencia única para lograr un equilibrio perfecto entre funcionalidad y diseño, 
                creando así una plataforma web atractiva y fácil de usar.
            </p>

            </div>
     </main>

     <main class="contenedor sombra">
        <h2>Más Sobre Nosotros</h2>

        <div class="servicios">
            <section class="servicio">
                <h3>Misión</h3>
                <div class="">
                    <img src="IMG/mision.jpg" alt="Misión" width="150" height="150" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                </div>
                <p>
                    Nuestro equipo de Desarrollo Cinemático se ha unido con una pasión compartida por el cine y la tecnología para 
                    crear una plataforma web única y emocionante basada en películas. Nuestro objetivo es proporcionar a los amantes de las 
                    películas una experiencia completa e inmersiva, donde puedan descubrir, explorar y compartir su pasión. 
                </p>
            </section>

            <section class="servicio">
                <h3>Visión</h3>
                <div class="">
                    <img src="IMG/vision.jpg" alt="Visión" width="150" height="150" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                </div>
                <p>
                    Nuestra visión es convertirnos en el destino principal para todo lo relacionado con el cine en la web. Queremos que nuestra 
                    plataforma sea el punto de referencia para aquellos que buscan información confiable, reseñas, recomendaciones personalizadas 
                    y una comunidad apasionada de las películas y Series.
                </p>
            </section>

            <section class="servicio">
                <h3>Pasión</h3>
                <div class="">
                    <img src="IMG/pasion.png" alt="pasión" width="150" height="150" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                </div>
                <p>
                    En el corazón de nuestro equipo se encuentra una profunda pasión por las películas y Series. Desde los clásicos hasta los últimos 
                    estrenos, estamos comprometidos a llevar lo mejor del mundo de las películas y Series a nuestros usuarios. Nos emociona la idea 
                    de proporcionar un espacio en línea donde los amantes de las Películas y Series, puedan reunirse, compartir opiniones y describir 
                    nuevos títulos. 
                </p>
            </section>
     </div>
    </div>
     </main>
     

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
     <script src="js/main.js"></script>
</body>
</html>