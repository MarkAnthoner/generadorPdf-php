<?php
// Datos para acceder a la base de datos
// Modificar los datos de acuerdo a su usuario y contraseña en postgres
// Respetar el espacio al final de los valores
$server = "host=localhost ";
$username = "user= ";
$password = "password= ";
$dbname = "dbname= ";
$post = $server . $dbname . $username . $password;

// Reliza la conexión a la base de datos
$conexion = pg_connect($post) or die ('No se ha podido conectar');
$stat = pg_connection_status($conexion);
if (!$stat === PGSQL_CONNECTION_OK){
    die("Error de conexion");
}

?>