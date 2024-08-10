<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Zone - Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/inicio.css">
</head>

<body>

<header>
        <?php include './header.php'; ?>
    </header>


        
    <div class="formulario">
        <h1>Inicio de Sesion</h1>
        <form id="formulario1" method="post">
            <div class=>
            <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class=>
                <input type="password" required>
                <label>Contraseña</label>
            </div>
            <div class="recordar">¿Olvidaste tu contraseña?</div>
            <button type="submit" class="btn btn-primary w-100">Iniciar Sesion</button>
        </form>
    
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
<script src="./assets/js/inicio.js"></script>
</html>





