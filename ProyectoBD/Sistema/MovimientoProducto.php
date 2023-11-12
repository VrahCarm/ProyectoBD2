<?php
include('Conexion.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idMovimiento = mysqli_real_escape_string($connection, $_POST['ID_MOVIMIENTO']);
    $nuevoEstado = mysqli_real_escape_string($connection, $_POST['nuevo_estado']);

    $queryUpdate = "UPDATE MOVPRODUCTO SET estado_movimiento='$nuevoEstado' WHERE ID_MOVIMIENTO='$idMovimiento'";
    $resultUpdate = mysqli_query($connection, $queryUpdate);

    if ($resultUpdate) {
        echo "Estado del movimiento actualizado correctamente.";
    } else {
        echo "Error al actualizar el estado del movimiento: " . mysqli_error($connection);
    }
}
$querySelect = "SELECT id_movimiento, id_tipomov, cantidad_mov, id_producto, fecha_movimiento, estado_movimiento FROM MOVPRODUCTO";
$resultSelect = mysqli_query($connection, $querySelect);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Movimiento de Producto</title>
    <link rel="stylesheet" type="text/css" href="Css/MovProducto.css">
</head>
<body>
    <div class="container">
        <h2>Movimiento de Producto</h2>
        <table>
            <tr>
                <th>ID Tipo Movimiento</th>
                <th>Cantidad Movimiento</th>
                <th>ID Producto</th>
                <th>Fecha Movimiento</th>
                <th>Estado Movimiento</th>
                <th>Editar Estado</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($resultSelect)) {
                echo "<tr>";
                echo "<td>" . $row['ID_TIPOMOV'] . "</td>";
                echo "<td>" . $row['CANTIDAD_MOV'] . "</td>";
                echo "<td>" . $row['ID_PRODUCTO'] . "</td>";
                echo "<td>" . $row['FECHA_MOVIMIENTO'] . "</td>";
                echo "<td>" . $row['ESTADO_MOVIMIENTO'] . "</td>";
                echo "<td>
                        <button class='editar-btn' data-id='" . $row['ID_MOVIMIENTO'] . "' data-estado='" . $row['ESTADO_MOVMIMIENTO'] . "'>Editar</button>
                      </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Editar Estado</h2>
            <form id="editForm" method="post" action="">
                <input type="hidden" id="editId" name="ID_MOVIMIENTO" value="">
                <select name="nuevo_estado" id="editEstado">
                    <option value='I'>Inactivo</option>
                    <option value='A'>Activo</option>
                </select>
                <input type='submit' value='Actualizar'>
            </form>
        </div>
    </div>

    <script>
    var modal = document.getElementById("myModal");

    var btns = document.getElementsByClassName("editar-btn");
    var span = document.getElementsByClassName("close")[0];

    for (var i = 0; i < btns.length; i++) {
        btns[i].onclick = function() {
            var id = this.getAttribute("data-id");
            var estado = this.getAttribute("data-estado");
            document.getElementById("editId").value = id;
            document.getElementById("editEstado").value = estado;
            modal.style.display = "block";
        };
    }
    span.onclick = function() {
        modal.style.display = "none";
    };
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
    </script>
    <?php
    mysqli_close($connection);
    ?>
    <div class="logo">
        <a href="Menu.php" class="back-button">
            <img src="logoferre1.jpg" alt=" ">
        </a>
    </div> 
</body>
</html>
