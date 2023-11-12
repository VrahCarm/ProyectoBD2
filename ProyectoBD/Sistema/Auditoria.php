<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Auditoria</title>
    <link rel="stylesheet" type="text/css" href="Css/Auditoria.css">
</head>
<body>
    <h2>Auditoria</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Fecha</th>
        </tr>
        <?php
        include('Conexion.php');

        $consulta = "SELECT * FROM AUDITORIA";
        $resultado = mysqli_query($connection, $consulta);

        if ($resultado->num_rows > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $fila["ID_AUDITORIA"] . "</td>";
                echo "<td>" . $fila["USUARIO_AUDITORIA"] . "</td>";
                echo "<td>" . $fila["EVENTO_AUDITORIA"] . "</td>";
                echo "<td>" . $fila["TABLA_AUDITORIA"] . "</td>";
                echo "<td>" . $fila["ID_TABLA_AUDITORIA"] . "</td>";
                echo "<td>" . $fila["IP_AUDITORIA"] . "</td>";
                echo "<td>" . $fila["FECHA_AUDITORIA"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No hay reportes disponibles</td></tr>";
        }
        mysqli_close($connection);
        ?>
    </table>

    <div class="logo">
        <a href="Menu.php" class="back-button">
            <img src="logoferre1.jpg" alt=" ">
        </a>
    </div> 
</body>
</html>