<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Zone - Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/registro.css">
    <link rel="stylesheet" href="./assets/css/header.css">
</head>

<body>

<header>
        <?php include './header.php'; ?>
    </header>

    <div class="formulario">
        <h1>Registro</h1>
        <form method="post">
            <div class="username">
                <input type="text" placeholder="Nombre" required>
                <label>Nombre</label>
            </div>
            <div class="username">
                <input type="text" placeholder="Apellido" required>
                <label>Apellido</label>
            </div>
            <div class="username">
                <input type="email" placeholder="Email" required>
                <label>Email</label>
            </div>
            <div class="username">
                <input type="text" placeholder="Usuario" required>
                <label>Usuario</label>
            </div>
            <div class="username">
                <input type="text" placeholder="Número Telefónico" required>
                <label>Número Telefónico</label>
            </div>
            <div class="username">
                <input type="password" placeholder="Contraseña" required>
                <label>Contraseña</label>
            </div>
            <input type="submit" value="Registrarse">
            <div class="registrarse">
                ¿Ya tienes cuenta? <a href="./inicioSesion.php">Inicia sesión</a>
            </div>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
<script src="./assets/js/registro.js"></script>
</html>
