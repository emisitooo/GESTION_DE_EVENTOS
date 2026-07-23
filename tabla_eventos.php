<?php
session_start();
include("conexion.php");

$sql = "SELECT * FROM eventos ORDER BY id_evento ASC";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Consultar Eventos</title>
<link rel="stylesheet" href="estilos.css">
</head>

<button id="modoBN" onclick="modoBlancoNegro()"> Modo Daltonismo </button>

<body>

<div class="contenedor">

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

    <main class="principal">

        <div class="encabezado">
            <h1>Consultar Eventos</h1>

            <div class="usuario">
                <?php echo $_SESSION['nombre']; ?>
            </div>

        </div>

        <div class="tabla">

            <table>

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Lugar</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>

                </thead>

                <tbody>

                <?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

                    <tr>

                        <td><?php echo $fila['id_evento']; ?></td>
                        <td><?php echo $fila['nombre']; ?></td>
                        <td><?php echo $fila['fecha']; ?></td>
                        <td><?php echo $fila['hora']; ?></td>
                        <td><?php echo $fila['lugar']; ?></td>
                        <td><?php echo $fila['descripcion']; ?></td>
                        <td>
                            <a class="editar"
                               href="editar_evento.html?id_evento=<?php echo $fila['id_evento']; ?>">
                                Editar
                            </a>

                            |

                            <a class="eliminar"
                               href="confirmar_eliminacion.html?id_evento=<?php echo $fila['id_evento']; ?>">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
</div>

    <script>
function modoBlancoNegro() {
    document.body.classList.toggle("blanco-negro");
}
</script>

</body>
</html>