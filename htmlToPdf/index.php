<?php
    // Conexion a la base de datos
    include_once('./bd/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inicio sesión</title>
</head>
<body>
    <!-- 
        Formulario para iniciar sesión como administrador o como alumno
    -->
    <label class="titulo">Iniciar sesión</label></br>
    
    <form class ="formulario" name="formulario" method="post" action="sesion.php">
        <input type="radio" name="sesion" value="administrador">ADMINISTRADOR</input><br>
        <input type="radio" name="sesion" value="alumno">ALUMNO</input><br>
        <input type="submit"/><br>
    </form>
</body>
</html>