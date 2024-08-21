<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/tipo2.css">
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
  
    <h1>ACOSO</h1>
    <section class="section-header">
    
        <figure>
            <img src="https://www.shutterstock.com/image-vector/teenage-stress-depressed-teens-unhappy-600nw-2402268227.jpg"
                alt="Imagen de acoso" class="img-fluid rounded" width="600">
        </figure>
        <h1 >¿A qué nos referimos con acoso?</h1>
        <p style="border: 2px solid #6f42c1; padding: 1rem; border-radius: 10px; text-align: justify; font-size: 1.25rem;">
        El acoso se refiere a un conjunto de comportamientos repetidos y no deseados que tienen como objetivo molestar, intimidar, humillar o perjudicar a una persona. Este fenómeno puede presentarse en diferentes contextos, como el escolar, laboral, digital y personal. En el entorno escolar, el acoso (o bullying) implica agresiones físicas, verbales o psicológicas entre estudiantes, a menudo manifestadas mediante burlas, amenazas y exclusión social. 
        </p>
    </section>
    

    <section>
        <div class="container">
            <div class="row card-container">
                <div class="col-md-4 card-wrapper">
                    <div class="card">
                        <img src="https:/img.freepik.com/vector-premium/victima-acoso-social_179970-945.jpg"
                            class="card-img-top" alt="Acoso Social">
                        <div class="card-body">
                            <h5 class="card-title">Acoso Social</h5>
                            <a href="./acosoSocial.php" class="btn-border-animate">Más Información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 card-wrapper">
                    <div class="card">
                        <img src="https:/st2.depositphotos.com/2885805/47445/v/380/depositphotos_474453394-stock-illustration-physical-bullying-icon.jpg"
                            class="card-img-top" alt="acoso Físico">
                        <div class="card-body">
                            <h5 class="card-title">Acoso Fisico</h5>
                            <a href="./acosoFisico.php" class="btn-border-animate">Más Información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 card-wrapper">
                    <div class="card">
                        <img src="https:/img.freepik.com/vector-premium/victima-ilustracion-acoso-cibernetico_179970-2775.jpg?w=360"
                            class="card-img-top" alt="acoso Emocional">
                        <div class="card-body">
                            <h5 class="card-title">Acoso Informatico</h5>
                            <a href="./acosoInformatico.php" class="btn-border-animate">Más Información</a>
                        </div>
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