<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Cerrar Sesión</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

<script>

let confirmar = confirm("¿Estás seguro de que deseas cerrar la sesión?");

if(confirmar){
    <?php
    session_destroy();
    ?>

    window.location.href = "inicio_sesion.html";

}
else{
    window.location.href = "dashboard.php";
}

</script>

</body>
</html>