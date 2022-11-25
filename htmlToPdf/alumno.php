<?php
    include_once('./bd/config.php');
    $id_alumno =$_GET['id_alumno'];
    $sentencia = "SELECT * from alumnos where id_alumno='$id_alumno'";
    $resultado = pg_query($conexion, $sentencia);
    while($fila = pg_fetch_row($resultado)){
        $nombre_alumno = $fila[4].' '.$fila[3].' '.$fila[2];
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Alumno</title>
</head>
<body>
    <h1><?php echo $nombre_alumno?></h1><br>
    <hr>
    <h2>Consultar constancias</h2><br>
    <table>
        <tr>
            <th>Período</th>
            <th>Fecha de emisión</th>
            <th>Tipo de constancia</th>
            <th>Calificacion</th>
            <th>Ver constancia</th>
        </tr>
        <?php
            $resultado = pg_query($conexion, "SELECT * FROM constancias WHERE id_alumno='$id_alumno'");
            $constancias = pg_fetch_all($resultado);
            foreach($constancias as $constancia){
                
                $id_constancia = $constancia['id_constancia'];
                $id_periodo_curso = $constancia['id_periodo_curso'];
                $resultado_periodo = pg_query($conexion, "SELECT * FROM periodo WHERE id_periodo='$id_periodo_curso'");
                $periodo = pg_fetch_row($resultado_periodo);

                $fecha =  $constancia['fecha_emision'];
                $calificacion = $constancia['calificacion'];
                $id_tipo_constancia = $constancia['id_tipo_constancia'];

                $resultado_tipo = pg_query($conexion, "SELECT * FROM tipo_constancia WHERE id_tipo_constancia='$id_tipo_constancia'");
                $tipo_constancia = pg_fetch_row($resultado_tipo);

                echo "<tr>";
                echo "<td>$periodo[1]</td>"; // Periodo
                echo "<td>$fecha</td>"; // Fecha
                echo "<td>$tipo_constancia[1]</td>"; // Tipo
                echo "<td>$calificacion</td>"; // Calif
                echo "<td>
                    <form action='recuperar_constancia.php' method='post'>
                        <input type=text value=".$id_constancia." name='id_constancia' hidden='true'>
                        <input type='submit'/>
                    </form>
                </td>" ; // Ver constancia
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>