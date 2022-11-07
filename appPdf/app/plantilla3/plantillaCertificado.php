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
                        </div>
                    </div>
                </div>
            </body>';
        return $plantilla;
    } 
?>

