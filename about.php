<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Mi</title>
</head>
<body>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="post.php">Post</a></li>
        <li><a href="about.php">Sobre Mi</a></li>
        <li><a href="links.php">Proyectos</a></li>
    </ul>
    
    <h1>Sobre Mi</h1>
    <p>Esta es mi página personal. Aquí puedes contar tu historia.</p>
    
    <?php
    $nombre = "Tu Nombre";
    $edad = 25;
    echo "<p>Hola, soy $nombre y tengo $edad años.</p>";
    ?>
</body>
</html>
