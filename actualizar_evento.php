<?php

session_start();

include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id_evento'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $lugar = $_POST['lugar'];
    $descripcion = $_POST['descripcion'];

    $sql = "UPDATE eventos SET

            nombre='$nombre',
            fecha='$fecha',
            hora='$hora',
            lugar='$lugar',
            descripcion='$descripcion'

            WHERE id_evento='$id'";

    if (mysqli_query($conexion, $sql)) {

        echo "<script>

            alert('Evento actualizado correctamente');

            window.location='tabla_eventos.html';

        </script>";

    } else {

        echo "<script>

            alert('Error al actualizar el evento');

            window.location='consultar_evento.php';

        </script>";

    }

}

?>