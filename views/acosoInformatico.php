<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acoso Informatico</title>
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
                <li class="breadcrumb-item active" aria-current="page">Acoso Informatico</li>
            </ol>
        </nav>

        <div class="row align-items-center"> 
            <div class="col-md-6">
                <h1 class="text-center section-title">Acoso Informatico</h1>
                <div class="card card-info">
                    <div class="card-body info-section">
                        <h2 class="card-title">¿Qué es?</h2>
<p>El acoso informático, también conocido como ciberacoso o ciberbullying, se refiere al uso de tecnologías digitales para acosar, intimidar, amenazar o difamar a una persona o grupo. Este tipo de conducta puede manifestarse a través de correos electrónicos, mensajes de texto, publicaciones en redes sociales, comentarios en línea, difusión de rumores falsos o imágenes comprometedoras, entre otros medios digitales. El acoso informático puede tener serias consecuencias emocionales, psicológicas y sociales para la víctima, y en algunos casos puede constituir un delito, dependiendo de las leyes locales. Es importante denunciar cualquier forma de acoso informático a las autoridades correspondientes y tomar medidas para proteger la privacidad y seguridad en línea.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-container">
                    <img src="https:/img.freepik.com/vector-premium/victima-ilustracion-acoso-cibernetico_179970-2775.jpg?w=360" alt="Imagen de acoso físico">
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
                        <h2 class="card-title">¿Cómo identificar el Acoso Informatico?</h2>
                        <ol>
                           <li>Cambios en el comportamiento emocional.</li>             
                         <li>Uso excesivo o inusual de dispositivos electrónicos.</li>
                         <li>Cambios en el rendimiento escolar o laboral.</li>
                         <li>Comportamiento evasivo respecto a la actividad en línea.</li>
                         <li>Cambios en las relaciones sociales.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-info mt-4">
            <div class="card-body info-section">
                <h2 class="card-title">Información legal sobre el acoso Informatico</h2>
                <p>La legislación sobre acoso informático varía según el país y jurisdicción, pero generalmente se enfoca en proteger a las víctimas y castigar a los perpetradores. Las leyes pueden abarcar desde la difamación y el acoso en redes sociales hasta el acceso no autorizado a dispositivos y la distribución de contenido íntimo sin consentimiento. Las políticas suelen incluir medidas para prevenir el ciberacoso, como la educación sobre el uso responsable de la tecnología y la creación de entornos seguros en línea. Es fundamental denunciar el acoso informático a las autoridades competentes y buscar asistencia legal para proteger los derechos de las víctimas y asegurar la aplicación de la ley.</p>
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
