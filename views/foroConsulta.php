<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro de Consultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/foro.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
</head>
<body>
<header>
        <?php
        include './header.php'
        ?>
</header>
    <div class="consultas-container">
        <h2>Foro de Consultas</h2>
        <div class="consulta-item">
            <h3>Consulta #1</h3>
            <p><strong>Fecha:</strong> xx/xx/xxxx</p>
            <p><strong>Consultante:</strong> Nombre del Consultante</p>
            <p><strong>Consulta:</strong> ¿?</p>

            <div class="respuesta">
                <h4>Respuesta:</h4>
                <p> [inserte respuesta aquí].</p>
            </div>
        </div>
    <footer>
        <?php
         include './footer.php'
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
