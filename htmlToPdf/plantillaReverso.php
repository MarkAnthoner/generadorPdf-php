<?php

    function getPlantillaReverso($folio, $liga, $logos) {
        
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
                                <!--<!--'.$añadirLogos.'
                            </div>
                            <div class="datos">
                                <div class="marquee">
                                    <h1>Constancia</h1>
                                </div>-->



                                <div class="reverso">
                                    <div class="item1">No. folio: '.$folio.'</div>
                                    <div class="item2">
                                        <div class="cajaQrReverso">
                                            <img src="http://localhost/htmltoPdf/qr/codigoQr.php?code='.$liga.'" />
                                        </div>
                                        <div class="elemento"><p>La siguiente constancia puede ser verificada en</p> <p>'.$liga.' con la </p> <p> entidad FING y el número de folio: '.$folio.' </p></div>
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