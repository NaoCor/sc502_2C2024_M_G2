<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Zone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap">
    <link rel="stylesheet" href="./assets/css/lugares_seguros.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <script
      src="https://maps.googleapis.com/maps/api/js?key=INSERT_YOUR_API_KEY&loading=async&libraries=marker&v=beta&solution_channel=GMP_CCS_complexmarkers_v3"
      defer
    ></script>

</head>

<body>

    <header>
        <?php
        include './header.php';
        ?>
    </header>

    <h2>Listado de Lugares Seguros</h2>
    <h3>Certificado por INAMU</h3>


    <div class="container_opcion">
        <form class="d-flex justify-content-center">
            <div class="mb-3">
            <select class="form-select custom-select-sm" id="provincias" onchange="filtrarLugares()">
            </select>       
            </div>
        </form>
    </div>

    <div class="main-container">
        <p>En esta sección encontrarás una lista de lugares seguros certificados por INAMU donde puedes encontrar apoyo y asistencia en situaciones difíciles. 
            Estos lugares han sido verificados y aprobados para ofrecer un entorno seguro y de apoyo. Utiliza el menú desplegable para filtrar por provincia y 
            encontrar el lugar más cercano a ti.</p>
        <div class="row" id="contenedor-lugares">

        </div>
    </div>
    <div class="iframe-container">
        
        <iframe id="mapa" src="" width="640" height="480"></iframe>
    </div>

    <div class="content-wrapper">
        <div class="text-container">
            <p>¿Cuáles son los Puntos Violeta de la INAMU?</p>
            <p>El propósito de los Puntos Violeta es brindar a las mujeres víctimas de violencia, en particular acoso y hostigamiento sexual, atención, información y 
                orientación sobre sus derechos y caminos de acción. Cualquier persona puede ser objeto de hostigamiento o acoso, a pesar de que se enfocan en mujeres. 
                Ten esto en cuenta: la mayoría de los lugares seguros en las provincias son tiendas o restaurantes.
            </p>
            <p>Dato curioso: En San José, la "Línea Roja" en las avenidas conecta con hoteles que están disponibles las 24 horas, los cuales son lugares seguros para 
                consultas o emergencias. También existen cámaras de seguridad en San José para brindar una mayor protección.</p>
        </div>
        <div class="cat_2">
            <img src="./assets/img/gatoApuntando.png" alt="icono" height="300px">
        </div>
    </div>

    <div class="container-advice">
        <div class="cat_1">
            <img src="./assets/img/gatoApoyo.png" alt="icono" height="380px" >
        </div>
        <div class="advice-container">
            <p>Recomendaciones</p>
            <p>
            El acoso callejero puede ser peligroso y incómodo. Si crees que el agresor o el ambiente no amenazan tu integridad física, sigue estos pasos:</p>
            <li>Evita las calles desiertas: Mantente en áreas iluminadas y con actividad, evitando callejones o zonas poco transitadas.</li>
            <li>Evita la violencia: Puede empeorar la situación si respondes con agresión.</li>
            <li>Mantén la calma: Expresa seguridad y, si es posible, evita las provocaciones.</li>
            <li>Piensa en tu próximo paso: Aprovecha el tiempo para planificar tu acción.</li>
            <li>Busca un civil confiable: Si no hay lugares públicos cercanos, acércate a una persona mayor o una pareja de mediana edad.</li>
            <li>Busca un lugar seguro: Sin llamar la atención del atacante, dirígete a un lugar concurrido o solicita ayuda de alguien cercano.</li>
            <li>Contacta a la policía: Si el atacante puede estar molestando a otros, llama a la policía una vez que esté a salvo.</li>
            <li>Recuerda las características del agresor: Guarda en tu memoria las características del agresor para poder denunciar la persecución.</li>
            <li>Confía en tu intuición: Si algo no te parece seguro, sigue tu instinto y busca ayuda o un lugar seguro de inmediato.</li>
            <p>Toma las cosas con calma una mente fria es mejor que una mente desesperada </p>

        </div>
    </div>
    <footer>
        <?php
        include './footer.php';
        ?>
    </footer>

    <script src="./assets/js/mapaController.js"></script>
</body>

</html>

