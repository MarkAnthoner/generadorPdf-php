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
    $imparte = $_POST['imparte'];
    $lema = $_POST['lema'];


    $dia = date("d");
    $month = date("m");
    $anio = date("Y");
    $mes = "";

    switch ($month){
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


    $fecha = "Ciudad Universitaria, Cd. Mx. a " . $dia . " de " . $mes . " de " . $anio;
    

    include_once('./vendor/autoload.php');
    use mikehaertl\wkhtmlto\Pdf;

    require_once('plantilla.php');
    $content = getPlantilla($nombre, $mensaje, $firma,$array_logos, $imparte, $lema, $fecha);

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