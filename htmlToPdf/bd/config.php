<?php
    // Datos para acceder a la base de datos
    // Modificar datos de acuerdo al usuario y contraseña
    // Respetar el espacio al final de los valores
    $server = "host=localhost ";
    $username = "user= ";
    $password = "password= ";
    $dbname = "dbname= ";
    $post = $server . $dbname . $username . $password;

    $conexion = pg_connect($post) or die('No se ha podido conectar a la base de datos');
    $stat = pg_connection_status($conexion);
    if(!$stat === PGSQL_CONNECTION_OK){
        die("Error de conexion");
    }

?>