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
    <link rel="stylesheet" href="administrador.css"> 
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Administrador</title>
</head>
<body>
    <header> 
        <img src="./src/UNICA.png" alt="" height="101px">
        <label class="unica">Unidad de Servicios de Cómputo Académico</label>
        <img src="./src/FI.png" alt="logo fi" height="101px">
        <img src="./src/UNAM.png" alt="" height="101px">
    </header>
    <br>
    <nav class="navbar bg-light">
        <div id = "bienvenida"><?php echo $nombre?> !Bienvenido!</div>
    </nav>
    <br>
    <div id = "acciones" class="admin">
            <ul class="opciones">
                <lo><a href="formulario.php" class = "opciones">Crear constancia</a></lo><br>
                <lo><a href="#" class = "opciones">Editar constancia</a></lo><br>
                <lo><a href="#" class = "opciones">Historico de constancias</a></lo><br>
                <lo><a href="#" class = "opciones">Administrar firma</a></lo><br>
            </ul>
    </div>
    
</body>
</html>