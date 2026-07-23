<?php
session_start();

if (!isset($_SESSION["id_usuario"])) {
    header("Location: inicio_sesion.html");
    exit();
}

include("conexion.php");

/* Total de eventos */
$sqlEventos = "SELECT COUNT(*) AS total FROM eventos";
$resultadoEventos = mysqli_query($conexion, $sqlEventos);
$filaEventos = mysqli_fetch_assoc($resultadoEventos);
$totalEventos = $filaEventos["total"];

/* Usuario activo */
$usuarioActivo = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Panel Principal</title>
<link rel="stylesheet" href="estilos.css">
</head>

<button id="modoBN" onclick="modoBlancoNegro()"> Modo Daltonismo </button>

<body>
<div class="contenedor">
    <!-- Menú lateral -->
    <aside class="menu">
        <div class="logo">
            <h2>EVENTOS</h2>
        </div>
        <ul>
            <li><a href="dashboard.php">🏠 Inicio</a></li>
            <li><a href="formulario_evento.html">➕ Crear Evento</a></li>
            <li><a href="editar_evento.html">✏ Modificar Evento</a></li>
            <li><a href="confirmar_eliminacion.html">🗑 Eliminar Evento</a></li>
            <li><a href="tabla_eventos.php">🔍 Consultar Evento</a></li>
            <li><a href="cerrar.php">🚪 Cerrar Sesión</a></li>
        </ul>
    </aside>
    <!-- Contenido -->
<main class="principal">
<header class="encabezado">
    <h1>Sistema de Gestión de Eventos</h1>
    <div class="usuario">
        Bienvenido:
        <strong><?php echo htmlspecialchars($_SESSION["nombre"]); ?></strong>
    </div>
</header>
<!-- Tarjetas -->
<section class="tarjetas">
<div class="tarjeta">
    <h3>Total de Eventos</h3>
    <h2><?php echo $totalEventos; ?></h2>
</div>
<div class="tarjeta">
    <h3>Usuario Activo</h3>
    <h2><?php echo htmlspecialchars($usuarioActivo); ?></h2>
</div>
</section>
<section class="bienvenida">
<h2>Bienvenido al Sistema De Gestion de Eventos</h2>
<p> Desde este panel podrás administrar los eventos, consultar información, modificar eventos existentes y eliminar registros. </p>
</section>
</main>
</div>

    <script>
function modoBlancoNegro() {
    document.body.classList.toggle("blanco-negro");
}
</script>

</body>
</html>