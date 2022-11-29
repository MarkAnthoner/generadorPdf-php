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
    <nav class="navbar bg-light">
        <div id = "bienvenida"><?php echo $nombre?> !Bienvenido!</div>
    </nav>

    <div class = "admin" id="admin">
        <table>
            <form class="formulario-constancia" name="formulario" method="post" action="post_constancy.php">
                
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
                    </td>
                    <td>
                    <label>Presione el botón para enviar más firmas</label>   
                    <div>
                        <button id="add">Agregar otra firma</button>
                    </div>

                    <div id="input">
                        <br>
                        <label>Nombre</label>
                        <input type="text" name="nombresFirmas[]"/>
                        </td>
                        <td>
                        <label>Funcion</label>
                        <input type="text" name ="funcionesFirmas[]"/>
                        <br>
                    </div>
                    </td>
                </tr>
                    
                    

                <br>


        <!-- 
                <br>
                <label>Firma 1:</label>
                <input list="Firma" name="firma1">
                <datalist id="Firma">
                    <option value="Firma1">
                    <option value="Firma2">
                    <option value="Firma3">
                </datalist>
                <br>

                <br>
                <label>Funcion firma 1:</label>
                <input type="text" name="funcionfirma1">
                <br>


                <br>
                <label>Firma 2:</label>
                <input list="Firma2" name="firma2">
                <datalist id="Firma2">
                    <option value="Firma1">
                    <option value="Firma2">
                    <option value="Firma3">
                </datalist>
                <br>

                <br>
                <label>Funcion firma 2:</label>
                <input type="text" name="funcionfirma2">
                <br> -->
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
    
</body>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type = "text/javascript">   
        $(document).ready(function(){
            $('#add').click(function(){
                    $input = $('<br>'   
                    + '<label>Nombre</label>'
                    + '<input type="text" name="nombresFirmas[]" required = "required"/>'
                    + '<label>Funcion</label>'
                    + '<input type="text" name="funcionesFirmas[]" required = "required"/>'
                    + '<br>');
                    $input.fadeIn(1000).appendTo('#input');
            });
        });
    </script> 


</html>