<?php

session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = trim($_POST["usuario"]);
    $contraseña = trim($_POST["contraseña"]);

    if (empty($usuario) || empty($contraseña)) {

        echo "<script>
                alert('Debe completar todos los campos.');
                window.location='inicio_sesion.html';
              </script>";
        exit();
    }

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) == 1) {

        $fila = mysqli_fetch_assoc($resultado);

    // Verificar la contraseña encriptada
    if (password_verify($contraseña, $fila["contraseña"])) {

            $_SESSION["id_usuario"] = $fila["id_usuario"];
            $_SESSION["nombre"] = $fila["nombre"];
            $_SESSION["usuario"] = $fila["usuario"];

            header("Location: dashboard.php");
            exit();

        } else {

            echo "<script>
                    alert('Contraseña incorrecta.');
                    window.location='inicio_sesion.html';
                  </script>";
        }

    } else {

        echo "<script>
                alert('El usuario no existe.');
                window.location='inicio_sesion.html';
              </script>";
    }

    mysqli_close($conexion);

} else {

    header("Location: inicio_sesion.html");
    exit();
}
?>