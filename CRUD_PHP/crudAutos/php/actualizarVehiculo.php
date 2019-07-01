<?php

include_once "conexion.php";
$con = conexion();

$linea = $con->real_escape_string(htmlentities($_POST['lineaAct']));
$marca = $con->real_escape_string(htmlentities($_POST['marcaAct']));
$año = $con->real_escape_string(htmlentities($_POST['anoAct']));
$precio = $con->real_escape_string(htmlentities($_POST['precioAct']));
$kms = $con->real_escape_string(htmlentities($_POST['kmsAct']));
$descp = $con->real_escape_string(htmlentities($_POST['descripcionAct']));
$descripcion = str_replace('\r\n', ' ', $descp);
$id = $con->real_escape_string(htmlentities($_POST['idAct']));

$sql = " UPDATE inventario SET linea=?, marca=?, año=?, precio=?, kms=?, descripcion=? WHERE id LIKE ? ";
$query = $con->prepare($sql);
$query->bind_param("ssiiisi", $linea, $marca, $año, $precio, $kms, $descripcion, $id);
echo $query->execute();
$query->close();
$con->close();