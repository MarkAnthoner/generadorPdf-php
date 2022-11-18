<?php

    require_once("../vendor/phpqrcode/qrlib.php");

    //$svgCode = QRcode::svg('PHP QR Code :)');
    //echo $svgCode; 

    //se tuvo que modificar el archivo qrimage.php, agregandole una linea para que se generara el qr sin fondo blanco
    QRcode::png($_GET['code']);

    /*
    
    Problemas con la carga de códigos QR
        Los códigos qr en formato PNG parecen causar un error al momento de crear la imagen
        Se tiene que descomentar ";extension=gd" en archivo "php.ini"
            ;extension=gd -> extension=gd
        Después se reinicia el servidor para que se confirme el cambio

    */

?>