<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
include('Conexion.php');

$query = "SELECT * FROM TIPOMOV";
$result = mysqli_query($conexion, $query);

include('header.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tipo de Movimiento</title>
    <link rel="stylesheet" type="text/css" href="TipoMov.css">
    <link rel="stylesheet" type="text/css" href="modal-styles.css">
</head>
<body>
    <h2>Tipo de Movimiento</h2>

    <?php
    if ($result) {
        echo "<table>";
        echo "<tr>
                <th>Nombre Tipo de Movimiento</th>
                <th>Estado Tipo de Movimiento</th>
                <th>Acciones</th>
              </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['NOM_TIPOMOV'] . "</td>";
            echo "<td>" . $row['ESTADO_TIPOMOV'] . "</td>";
            echo "<td><a href='#' class='editar-btn' 
                       data-id='" . $row['ID_TIPOMOV'] . "' 
                       data-estado='" . $row['ESTADO_TIPOMOV'] . "'>Editar</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Error al consultar la base de datos.";
    }

    mysqli_close($conexion);
    ?>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Editar Tipo de Movimiento</h2>
            <form id="editForm" method="post" action="">
                <input type="hidden" id="editId" name="ID_TIPOMOV" value="">
                <label for="editEstado">Estado Tipo de Movimiento:</label>
                <select name="ESTADO_TIPOMOV" id="editEstado" required>
                    <option value="A">Activo</option>
                    <option value="I">Inactivo</option>
                </select>
                <input type='submit' value='Actualizar'>
            </form>
        </div>
    </div>

    <div class="logo">
        <a href="Menu.php" class="back-button">
            <img src="logoferre1.jpg" alt=" ">
        </a>
    </div>

    <script src="modal-script.js"></script>
</body>
</html>

<?php include('footer.php');?>
