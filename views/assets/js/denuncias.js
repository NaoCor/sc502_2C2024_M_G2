// Función para cargar el listado de denuncias en el DataTable
$(document).ready(function() {
    function listarDenuncias() {
        $('#tbllistado').DataTable({
            aProcessing: true, // Activamos el procesamiento de DataTables
            aServerSide: true, // Paginación y filtrado del lado del servidor
            dom: 'Bfrtip', // Definimos los elementos del control de tabla
            buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
            ajax: {
                url: '../controllers/denunciasController.php?op=listar_para_tabla',
                type: 'get',
                dataType: 'json',
                error: function (e) {
                    console.log(e.responseText);
                },
                bDestroy: true,
                iDisplayLength: 5,
            },
        });
    }

    listarDenuncias();
});


/* Función para eliminar denuncia */
function eliminar(id) {
    bootbox.confirm('¿Está seguro de eliminar la denuncia?', function (result) {
        if (result) {
            $.post(
                '../controllers/denunciasController.php?op=eliminar',
                { idDenuncia: id },
                function (data) {
                    switch (data) {
                        case '1':
                            toastr.success('Denuncia eliminada');
                            tabla.ajax.reload();
                            break;

                        case '0':
                            toastr.error('Error: La denuncia no puede eliminarse. Consulte con el administrador.');
                            break;

                        default:
                            toastr.error(data);
                            break;
                    }
                }
            );
        }
    });
}

$(document).ready(function() {
    function cambiarEstado(id, estado) {
        $.ajax({
            url: '../controllers/denunciasController.php?op=cambiar_estado',
            type: 'POST',
            data: {
                idDenuncia: id,
                estado: estado ? 1 : 0 
            },
            success: function(response) {
                var estadoTexto = estado ? 'Activado' : 'Desactivado';
                var tr = $('tr').find('td:first').filter(function() {
                    return $(this).text() == id;
                }).closest('tr');

                tr.find('td:eq(8)').text(estadoTexto); 

                tr.find('td:eq(9)').html(
                    '<button class="btn btn-danger" onclick="eliminar(\'' + id + '\')">Eliminar</button>' +
                    '<button class="btn btn-success activar" onclick="cambiarEstado(' + id + ', true)">Activar</button>' +
                    '<button class="btn btn-danger desactivar" onclick="cambiarEstado(' + id + ', false)">Desactivar</button>'
                );

                toastr.success('Denuncia ' + id + ' ' + estadoTexto.toLowerCase());
            }
        });
    }

    $(document).on('click', '.desactivar', function() {
        var id = $(this).closest('tr').find('td:first').text();
        if (id) {
            cambiarEstado(id, false);
        }
    });

    $(document).on('click', '.activar', function() {
        var id = $(this).closest('tr').find('td:first').text();
        if (id) {
            cambiarEstado(id, true); 
        }
    });
});
