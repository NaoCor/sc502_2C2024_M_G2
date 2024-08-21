function limpiarForms() {
    $('#modulos_add').trigger('reset');
    $('#modulos_update').trigger('reset');
}

function cancelarForm() {
    limpiarForms();
    $('#formulario_add').show();
    $('#formulario_update').hide();
}

function listarConsultasTodos() {
    tabla = $('#tbllistado').DataTable({
        aProcessing: true,
        aServerSide: true,
        dom: 'Bfrtip',
        buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
        ajax: {
            url: '../controllers/consultaController.php?op=listar_para_tabla',
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

$(function () {
    $('#formulario_update').hide();
    listarConsultasTodos();
});

function activar(idConsulta) {
    bootbox.confirm('¿Está seguro de que quiere hacer pública esta consulta?', function (result) {
        if (result) {
            $.post(
                '../controllers/consultaController.php?op=activar',
                { idConsulta: idConsulta },
                function (data, textStatus, xhr) {
                    switch (data) {
                        case '1':
                            toastr.success('Consulta publicada');
                            tabla.ajax.reload();
                            break;
                        case '0':
                            toastr.error('Error: No se pudo publicar la consulta');
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



function desactivar(idConsulta) {
    bootbox.confirm('¿Está seguro de quitar esta consulta pública?', function (result) {
        if (result) {
            $.post(
                '../controllers/consultaController.php?op=desactivar',
                { idConsulta: idConsulta },
                function (data, textStatus, xhr) {
                    switch (data) {
                        case '1':
                            toastr.success('Consulta desactivada');
                            tabla.ajax.reload();
                            break;
                        case '0':
                            toastr.error('Error: No se pudo desactivar la consulta');
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


function responder(idConsulta) {
    bootbox.prompt({
        title: "Escribe tu respuesta",
        inputType: 'textarea',
        callback: function (respuesta) {
            if (respuesta !== null && respuesta.trim() !== '') {
                $.post(
                    '../controllers/consultaController.php?op=responder',
                    { idConsulta: idConsulta, respuesta: respuesta },
                    function (data, textStatus, xhr) {
                        switch (data) {
                            case '1':
                                toastr.success('Respuesta enviada');
                                tabla.ajax.reload();
                                break;
                            case '0':
                                toastr.error('Error: No se pudo enviar la respuesta');
                                break;
                            default:
                                toastr.error(data);
                                break;
                        }
                    }
                );
            } else {
                toastr.warning('No se ha escrito ninguna respuesta');
            }
        }
    });
}



