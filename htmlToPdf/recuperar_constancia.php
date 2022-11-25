<?php
    $id_constancia = $_POST['id_constancia'];

    include_once('./bd/config.php');

    $resultado = pg_query($conexion,"SELECT * FROM constancias where id_constancia='$id_constancia'");
    $constancia = pg_fetch_all($resultado);
    $datos_constancia = $constancia[0];
    // ID
    $id_alumno = $datos_constancia['id_alumno'];
    $id_mensaje = $datos_constancia['id_mensaje_constancia'];
    $id_admin1 = $datos_constancia['id_admin'];
    $id_admin2 = $datos_constancia['id_admin2'];
    $id_admin3 = $datos_constancia['id_admin3'];
    $id_maestro = $datos_constancia['id_maestro'];
    // Datos fijos
    $fecha = $datos_constancia['fecha_emision'];
    $folio = $datos_constancia['folio'];
    // Fondo y logos
    $id_fondo = $datos_constancia['id_fondo'];
    $id_logo1 = $datos_constancia['id_logo1'];
    $id_logo2 = $datos_constancia['id_logo2'];
    $id_logo3 = $datos_constancia['id_logo3'];

    // Nombre del alumno
    $resultado = pg_query("SELECT nombre, apellido_paterno, apellido_materno from alumnos where id_alumno='$id_alumno'");
    $alumno = pg_fetch_row($resultado);
    $nombre_alumno = $alumno[2].' '.$alumno[1].' '.$alumno[0];
    
    // Mensaje de constancia
    $resultado = pg_query("SELECT mensaje_constancia from mensaje_constancia where id_mensaje_constancia='$id_mensaje'");
    $mensaje = pg_fetch_row($resultado); // $mensaje[0]

    // Administrativo 1
    if($id_admin1!=NULL){
        $resultado = pg_query("SELECT * from administrativo where id_admin='$id_admin1'");
        $admin1 = pg_fetch_row($resultado);
        $nombre_admin1 = $admin1[1].' '.$admin1[2].' '.$admin1[3];
        $firma1 = $admin1[5];
        $resultado = pg_query("SELECT funcion from admin_funcion where id_funcion='$admin1[4]'");
        $funcion1 = pg_fetch_row($resultado); // $funcion[0];
    }

    // Administrativo 2
    if($id_admin2!=NULL){
        $resultado = pg_query("SELECT * from administrativo where id_admin='$id_admin2'");
        $admin2 = pg_fetch_row($resultado);
        $nombre_admin2 = $admin2[1].' '.$admin2[2].' '.$admin2[3];
        $firma2 = $admin2[5];
        $resultado = pg_query("SELECT funcion from admin_funcion where id_funcion='$admin2[4]'");
        $funcion2 = pg_fetch_row($resultado); // $funcion[0];
    }
    
    // Administrativo 3
    if($id_admin3!=NULL){
        $resultado = pg_query("SELECT * from administrativo where id_admin='$id_admin3'");
        $admin3 = pg_fetch_row($resultado);
        $nombre_admin3 = $admin3[1].' '.$admin3[2].' '.$admin3[3];
        $firma3 = $admin3[5];
        $resultado = pg_query("SELECT funcion from admin_funcion where id_funcion='$admin3[4]'");
        $funcion3 = pg_fetch_row($resultado); // $funcion[0];
    }

    // Maestro 
    $resultado = pg_query("SELECT nombre, apellido_paterno, apellido_materno from maestro where id_maestro='$id_maestro'");
    $maestro = pg_fetch_row($resultado); // $maestro[0]
    $nombre_maestro = $maestro[0].' '.$maestro[1].' '.$maestro[2];
    
    $array_logos = [];

    // Logo 1
    if($id_logo1!=NULL){
        $resultado = pg_query("SELECT logo from logo where id_logo='$id_logo1'");
        $logo1 = pg_fetch_row($resultado); // logo1[0]
        array_push($array_logos, $logo1[0]);
    }

    // Logo 2
    if($id_logo2!=NULL){
        $resultado = pg_query("SELECT logo from logo where id_logo='$id_logo2'");
        $logo2 = pg_fetch_row($resultado); // logo2[0]
        array_push($array_logos, $logo2[0]);
    }

    // Logo 3
    if($id_logo3!=NULL){
        $resultado = pg_query("SELECT logo from logo where id_logo='$id_logo3'");
        $logo3 = pg_fetch_row($resultado); // logo3[0]
        array_push($array_logos, $logo3[0]);
    }

    // Fondo
    $resultado = pg_query("SELECT fondo from fondo where id_fondo='$id_fondo'");
    $fondo = pg_fetch_row($resultado); // $fondo[0]

    // Generar constancia
    
    $fecha_split = explode("-",$fecha); // 0->Año, 1->Mes, 2->Dia
    $mes = "";
    switch ($fecha_split[1]){
            case 1:
                $mes = "enero";
                break;
            case 2:
                $mes = "febrero";
                break;
            case 3:
                $mes = "marzo";
                break;
            case 4:
                $mes = "abril";
                break;
            case 5:
                $mes = "mayo";
                break;
            case 6:
                $mes = "junio";
                break;
            case 7:
                $mes = "julio";
                break;
            case 8:
                $mes = "agosto";
                break;
            case 9:
                $mes = "septiembre";
                break;
            case 10:
                $mes = "octubre";
                break;
            case 11:
                $mes = "noviembre";
                break;
            case 12:
                $mes = "diciembre";
                break;
        }


    $fecha = "Ciudad Universitaria, Cd. Mx. a " . $fecha_split[2] . " de " . $mes . " de " . $fecha_split[0];
    

    include_once('./vendor/autoload.php');
    use mikehaertl\wkhtmlto\Pdf;

    require_once('plantilla.php');
    $content = getPlantilla($nombre_alumno, $mensaje[0], $nombre_admin1, $funcion1[0], $nombre_admin2, $funcion2[0], $array_logos, $nombre_maestro, $fecha);

    require_once('estilo.php');
    $estilo = getStyle($fondo[0], $array_logos);

    $pdf = new Pdf(array(
        'user-style-sheet' => $estilo
    ));
    $pdf->binary = 'C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf';
    $pdf->setOptions(array(
        'orientation' => 'landscape'
    ));

    $pdf->addPage($content);

    //Reverso de pdf

    $liga = "https://www.unica.unam.com.mx";

    require_once('plantillaReverso.php');
    $reverseContent = getPlantillaReverso($folio, $liga, $array_logos);
    $pdf->addPage($reverseContent);

    $pdf->send();
?>