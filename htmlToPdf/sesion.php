<?php
    // Redireccion al alumno o al administrador, dependiendo la sesion 
    // seleccionada
    $sesion =$_POST['sesion'];
    header('Location: '.$sesion.'.php');
?>