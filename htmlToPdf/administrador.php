<?php
    $nombre = "Administrador X";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>Administrador</title>
</head>
<body>
    <h1><?php echo $nombre?> !Bienvenido!</h1>
    <hr>
    <ul class="opciones">
        <li><a href="formulario.php">Crear constancia</a></li>
        <li><a href="#">Editar constancia</a></li>
        <li><a href="#">Historico de constancias</a></li>
        <li><a href="#">Administrar firma</a></li>
    </ul>
</body>
</html>