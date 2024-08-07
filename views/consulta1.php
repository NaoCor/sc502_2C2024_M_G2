<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/consulta.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
</head>

<body>
    <header>
        <?php include './header.php'; ?>
    </header>
    <h1>Consultas</h1>

    <div class="container mt-5">
        <div class="row">
    
            <section class="col-md-8 consultas">
                
                <div class="card mb-4">
                    <div class="card-body">
                        <button id="write-question-btn"  class="btn-border-animate">Escribir Pregunta</button>
                        <div id="write-question-form" class="escribir-pregunta-form mt-3">
                            <textarea class="form-control mb-3" rows="4" placeholder="Escribe tu pregunta aquí..."></textarea>
                            <div class="btn-container">
                                <button  class="btn-border-animate">Enviar</button>
                                <button id="cancel-btn"  class="btn-border-animate">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pregunta card mb-4">
                    <div class="card-body">
                        <div class="usuario d-flex align-items-center mb-3">
                            <img src="../assets/img/avatar.png" alt="Icono de usuario" class="avatar-img">
                            <div class="ms-3">
                                <p class="mb-1 fw-bold">Nombre de Usuario</p>
                                <p class="mb-0 text-muted">dd/mm/yyyy</p>
                            </div>
                        </div>
                        <div class="contenido-pregunta mb-3">
                            <p class="fw-bold">Pregunta:</p>
                            <p>Lorem ipsum dolor sit amet...</p>
                        </div>
                        <div class="respuesta">
                            <p class="fw-bold">Respuesta hecha por:</p>
                            <p>Nombre administrador</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <aside class="col-md-4 faq">
                <h2>Preguntas Frecuentes</h2>
                <div class="accordion" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                ¿Cuáles son las líneas de ayuda?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p><strong>Línea 9-1-1:</strong> Emergencias inmediatas.</p>
                                <p><strong>INAMU Línea 800-226-2626:</strong> Atención y asesoría para mujeres.</p>
                                <p><strong>PANI Línea 1147:</strong> Para reportar casos de acoso o abuso infantil.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                ¿Es SafeZone un medio legal?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Sí, SafeZone es un medio legal. Es una plataforma de seguridad personal y comunicación.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                ¿Cuáles son los medios legales?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p><strong>Sistema Judicial y Policía:</strong> 911: Para emergencias y Organismos de Investigación Judicial (OIJ): Encargados de investigar delitos.</p>
                                <p><strong>Protección de Derechos Humanos y Violencia:</strong> Defensoría de los Habitantes y Instituto Nacional de las Mujeres (INAMU).</p>
                                <p><strong>Medios de Protección Laboral:</strong> Ministerio de Trabajo y Seguridad Social.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                ¿Es acaso el acoso/abuso únicamente dirigido hacia las mujeres?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">No, el acoso y el abuso no están únicamente dirigidos hacia las mujeres. Estos problemas pueden afectar a personas de cualquier género y edad. Es importante entender que el acoso y el abuso son comportamientos que involucran un desequilibrio de poder, intimidación, coerción o violencia física, emocional o verbal. Pueden manifestarse en diversas formas y contextos, y no discriminan por género.</div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
</div>

    <footer>
        <?php include './footer.php'; ?>
    </footer>

    <script src="./assets/js/consulta.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
