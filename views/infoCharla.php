<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/infoCharla.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <style>

    </style>
</head>

<body>
    <header>
        <?php
        include './header.php'
        ?>
    </header>

    <section class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./informacion.php">Información</a></li>
                <li class="breadcrumb-item"><a href="./charlas.php">Charlas</a></li>
                <li class="breadcrumb-item active" aria-current="page">NombreCharla</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-8">
                <div class="custom-container">
                    <h1>"Contra el Abuso: Creando Espacios Seguros"</h1>
                    <p>
                        El mensaje de la charla "Contra el Abuso: Creando Espacios Seguros" es la importancia de
                        identificar, prevenir y combatir el abuso en todas sus formas, y fomentar la creación de
                        entornos seguros y de apoyo para proteger y empoderar a las víctimas.
                    </p>
                    <div class="custom-body">
                        <h3>¿En qué consiste la charla?</h3>
                        <p>
                            La charla "Contra el Abuso: Creando Espacios Seguros" consiste en definir qué es el abuso
                            y sus diferentes tipos, incluyendo físico, emocional, sexual y verbal, y cómo identificar
                            las señales de que alguien puede estar siendo abusado. Se ofrecen estrategias y prácticas
                            preventivas para reducir el riesgo de abuso en diversos entornos, como el hogar, el
                            trabajo y las comunidades. Además, se proporciona información sobre cómo brindar apoyo a
                            las víctimas de abuso, incluyendo recursos disponibles, servicios de ayuda y cómo crear
                            un entorno seguro para que las víctimas puedan buscar ayuda. La charla también discute
                            cómo establecer y mantener ambientes seguros y de apoyo en diferentes contextos, y la
                            importancia de políticas y procedimientos claros para prevenir el abuso. Finalmente, se
                            promueve la concienciación sobre la problemática del abuso y la necesidad de la
                            colaboración comunitaria para crear espacios seguros, a través de programas educativos y
                            campañas de sensibilización.
                        </p>
                    </div>

                    <div class="custom-body">
                        <h3>Objetivo de la charla</h3>
                        <p>
                            El objetivo de la charla "Contra el Abuso: Creando Espacios Seguros" es educar y
                            sensibilizar a los participantes sobre la identificación, prevención y combate del abuso
                            en todas sus formas, así como fomentar la creación de entornos seguros y de apoyo para
                            proteger y empoderar a las víctimas.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <figure>
                        <img src="https://definicion.de/wp-content/uploads/2011/09/charla-1.jpg"
                            alt="Imagen de abuso físico" class="img-fluid rounded" style="max-width: 100%;">
                    </figure>
                </div>
                <div class="card card-info">
                    <div class="card-body info-section">

                        <h5 class="card-title">Características</h5>
                        <p class="card-text">Fecha</p>
                        <p class="card-text">Hora</p>
                        <p class="card-text">Costo x entrada</p>
                        <p class="card-text">Lugar</p>
                        <p class="card-text">Tipo</p>
                        <p class="card-text">Duración</p>
                        <p class="card-text">Formato</p>
                        <p class="card-text">Objetivo</p>
                    </div>
                    <div class="text-center mt-3">
                        <a href="./FormularioRegistro.php" class="btn-border-animate">Regístrate</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

  



<footer>
        <?php
        include './footer.php'
        ?>
    </footer>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>