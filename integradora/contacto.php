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
                    <li><a href="#">Peliculas</a></li>
                    <li><a href="#">Series</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>        
                
            </nav>        
            <a href="index.php" class="hero__cta">Iniciar Sesión</a>
        </div>
        </div>
     </header>

        <main class="contenedor sombra" ac>
            <section>
                <h2>Contacto</h2>
                    <img class="catalago" src="IMG/estrenos.jpg" alt="con">
                    <br>
                <form class="formulario" action="contacto_formulario.php" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Contactános llenando todos los campos</legend>
        
                        <div class="contenedor-campos">
                            <div class="campo">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="input-text" id="nombre" name="nombre" placeholder="Tu nombre">
                            </div>
        
                            <div class="campo">
                                <label>telefono</label>
                                <input class="input-text" type="tel" name="telefono"
                                 placeholder="Tu Telefono">
                            </div>
        
                            <div class="campo">
                                <label>Correo</label>
                                <input class="input-text" type="email" name="correo"
                                placeholder="Tu Email">                
                            </div>
        
                            <div class="campo">
                                <label>Mensaje</label>
                                <textarea class="input-text" name="mensaje"></textarea>
                            </div>
        
                            <div class="alinear-derecha flex">
                                <input class="boton w-sm-100" type="submit"
                                value="Enviar">      
                            </div>
                    </fieldset>
                </form>
           </section>
        
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
    
</body>
</html>