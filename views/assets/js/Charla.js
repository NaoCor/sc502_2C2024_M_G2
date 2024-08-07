$(document).ready(function() {
    $('#registroCharla').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData($('#registroCharla')[0])

        $.ajax({
            url: '../controller/charlaController.php',
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