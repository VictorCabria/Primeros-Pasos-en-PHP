<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="post.php">Post</a></li>
        <li><a href="about.php">Sobre Mi</a></li>
        <li><a href="links.php">Proyectos</a></li>
    </ul>
    
    <h1>Post</h1>
    <p>Esta es la página de posts. Aquí puedes agregar contenido dinámico.</p>
    
    <?php
    echo "<p>Fecha actual: " . date('Y-m-d H:i:s') . "</p>";
    ?>
</body>
</html>
