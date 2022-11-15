<?php
    $array_logos = [];
    $fondo = $_POST['fondo'];
    if(!empty($_POST['logos'])){
        foreach($_POST['logos'] as $logo){
            array_push($array_logos, $logo);
        }
    }
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];
    $firma = $_POST['firma'];
    

    include_once('./vendor/autoload.php');
    use mikehaertl\wkhtmlto\Pdf;

    require_once('plantilla.php');
    $content = getPlantilla($nombre, $mensaje, $firma,$array_logos);

    require_once('estilo.php');
    $estilo = getStyle($fondo, $array_logos);

    $pdf = new Pdf(array(
        'user-style-sheet' => $estilo
    ));
    $pdf->binary = 'C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf';
    $pdf->setOptions(array(
        'orientation' => 'landscape'
    ));
    $pdf->addPage($content);

    $pdf->send();
?>