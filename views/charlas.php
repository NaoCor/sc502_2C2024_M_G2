<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/charlas.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/tipo2.css">

    <style>

    </style>
</head>

<body>
    <header>
        <?php
        include './header.php'
        ?>
    </header>

    <h1 class="encabezado">Nuestras Charlas</h1>



<section>
    <?php
    include '../config/Conexion.php';
    $cnx = Conexion::conectar();
    $query = "SELECT * FROM charla"; 
    $sql = $cnx->prepare($query);
    $sql->execute();
    $charlas = $sql->fetchAll();
    ?>

    <div class="container">
        <div class="row">
            <?php foreach ($charlas as $charla) { ?>
                <div class="col-md-4 mb-4 d-flex justify-content-center"">
                    <div class="card" style="width: 18rem;">
                        <img src=<?php echo $charla['nombreCharla']?>
                            class="card-img-top" alt="Acoso Social">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $charla['nombreCharla']?></h5>
                            <a href="./infoCharla.php?categoria=<?php echo $charla['idCharla']?>" 
                               class="btn-border-animate">
                               Más Información
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>




    <footer>
        <?php
         include './footer.php'
        ?>
    </footer>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>