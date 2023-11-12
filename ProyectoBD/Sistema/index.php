<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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

    h1 {
      font-size: 60px;
      margin-bottom: 60px;
      color: rgb(0, 0, 0);
      font-family: 'Comic Sans', sans-serif;
      text-transform: uppercase;
      letter-spacing: 4px;
    }

    .login-form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .login-form input {
      margin-bottom: 10px;
      padding: 8px;
    }

    .login-form button {
      margin-top: 50px;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</head>
<body>
  <div class="container">
    <div class="header">
      <img src="logoF.png"  alt="Logo Superior" class="top-right-logo" style="width: 150px; height: 150px;">
    </div>

    <h1>Inicio de Sesión</h1>

    <div class="login-form">
      <form action="" method="post">
        <input type="text" name="usuario" placeholder="Usuario" required>
        <br>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <br>
        <select name="rol" required>
          <option value="admin">Administrador</option>
          <option value="usuario">Usuario</option>
        </select>
        <br>
        <button type="submit">Iniciar Sesión</button>
      </form>
    </div>
  </div>

  <?php
  $usuarios = [
      'admin' => '123456',
      'usuario' => '123456',
  ];
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
      $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';
      $rol = isset($_POST['rol']) ? $_POST['rol'] : '';
      if (array_key_exists($usuario, $usuarios) && $usuarios[$usuario] === $contrasena) {
          if ($rol === 'admin' || $rol === 'usuario') {
              header("Location: Menup.php");
              exit(); 
          } else {
              echo "<p>Rol no válido</p>";
          }
      } else {
          echo "<p>Usuario o contraseña incorrectos</p>";
      }
  }
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  ?>
</body>
</html>
