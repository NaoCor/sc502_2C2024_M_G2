<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripcion a Charla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/proyecto.css">

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


    <section class="container" style="max-width: 100%;">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5 order-md-1">
                <div class="image-container text-left">
                    <figure style="display: inline-block; margin-top: 15px; margin-left: 100px;">
                        <img src="https://definicion.de/wp-content/uploads/2011/09/charla-1.jpg"
                            alt="Imagen de abuso físico" width="350" height="250">
                    </figure>
                </div>
            </div>
            <div class="col-md-7 order-md-2">
                <div class="custom-container text-left">
                    <h1 style="margin-top: 50px;">"Contra el Abuso: Creando Espacios Seguros"</h1>

                    <div class="card" style="background-color: #877be3; color:white;margin-top: 15px;">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">Inscripción a conferencia: Contra el
                                Abuso: Creando Espacios Seguros</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary" style="text-align: center;">29 agosto
                                2024/ San José, Palma Real Hotel</h6>
                            <div class="border-top my-3"></div>
                            <form>
                                <div class="input-group mb-3" style="margin-top: 15px;">
                                    <label style="padding-right: 5px;">Nombre Completo</label>
                                    <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre">
                                    <input type="text" class="form-control" placeholder="1er.Apellido"
                                        aria-label="1er.Apellido">
                                    <input type="text" class="form-control" placeholder="2do.Apellido"
                                        aria-label="2do.Apellido">
                                </div>

                                <div class="mb-3">
                                    <label for="telefono_Presentador">Número Telefónico</label>
                                    <input type="text" id="telefono_Presentador" name="telefono_Presentador"
                                        placeholder="+506" aria-label="+506">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">

                                </div>
                                <div class="mb-1">
                                    <label for="exampleInputEntrada" class="form-label">Entradas</label>
                                    <input type="number" class="form-control" id="exampleInputEntrada">

                                </div>
                                <p style="font-weight: bold; color: #242b52; margin-top: 15px;">Total:</p>
                                <h6>Metodo de Pago</h6>
                                <div class="form-check" style="margin-top: 15px;">

                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Sinpe Movil
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2" >
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Transferencia Bancaria
                                    </label>
                                </div>

                                <div style="text-align: right; margin-top: 20px;">
                                    <button type="submit" class="btn" style="background-color:#242b52 ; color: white;">Registar</button>
                                    <button type="button" class="btn" style="background-color:#242b52 ; color: white;">Cancelar</button>
                                </div>

                            </form>
                        </div>
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