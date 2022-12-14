<?php
    header("Content-Type: text/css; charset: UTF-8");

    function getStyle($fondo, $logos, $arreglo_nombresFirmas, $arreglo_funcionesFirmas){
        
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
                padding: 2rem;
            }
            
            .datos{
                margin: 0 auto;
            }
            
            .marquee {
                /*color: tan;*/
                font-size: 30px;
            }
            .assignment {
                font-size: 17px;
            }
            
            .person {
                /*border-bottom: 2px solid black;*/
                font-size: 24px;
                /*font-style: italic;*/
                width: 800px;
                margin: 0 auto;
            }
            .reason {
                margin: 0 auto;
                max-width: 1000px;
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 60px;
            }
            .impartidos {
                margin: 0 auto;
                margin-top: 60px;
                max-width: 500px;
                font-size: 14px;
            }

            .lema {
                margin: 0 auto;
                margin-top: 30px;
                max-width: 800px;
                font-size: 14px;
                font-weight: bold;
            }

            .fecha {
                margin: 0 auto;
                max-width: 800px;
                font-size: 14px;
                font-weight: bold;
                margin-bottom: 0;
            }
            
            /*.firmas{
                margin: 0 auto;
                margin-top: -80px;
                display: -webkit-box;
                display: flex;
                flex-direction: row;
                -webkit-box-pack: justify;
                justify-content: space-between;
                padding: 10rem 15rem 0 15rem ;
                font-size: 10px;
                font-weight: bold;
            }*/

            .reverso {
                margin: auto;
                margin-top: 150px;
                /*background: green;*/
                max-width: 1300px;
                height: 400px;
                display: -webkit-box;
                display: grid;
                align-items: center;
                justify-items: center; 
                grid-template-columns: 1fr 1fr;
              }
              
              .item1 {
                margin: 30px; 
                margin-left: 280px;
                margin-right: 100px;
                /*background: lightgreen;*/
                text-align: center;
                padding: 150px 0;
              }

              .item2{
                margin: 30px; 
                max-width: 800px;
                /*background: lightblue;*/
                display: -webkit-box;
                display: grid;
                align-items: center;
                justify-items: center; 
                grid-template-columns: 1fr 1fr;
                text-align: left;
                font-size: 19px;
              }

              .elemento{
                padding: 100px 0;
              }

              .cajaQrReverso img{
                width: 125px;
                height: 125px;
                padding: 112px 0;
            }


              .cajaQr img{
                margin: 10px;
                width: 90px;
                height: 90px;
            }

            ";
        
        if(!empty($logos)){
            $estilo.=    
                ".fondo{
                    background-repeat: no-repeat;
                    background-size: contain;
                    width: 100px;
                    height: 100px;
                }
                ";
            if(sizeof($logos)==1){
                $estilo .=
                "
                    .header-image{
                        display: -webkit-box;
                        display: flex;
                        flex-direction: row;
                        -webkit-box-pack: center;
                        justify-content: center;
                        padding: 5rem 10rem 0 10rem; 
                    }   
                "; 
            }else{
                $estilo .=
                "
                    .header-image{
                        display: -webkit-box;
                        display: flex;
                        flex-direction: row;
                        -webkit-box-pack: justify;
                        justify-content: space-between;
                        padding: 5rem 10rem 0 10rem; 
                    }   
                ";
            }
        }
        foreach($logos as $logo){
            if(strcmp($logo,"FI")==0){
                $estilo .=
                "
                    .fondoFi{
                        background-image: url('http://localhost/htmlToPdf/src/FI.png');
                    }
                ";
            }
            elseif(strcmp($logo,"UNAM")==0){
                $estilo .=
                "
                    .fondoUnam{
                        background-image: url('http://localhost/htmlToPdf/src/UNAM.png');
                        
                    }
                ";

            }elseif(strcmp($logo,"UNICA")==0){
                $estilo .=
                " 
                    .fondo_unica{
                        background-image: url('http://localhost/htmlToPdf/src/UNICA.png');
                        background-position: center;
                    }
                ";
            }
        }



        if(!empty($arreglo_nombresFirmas)){
            $estilo.=    
                "/*.firmas{
                    margin: 0 auto;
                    margin-top: -80px;
                    padding: 10rem 15rem 0 15rem ;
                    font-size: 12px;
                    font-weight: bold;
                }*/
                
                ";
            if(sizeof($arreglo_nombresFirmas)==1){
                $estilo .=
                "
                    .firmasVar{
                        margin-top: -55px;
                        display: -webkit-box;
                        display: flex;
                        flex-direction: row;
                        -webkit-box-pack: center;
                        justify-content: center;
                        font-size: 12px;
                        padding: 5rem 10rem 0 10rem; 
                    }   
                "; 
            }else{
                $estilo .=
                "
                .firmasVar{
                    margin-top: -55px;
                    display: -webkit-box;
                    display: flex;
                    flex-direction: row;
                    -webkit-box-pack: justify;
                    justify-content: space-between;
                    font-size: 12px;
                    padding: 5rem 10rem 0 10rem; 
                    }   
                ";
            }
        }
        /*foreach($logos as $logo){
            if(strcmp($logo,"FI")==0){
                $estilo .=
                "
                    .fondoFi{
                        background-image: url('http://localhost/htmlToPdf/src/FI.png');
                    }
                ";
            }
            elseif(strcmp($logo,"UNAM")==0){
                $estilo .=
                "
                    .fondoUnam{
                        background-image: url('http://localhost/htmlToPdf/src/UNAM.png');
                        
                    }
                ";

            }elseif(strcmp($logo,"UNICA")==0){
                $estilo .=
                " 
                    .fondo_unica{
                        background-image: url('http://localhost/htmlToPdf/src/UNICA.png');
                        background-position: center;
                    }
                ";
            }
        }*/

        
        return $estilo;
    }
?>
