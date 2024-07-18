<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Zone - Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/registro.css">
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

    <div class="register-container">
        <img src="./assets/img/icon.png" alt="Safe Zone" width="100">
        <form>
            <input type="text" placeholder="Nombre" required><br>
            <input type="text" placeholder="Apellido" required><br>
            <input type="email" placeholder="Email" required><br>
            <input type="text" placeholder="Usuario" required><br>
            <input type="text" placeholder="Número Telefónico" required><br>
            <input type="password" placeholder="Contraseña" required><br>
            <button type="submit">Registrarse</button>
        </form>
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