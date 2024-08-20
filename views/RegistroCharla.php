<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Charla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/formRegistroCharla.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
</head>

<body>

    <header>
        <?php
        include './header.php'
        ?>
    </header>


    <div class="container my-5">
        <div class="formulario-container p-4 rounded bg-light shadow-sm">
            <h2 class="text-center" >Formulario Registro de Charla SafeZone</h2>
            <form id="registroCharla">
                <fieldset class="mb-4">
                    <legend class=" fw-bold">Información Presentador</legend>
                    <div class="mb-3">
                        <label for="nombreCompleto" class="form-label">Nombre Completo</label>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" id="nombre" name="nombre">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="1er. Apellido" aria-label="1er. Apellido" id="primerApellido" name="primerApellido">
                            </div>
                        
                            <div class="mb-3">
                        <label for="costo" class="form-label">Numero de identificacion/Cedula</label>
                        <input type="number" id="identificacion" name="identificacion" class="form-control">
                    </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="numero" class="form-label">Número Telefónico</label>
                        <input type="text"class="form-control" placeholder="+506" id="numero" name="numero">
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo Electrónico</label>
                        <input type="email"  class="form-control"  id="correo" name="correo">
                    </div>
                </fieldset>
                
                <fieldset class="mb-4">
                    <legend class="fw-bold">Información Charla</legend>
                    <div class="mb-3">
                        <label for="nombreCharla" class="form-label">Nombre Charla</label>
                        <input type="text" id="nombreCharla" name="nombreCharla" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" id="fecha" name="fecha" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="hora" class="form-label">Hora</label>
                        <input type="time" id="hora" name="hora" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="costo" class="form-label">Costo</label>
                        <input type="number" id="costo" name="costo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="lugar" class="form-label">Lugar</label>
                        <input type="text" id="lugar" name="lugar" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select id="tipo" name="tipo" class="form-select">
                            <option value="Educativa">Educativa</option>
                            <option value="Experiencia">Experiencia</option>
                            <option value="Ayuda">Ayuda</option>
                        </select>
                    </div>
                   
                    <div class="mb-3">
                        <label for="duracion" class="form-label">Duración</label>
                        <input type="text" id="duracion" name="duracion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="formato" class="form-label">Formato</label>
                        <input type="text" id="formato" name="formato" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="objetivo" class="form-label">Objetivo</label>
                        <textarea id="objetivo" name="objetivo" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción Corta</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="consiste" class="form-label">En qué consiste</label>
                        <textarea id="consiste" name="consiste" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="poster" class="form-label">Poster</label>
                        <input type="file" id="poster" name="poster" class="form-control">
                    </div>
                </fieldset>
                
                <div class="text-end">
                    <button type="submit" class="btn-border-animate">Registrar</button>
                    <button type="button" class="btn-border-animate">Cancelar</button>
                </div>
            </form>
        </div>
    </div>


    <footer>
        <?php include './footer.php'; ?>
    </footer>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
<script src="./assets/js/Charla.js"></script>
</body>

</html>
