<?php

    function getPlantilla($nombre, $mensaje, $arreglo_nombresFirmas, $arreglo_funcionesFirmas, $logos, $imparte, $fecha){
        
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


        $añadirFirmas = "";
        if(!empty($arreglo_nombresFirmas)){
            $arrlength = count($arreglo_nombresFirmas);
            for($x = 0; $x < $arrlength; $x++) {
                
                $añadirFirmas .= '
                    <div>
                        <div class="cajaQr">
                            <img src="http://localhost/htmltoPdf/qr/codigoQr.php?code=https://www.ingenieria.unam.mx/unica/indexN.php" />
                        </div>
                        <p>'.$arreglo_nombresFirmas[$x].'</p>
                        <p>'.$arreglo_funcionesFirmas[$x].'</p>
                    </div>
                ';

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
                                    <h3>"POR MI RAZA HABLARÁ EL ESPÍRITU"</h3>
                                </div>

                                <div class="fecha">
                                    <h3>'.$fecha.'</h3>
                                </div>

                                <div class="firmas">
                                    <div class="firmasVar">
                                    '.$añadirFirmas.'
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