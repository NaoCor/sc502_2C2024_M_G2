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
            success: function(data) {
                Swal.fire({
                    icon: 'success',
                    title: '¡Charla registrada!',
                    text: 'La charla se ha registrado correctamente.'
                })
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Ay no...',
                        text: 'Algo salió mal. Por favor, intenta de nuevo.'
                    });
                }
        });
    });
});