<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Categoría</title>
    <link rel="stylesheet" type="text/css" href="Css/Categoria.css">
    <link rel="stylesheet" type="text/css" href="modal-styles.css">
</head>
<body>
    <h2>Categoría</h2>

    <?php
    include('Conexion.php');

    $query = "SELECT * FROM CATEGORIA";
    $result = mysqli_query($conexion, $query);

    if ($result) {
        echo "<table>";
        echo "<tr><th>Nombre Categoria</th><th>Estado Categoria</th><th>Acciones</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['NOM_CATEGORIA'] . "</td>";
            echo "<td>" . $row['ESTADO_CATEGORIA'] . "</td>";
            echo "<td><a href='#' class='editar-btn' data-id='" . $row['ID_CATEGORIA'] . "' data-nombre='" . $row['NOM_CATEGORIA'] . "' data-estado='" . $row['ESTADO_CATEGORIA'] . "'>Editar</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Error al consultar la base de datos.";
    }
    mysqli_close($connection);
    ?>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Editar Categoría</h2>
            <form id="editForm" method="post" action="">
                <input type="hidden" id="editId" name="ID_CATEGORIA" value="">
                <label for="editNombre">Nombre Categoría:</label>
                <input type="text" id="editNombre" name="NOM_CATEGORIA" required>
                <label for="editEstado">Estado Categoría:</label>
                <select name="ESTADO_CATEGORIA" id="editEstado" required>
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

