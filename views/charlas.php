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

    <h1 class="encabezado">Charlas</h1>

<div class="container">
    <div class="carousel-container">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                    aria-label="Slide 7"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card">
                        <img src="https://static.vecteezy.com/system/resources/previews/004/204/129/non_2x/sexual-harassment-at-work-vector.jpg"
                            class="card-img-top" alt="No es tu culpa">
                        <div class="card-body">
                            <h5 class="card-title">No es tu culpa</h5>
                            <p class="card-description">Una charla para empoderar a las personas y ayudarles a entender que no son responsables de las agresiones que sufren.</p>                          
                            <a href="./infoCharla.php" class="cardref">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <img src="https://static.vecteezy.com/system/resources/previews/004/204/129/non_2x/sexual-harassment-at-work-vector.jpg"
                            class="card-img-top" alt="Desmintamos mitos">
                        <div class="card-body">
                            <h5 class="card-title">Desmintamos mitos</h5>
                            <p class="card-description">Abordaremos y desmentiremos los mitos comunes sobre el acoso y la violencia, buscando educar y crear conciencia.</p>
                            <a href="./infoCharla.php" class="cardref">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <img src="https://static.vecteezy.com/system/resources/previews/004/204/129/non_2x/sexual-harassment-at-work-vector.jpg"
                            class="card-img-top" alt="Creando Espacios seguros">
                        <div class="card-body">
                            <h5 class="card-title">Creando Espacios seguros</h5>
                            <p class="card-description">Esta charla está dirigida a líderes y gestores para crear ambientes seguros y respetuosos en el lugar de trabajo.</p>
                
                            <a href="./infoCharla.php" class="cardref">Más información</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>



<section id=prueba>

<div class="container">
<div class="row card-container">
                <?php
include '../config/Conexion.php';
$cnx = Conexion::conectar();
$query = "SELECT * FROM charla"; 
$sql = $cnx->prepare($query);
$sql->execute();
$charlas = $sql->fetchAll();

foreach ($charlas as $charla) {

?>
<div class="col-md-4 card-wrapper">
                    <div class="card">
                        <img src="https:/img.freepik.com/vector-premium/victima-acoso-social_179970-945.jpg"
                            class="card-img-top" alt="Acoso Social">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $charla['nombreCharla']?></h5>
                            <a href="./infoCharla.php" class="btn-border-animate">Más Información</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    <?php }?>

</section>


<div class="text-center mt-4">
    <a href="./RegistroCharla.php">
        <button type="submit" class="btn-border-animate">Registrar Charla</button>
    </a>
</div>
  
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