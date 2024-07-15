
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Denuncias</title>
    <link rel="stylesheet" href="../../assets/formulario.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../php/formulario.php">Formulario de Denuncias</a></li>
                <li><a href="../php/foro.php">Foro de Denuncias</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="formulario-container">
            <h2>Formulario de Denuncia de Acoso y Abuso</h2>
            <form>
                <fieldset>
                    <legend>Información Denunciante</legend>
                    <label for="nombre_denunciante">Nombre Completo</label>
                    <input type="text" id="nombre_denunciante" name="nombre_denunciante">
                    <label for="telefono_denunciante">Número Telefónico</label>
                    <input type="text" id="telefono_denunciante" name="telefono_denunciante">
                    <label for="correo_denunciante">Correo Electrónico</label>
                    <input type="email" id="correo_denunciante" name="correo_denunciante">
                </fieldset>
                <fieldset>
                    <legend>Información Persona Denunciada</legend>
                    <label for="nombre_denunciado">Nombre Completo</label>
                    <input type="text" id="nombre_denunciado" name="nombre_denunciado">
                    <label for="relacion">Relación</label>
                    <input type="text" id="relacion" name="relacion">
                </fieldset>
                <fieldset>
                    <legend>Detalles del Incidente</legend>
                    <label for="tipo">Tipo</label>
                    <select id="tipo" name="tipo">
                        <option value="acoso">Acoso</option>
                        <option value="abuso">Abuso</option>
                    </select>
                    <label for="fecha">Fecha</label>
                    <input type="date" id="fecha" name="fecha">
                    <label for="lugar">Lugar</label>
                    <input type="text" id="lugar" name="lugar">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" name="descripcion"></textarea>
                    <label for="documentacion">Documentación Adicional</label>
                    <input type="file" id="documentacion" name="documentacion">
                </fieldset>
                <input type="submit" value="Inscribirse">
                <input type="reset" value="Cancelar">
            </form>
        </div>
    </main>
</body>
</html>';

