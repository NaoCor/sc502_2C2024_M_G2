<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Zone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap">
    
    <link rel="stylesheet" href="./assets/css/lugaresSeguros.css">

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

    <h2>Listado de Lugares Seguros</h2>
    <h3>Certificado por INAMU</h3>
    <div class="container_opcion">
        <form class="d-flex justify-content-center">
            <div class="mb-3">
                <select class="form-select custom-select-sm" id="provincias">
                    <option selected>San José</option>
                    <option value="1">Heredia</option>
                    <option value="2">Alajuela</option>
                    <option value="3">Cartago</option>
                    <option value="4">Guanacaste</option>
                    <option value="5">Puntarenas</option>
                    <option value="6">Limón</option>
                </select>
            </div>
        </form>
    </div>
    <div class="main-container">
        <div class="row">
            <button class="rectangle" id="centro-patrimonios">
            <img src="./assets/img/mapa.png" alt="icono" height="43px">
            <p>Centro de Patrimonios del Ministerio de Cultura y Juventud</p>
            </button>
            <button class="rectangle" id="mcdonalds-banco">
            <img src="./assets/img/mapa.png" alt="icono" height="43px">
            <p>McDonald's Banco Central</p>
            </button>
        </div>
        <div class="row">
            <button class="rectangle" id="pizza-hut-avenida">
            <img src="./assets/img/mapa.png" alt="icono" height="43px">
            <p>Pizza Hut Avenida</p>
            </button>
            <button class="rectangle" id="hotel-balmoral">
            <img src="./assets/img/mapa.png" alt="icono" height="43px">
            <p>Hotel Balmoral</p>
            </button>
        </div>
        <div class="row">
            <button class="rectangle" id="mcdonalds-plaza">
            <img src="./assets/img/mapa.png" alt="icono" height="43px">
            <p>McDonald's Plaza de la Cultura</p>
            </button>
            <button class="rectangle" id="tienda-la-gloria">
            <img src="./assets/img/mapa.png" alt="icono" height="43px">
            <p>Tienda La Gloria</p>
            </button>
        </div>
    </div>

        <div class="iframe-container">
            <iframe id="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7860.143396039974!2d-84.09142723645407!3d9.927986967289609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e342c50d15c5%3A0xe6746a6a9f11b882!2zU2FuIEpvc8Op!5e0!3m2!1ses!2scr!4v1720216456281!5m2!1ses!2scr" width="501" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

<footer>
    <div class="footer" style=" background-color: #6477e4; padding: 10px; margin: 5px 0; text-align: center;" >
      <p>© 2024 Derechos Reservados &COPY; safezone.com</p>
      <p>Contáctenos al: info@safezone.com o +506 xxxx - xxx</p>
    </div>
</footer>

    <script src="../controller/mapaController.js"></script>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+BB6Yk6R9fSYUA7a0MyckQ2y0+K2z" crossorigin="anonymous"></script>
</html>