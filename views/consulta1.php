<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/consulta.css">
</head>
<body>
<header>
            <nav class="navbar navbar-expand-lg " style="background-color: #6477e4;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./paginaPrincipal.php">
                        <img src="./assets/img/icon.png" alt="Descripción de la imagen de navbar" style="height: 40px;">
                        </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav"  >
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./consulta1.php" style="color: white;">Consultas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./informacion.php" style="color: white;">Informacion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./lugares_seguros.php" style="color: white;">Lugares Seguros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./formularioDenuncias.php" style="color: white;">Denuncias</a>
                            </li>
                        </ul>
                        <a href="./inicioSesion.php" class="d-flex" style="margin-left: auto;">
                            <img src="./assets/img/avatar.png" alt="Descripción de la imagen" style="height: 40px;">
                        </a>
                    </div>
                </div>
            </nav>
        </header>  

        
    <div class="cuerpo">
        <section class="consultas">
            <h1 style="color: #7a64e3">Consultas</h1>
            <div class="escribir-pregunta">
                <button id="write-question-btn" class="btn btn-primary" style="background-color: #242b52">Escribir Pregunta</button>
            </div>
            <div id="write-question-form" class="escribir-pregunta-form">
                <textarea class="form-control" rows="4" placeholder="Escribe tu pregunta aquí..."></textarea>
                <button class="btn btn-purple-light mt-2" style="background-color: #242b52; color: white; border-color:  #242b52">Enviar</button>
                <button id="cancel-btn" class="btn btn-secondary mt-2">Cancelar</button>
            </div>
            
            <div class="pregunta">
                <div class="usuario">
                    <img src="../assets/img/avatar.png" alt="Icono de usuario" style="height: 40px;">
                    <p>Nombre de Usuario</p> <br><br>
                    <p>dd/mm/yyyy</p>
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
        <div class="col-md-5">
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
        </div>
    </div>
        <footer>
    <div class="footer" style=" background-color: #6477e4; padding: 10px; margin: 5px 0; text-align: center;" >
      <p>© 2024 Derechos Reservados &COPY; safezone.com</p>
      <p>Contáctenos al: info@safezone.com o +506 xxxx - xxx</p>
    </div>
</footer>
  
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>