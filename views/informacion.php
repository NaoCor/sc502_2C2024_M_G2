<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<header>
            <nav class="navbar navbar-expand-lg " style="background-color: #6477e4;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./paginaPrincipal.php">
                        <img src="./assets/img/icon.png" alt="Descripción de la imagen de navbar" style="height: 40px;">
                        </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav"  >
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./consulta1.php" style="color: white;">Consultas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./informacion.php" style="color: white;">Informacion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./lugares_seguros.php" style="color: white;">Lugares Seguros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./formularioDenuncias.php" style="color: white;">Denuncias</a>
                            </li>
                        </ul>
                        <a href="./inicioSesion.php" class="d-flex" style="margin-left: auto;">
                            <img src="./assets/img/avatar.png" alt="Descripción de la imagen" style="height: 40px;">
                        </a>
                    </div>
                </div>
            </nav>
        </header>
    <section>
        <h1 style="text-align: center;">Informacion</h1>
        <div class="row">
            <div class="col-1"></div>
            <div class="col">
                <div class="card" style="width: 18rem; text-align: center; background-color: #7a64e3;">
                    <img src="https://img.freepik.com/vector-gratis/concepto-acoso-cibernetico_52683-41021.jpg"
                        class="card-img-top" alt="..." style="margin-top: 25px;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: white;">Acoso </h5>
                        <a href="#" class="btn" style="background-color: #242b52; color: white;">Más Informacion</a>
                    </div>
                </div>
            </div>
            <div class="col">

                <div class="card" style="width: 18rem; text-align: center; background-color: #7a64e3;">
                <img src="https://img.freepik.com/vector-premium/concepto-abuso-escandalo-hogar-mama-papa-padres-enojados-furiosos-gritando-gritando-su-hija-triste-sosteniendo-ilustracion-vector-mochila_140689-3132.jpg"
                    class="card-img-top" alt="..." style="margin-top: 25px;">

                    <div class="card-body">
                        <h5 class="card-title" style="color: white;">Abuso</h5>
                        <a href="./abuso.php" class="btn" style="background-color: #242b52; color: white;">Más Informacion</a>
                    </div>
                </div>
            </div>
            <div class="col">

                <div class="card" style="width: 18rem; text-align: center; background-color: #7a64e3;">
                    <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-charla-publica_114360-8970.jpg"
                        class="card-img-top" alt="..." style="margin-top: 25px;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: white;">Charlas</h5>
                        <a href="./charlas.php" class="btn" style="background-color: #242b52; color: white;">Más Informacion</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
    <div class="footer" style=" background-color: #6477e4; padding: 10px; margin: 5px 0; text-align: center;" >
      <p>© 2024 Derechos Reservados &COPY; safezone.com</p>
      <p>Contáctenos al: info@safezone.com o +506 xxxx - xxx</p>
    </div>
</footer>


</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>