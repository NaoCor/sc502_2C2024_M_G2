$(document).ready(function() {
    $('#tbllistado').DataTable();

    // Evento de clic para el botón de activar dentro de la tabla
    $(document).on('click', '.activar', function() {
        var id = $(this).closest('tr').find('td:first').text();
        if (id) {
            // Lógica para activar la denuncia con el id
            toastr.success('Denuncia ' + id + ' activada');
        } else {
            toastr.warning('No se encontró la ID de la denuncia');
        }
    });

    // Evento de clic para el botón de desactivar dentro de la tabla
    $(document).on('click', '.desactivar', function() {
        var id = $(this).closest('tr').find('td:first').text();
        if (id) {
            // Lógica para desactivar la denuncia con el id
            toastr.error('Denuncia ' + id + ' desactivada');
        } else {
            toastr.warning('No se encontró la ID de la denuncia');
        }
    });

    // Eventos para los botones fuera de la tabla
    $('.activar-global').on('click', function() {
        // Lógica para activar una denuncia globalmente
        toastr.success('Denuncia activada');
    });

    $('.desactivar-global').on('click', function() {
        // Lógica para desactivar una denuncia globalmente
        toastr.error('Denuncia desactivada');
    });
});
