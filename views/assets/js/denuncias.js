$(document).ready(function() {
    $('#formulario').on('submit', function(e) {
        e.preventDefault();

        var nombre_denunciante = $('#nombre_denunciante').val().trim();
        var primer_apellido_denunciante = $('#primer_apellido_denunciante').val().trim();
        var segundo_apellido_denunciante = $('#segundo_apellido_denunciante').val().trim();
        var correo_denunciante = $('#correo_denunciante').val().trim();
        var telefono_denunciante = $('#telefono_denunciante').val().trim();
        var nombre_denunciado = $('#nombre_denunciado').val().trim();
        var primer_apellido_denunciado = $('#primer_apellido_denunciado').val().trim();
        var segundo_apellido_denunciado = $('#segundo_apellido_denunciado').val().trim();
        var tipo = $('#tipo').val().trim();
        var fecha = $('#fecha').val().trim();
        var lugar = $('#lugar').val().trim();
        var relacion_agresor = $('#relacion_agresor').val().trim();

        if (!nombre_denunciante || !primer_apellido_denunciante || !segundo_apellido_denunciante ||
            !correo_denunciante || !telefono_denunciante || !nombre_denunciado || !primer_apellido_denunciado ||
            !segundo_apellido_denunciado || !tipo || !fecha || !lugar || !relacion_agresor) {
            Swal.fire({
                icon: 'warning',
                title: 'Campos requeridos',
                text: 'Por favor, complete todos los campos.'
            });
            return; 
        }

        var formData = new FormData($('#formulario')[0]);

        $.ajax({
            url: '../controller/denunciasController.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                try {
                    var data = JSON.parse(response);
                    if (data.exito) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Denuncia registrada exitosamente',
                            text: 'Redirigiendo...',
                            timer: 1500,
                            timerProgressBar: true,
                            willClose: () => {
                                window.location.href = '../views/informacion.php'; 
                            }
                        });
                    }
                } catch (e) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Denuncia registrada exitosamente',
                        text: 'Redirigiendo...',
                        timer: 1500,
                        timerProgressBar: true,
                        willClose: () => {
                            window.location.href = '../views/informacion.php'; 
                        }
                    });
                }
            }
        });
    });
});