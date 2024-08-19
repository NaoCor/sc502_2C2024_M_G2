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
                        window.location.href = '../views/index.php'; 
                    } else {
                        $('.formulario').append('<div class="alert alert-danger" role="alert">Credenciales inválidas. Por favor, intente nuevamente.</div>');
                    }
                } catch (e) {
                    console.error('Error al procesar la respuesta JSON:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error en la solicitud AJAX:', status, error);
            }
        });
    });
});
