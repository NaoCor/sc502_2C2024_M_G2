
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/infoCharla.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <style>

    </style>
</head>

<body>
    <header>
        <?php
        include './header.php'
      
        ?>
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
     
    <section class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./informacion.php">Información</a></li>
                <li class="breadcrumb-item"><a href="./charlas.php">Charlas</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $charla['nombreCharla'];     ?> </li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-8">
                <div class="custom-container">
                    <h1><?php echo $charla['nombreCharla']; ?> </h1>
                    <p>
                    <?php echo $charla['descripcionCorta'];     ?> 
                    </p>
                    <div class="custom-body">
                        <h3>¿En qué consiste la charla?</h3>
                        <p>
                        <?php echo $charla['consiste'];     ?> 
                        </p>
                    </div>

                    <div class="custom-body">
                        <h3>Objetivo de la charla</h3>
                        <p>
                        <?php echo $charla['objetivo'];     ?> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                <figure>
    <img src="<?php echo $charla['foto']; ?>"
         alt="Imagen de Charla" class="img-fluid rounded" style="max-width: 100%;">
</figure>

                </div>
                <div class="card card-info">
                    <div class="card-body info-section">

                        <h5 class="card-title">Características</h5>
                        <p class="card-text">Fecha:  <?php echo $charla['fecha'];     ?> </p>
                        <p class="card-text">Hora:  <?php echo $charla['hora'];     ?> </p>
                        <p class="card-text">Costo x entrada: <?php echo $charla['costo'];     ?> </p>
                        <p class="card-text">Lugar:  <?php echo $charla['lugar'];    //cambiar por lugar ?> </p> 
                        <p class="card-text">Tipo: <?php echo $charla['tipo'];     ?> </p>
                        <p class="card-text">Duración:<?php echo $charla['duracion'];     ?> </p>
                        <p class="card-text">Formato : <?php echo $charla['formato'];     ?> </p>
                    </div>
                    <div class="text-center mt-3">
                        <a href="./FormularioRegistro.php?categoria=<?php echo $charla['idCharla']?>" class="btn-border-animate">Regístrate</a>
                    </div>
                </div>
                
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
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
