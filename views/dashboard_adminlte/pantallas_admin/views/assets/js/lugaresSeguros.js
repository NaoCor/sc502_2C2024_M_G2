/* Función para limpieza de los formularios */
function limpiarForms() {
    $('#lugar_add').trigger('reset');
    $('#lugar_update').trigger('reset');
}

/* Función Principal */
$(function () {
    $('#formulario_update').hide();
    listarLugaresTodos();
});

/* Función para cargar el listado en el DataTable */
function listarLugaresTodos() {
    tabla = $('#tbllistado').DataTable({
        aProcessing: true, // Activamos el procesamiento de DataTables
        aServerSide: true, // Paginación y filtrado del lado del servidor
        dom: 'Bfrtip', // Definimos los elementos del control de tabla
        buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
        ajax: {
            url: '../controllers/lugarSeguroController.php?op=listar_para_tabla',
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

/* Función para eliminar lugar seguro */
function eliminar(id) {
    bootbox.confirm('¿Está seguro de eliminar el lugar seguro?', function (result) {
        if (result) {
            $.post(
                '../controllers/lugarSeguroController.php?op=eliminar',
                { idLugarSeguro: id },
                function (data) {
                    switch (data) {
                        case '1':
                            toastr.success('Lugar seguro eliminado');
                            tabla.ajax.reload();
                            break;

                        case '0':
                            toastr.error('Error: El lugar seguro no puede eliminarse. Consulte con el administrador.');
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
