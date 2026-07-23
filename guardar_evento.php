<?php
session_start();

// Verificar que el usuario haya iniciado sesión
if (!isset($_SESSION["id_usuario"])) {
    header("Location: inicio_sesion.html");
    exit();
}

// Conexión a la base de datos
include("conexion.php");

// Verificar que el formulario fue enviado por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {


        // Obtener el ID del usuario desde la sesión
    $id_usuario = $_SESSION["id_usuario"];

    // Recibir datos del formulario
    $nombre = trim($_POST["nombre"]);
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $lugar = trim($_POST["lugar"]);
    $descripcion = trim($_POST["descripcion"]);

    // Validar que no existan campos vacíos
    if (empty($nombre) || empty($fecha) || empty($hora) || empty($lugar)) {
        echo "<script>
                alert('Todos los campos obligatorios deben estar llenos.');
                window.history.back();
              </script>";
        exit();
    }

    // Consulta preparada para evitar inyección SQL
    $sql = "INSERT INTO eventos
            (id_usuario, nombre, fecha, hora, lugar, descripcion)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conexion, $sql);

    if ($stmt) {

        mysqli_stmt_bind_param(
            $stmt,
            "isssss",
            $id_usuario,
            $nombre,
            $fecha,
            $hora,
            $lugar,
            $descripcion
        );

        if (mysqli_stmt_execute($stmt)) {

            echo "<script>
                    alert('Evento guardado correctamente.');
                    window.location='tabla_eventos.php';
                  </script>";

        } else {

            echo "<script>
                    alert('Error al guardar el evento.');
                    window.history.back();
                  </script>";

        }

        mysqli_stmt_close($stmt);

    } else {

        echo "Error en la consulta: " . mysqli_error($conexion);

    }

} else {

    header("Location: formulario_evento.html");
    exit();

}

mysqli_close($conexion);
?>