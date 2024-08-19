document.addEventListener('DOMContentLoaded', function() {
    const formulario = document.querySelector('form');
    const nombre = formulario.querySelector('input[name="nombre"]');
    const primerApellido = formulario.querySelector('input[name="primer_apellido"]');
    const segundoApellido = formulario.querySelector('input[name="segundo_apellido"]');
    const correo = formulario.querySelector('input[name="correo"]');
    const numeroTelefonico = formulario.querySelector('input[name="numero_telefonico"]');
    const contrasena = formulario.querySelector('input[name="contrasena"]');

    formulario.addEventListener('submit', function(event) {
        let valido = true;

        limpiarErrores();

        if (nombre.value.trim() === '') {
            mostrarError(nombre, 'El nombre es obligatorio.');
            valido = false;
        }

        if (primerApellido.value.trim() === '') {
            mostrarError(primerApellido, 'El primer apellido es obligatorio.');
            valido = false;
        }

        if (segundoApellido.value.trim() === '') {
            mostrarError(segundoApellido, 'El segundo apellido es obligatorio.');
            valido = false;
        }

        if (correo.value.trim() === '') {
            mostrarError(correo, 'El correo electrónico es obligatorio.');
            valido = false;
        } else if (!validarCorreo(correo.value)) {
            mostrarError(correo, 'El correo electrónico no es válido.');
            valido = false;
        }

        if (numeroTelefonico.value.trim() === '') {
            mostrarError(numeroTelefonico, 'El número telefónico es obligatorio.');
            valido = false;
        } else if (!/^\d+$/.test(numeroTelefonico.value)) {
            mostrarError(numeroTelefonico, 'El número telefónico debe contener solo números.');
            valido = false;
        }

        if (contrasena.value.trim() === '') {
            mostrarError(contrasena, 'La contraseña es obligatoria.');
            valido = false;
        } else if (contrasena.value.length < 6) {
            mostrarError(contrasena, 'La contraseña debe tener al menos 6 caracteres.');
            valido = false;
        }

        if (!valido) {
            event.preventDefault();
        }
    });

    function mostrarError(elemento, mensaje) {
        const error = document.createElement('div');
        error.classList.add('error');
        error.textContent = mensaje;
        elemento.parentElement.appendChild(error);
    }

    function limpiarErrores() {
        const errores = formulario.querySelectorAll('.error');
        errores.forEach(error => error.remove());
    }

    function validarCorreo(correo) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(correo);
    }
});
