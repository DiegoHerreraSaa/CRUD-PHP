<?php

include "conexion.php";
$con = conexion();
$id = $con->real_escape_string(htmlentities($_POST['id']));


$sql = " SELECT * FROM inventario WHERE id = ? ";

$query = $con->prepare($sql);
$query->bind_param("i",$id);
$query->execute();
$datos = $query->get_result()->fetch_assoc();

echo json_encode($datos);