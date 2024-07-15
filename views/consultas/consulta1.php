<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/consulta.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo SafeZone">
        </div>
        <nav>
            <ul>
                <li><a href="#">Consultas</a></li>
                <li><a href="#">Información</a></li>
                <li><a href="#">Lugares Seguros</a></li>
                <li><a href="#">Denuncias</a></li>
            </ul>
        </nav>
        <div class="profile">
            <img src="profile_icon.png" alt="Icono de perfil">
        </div>
    </header>
    <main>
        <section class="consultas">
            <h1>Consultas</h1>
            <div class="escribir-pregunta">
                <button id="write-question-btn" class="btn btn-primary">Escribir Pregunta</button>
            </div>
            <div id="write-question-form" class="escribir-pregunta-form">
                <textarea class="form-control" rows="4" placeholder="Escribe tu pregunta aquí..."></textarea>
                <button class="btn btn-purple-light mt-2">Enviar</button>
                <button id="cancel-btn" class="btn btn-secondary mt-2">Cancelar</button>
            </div>
            <div class="pregunta">
                <div class="usuario">
                    <img src="user_icon.png" alt="Icono de usuario">
                    <p>Nombre de Usuario</p>
                    <span>dd/mm/yyyy</span>
                </div>
                <div class="contenido-pregunta">
                    <p>Pregunta</p>
                    <p>Lorem ipsum dolor sit amet...</p>
                </div>
                <div class="respuesta">
                    <p>Respuesta hecha por:</p>
                    <p>Nombre administrador</p>
                </div>
            </div>
        </section>
        <aside class="faq">
            <h2>Preguntas Frecuentes</h2>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        ¿Cuáles son las líneas de ayuda?
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body"> 
                    <code>Línea 9-1-1</code> Emergencias inmediatas.<br>
                    <code>INAMU Línea 800-226-2626</code>  Atención y asesoría para mujeres <br>
                    <code>PANI Línea 1147</code> Para reportar casos de acoso o abuso infantil.
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
                        <code>Sistema Judicial y Policía</code><br>911: Para emergencias  y Organismos de Investigación Judicial (OIJ): Encargados de investigar delitos <br> 
                        <code>Protección de Derechos Humanos y Violencia</code><br>Defensoría de los Habitantes y Instituto Nacional de las Mujeres (INAMU) <br>
                        <code>Medios de Protección Laboral</code><br>Ministerio de Trabajo y Seguridad Social
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
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
