<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #6f42c1;">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">
            <img src="./assets/img/icon.png" alt="" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./consulta1.php"
                        style="color: white;">Consultas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./informacion.php" style="color: white;">Información</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./lugares_seguros.php" style="color: white;">Lugares Seguros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./formularioDenuncias.php" style="color: white;">Denuncias</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Foro
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./foroDenuncia.php">Foro Denuncias</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="./foroConsulta.php">Foro Consultas</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../views/dashboard_adminlte/index.php" style="color: white;">Admin</a>
                </li>
            </ul>
            <a href="./inicioSesion.php" class="d-flex ms-auto">
                <img src="./assets/img/avatar.png" alt="" style="height: 40px;">
            </a>
        </div>
    </div>
</nav>