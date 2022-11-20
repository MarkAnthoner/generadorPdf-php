<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para constancia</title>
</head>
<body>
    <form name="formulario" method="post" action="post_constancy.php">
        <br>
        <label>Imagen de fondo</label>
        <input list="Fondo" name="fondo">
        <datalist id="Fondo">
            <option value="Fondo1">
            <option value="Fondo2">
            <option value="Fondo3">
        </datalist>
        <br>

        <br>
        <label>Logos</label>
        <input type="checkbox" name="logos[]" value="FI">FI</input>
        <input type="checkbox" name="logos[]" value="UNAM">UNAM</input>
        <input type="checkbox" name="logos[]" value="UNICA">UNICA</input>
        <br>

        <br>
        <label>Nombre del estudiante</label>
        <input list="Nombres" name="nombre">
        <datalist id="Nombres">
            <option value="Nombre1">
            <option value="Nombre2">
            <option value="Nombre3">
        </datalist>
        <br>

        <br>
        <label>Mensaje para el estudiante</label>
        <input type="text" name="mensaje">
        <br>

        <br>
        <label>Quien imparte los Cursos</label>
        <input type="text" name="imparte">
        <br>

        <br>
        <label>Lema UNAM</label>
        <input type="text" name="lema">
        <br>

        <br>
        </datalist>
        <label>Firma 1</label>
        <input list="Firma" name="firma">
        <datalist id="Firma">
            <option value="Firma1">
            <option value="Firma2">
            <option value="Firma3">
        </datalist>
        <br>

        <br>
        <label>Folio</label>
        <input type="text" name="folio">
        <br>
        
        <input type="submit"/>
    </form>
</body>
</html>