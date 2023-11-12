<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link rel="stylesheet" type="text/css" href="Css/Productos.css">
    <link rel="stylesheet" type="text/css" href="modal-styles.css">
</head>
<body>
    <h2>Productos</h2>

    <?php
    include('Conexion.php');

    $query = "SELECT p.*, c.NOM_CATEGORIA FROM PRODUCTO p
              INNER JOIN CATEGORIA c ON p.ID_CATEGORIA = c.ID_CATEGORIA";
    $result = mysqli_query($conexion, $query);

    if ($result) {
        echo "<table>";
        echo "<tr>
                <th>Categoría</th>
                <th>Código</th>
                <th>Descripción</th>
                <th>Existencia</th>
                <th>Bodega</th>
                <th>Precio de Venta Actual</th>
                <th>Precio de Venta Anterior</th>
                <th>Costo de Venta</th>
                <th>Margen de Utilidad</th>
                <th>Stock Mínimo</th>
                <th>Stock Máximo</th>
                <th>Estado</th>
                <th>Descuento Mínimo</th>
                <th>Descuento Máximo</th>
                <th>Valor IVA</th>
                <th>Acciones</th>
              </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['NOM_CATEGORIA'] . "</td>";
            echo "<td>" . $row['COD_PRODUCTO'] . "</td>";
            echo "<td>" . $row['DES_PRODUCTO'] . "</td>";
            echo "<td>" . $row['EXIS_PRODUCTO'] . "</td>";
            echo "<td>" . $row['BODEGA_PRODUCTO'] . "</td>";
            echo "<td>" . $row['PRECIO_VENTA_ACT'] . "</td>";
            echo "<td>" . $row['PRECIO_VENTA_ANT'] . "</td>";
            echo "<td>" . $row['COSTO_VENTA'] . "</td>";
            echo "<td>" . $row['MATGEN_UTILIDAD'] . "</td>";
            echo "<td>" . $row['STOCK_MINIMO'] . "</td>";
            echo "<td>" . $row['STOCK_MAXIMO'] . "</td>";
            echo "<td>" . $row['ESTADO_PRODUCTO'] . "</td>";
            echo "<td>" . $row['DSCTO_MINIMO'] . "</td>";
            echo "<td>" . $row['DSCTO_MAXIMO'] . "</td>";
            echo "<td>" . $row['VALOR_IVA'] . "</td>";
            echo "<td>
                    <a href='#' class='editar-btn' 
                       data-id='" . $row['COD_PRODUCTO'] . "' 
                       data-id-categoria='" . $row['ID_CATEGORIA'] . "' 
                       data-estado='" . $row['ESTADO_PRODUCTO'] . "'>Editar</a>
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
            <h2>Editar Producto</h2>
            <form id="editForm" method="post" action="editar_producto.php">

                <input type='submit' value='Actualizar'>
            </form>
        </div>
    </div>

    <h2>Nuevo Producto</h2>
    <form id="createForm" method="post" action="crear_producto.php">

        <input type='submit' value='Crear Producto'>
    </form>

    <div class="logo">
        <a href="Menu.php" class="back-button">
            <img src="logoferre1.jpg" alt=" ">
        </a>
    </div>

    <script src="modal-script.js"></script> 
</body>
</html>
