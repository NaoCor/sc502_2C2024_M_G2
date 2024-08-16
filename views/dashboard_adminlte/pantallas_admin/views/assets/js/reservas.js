$(function () {
    $('#formulario_update').hide();
    listasReservas();
});

/* Función para cargar el listado en el DataTable */
function listasReservas() {
    tabla = $('#tbllistado').DataTable({
        aProcessing: true, 
        aServerSide: true, 
        dom: 'Bfrtip', 
        buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
        ajax: {
            url: '../controllers/reservaController.php',
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
