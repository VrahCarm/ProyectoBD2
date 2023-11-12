<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <style>
    body {
      overflow: hidden;
      text-align: center;
      margin: 0;
      padding: 0;
      background-image: url('fondof.png');
      background-size: cover;
      background-position: center;
      overflow: hidden;
    }

    .container {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      height: 100vh;
      margin-top: 100px;
    }

    .header {
      position: absolute;
      top: 0;
      left: 0;
      padding: 10px;
      z-index: 1;
      align-items: flex-start;
    }

    .header a {
      display: inline-block;
    }

    .header img {
      width: 80px;
      height: 80px;
      margin-top: 0px;
    }

    .header img.top-right-logo {
      position: fixed;
      top: 10px;
      right: 10px;
      width: 90px;
      height: 90px;
    } 

    .redirect-button input[type="image"] {
      width: 50px; 
      height: 50px; 
    }

    .redirect-button:hover {
      transform: scale(1.2);
    }

    h1 {
      font-size: 60px;
      margin-bottom: 60px;
      color: rgb(0, 0, 0);
      font-family: 'Comic Sans', sans-serif;
      text-transform: uppercase;
      letter-spacing: 4px;
    }

    .menu-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 50px;
    }

    .menu {
      display: grid;
      grid-template-columns: repeat(3, 1fr); 
      gap: 20px; 
      background-color: rgba(255, 255, 255, 0.466);
      border: 2px solid black;
      border-radius: 10px;
      overflow: hidden;
      padding: 20px;
      width: 100%;
      margin: 0 auto;
    }


    .menu-button {
      transition: transform 0.3s ease-in-out;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      text-decoration: none;
    }

    .menu-button:hover {
      transform: scale(1.2);
    }

    .menu-button img {
      width: 100px;
      height: 100px;
      margin: 10px;
    }

    .button-text {
      font-size: 16px;
      margin-top: 10px;
      color: black;
    }

    .logo:hover {
      filter: brightness(1.2);
    }

    .menu-item {
      transition: transform 0.3s ease-in-out;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      text-decoration: none;
      color: black;
    }

    .menu-item:hover {
      transform: scale(1.2);
    }

    .menu-item img {
      width: 100px;
      height: 100px;
      margin: 10px;
    }

    .icon {
      width: 100px;
      height: 100px;
    }

    .button-text {
      font-size: 18px;
      text-align: center;
      color: black;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <form action="index.php" method="post" class="redirect-button">
        <input type="image" src="BotonCerrarCs.png" alt="Cerrar Sesión">
      </form>
      <img src="logoF.png"  alt="Logo Superior" class="top-right-logo" style="width: 150px; height: 150px;">
    </div>

    <h1>Menú</h1>

    <div class="menu-container">
      <div class="menu">
        <a href="Auditoria.php" class="menu-item">
          <img src="botonAudit.png" alt="Ver Auditoria" class="icon" width="100" height="100">
          <br><span style="font-size: 18px; text-align: center;">Auditoria</span>
        </a>

        <a href="Categoria.php" class="menu-item">
          <img src="botonCat.png" alt="Ver Categorias" class="icon" width="100" height="100">
          <br><span style="font-size: 18px; text-align: center;">Categoria</span>
        </a>

        <a href="MovimientoProducto.php" class="menu-item">
          <img src="botonMovPr.png" alt="Ver Movimientos" class="icon" width="100" height="100">
          <br><span style="font-size: 18px; text-align: center;">MovimientoProducto</span>
        </a>

        <a href="TipoMovimiento.php" class="menu-item">
          <img src="botonTipomov.png" alt="Ver Tipos Movimientos" class="icon" width="100" height="100">
          <br><span style="font-size: 18px; text-align: center;">Tipo Movimiento</span>
        </a>

        <a href="Productos.php" class="menu-item">
          <img src="botonProducto.png" alt="Ver Productos" class="icon" width="100" height="100">
          <br><span style="font-size: 18px; text-align: center;">Prductos</span>
        </a>

        <a href="Factura.php" class="menu-item">
          <img src="botonFactura.png" alt="Ver Factura" class="icon" width="100" height="100">
          <br><span style="font-size: 18px; text-align: center;">Factura</span>
        </a>
      </div>
    </div>
  </div>
</body>
</html>