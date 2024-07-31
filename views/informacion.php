<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/informacion.css">
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
    <section>
        <h1>Información</h1>
        <div class="container">
            <div class="row card-container">
                <div class="col-md-4 card-wrapper">
                    <div class="card">
                        <img src="https://img.freepik.com/vector-gratis/concepto-acoso-cibernetico_52683-41021.jpg"
                            class="card-img-top" alt="Imagen de acoso" style="margin-top: 25px;">
                        <div class="card-body">
                            <h5 class="card-title">Acoso</h5>
                            <p class="card-text">Aquí encontrarás información sobre el acoso y cómo prevenirlo.</p>
                            <a href="#" class="btn-border-animate">Más Información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 card-wrapper">
                    <div class="card">
                        <img src="https://img.freepik.com/vector-premium/concepto-abuso-escandalo-hogar-mama-papa-padres-enojados-furiosos-gritando-gritando-su-hija-triste-sosteniendo-ilustracion-vector-mochila_140689-3132.jpg"
                            class="card-img-top" alt="Imagen de abuso" style="margin-top: 25px;">
                        <div class="card-body">
                            <h5 class="card-title">Abuso</h5>
                            <p class="card-text">Encuentra recursos y apoyo para situaciones de abuso.</p>
                            <a href="./abuso.php" class="btn-border-animate">Más Información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 card-wrapper">
                    <div class="card">
                        <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-charla-publica_114360-8970.jpg"
                            class="card-img-top" alt="Imagen de charlas" style="margin-top: 25px;">
                        <div class="card-body">
                            <h5 class="card-title">Charlas</h5>
                            <p class="card-text">Participa en nuestras charlas y talleres educativos.</p>
                            <a href="./charlas.php" class="btn-border-animate">Más Información</a>
                        </div>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

</body>

</html>