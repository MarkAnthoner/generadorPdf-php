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
    <title>Formulario para constancia</title>
</head>
<body>
    <h1>Generar constancia</h1>
    <hr>
    <form class="formulario-constancia" name="formulario" method="post" action="post_constancy.php">
        <br>
        <label>Imagen de fondo:</label>
        <input list="Fondo" name="fondo">
        <datalist id="Fondo">
            <option value="Fondo1">
            <option value="Fondo2">
            <option value="Fondo3">
        </datalist>
        <br>

        <br>
        <label>Logos:</label>
        <input type="checkbox" name="logos[]" value="FI">FI</input>
        <input type="checkbox" name="logos[]" value="UNAM">UNAM</input>
        <input type="checkbox" name="logos[]" value="UNICA">UNICA</input>
        <br>
        <br>

        <hr>

        <br>
        <label>Nombre del estudiante:</label>
        <input list="Nombres" name="nombre">
        <datalist id="Nombres">
            <option value="Nombre1">
            <option value="Nombre2">
            <option value="Nombre3">
        </datalist>
        <br>

        <br>
        <label>Mensaje para el estudiante:</label>
        <input type="text" name="mensaje">
        <br>

        <br>
        <label>Quien imparte los Cursos:</label>
        <input type="text" name="imparte">
        <br>
        <br>

        <hr>

            <h1>Firmas</h1>
            <h3>Presione el botón para enviar más firmas</h3>   
            <div>
                <button id="add">Agregar otra firma</button>
            </div>

            <div id="input">
                <br>
                <label>Nombre</label>
                <input type="text" name="nombresFirmas[]"/>
                <label>Funcion</label>
                <input type="text" name ="funcionesFirmas[]"/>
                <br>
            </div>

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

        <hr>

        <br>
        <label>Folio:</label>
        <input type="text" name="folio">
        <br>
        <br>
        <input type="submit"/>
    </form>
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