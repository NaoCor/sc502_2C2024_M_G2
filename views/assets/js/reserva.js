$(document).ready(function() {
    $('#reserva').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData($('#reserva')[0])
        $.ajax({
            url: '../controller/reservaController.php',
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