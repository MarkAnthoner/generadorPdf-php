<?php

    /*
    Problemas al cargar imágenes (logos y fondos) y códigos qr 
        Para que se genere el archivo pdf de manera correcta, al bajar el repositorio,
        se tiene que colocar la carpeta "htmlToPdf" directamente en la raiz de "htdocs" 
        (Si se está usando xampp) para que cargue las imágenes con la ruta correcta.
        La ruta que debería tomar xampp para las imagenes es la siguiente:
            localhost/htmlToPdf/src/...
            localhost/htmlToPdf/qr/...
    */

    $array_logos = [];
    $fondo = $_POST['fondo'];
    if(!empty($_POST['logos'])){
        foreach($_POST['logos'] as $logo){
            array_push($array_logos, $logo);
        }
    }
    /*Guardo los nombres de las firmas y las funciones en arreglos*/ 
    $array_nombresFirmas = [];
    if(!empty($_POST['nombresFirmas'])){
        foreach($_POST['nombresFirmas'] as $nombreFirma){
            array_push($array_nombresFirmas, $nombreFirma);
        }
    }

    $array_funcionesFirmas = [];
    if(!empty($_POST['funcionesFirmas'])){
        foreach($_POST['funcionesFirmas'] as $funcionFirma){
            array_push($array_funcionesFirmas, $funcionFirma);
        }
    }

    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];
    /*$firma1 = $_POST['firma1'];
    $funcionfirma1 = $_POST['funcionfirma1'];
    $firma2 = $_POST['firma2'];
    $funcionfirma2 = $_POST['funcionfirma2'];*/
    $imparte = $_POST['imparte'];
    $folio = $_POST['folio'];
    
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
    $content = getPlantilla($nombre, $mensaje, $array_nombresFirmas, $array_funcionesFirmas, $array_logos, $imparte, $fecha);

    require_once('estilo.php');
    $estilo = getStyle($fondo, $array_logos, $array_nombresFirmas, $array_funcionesFirmas);

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