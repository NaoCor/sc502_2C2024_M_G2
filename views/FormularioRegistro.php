<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripción a Charla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/proyecto.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
</head>

<body>

    <header>
        <?php include './header.php'; ?>
    </header>

    <section class="container section-container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5 order-md-1">
                <div class="image-container text-left">
                    <figure>
                        <img src="https://definicion.de/wp-content/uploads/2011/09/charla-1.jpg"
                            alt="Imagen de abuso físico" width="350" height="250">
                    </figure>
                </div>
            </div>
            <div class="col-md-7 order-md-2">
                <div class="custom-container text-left">
                    <h1>"Contra el Abuso: Creando Espacios Seguros"</h1>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Inscripción a conferencia: Contra el Abuso: Creando Espacios Seguros</h5>
                            <h6 class="card-subtitle mb-2">29 agosto 2024 / San José, Palma Real Hotel</h6>
                            <div class="border-top my-3"></div>
                            <form>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre">
                                    <input type="text" class="form-control" placeholder="1er. Apellido" aria-label="1er. Apellido">
                                    <input type="text" class="form-control" placeholder="2do. Apellido" aria-label="2do. Apellido">
                                </div>

                                <div class="mb-3">
                                    <label for="telefono_Presentador">Número Telefónico</label>
                                    <input type="text" id="telefono_Presentador" name="telefono_Presentador" class="form-control"
                                        placeholder="+506">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="mb-1">
                                    <label for="exampleInputEntrada" class="form-label">Entradas</label>
                                    <input type="number" class="form-control" id="exampleInputEntrada">
                                </div>
                                <p style="font-weight: bold; color: #242b52; margin-top: 15px;">Total:</p>
                                <h6>Metodo de Pago</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">Sinpe Movil</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">Transferencia Bancaria</label>
                                </div>
                                <div style="text-align: right; margin-top: 20px;">
                                    <button type="submit"  class="btn-border-animate" style="background-color: #6477e4; color: white; border-color: #6477e4;" >Registrar</button>
                                    <button type="button"  class="btn-border-animate" style="background-color: #6477e4; color: white; border-color: #6477e4;">Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <?php include './footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
