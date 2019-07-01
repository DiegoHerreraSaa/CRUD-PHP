<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD PHP-AJAX-MySQL</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/6cf008c4c6.js"></script>
</head>

<body></body>
<h1>CRUD utilizando Bootstrap, PHP, AJAX y MySQL</h1>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card bg-light mb-3">
                <div class="card-header"><i class="fas fa-car"></i><b> Autos Clásicos</b></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <section class="text-right">
                                <span class="btn btn-primary btn-sm" data-toggle="modal" data-target="#nuevoVehiculo">
                                    <i class="fas fa-plus"></i> Ingresar nuevo vehículo
                                </span>
                                <p></p>
                            </section>
                            <div id="infoBd"></div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-light text-right"><b>Diego Alexander Herrera Saa - Contacto 317 218 5139</b></div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Nuevo Vehículo-->
<div class="modal fade" id="nuevoVehiculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ingresar Vehículo:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario -->
                <form id="frmNuevoVehiculo">
                    <div class="row">
                        <div class="col-8 col-sm-4">
                            <label for="marca">Marca:</label>
                            <input type="text" name="marca" id="marca" class="form-control form-control-sm">
                            <label for="kms">Recorrido (Km):</label>
                            <input type="text" name="kms" id="kms" class="form-control form-control-sm">
                            <label for="ano">Año:</label>
                            <input type="text" name="ano" id="ano" class="form-control form-control-sm">
                            <label for="precio">Precio ($USD):</label>
                            <input type="text" name="precio" id="precio" class="form-control form-control-sm">
                        </div>
                        <div class="col-4 col-sm-8">
                            <label for="linea">Línea:</label>
                            <input type="text" name="linea" id="linea" class="form-control form-control-sm">
                            <label for="descripcion">Descripción:</label>
                            <textarea type="text" name="descripcion" id="descripcion" cols="30" rows="7" class="form-control form-control-sm" placeholder="Introduce la descripción completa del vehículo..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btnNuevoVehiculo" onclick="nuevoVehiculo()">Guardar</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal Nuevo Vehículo -->
<!-- Modal Actualizar Vehículo-->
<div class="modal fade" id="actualizarVehiculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos de Vehículo:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario -->
                <form id="frmActualizarVehiculo">
                    <div class="row">
                        <div class="col-8 col-sm-4">
                            <input type="text" name="idAct" id="idAct" hidden>
                            <label for="marcaAct">Marca:</label>
                            <input type="text" name="marcaAct" id="marcaAct" class="form-control form-control-sm">
                            <label for="kmsAct">Recorrido (Km):</label>
                            <input type="text" name="kmsAct" id="kmsAct" class="form-control form-control-sm">
                            <label for="anoAct">Año:</label>
                            <input type="text" name="anoAct" id="anoAct" class="form-control form-control-sm">
                            <label for="precioAct">Precio ($USD):</label>
                            <input type="text" name="precioAct" id="precioAct" class="form-control form-control-sm">
                        </div>
                        <div class="col-4 col-sm-8">
                            <label for="lineaAct">Línea:</label>
                            <input type="text" name="lineaAct" id="lineaAct" class="form-control form-control-sm">
                            <label for="descripcionAct">Descripción:</label>
                            <textarea name="descripcionAct" id="descripcionAct" cols="30" rows="7" class="form-control form-control-sm" placeholder="Introduce la descripción completa del vehículo..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnActVehiculo" onclick="actualizarVehiculo()">Guardar cambios</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal Axtualizar Vehículo -->
</body>
<footer>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/funciones.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            mostrarAutos();
        })
    </script>
</footer>

</html>