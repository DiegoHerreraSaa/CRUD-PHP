<?php

include_once "conexion.php";
$con = conexion();

$linea = $con->real_escape_string(htmlentities($_POST['linea']));
$marca = $con->real_escape_string(htmlentities($_POST['marca']));
$año = $con->real_escape_string(htmlentities($_POST['ano']));
$precio = $con->real_escape_string(htmlentities($_POST['precio']));
$kms = $con->real_escape_string(htmlentities($_POST['kms']));
$descp = $con->real_escape_string(htmlentities($_POST['descripcion']));
$descripcion = str_replace('\r\n', ' ', $descp);


$sql = " INSERT INTO inventario(linea, marca, año, precio, kms, descripcion) VALUES(?,?,?,?,?,?) ";
$query = $con->prepare($sql);
$query->bind_param('ssiiis', $linea, $marca, $año, $precio, $kms, $descripcion);
echo $query->execute();
$query->close();
$con->close();
