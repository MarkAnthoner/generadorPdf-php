<?php
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];
    $firma = $_POST['firma'];
    $fondo = $_POST['fondo'];

    include_once('./vendor/autoload.php');
    use mikehaertl\wkhtmlto\Pdf;

    require_once('plantilla.php');
    $content = getPlantilla($nombre, $mensaje, $firma);

    require_once('estilo.php');
    $estilo = getStyle($fondo);

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