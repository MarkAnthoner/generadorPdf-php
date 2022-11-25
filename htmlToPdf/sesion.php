<?php
    // Redireccion al alumno o al administrador, dependiendo la sesion 
    // seleccionada
    $sesion =$_POST['sesion'];
    include_once("./bd/config.php");

    if(strcmp($sesion,"alumno")==0){
        $titulo = "Alumno";
        $sentencia = "SELECT id_alumno from alumnos";
        $resultado = pg_query($conexion, $sentencia);
        $action = "alumno.php";
    }else{
        header('Location: '.$sesion.'.php');
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Redireccion</title>
</head>
<body>
    <form method="get" action="<?php echo $action?>">
        <h3 class="titulo">Seleccionar <?php echo $titulo?></h3>
        <h4>Por id</h4>
        <input list="Nombres" name="id_alumno">
        <datalist id="Nombres">
            <?php
                while($fila = pg_fetch_row($resultado)){
                    echo '<option value="'.$fila[0].'">';
                }
            ?>
        </datalist>
        <br>
        <br>
        <input type="submit">
    </form>
</body>
</html>