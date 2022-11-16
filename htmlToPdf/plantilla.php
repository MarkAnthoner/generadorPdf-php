<?php

    function getPlantilla($nombre, $mensaje, $firma, $logos, $imparte, $lema, $fecha){
        
        $añadirLogos = "";
        if(!empty($logos)){
            foreach($logos as $logo){
                if(strcmp($logo,"FI")==0){
                    $añadirLogos .=
                    '
                        <div class="fondo fondoFi"></div>
                    ';
                }
                elseif(strcmp($logo,"UNAM")==0){
                    $añadirLogos .=
                    '
                        <div class="fondo fondoUnam"></div>
                    ';

                }elseif(strcmp($logo,"UNICA")==0){
                    $añadirLogos .=
                    '
                        <div class="fondo fondo_unica"></div>
                    ';
                }
            }
        }

        $plantilla = 
            '<!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                </head>
                <body>
                    <div class="container">
                        <div class="logo-fondo">
                            <div class="header-image">
                                '.$añadirLogos.'
                            </div>
                            <div class="datos">
                                <div class="marquee">
                                    <h1>Constancia</h1>
                                </div>
                                <div class="person">
                                    <h2>'.$nombre.'</h2>
                                </div>
                                <div class="assignment">
                                    <h5>Por su excelente y estupendo:</h5>
                                </div>
                                <div class="reason">
                                    <h3>'.$mensaje.'</h3>
                                </div>
                                <div class="impartidos">
                                    <h3>'.$imparte.'</h3>
                                </div>

                                <div class="lema">
                                    <h3>'.$lema.'</h3>
                                </div>

                                <div class="fecha">
                                    <h3>'.$fecha.'</h3>
                                </div>

                                <div class="firmas">
                                    <div class="firma1">
                                        <div class="cajaQr">
                                            <img src="http://localhost/htmltoPdf/qr/codigoQr.php?code=https://www.ingenieria.unam.mx/unica/indexN.php" />
                                        </div>
                                        <p class="nombre">'.$firma.'</p>
                                        <p class="ocupacion">SECRETARIO GENERAL DE LA FACULTAD DE INGENIERIA</p>
                                    </div>
                                    <div class="firma2">
                                        <div class="cajaQr">
                                            <img src="http://localhost/htmltoPdf/qr/codigoQr.php?code=http://www.mcc.unam.mx/index.php" />
                                        </div>
                                        <p class="nombre">ING. ENRIQUE BARRANCO VITE</p>
                                        <p class="ocupacion">COORDINADOR DE LA UNIDAD DE SERVICIOS DE CÓMPUTO ACADÉMICO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </body>
            </html>';
        return $plantilla;
    }
?>