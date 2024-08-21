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
    <?php $idCharla = $_GET["categoria"]; 
     include '../config/Conexion.php';
     $cnx = Conexion::conectar();
     $query = "SELECT * FROM charla WHERE idCharla = :idCharla";
     $sql = $cnx->prepare($query);
     $sql->bindParam(':idCharla', $idCharla, PDO::PARAM_INT);
     $sql->execute();
     $charla = $sql->fetch(PDO::FETCH_ASSOC);
         ?> 

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
                    <h1><?php echo $charla['nombreCharla']?></h1>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Inscripción a conferencia: <?php echo $charla['nombreCharla']?></h5>
                            <h6 class="card-subtitle mb-2"><?php echo $charla['lugar']?></h6>
                            <div class="border-top my-3"></div>
                            <form id="reserva">

                            <div class="mb-1" style="display: none;">
                            <input type="hidden" id="charla" name="charla" value="<?php echo $_GET['categoria']; ?>">
                                    </div>



                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" id="nombre" name="nombre" required>
                                    <input type="text" class="form-control" placeholder="1er. Apellido" aria-label="1er. Apellido" id="apellido" name="apellido" required>
                                  
                                </div>


                                <div class="mb-3">
                                    <label for="cedula">Identificacion</label>
                                    <input type="text" id="cedula" name="cedula" class="form-control"
                                       required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                
                                <div class="mb-1">
                                     <label for="entrada" class="form-label">Entradas</label>
                                     <input type="number" class="form-control" id="entrada" name="entrada" min="1" value="1" oninput="totalPago()" required>
                                </div>

                                <div class="mb-1" style="display: none;">
                                      <label for="precio" class="form-label" >Precio por Entrada</label>
                                     <input type="number" class="form-control" id="precio" name="precio" value="<?php echo $charla['costo'];  ?>" readonly>
                                </div>

                                <div class="mb-1">
                                      <label for="total" class="form-label">Total</label>
                                      <input type="number" class="form-control" id="total" name="total" value="<?php echo $charla['costo']; ?>" readonly>
                                </div>

                                <h6>Metodo de Pago</h6>
                                <select class="form-select" aria-label="Default select example" id="metodo" name="metodo" >
                      
                                <option value="SinpeMovil">SinpeMovil</option>
                                <option value="Tarjeta">Tarjeta</option>
                   
                        </select>
                                <div style="text-align: right; margin-top: 20px;">
                                    <button type="submit"  class="btn-border-animate" style="background-color: #6477e4; color: white; border-color: #6477e4;" value= <?php $idCharla = $_GET["categoria"]?>>Registrar</button>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
<script src="./assets/js/reserva.js"></script>
</body>
<script>
function  totalPago() {
    var cantidad = document.getElementById('entrada').value;
    var precio = document.getElementById('precio').value;
    var total = cantidad * precio;
    document.getElementById('total').value = total;
}
</script>
</html>
