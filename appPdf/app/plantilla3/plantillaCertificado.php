<?php
    // Genera el pdf con lenguaje HTML
    function getPlantilla(){
        $plantilla =
            '<body>
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
                                <h2>Joe Nathan</h2>
                            </div>
                            <div class="assignment">
                                <h5>For his excellence and wonderful:</h5>
                            </div>
                            <div class="reason">
                                <h3>deftly defying the laws of gravity and flying high</h3>
                            </div>
                            <div class="firmas">
                                <div class="firma1">
                                    <p class="nombre">M.I. GERARDO RUIZ SOLORIO</p>
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
            </body>';
        return $plantilla;
    } 
?>

