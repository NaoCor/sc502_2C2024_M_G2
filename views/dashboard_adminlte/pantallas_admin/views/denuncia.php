<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denuncias</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/toastr/toastr.css">
</head>
<body>
    <div class="col-md-12">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">Denuncias existentes</h3>
            </div>
            <div class="card-body p-0">
                <div class="row mt-2">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <table id="tbllistado" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID denuncia</th>
                                    <th>ID denunciado</th>
                                    <th>ID denunciante</th>
                                    <th>Tipo</th>
                                    <th>Fecha</th>
                                    <th>Lugar</th>
                                    <th>Relación agresor</th>
                                    <th>Documentación</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Aquí se añadirán las filas dinámicamente -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID denuncia</th>
                                    <th>ID denunciado</th>
                                    <th>ID denunciante</th>
                                    <th>Tipo</th>
                                    <th>Fecha</th>
                                    <th>Lugar</th>
                                    <th>Relación agresor</th>
                                    <th>Documentación</th>
                                    <th>Opciones</th>
                                </tr>
                            </tfoot>
                        </table>
                        <!-- Botones de Activar y Desactivar -->
                        <button class='btn btn-success activar'>Activar</button>
                        <button class='btn btn-danger desactivar'>Desactivar</button>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/bootbox/bootbox.min.js"></script>
    <script src="plugins/toastr/toastr.js"></script>
    <script src="assets/js/denuncias.js"></script> <!-- Enlace al archivo JS externo -->
</body>
</html>
