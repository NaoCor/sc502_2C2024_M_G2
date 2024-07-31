<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Denuncia de Acoso y Abuso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/formDenuncia.css">
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

    <h1>FORMULARIO</h1>

    <div class="container mt-5" style="padding: 20px">
        <div class="row">
            <div class="col-md-7">
                <div class="formulario-container">
                    <h2>Formulario de Denuncia de Acoso y Abuso</h2>
                    <form>
                        <fieldset class="mb-4">
                            <legend>Información Denunciante</legend>
                            <div class="mb-3">
                                <label for="nombre_denunciante" class="form-label">Nombre Completo</label>
                                <input type="text" id="nombre_denunciante" name="nombre_denunciante"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="telefono_denunciante" class="form-label">Número Telefónico</label>
                                <input type="text" id="telefono_denunciante" name="telefono_denunciante"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="correo_denunciante" class="form-label">Correo Electrónico</label>
                                <input type="email" id="correo_denunciante" name="correo_denunciante"
                                    class="form-control">
                            </div>
                        </fieldset>
                        <fieldset class="mb-4">
                            <legend>Información Persona Denunciada</legend>
                            <div class="mb-3">
                                <label for="nombre_denunciado" class="form-label">Nombre Completo</label>
                                <input type="text" id="nombre_denunciado" name="nombre_denunciado" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="relacion" class="form-label">Relación</label>
                                <input type="text" id="relacion" name="relacion" class="form-control">
                            </div>
                        </fieldset>
                        <fieldset class="mb-4">
                            <legend>Detalles del Incidente</legend>
                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo</label>
                                <select id="tipo" name="tipo" class="form-select">
                                    <option selected>Selecciona una opcion</option>
                                    <option value="abuso">Abuso Fisico</option>
                                    <option value="abuso">Abuso Verbal</option>
                                    <option value="abuso">Abuso Sexual</option>
                                    <option value="acoso">Acoso Social</option>
                                    <option value="acoso">Acoso Fisico</option>
                                    <option value="acoso">Acoso informatico</option>
                                    <option value="acoso">Acoso Verbal</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input type="date" id="fecha" name="fecha" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="lugar" class="form-label">Lugar</label>
                                <input type="text" id="lugar" name="lugar" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="documentacion" class="form-label">Documentación Adicional</label>
                                <input type="file" id="documentacion" name="documentacion" class="form-control">
                            </div>
                        </fieldset>
                        <div class="text-center mt-4 " style="margin: 0 10px">
                            <button type="submit" class="btn-border-animate"
                                style="background-color: #6200EA; color: white; border-color:  #6200EA">Enviar</button>
                            <button type="reset" class="btn-border-animate"
                                style="background-color: #6200EA; color: white; border-color: #6200EA">Cancelar</button>
                        </div>
                        
                    </form>
                </div>
            </div>
            <div class="col-md-5 ">
                <aside class="faq">
                    <h2 style="margin-top: 0;">Preguntas Frecuentes</h2>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" style="margin-top: 0;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    ¿Qué pasará con mi denuncia?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Una vez presentada la denuncia, será evaluada por el equipo
                                    correspondiente que tomará las medidas adecuadas y te mantendrá informado sobre el
                                    progreso.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" style="margin-top: 0;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Anonimato de mi denuncia
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Tu denuncia será tratada con la mayor confidencialidad
                                    posible y tu identidad será protegida en la medida de lo permitido por la ley.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" style="margin-top: 0;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                    aria-controls="flush-collapseSeven">
                                    ¿Quién verá mi denuncia?
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Solo el personal autorizado tendrá acceso a tu denuncia para
                                    garantizar la confidencialidad y seguridad de la información proporcionada.</div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>


<footer>
    <?php
    include './footer.php'
    ?>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

