<!--
    Formulario para generar la constancia en pdf
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="formulario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Formulario para constancia</title>
</head>
<body>
    <header> 
        <img src="./src/UNICA.png" alt="" height="101px">
        <label class="unica">Unidad de Servicios de Cómputo Académico</label>
        <img src="./src/FI.png" alt="logo fi" height="101px">
        <img src="./src/UNAM.png" alt="" height="101px">
    </header>

    <div class = "tit"><p>Generar constancia</p></div>
    
    <hr>
    <div class="d-flex flex-column mb-3">
        <div class="d-flex justify-content-center" id="admin">
            <br>
            <table border = "none">
                <form class="formulario-constancia" name="formulario" method="post" action="post_constancy.php">
                    <br>
                    <tr>
                        <td>
                            <label>Imagen de fondo:</label>
                        </td>
                        <td>
                            <input list="Fondo" name="fondo">
                            <datalist id="Fondo">
                                <option value="Fondo1">
                                <option value="Fondo2">
                                <option value="Fondo3">
                            </datalist>  
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <label>Logos:</label>
                        </td>
                        <td>
                            <input type="checkbox" name="logos[]" value="FI">FI</input>
                            <input type="checkbox" name="logos[]" value="UNAM">UNAM</input>
                            <input type="checkbox" name="logos[]" value="UNICA">UNICA</input>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Nombre del estudiante:</label>
                        </td>
                        <td>
                            <input list="Nombres" name="nombre">
                            <datalist id="Nombres">
                                <option value="Nombre1">
                                <option value="Nombre2">
                                <option value="Nombre3">
                            </datalist>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Mensaje para el estudiante:</label>
                        </td>
                        <td>
                            <input type="text" name="mensaje">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Quien imparte los Cursos:</label>
                        </td>
                        <td>
                            <input type="text" name="imparte">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Firmas</label>
                            <!-- <h3>Presione el botón para enviar más firmas</h3> -->
                        </td>
                        <td>
                        <button id="agregar-campos" type="button">Agregar otra firma</button>
                            <div id="entrada-campos">
                                <label>Nombre</label>
                                <input type="text" name="nombresFirmas[]"/>
                                <br>
                                <label>Funcion</label>
                                <input type="text" name ="funcionesFirmas[]"/>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <label>Folio:</label>
                        </td>
                        <td>
                            <input type="text" name="folio">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit"/>
                        </td>
                    </tr>
                </form>
            </table>
            
        </div>
    </div>


</body>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type = "text/javascript">   
        $(document).ready(function(){
            $('#agregar-campos').click(function(){
                    $input = $('<br>'   
                    + '<label>Nombre</label>'
                    + '<input type="text" name="nombresFirmas[]" required = "required"/>'
                    + '<br>'
                    + '<label>Funcion</label>'
                    + '<input type="text" name="funcionesFirmas[]" required = "required"/>'
                    + '<br>');
                    $input.fadeIn(1000).appendTo('#entrada-campos');
            });
        });
    </script> 

</html>