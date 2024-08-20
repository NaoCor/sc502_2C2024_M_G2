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
            success: function(data) {
                Swal.fire({
                    icon: 'success',
                    title: '¡Reserva registrada!',
                    text: 'La reserva se ha registrado correctamente.'
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