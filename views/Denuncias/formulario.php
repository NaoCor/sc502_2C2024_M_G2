<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Denuncias</title>
    <link rel="stylesheet" href="../models/css/proyecto.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Consultas</a></li>
                <li><a href="#">Información</a></li>
                <li><a href="#">Lugares Seguros</a></li>
                <li><a href="#">Denuncias</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Formulario de denuncias</h1>
        <form class="form-denuncia">
            <fieldset>
                <legend>Formulario de Denuncia de Acoso y Abuso</legend>
                <section>
                    <h2>Información Denunciante</h2>
                    <label for="nombreDenunciante">Nombre Completo</label>
                    <input type="text" id="nombreDenunciante" name="nombreDenunciante">
                    <label for="telefonoDenunciante">Número Telefónico</label>
                    <input type="tel" id="telefonoDenunciante" name="telefonoDenunciante">
                    <label for="emailDenunciante">Correo Electrónico</label>
                    <input type="email" id="emailDenunciante" name="emailDenunciante">
                </section>
                <section>
                    <h2>Información Persona Denunciada</h2>
                    <label for="nombreDenunciado">Nombre Completo</label>
                    <input type="text" id="nombreDenunciado" name="nombreDenunciado">
                    <label for="relacionDenunciado">Relación</label>
                    <input type="text" id="relacionDenunciado" name="relacionDenunciado">
                </section>
                <section>
                    <h2>Detalles del Incidente</h2>
                    <label for="tipoIncidente">Tipo</label>
                    <select id="tipoIncidente" name="tipoIncidente">
                        <option value="acoso">Acoso</option>
                        <option value="abuso">Abuso</option>
                        <option value="otro">Otro</option>
                    </select>
                    <label for="fechaIncidente">Fecha</label>
                    <input type="date" id="fechaIncidente" name="fechaIncidente">
                    <label for="lugarIncidente">Lugar</label>
                    <input type="text" id="lugarIncidente" name="lugarIncidente">
                    <label for="descripcionIncidente">Descripción</label>
                    <textarea id="descripcionIncidente" name="descripcionIncidente"></textarea>
                    <label for="documentacionAdicional">Documentación Adicional</label>
                    <input type="file" id="documentacionAdicional" name="documentacionAdicional">
                </section>
                <div class="form-buttons">
                    <button type="submit">Inscribirse</button>
                    <button type="reset">Cancelar</button>
                </div>
            </fieldset>
        </form>
    </main>
    <aside>
        <div class="info-denuncias">
            <h2>Información sobre denuncias SafeZone</h2>
            <p>¿Qué pasará con mi denuncia?</p>
            <p>Anónimo de mi denuncia</p>
            <p>¿Quién verá mi denuncia?</p>
            <p>¿Este es un medio legal?</p>
        </div>
    </aside>
</body>
</html>
