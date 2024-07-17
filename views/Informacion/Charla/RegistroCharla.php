<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../assets/formulario.css">
</head>

<body>

<header>
        <nav class="navbar navbar-expand-lg " style="background-color: #6477e4">
            <div class="container-fluid">
                <a class="navbar-brand" href="../../sesion/paginaPrincipal.php">
                    <img src="../../../img/icon.png" alt="Descripción de la imagen de navbar" style="height: 40px;">
                    </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../../consultas/consulta1.php">Consultas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../Informacion/informacion.php">Informacion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../LugaresSeguros/lugares_seguros.php">Lugares Seguros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../Denuncias/formulario.php">Denuncias</a>
                        </li>
                    </ul>
                    <a href="../../sesion/inicioSesion.php" class="d-flex" style="margin-left: auto;">
                        <img src="../../../img/avatar.png" alt="Descripción de la imagen" style="height: 40px;">
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <div class="formulario-container" style="background-color: #877be3;">
        <h2 style="text-align: center; color: #333d74; font-weight:bold;     background-color:#877be3;">Formulario
            SafeZone</h2>
        <div class="border-top my-3"></div>
        <form>
            <fieldset>
                <legend style="color: #333d74; font-weight:bold;"> Información Presentador</legend>
                <div class="input-group mb-3">
                    <label style="padding-right: 5px;">Nombre Completo</label>
                    <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre">
                    <input type="text" class="form-control" placeholder="1er.Apellido" aria-label="1er.Apellido">
                    <input type="text" class="form-control" placeholder="2do.Apellido" aria-label="2do.Apellido">
                </div>
                <label for="telefono_Presentador">Número Telefónico</label>
                <input type="text" id="telefono_Presentador" name="telefono_Presentador" placeholder="+506"
                    aria-label="+506">
                <label for="correo_Presentador">Correo Electrónico</label>
                <input type="email" id="correo_Presentador" name="correo_Presentador">
            </fieldset>
            <div class="border-top my-3"></div>
            <fieldset>
                <legend style=" color: #333d74; font-weight:bold;">Información Charla </legend>
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha" name="fecha">
                <label for="hora">Hora</label>
                <input type="datetime" id="hora" name="hora" placeholder="hh:mm">
                <label for="costo">Costo</label>
                <input type="number" id="costo" name="costo">
                <div class="input-group mb-3" style="margin-top: 15px;">
                    <label style="padding-right: 5px;">Lugar</label>
                    <input type="text" class="form-control" placeholder="Pronvincia">
                    <input type="text" class="form-control" placeholder="Canton">
                    <input type="text" class="form-control" placeholder="Distrito">
                    <input type="text" class="form-control" placeholder="Edificio">
                </div>
                <label for="tipo">Tipo</label>
                <select id="tipo" name="tipo">
                    <option value="Educativa">Educativa</option>
                    <option value="Experiencia">Experiencia</option>
                    <option value="Ayuda">Ayuda</option>
                </select>
                <label for="lugar">Lugar</label>
                <input type="text" id="lugar" name="lugar">
                <label for="duracion">Duracion</label>
                <input type="text" id="duracion" name="duracion">
                <label for="formato">Formato</label>
                <input type="text" id="formato" name="formato">
                <label for="objetivo">Objetivo</label>
                <textarea id="objetivo" name="objetivo"></textarea>
                <label for="formato">Descripcion Corta</label>
                <input type="descripcion" id="descripcion" name="descripcion">
                <label for="consiste">En que consiste</label>
                <textarea id="consiste" name="consiste"></textarea>
                <label for="poster">Poster</label>
                <input type="file" id="poster" name="poster">
            </fieldset>
            <div style="text-align: right; margin-top: 20px;">
                <button type="submit" class="btn" style="background-color:#242b52 ; color: white;">Registar</button>
                <button type="button" class="btn" style="background-color:#242b52 ; color: white;">Cancelar</button>
            </div>
        </form>
    </div>
    <footer>
    <div class="footer" style=" background-color: #6477e4; padding: 10px; margin: 5px 0; text-align: center;" >
      <p>© 2024 Derechos Reservados &COPY; safezone.com</p>
      <p>Contáctenos al: info@safezone.com o +506 xxxx - xxx</p>
    </div>
</footer>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>