$(document).ready(function() {
    $('#consultaForm').on('submit', function(e) {
        e.preventDefault();
        
      
        var question = $('textarea[name="question"]').val().trim();
        
        if (question === '') {
            $('#response').html('<div class="alert alert-danger">La pregunta no puede estar vacía.</div>');
            return;
        }
        
        var formData = new FormData(this);
        
        $.ajax({
            url: '../controller/consultaController.php',
            type: 'POST',
            data: formData, 
            contentType: false,
            processData: false,
            success: function(response) {
                $('#response').html('<div class="alert alert-success">Pregunta enviada exitosamente.</div>');
                $('#consultaForm')[0].reset(); 
            },
            error: function(err) {
                $('#response').html('<div class="alert alert-danger">Error al enviar la pregunta.</div>');
            }
        });
    });
});
