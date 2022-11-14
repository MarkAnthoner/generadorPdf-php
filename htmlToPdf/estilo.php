<?php
    header("Content-Type: text/css; charset: UTF-8");

    function getStyle($fondo){
        
        if(strcmp($fondo,"Fondo1")==0){
            $image_fondo = 'FondoCertificado.jpg';
        }elseif(strcmp($fondo,"Fondo2")==0){
            $image_fondo = "fondo2.jpg";
        }else{
            $image_fondo = "fondo4.png";
        }

        $estilo ="
            html{
                font-size: 61.5%;
                box-sizing: border-box; 
            }
            
            *, *:before, *after{ 
                box-sizing: inherit;
            }
            
            body {
                color: black;
                display: table;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
            }
            
            .container {
                border: 5px solid tan;
                display: table-cell;
                vertical-align: middle;
                width: 1500px;
                height: 875px;
                
            }
            
            
            .logo-fondo{
                background-image: url('http://localhost/htmlToPdf/src/".$image_fondo."');
                background-repeat: no-repeat;
                background-size: cover;
                width: 100%;
                height: 100%;
            }
            
            .header-image{
                display: -webkit-box;
                display: flex;
                flex-direction: row;
                -webkit-box-pack: justify;
                justify-content: space-between;
                padding: 5rem 10rem 0 10rem; /*T R D L*/
            }
            
            .fondo{
                background-repeat: no-repeat;
                background-size: contain;
                width: 100px;
                height: 100px;
            }
            
            .fondoUnam{
                background-image: url('http://localhost/htmlToPdf/src/logo_unam.png');
                
            }
            
            .fondoFi{
                background-image: url('http://localhost/htmlToPdf/src/escudo_fi_color.png');
            }
            
            .fondo_unica{
                background-image: url('http://localhost/htmlToPdf/src/logo_unicaA.png');
                background-position: center;
            }
            
            .datos{
                margin: 0 auto;
            }
            
            .marquee {
                color: tan;
                font-size: 30px;
            }
            .assignment {
                font-size: 17px;
            }
            
            .person {
                border-bottom: 2px solid black;
                font-size: 24px;
                font-style: italic;
                width: 400px;
                margin: 0 auto;
            }
            .reason {
                font-size: 18px;
            }
            
            .firmas{
                display: -webkit-box;
                display: flex;
                flex-direction: row;
                -webkit-box-pack: justify;
                justify-content: space-between;
                padding: 10rem 10rem 0 10rem ;
                font-size: 10px;
                font-weight: bold;
            }
            
            .cajaQr img{
                margin: 10px;
                width: 90px;
                height: 90px;
            }

            ";
        return $estilo;
    }
?>
