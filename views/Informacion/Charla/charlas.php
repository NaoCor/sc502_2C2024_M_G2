<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../assets/proyecto.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg " style="background-color: #6477e4">
            <div class="container-fluid">
                <a class="navbar-brand" href="../../sesion/paginaPrincipal.php">
                    <img src="../../../img/icon.png" alt="Descripción de la imagen de navbar" style="height: 40px;">
                    </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../../consultas/consulta1.php">Consultas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../Informacion/informacion.php">Informacion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../LugaresSeguros/lugares_seguros.php">Lugares Seguros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../Denuncias/formulario.php">Denuncias</a>
                        </li>
                    </ul>
                    <a href="../../sesion/inicioSesion.php" class="d-flex" style="margin-left: auto;">
                        <img src="../../../img/avatar.png" alt="Descripción de la imagen" style="height: 40px;">
                    </a>
                </div>
            </div>
        </nav>
    </header>
  <h1 class="encabezado" >Charlas</h1>


        <div class="container" style="margin-top: 50px;">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="carousel-container" style="max-width: 800px; margin: auto;">
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                                    aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card" style="text-align: center; background-color: #7a64e3;">
                                        <img src="https:/static.vecteezy.com/system/resources/previews/004/204/129/non_2x/sexual-harassment-at-work-vector.jpg"
                                            class="card-img-top" alt="..." style="margin-top: 25px;" width="400" height="250">
                                        <div class="card-body" style="margin-bottom: 25px;">
                                            <a href="./infoCharla.php" class="cardref">No es tu culpa</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card" style="text-align: center; background-color: #7a64e3;">
                                        <img src="https:/static.vecteezy.com/system/resources/previews/004/204/129/non_2x/sexual-harassment-at-work-vector.jpg"
                                            class="card-img-top" alt="..." style="margin-top: 25px;" width="400" height="250">
                                        <div class="card-body" style="margin-bottom: 25px;">
                                            <a href="./abusoSexual.php" class="cardref">Desmintamos mitos</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card" style="text-align: center; background-color: #7a64e3;">
                                        <img src="https:/static.vecteezy.com/system/resources/previews/004/204/129/non_2x/sexual-harassment-at-work-vector.jpg"
                                            class="card-img-top" alt="..." style="margin-top: 25px;" width="400" height="250">
                                        <div class="card-body" style="margin-bottom: 25px;">
                                            <a href="./abusoSexual.php" class="cardref">Creando Espacios seguros</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev" style="margin-left: 10px;">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next" style="margin-right: 10px;">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <a href="./RegistroCharla.php">  <button type="submit" class="btn btn-primary">Submit</button></a>

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