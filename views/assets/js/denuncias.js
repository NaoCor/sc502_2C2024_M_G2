$(document).ready(function () {
    $('#formulario').on('submit', function (e) {
        e.preventDefault();
        
        var formData = new FormData(this);

        $.ajax({
            url: '../controller/denunciasController.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                $('#response').html('<div class="alert alert-success">Denuncia enviada exitosamente!</div>');
                
                $('#formulario')[0].reset();
            },
            error: function (err) {
                $('#response').html('<div class="alert alert-danger">Error al denunciar.</div>');
            }
        });
    });
});
