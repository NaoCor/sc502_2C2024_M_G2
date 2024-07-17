<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Zone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
</head>
<body>

<header>
        <nav class="navbar navbar-expand-lg " style="background-color: #6477e4">
            <div class="container-fluid">
                <a class="navbar-brand" href="./paginaPrincipal.php">
                <img src="../../img/icon.png" alt="Descripción de la imagen de navbar" style="height: 40px;">
                
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../consultas/consulta1.php">Consultas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Informacion/informacion.php">Informacion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../LugaresSeguros/lugares_seguros.php">Lugares Seguros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Denuncias/formulario.php">Denuncias</a>
                        </li>
                    </ul>
                    <a href="./inicioSesion.php" class="d-flex" style="margin-left: auto;">
                        <img src="../../img/avatar.png" alt="Descripción de la imagen" style="height: 40px;">
                    </a>
                </div>
            </div>
        </nav>
    </header>
    
        <div class="container text-center mt-5">
            <img src="../../img/icon.png" alt="Safe Zone Logo" style="width: 200px; height: 200px;">
            <p>Bienvenido/a a SafeZone, un espacio seguro donde encontrarás apoyo y recursos para enfrentar el acoso y el abuso.</p>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mb-3">
                    <div class="card" style="width: 18rem; margin: auto;">
                        <img src="../../img/mapa2.1.png" class="card-img-top" alt="Mapa" style="display: block; margin: 0 auto;">
                        <div class="card-body">
                            <h5 class="card-title">Lugares Seguros</h5>
                            <p class="card-text"></p>
                            <a href="../LugaresSeguros/lugares_seguros.php" class="btn" style="background-color: #6477e4; color: white;">Más Información</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <div class="card" style="width: 18rem; margin: auto;">
                        <img src="../../img/solicitud.png" class="card-img-top" alt="Solicitud" style="display: block; margin: 0 auto;">
                        <div class="card-body">
                            <h5 class="card-title">Denuncias</h5>
                            <p class="card-text"></p>
                            <a href="../Denuncias/formulario.php" class="btn" style="background-color: #6477e4; color: white;">Más Información</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<footer>
    <div class="footer" style=" background-color: #6477e4; padding: 10px; margin: 5px 0; text-align: center;" >
      <p>© 2024 Derechos Reservados &COPY; safezone.com</p>
      <p>Contáctenos al: info@safezone.com o +506 xxxx - xxx</p>
    </div>
</footer>
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </html>