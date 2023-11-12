<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Empresas</title>
    <link rel="stylesheet" type="text/css" href="Css/Empresa.css">
    <link rel="stylesheet" type="text/css" href="modal-styles.css">
</head>
<body>
    <h2>Empresas</h2>

    <?php
    include('Conexion.php');

    $query = "SELECT * FROM EMPRESA";
    $result = mysqli_query($conexion, $query);

    if ($result) {
        echo "<table>";
        echo "<tr>
                <th>Razón Social</th>
                <th>NIT Empresa</th>
                <th>Dirección Empresa</th>
                <th>Correo Empresa</th>
                <th>Representante</th>
                <th>Teléfono Empresa</th>
                <th>Estado Empresa</th>
                <th>Acciones</th>
              </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['RAZON_SOCIAL'] . "</td>";
            echo "<td>" . $row['NIT_EMPRESA'] . "</td>";
            echo "<td>" . $row['DIR_EMPRESA'] . "</td>";
            echo "<td>" . $row['CORREO_EMPRESA'] . "</td>";
            echo "<td>" . $row['REPRESENTANTE'] . "</td>";
            echo "<td>" . $row['TELEFONO_EMPRESA'] . "</td>";
            echo "<td>" . $row['ESTADO_EMPRESA'] . "</td>";
            echo "<td>
                    <a href='#' class='editar-btn' 
                       data-id='" . $row['ID_EMPRESA'] . "' 
                       data-estado='" . $row['ESTADO_EMPRESA'] . "'>Editar</a>
                  </td>";
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
            <h2>Editar Empresa</h2>
            <form id="editForm" method="post" action="editar_empresa.php">
                <!-- Campos para editar empresas -->
                <input type='submit' value='Actualizar'>
            </form>
        </div>
    </div>

    <h2>Nueva Empresa</h2>
    <form id="createForm" method="post" action="crear_empresa.php">
        <!-- Campos para nuevas empresas -->

        <input type='submit' value='Crear Empresa'>
    </form>

    <div class="logo">
        <a href="Menu.php" class="back-button">
            <img src="logoferre1.jpg" alt=" ">
        </a>
    </div>

    <script src="modal-script.js"></script> 
</body>
</html>
