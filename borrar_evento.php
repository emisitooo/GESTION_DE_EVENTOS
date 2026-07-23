<?php
session_start();
include("conexion.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_evento'];
    $sql = "DELETE FROM eventos WHERE id_evento='$id'";
    if (mysqli_query($conexion, $sql)) {
        echo "<script>
        alert('Evento eliminado correctamente');
        window.location='tabla_eventos.php';
        </script>";
    } else {
        echo "<script>
        alert('No fue posible eliminar el evento');
        window.location='tabla_eventos.php';
        </script>";
    }
}
?>