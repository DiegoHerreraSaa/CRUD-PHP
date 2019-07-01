<?php
include_once "conexion.php";
$con = conexion();

$sql = " SELECT * FROM inventario ";
$result = $con->query($sql);

$cuerpoTabla = "";

while ($datos = $result->fetch_assoc()) {
    $cuerpoTabla = $cuerpoTabla . '<tr>
                            <td>'.$datos['id'].'</td>
                            <td>' . $datos['linea'] . '</td>
                            <td>' . $datos['marca'] . '</td>
                            <td>' . $datos['año'] . '</td>
                            <td>' . $datos['precio'] . '</td>
                            <td>' . $datos['kms'] . '</td>
                            <td>' . $datos['descripcion'] . '</td>
                            <td>
                                <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#actualizarVehiculo" onclick="editarVehiculo('.$datos["id"].')">
                                    <i class="far fa-edit"></i>
                                </span>
                            </td>
                            <td>
                                <span class="btn btn-danger btn-sm" onclick="eliminarVehiculo('.$datos["id"].')">
                                    <i class="far fa-trash-alt"></i>
                                </span>
                            </td>
                        </tr>';
}
$con->close();

echo '<table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Línea</th>
            <th>Marca</th>
            <th>Año</th>
            <th>Precio ($USD)</th>
            <th>Recorrido (Km)</th>
            <th>Descripción</th>
        </thead>
        <tbody>
            '.$cuerpoTabla.'
        </tbody>
    </table>';
?>
