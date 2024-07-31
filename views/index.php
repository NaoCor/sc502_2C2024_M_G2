<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Zone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/css/paginaPrincipal.css">
        <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <style>

    </style>
</head>

<body>
    <header>
        <?php include './header.php'; ?>
    </header>

    <div class="intro text-center">
            <img src="./assets/img/icon.png" alt="Safe Zone Logo" style="width: 150px; height: 150px;">

        </div>

        <p class="welcome-text">Bienvenido/a a SafeZone, un espacio seguro donde encontrarás apoyo 
                y recursos para enfrentar el acoso y el abuso.</p>

    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://recla.org/wp-content/uploads/2021/08/explorando-los-recursos-educativos-digitales.webp" class="d-block w-100" alt="Descripción del slide 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Apoyo y Recursos</h5>
                        <p>Encuentra el apoyo y los recursos necesarios para enfrentar situaciones difíciles.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://diariofemenino.com.ar/df/wp-content/uploads/2020/01/p10f1-dsc04893_1200w-1024x648.jpg" class="d-block w-100" alt="Descripción del slide 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Lugares Seguros</h5>
                        <p>Descubre los lugares seguros disponibles cerca de ti.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://lh3.googleusercontent.com/proxy/yriG0cqLRm2_6kWym5zeCsSfjWLmWRnSSzvURJhs_-BFLEBRwGKfVfGDdI42RwkujIZh0_9ETQwvW3OJ9hMAo_28MMDfAxBOw4SyUPn8y-v3p6yb6687uJvOAOtgYs4" class="d-block w-100" alt="Descripción del slide 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Denuncias Anónimas</h5>
                        <p>Realiza denuncias de manera anónima y confidencial.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



        <div class="section-title text-center">
            <h2>RECOMENDACIONES</h2>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                <img src="./assets/img/charla.png" class="card-img-top" alt="" width="300" height="300">


                    <div class="card-body">
                        <h5 class="card-title">CHARLAS</h5>
                        <p class="card-text">Encontraras variedad de charlas.</p>
                        <a href="./charlas.php" class="btn btn-custom">Leer Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="./assets/img/info.png" class="card-img-top" alt="" width="300" height="300">
                    <div class="card-body">
                        <h5 class="card-title">INFORMACIÓN</h5>
                        <p class="card-text">encontrarás la informacion acerca de los tipos de acoso y abuso</p>
                        <a href="./informacion.php" class="btn btn-custom">Leer Más</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="call-to-action text-center">
            <h3>Únete a Nuestra Comunidad</h3>
            <p>Regístrate para recibir actualizaciones y ser parte de nuestra red de apoyo. Tu seguridad y bienestar son nuestra prioridad.</p>
            <a href="./registro.php" class="btn btn-light">Regístrate Ahora</a>
        </div>
    </div>

    <footer>
        <?php include './footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
