<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abuso Emocional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/infoDetallada.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
</head>

<body>
<header>
        <?php
        include './header.php'
        ?>
    </header>

    <main class="container mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./informacion.php">Información</a></li>
                <li class="breadcrumb-item"><a href="./abuso.php">Abuso</a></li>
                <li class="breadcrumb-item active" aria-current="page">Abuso Emocional</li>
            </ol>
        </nav>

        <div class="row align-items-center"> 
            <div class="col-md-6">
                <h1 class="text-center section-title">Abuso Emocional</h1>
                <div class="card card-info">
                    <div class="card-body info-section">
                        <h2 class="card-title">¿Qué es?</h2>
                        <p>El maltrato ocurre de distintas maneras. Aún cuando no hay violencia física, el lenguaje maltratante puede ser muy dañino para usted y sus hijos/as. El maltrato emocional y psicológico incluye mayormente comportamientos que no son físicos que el/la agresor/a usa para controlarle, aislarle o asustarle. A menudo, el/la agresor/a lo usa para destruir su autoestima y valor propio con la intención de que usted desarrolle una dependencia psicológica en él/ella. El maltrato emocional y psicológico son formas de maltrato difíciles de reconocer ya que el maltrato se extiende a través de sus interacciones diarias. A diferencia del maltrato físico, muchas veces no hay incidentes aislados o evidencia física clara para usar de referencia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-container">
                    <img src="https:/img.freepik.com/vector-gratis/concepto-violencia-genero-ilustrado-mujer-llorando_23-2148584298.jpg" alt="Imagen de abuso físico">
                </div>
            </div>
        </div>
 
        <div class="row mt-4">
            <div class="col-md-6">S
                <div class="card card-info">
                    <div class="card-body info-section">
                        <h2 class="card-title">¿Qué puedo hacer?</h2>
                        <ol>
                            <li>Busca apoyo emocional y psicológico.</li>
                            <li>Acude a un lugar seguro</li>
                            <li>Documenta las evidencias</li>
                            <li>Habla con alguien de confianza</li>
                            <li>Desarrolla un plan de seguridad</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-body info-section">
                        <h2 class="card-title">¿Cómo identificar el abuso Emocional?</h2>
                        <ol>
                                           <li>Humillarle frente a otras personas</li> 
                                      <li>Llamarle malos nombres, como “estúpido/a”, “asqueroso/a”, entre otros</li>
                            <li>Amenazar con hacerle daño a usted, a personas importantes para usted o a sus mascotas</li>
                            <li>Hacer que sus necesidades o sentimientos parezcan insignificantes</li>
                            <li>Amenazar con hacerse daño a sí mismo/a cuando se molesta con usted</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-info mt-4">
            <div class="card-body info-section">
                <h2 class="card-title">Información legal sobre el acoso sexual</h2>
                <p>Las víctimas de abuso Emocional tienen derechos legales importantes para su protección. Pueden solicitar órdenes de restricción que incluyan la prohibición de contacto y el alejamiento del agresor. Además, tienen acceso a asistencia legal gratuita y deben ser informadas sobre los procedimientos legales disponibles, con la garantía de privacidad durante los procesos judiciales. Para denunciar el abuso, pueden acudir a la policía, fiscalías o líneas de ayuda, y es crucial presentar pruebas como grabaciones y testimonios. Las órdenes de protección, que pueden ser temporales o permanentes, requieren completar una solicitud y asistir a audiencias judiciales donde las víctimas pueden testificar sin la presencia del agresor y están protegidas contra represalias.</p>
            </div>
        </div>
    </main>

    <footer>
        <?php
         include './footer.php'
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
