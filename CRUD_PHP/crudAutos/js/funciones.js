function mostrarAutos() {
    $.ajax({
        url: "php/mostrarAutos.php",
        success: function (datos) {
            $('#infoBd').html(datos);
        }
    });
}


function nuevoVehiculo() {
    if ($('#marca').val() == "") {
        swal("Debes ingresar la marca del vehículo");
        return false;
    } else
    if ($('#linea').val() == "") {
        swal("Debes ingresar la linea del vehículo");
        return false;
    } else
    if ($('#kms').val() == "") {
        swal("Debes ingresar el reccorrido en km del vehículo");
        return false;
    } else
    if ($('#ano').val() == "") {
        swal("Debes ingresar el año del vehículo");
        return false;
    } else
    if ($('#precio').val() == "") {
        swal("Debes ingresar el precio del vehículo");
        return false;
    } else
    if ($('#descripcion').val() == "") {
        swal("Debes ingresar una descripción para el vehículo");
        return false;
    }

    $.ajax({
        type: "POST",
        data: $('#frmNuevoVehiculo').serialize(),
        url: "php/agregarVehiculo.php",
        success: function (datos) {
            if (datos == 1) {
                swal("¡Vehículo registrado con éxito!", "", "success");
                $('#frmNuevoVehiculo')[0].reset();
                mostrarAutos();
            } else {
                swal("¡Error al registrar vehículo!", "", "error");
            }
        }
    });
}

function editarVehiculo(id) {
    $.ajax({
        type: "POST",
        data: "id=" + id,
        url: "php/editarVehiculo.php",
        success: function (r) {
            datos = jQuery.parseJSON(r);

            $('#idAct').val(datos['id']);
            $('#lineaAct').val(datos['linea']);
            $('#marcaAct').val(datos['marca']);
            $('#anoAct').val(datos['año']);
            $('#precioAct').val(datos['precio']);
            $('#kmsAct').val(datos['kms']);
            $('#descripcionAct').val(datos['descripcion']);
        }
    });
}

function actualizarVehiculo() {
    if ($('#marcaAct').val() == "") {
        swal("Debes ingresar la marca del vehículo");
        return false;
    } else
    if ($('#lineaAct').val() == "") {
        swal("Debes ingresar la linea del vehículo");
        return false;
    } else
    if ($('#kmsAct').val() == "") {
        swal("Debes ingresar el recorrido en km del vehículo");
        return false;
    } else
    if ($('#anoAct').val() == "") {
        swal("Debes ingresar el año del vehículo");
        return false;
    } else
    if ($('#precioAct').val() == "") {
        swal("Debes ingresar el precio del vehículo");
        return false;
    } else
    if ($('#descripcionAct').val() == "") {
        swal("Debes ingresar una descripción para el vehículo");
        return false;
    }

    $.ajax({
        type: "POST",
        data: $('#frmActualizarVehiculo').serialize(),
        url: "php/actualizarVehiculo.php",
        success: function (datos) {
            if (datos == 1) {
                swal("¡Datos de vehículo actualizados!", "", "success");
                mostrarAutos();
            } else {
                swal("¡Error al actualizar vehículo!", "", "error");
            }
        }
    });
}

function eliminarVehiculo(id) {
    swal({
            title: "¿Esta seguro de eliminar el registro?",
            text: "¡Una vez eliminado, no será posible de recuperar!",
            icon: "warning",
            buttons: true,
            buttons: ["Cancelar", "Aceptar"],
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    data: "id=" + id,
                    url: "php/eliminarVehiculo.php",
                    success: function (datos) {
                        if (datos == 1) {
                            swal("¡Registro de vehículo eliminado con éxito!", "", "success");
                            mostrarAutos();
                        } else {
                            swal("¡Error al eliminar registro!", "", "error");
                        }
                    }
                });
            }
        });
}