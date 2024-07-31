<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acoso Social</title>
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
                <li class="breadcrumb-item"><a href="./acoso.php">Acoso</a></li>
                <li class="breadcrumb-item active" aria-current="page">Acoso Social</li>
            </ol>
        </nav>

        <div class="row align-items-center"> 
            <div class="col-md-6">
                <h1 class="text-center section-title">Acoso Social</h1>
                <div class="card card-info">
                    <div class="card-body info-section">
                        <h2 class="card-title">¿Qué es?</h2>
<p>El acoso social se refiere a una forma de violencia psicológica y emocional que puede ocurrir en diversos contextos sociales, como en el trabajo, la escuela, comunidades o incluso en entornos digitales. Se caracteriza por comportamientos repetitivos que buscan intimidar, humillar, aislar o excluir a la víctima de su entorno social. El objetivo del acoso social es causar daño emocional y psicológico a la persona afectada, afectando su autoestima, bienestar emocional y relaciones sociales.
Es importante destacar que el acoso social no siempre implica violencia física directa, pero sus efectos pueden ser igualmente devastadores para la víctima. Puede llevar a problemas de salud mental como ansiedad, depresión, estrés postraumático y, en casos extremos, incluso al suicidio.
</p>                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-container">
                    <img src="https:/img.freepik.com/vector-premium/victima-acoso-social_179970-945.jpg" alt="Imagen de acoso físico">
                </div>
            </div>
        </div>
 
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-body info-section">
                        <h2 class="card-title">¿Qué puedo hacer?</h2>
                        <ol>
                            <li>Reconoce y valida tus sentimientos</li>
                            <li>Busca apoyo</li>
                            <li>Documenta las evidencias</li>
                            <li>No respondas con violencia</li>
                            <li>Documenta los incidentes</li>
                            <li>Explora tus opciones legales </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-body info-section">
                        <h2 class="card-title">¿Cómo identificar el Acoso Social?</h2>
                        <ol>
                                           <li>Burlas constantes.</li> 
                                           <li>Difusión de rumores malintencionados </li>
                                           <li>Exclusión deliberada de actividades grupales.</li>
                                           <li>Ridiculización pública</li>
                                           <li>Amenazas veladas o explícitas</li>
                         
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-info mt-4">
            <div class="card-body info-section">
                <h2 class="card-title">Información legal sobre el acoso social</h2>
<p>Si estás siendo víctima de acoso social, es crucial que conozcas tus derechos y las opciones legales disponibles. Primero, familiarízate con las políticas internas de tu entorno laboral, escolar u otra institución para entender cómo reportar y documentar adecuadamente el acoso. Además, verifica las leyes locales que pueden protegerte contra el acoso, ya sea verbal, digital o de otro tipo. Considera la posibilidad de solicitar una orden de protección si el acoso incluye amenazas o riesgo físico inminente, lo que puede mantener al acosador alejado de ti legalmente. En casos más graves, como amenazas o conductas criminales, podría ser necesario presentar una denuncia ante las autoridades pertinentes, asegurándote de recopilar evidencias como mensajes, correos electrónicos o testimonios de testigos. Consultar con un abogado especializado en derechos civiles o laborales te proporcionará orientación específica sobre tus derechos y cómo proceder l </p>            </div>
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
