$(document).ready(function() {
    $('#formulario1').on('submit', function(event) {
        event.preventDefault();

        var email = $('#txtEmail').val();
        var password = $('#password').val();

        $.ajax({
            url: '../controller/UsuarioController.php', 
            type: 'POST',
            data: {
                correo: email,
                contrasena: password
            },
            success: function(response) {
                try {
                    var data = JSON.parse(response);
                    if (data.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Inicio de sesión exitoso',
                            text: 'Redirigiendo...',
                        }).then(function() {
                            window.location.href = '../views/index.php'; 
                        });
                    } else if (data.status === 'error') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.message
                        });
                    }
                } catch (e) {
                    console.error('Error al procesar la respuesta JSON:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error en la solicitud AJAX:', status, error);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Algo salió mal. Por favor, intenta de nuevo.'
                });
            }
        });
    });
});
