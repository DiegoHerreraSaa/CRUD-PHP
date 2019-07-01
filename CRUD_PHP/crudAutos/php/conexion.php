<?php

function conexion(){
    $con = new mysqli("127.0.0.1", "root", "", "autos");
    if ($con->connect_errno) {
        echo "Error al conectar a la base de datos: " . $con->connect_error;
    }
    $con->set_charset('utf8');
    return $con;
}
