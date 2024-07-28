
$(document).ready(function () { 
    $('#formulario').on('submit', function (e) { 
        e.preventDefault(); 
        var formData = new FormData($('#formulario')[0])
        $.ajax({ 
            url: '../controller/usuarioController.php', 
            type: 'POST', 
            data: formData, 
            contentType :  false,
            processData  : false,
            //generar un JSON con cada valor de cada campo del formulario 
            success: function(response) { 
                // no olvidar generar un div con el respectivo ID para mostrar la respuesta 
                // obtener la respuesta y convertirla usando el JSON.parse 
                $('#response').html('<div class="alert alert-success">Cita programada exitosamente!</div>'); 
            }, 
            error: function(err) { 
                // no olvidar generar un div con el respectivo ID para mostrar la respuesta 
                //obtener la respuesta y convertirla usando el JSON.parse 
                //mostrar el error en la siguiente alerta 
                $('#response').html('<div class="alert alert-danger">Error al programar la cita.</div>'); 
            } 
        }); 
    }) 
});