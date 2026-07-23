<?php

session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: index.php");
    exit();
}

include("conexion.php");

if (!isset($_GET['id'])) {
    header("Location: consultar_evento.php");
    exit();
}

$id = $_GET['id'];

$sql = "SELECT * FROM eventos WHERE id_evento='$id'";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) == 0) {
    header("Location: consultar_evento.php");
    exit();
}

$evento = mysqli_fetch_assoc($resultado);

// Cargar la vista
include("confirmar_eliminacion.html");

?>