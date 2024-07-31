document.addEventListener('DOMContentLoaded', function() {
    // Mostrar el formulario al hacer clic en el botón "Escribir Pregunta"
    document.getElementById('write-question-btn').addEventListener('click', function() {
        document.getElementById('write-question-form').style.display = 'block';
    });

    // Ocultar el formulario al hacer clic en el botón "Cancelar"
    document.getElementById('cancel-btn').addEventListener('click', function() {
        document.getElementById('write-question-form').style.display = 'none';
    });
});
