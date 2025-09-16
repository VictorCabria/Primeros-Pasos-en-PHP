<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
</head>
<body>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="post.php">Post</a></li>
        <li><a href="about.php">Sobre Mi</a></li>
        <li><a href="links.php">Proyectos</a></li>
    </ul>
    
    <h1>Mis Proyectos</h1>
    <p>Aquí puedes mostrar tus proyectos y enlaces importantes.</p>
    
    <?php
    $proyectos = [
        "Proyecto 1" => "https://github.com/tu-usuario/proyecto1",
        "Proyecto 2" => "https://github.com/tu-usuario/proyecto2",
        "Portfolio" => "https://tu-portfolio.com"
    ];
    
    echo "<ul>";
    foreach($proyectos as $nombre => $url) {
        echo "<li><a href='$url' target='_blank'>$nombre</a></li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
