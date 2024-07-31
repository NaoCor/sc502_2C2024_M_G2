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
  
    <section class="section-header">
        <figure>
            <img src="https://static.vecteezy.com/system/resources/previews/013/194/570/non_2x/sexual-harassment-at-work-abuse-violence-at-job-free-vector.jpg"
                alt="Imagen de abuso" class="img-fluid rounded" width="600">
        </figure>
        <h1 >¿A qué nos referimos con abuso?</h1>
        <p style="border: 2px solid #6f42c1; padding: 1rem; border-radius: 10px; text-align: justify; font-size: 1.25rem;">
            Abuso es la inflexión de algún tipo de daño que puede ser tanto físico como psíquico y que, generalmente,
            tiene lugar y razón de ser gracias al poder que la persona que provoca o materializa el abuso tiene sobre
            aquella a la cual se lo produce, ya sea por una superioridad material que lo protege y le da esa fuerza sobre
            el otro, o bien por la sistemática amenaza de que algo malo le va a ocurrir sino accede a ese accionar
            abusivo.
        </p>
    </section>
    

    <section>
        <div class="container">
            <div class="row card-container">
                <div class="col-md-4 card-wrapper">
                    <div class="card">
                        <img src="https://static.vecteezy.com/system/resources/previews/004/204/129/non_2x/sexual-harassment-at-work-vector.jpg"
                            class="card-img-top" alt="Abuso Sexual">
                        <div class="card-body">
                            <h5 class="card-title">Abuso Sexual</h5>
                            <a href="./abusoSexual.php" class="btn-border-animate">Más Información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 card-wrapper">
                    <div class="card">
                        <img src="https://us.123rf.com/450wm/leila777divine/leila777divine2006/leila777divine200600029/148503103-mujer-con-ojo-morado-en-manos-de-hombre-el-agresor-sostiene-a-la-ni%C3%B1a-muy-asustada-el-concepto-es.jpg?ver=6"
                            class="card-img-top" alt="Abuso Físico">
                        <div class="card-body">
                            <h5 class="card-title">Abuso Físico</h5>
                            <a href="./abusoFisico.php" class="btn-border-animate">Más Información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 card-wrapper">
                    <div class="card">
                        <img src="https://img.freepik.com/vector-gratis/concepto-violencia-genero-ilustrado-mujer-llorando_23-2148584298.jpg"
                            class="card-img-top" alt="Abuso Emocional">
                        <div class="card-body">
                            <h5 class="card-title">Abuso Emocional</h5>
                            <a href="./abusoEmocional.php" class="btn-border-animate">Más Información</a>
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