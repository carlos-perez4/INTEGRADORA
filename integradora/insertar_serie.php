<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oro Films</title>
    <link rel="stylesheet" href="CSS/estilos1.css">
</head>
<body>
    <center><br/><br/><br/>
        <h3>SERIES</h3>
        <form action="proceso_guardar_serie.php" method="POST" enctype="multipart/form-data">
            <input type="text" required name="titulo" placeholder="titulo:" value=""/>><br/><br/>
            <input type="date" require name="fecha_lanzamiento" placeholder="fecha de lanzamiento" value=""/>><br/><br/>
            <textarea name="descripcion" require id="descripcion"></textarea>><br/><br/>
            <input type="text" require name="plataforma" placeholder="plataforma" value=""/>><br/><br/>
            <input type="text" require name="categoria" placeholder="categoria" value=""/>><br/><br/>
            <input type="text" require name="autor" placeholder="autor" value="" />><br/><br/>
            <input type="file" require name="imagen"/><br/><br/>
            <input type="submit" value="Aceptar">
        </form>
    </center>
    
</body>
</html>

