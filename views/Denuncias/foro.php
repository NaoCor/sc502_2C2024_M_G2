<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro de Denuncias</title>
    <link rel="stylesheet" href="../models/css/proyecto.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Consultas</a></li>
                <li><a href="#">Información</a></li>
                <li><a href="#">Lugares Seguros</a></li>
                <li><a href="#">Denuncias</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Foro de denuncias</h1>
        <div class="foro-denuncias">
            <?php for ($i = 0; $i < 4; $i++): ?>
                <div class="denuncia">
                    <h2>Denuncia #XX</h2>
                    <p><strong>Fecha:</strong> xx/xx/xxxx</p>
                    <p><strong>Lugar:</strong> xxxxxxx</p>
                    <p><strong>Descripción:</strong> xxxxxxx</p>
                    <button>Ver más detalles</button>
                </div>
            <?php endfor; ?>
        </div>
    </main>
</body>
</html>
