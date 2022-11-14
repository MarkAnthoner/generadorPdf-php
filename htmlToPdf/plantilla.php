<?php

    function getPlantilla($nombre, $mensaje, $firma){
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
                                <div class="fondo fondoUnam"></div>
                                <div class="fondo fondoFi"></div>
                                <div class="fondo fondo_unica"></div>
                            </div>
                            <div class="datos">
                                <div class="marquee">
                                    <h1>Constancy</h1>
                                </div>
                                <div class="person">
                                    <h2>'.$nombre.'</h2>
                                </div>
                                <div class="assignment">
                                    <h5>For his excellence and wonderful:</h5>
                                </div>
                                <div class="reason">
                                    <h3>'.$mensaje.'</h3>
                                </div>
                                <div class="firmas">
                                    <div class="firma1">
                                        <p class="nombre">'.$firma.'</p>
                                        <p class="ocupacion">SECRETARIO GENERAL DE LA FACULTAD DE INGENIERIA</p>
                                    </div>
                                    <div class="firma2">
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