<?php

session_start();

if(!isset($_SESSION['id_usuario']))
{
    header("Location:editar_evento.html");
    exit();
}

include("conexion.php");

// Obtener todos los eventos
$sql = "SELECT * FROM eventos ORDER BY fecha ASC";
$resultado = mysqli_query($conexion, $sql);

// Cargar la vista
include("tabla_eventos.html");

?>