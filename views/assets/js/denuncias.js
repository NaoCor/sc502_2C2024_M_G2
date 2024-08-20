$(document).ready(function() {
    $('#formulario').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData($('#formulario')[0])

        $.ajax({
            url: '../controller/denunciasController.php',
            type: 'POST',
            data: formData, 
            contentType :  false,
            processData  : false,
            success: function(response) {
                $('#response').html('<div class="alert alert-success">Cita programada exitosamente!</div>');
            },
            error: function(err) {
                $('#response').html('<div class="alert alert-danger">Error al programar la cita.</div>');
            }
        });
    });
});