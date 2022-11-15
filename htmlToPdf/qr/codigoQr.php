<?php

    require_once("../vendor/phpqrcode/qrlib.php");

    //$svgCode = QRcode::svg('PHP QR Code :)');
    //echo $svgCode; 

    //se tuvo que modificar el archivo qrimage.php, agregandole una linea para que se generara el qr sin fondo blanco
    QRcode::png($_GET['code']);

?>