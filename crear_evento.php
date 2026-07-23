<?php

session_start();

if(!isset($_SESSION['id_usuario']))
{
    header("Location:index.php");
    exit();
}

include("conexion.php");

// Cargar la vista
include("formulario_evento.html");

?>