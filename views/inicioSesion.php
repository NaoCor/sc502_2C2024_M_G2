<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Zone - Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/inicio.css">
</head>
<body>
<header>
    <?php include './header.php'; ?>
</header>
<div class="formulario">
    <h1>Inicio de Sesión</h1>
    <?php
    if (isset($_GET['error']) && $_GET['error'] === 'invalid_credentials') {
        echo '<div class="alert alert-danger" role="alert">Credenciales inválidas. Por favor, intente nuevamente.</div>';
    }
    ?>
    <form id="formulario1" method="post">
        <div class="mb-3">
            <label for="txtEmail" class="form-label">Correo</label>
            <input type="email" class="form-control" id="txtEmail" name="correo" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="contrasena" required>
        </div>
        <button type="submit" class="btn btn-primary w-80">Iniciar Sesión</button>
        <a href="registro.php" class="btn btn-primary w-80">Registrarse</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

<script src="./assets/js/inicio.js"></script>
</body>
</html>




