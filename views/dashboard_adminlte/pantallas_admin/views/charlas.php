<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">        
    <link rel="stylesheet" href="plugins/toastr/toastr.css">
</head>
<body>
        <!-- listado -->
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Charlas existentes</h3>
                </div>
                
                <div class="text-center mt-4">
                <a href="../../../../views/RegistroCharla.php">
        <button type="submit" class="btn-border-animate">Registrar Charla</button>
    </a>
</div>
  
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="row mt-2">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <table id="tbllistado"
                                class="table table-striped table-bordered table-hover">
                                <thead>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Costo</th>
                                    <th>tipo</th>
                                    <th>Duracion</th>
                                    <th>Formato</th>
                                    <th>Objetivo</th>
                                    <th>Descripcion Corta</th>
                                    <th>Consiste </th>
                                    <th>Foto</th>
                                    
                                </thead>
                                <tbody>
                                </tbody>
                                <tfooter>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Costo</th>
                                    <th>tipo</th>
                                    <th>Duracion</th>
                                    <th>Formato</th>
                                    <th>Objetivo</th>
                                    <th>Descripcion Corta</th>
                                    <th>Consiste </th>
                                    <th>Foto</th>
                                
                                </tfooter>
                            </table>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="plugins/DataTables/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/bootbox/bootbox.min.js"></script>
    <script src="plugins/toastr/toastr.js"></script>
    <script src="assets/js/charla.js"></script>
</body>
</html>