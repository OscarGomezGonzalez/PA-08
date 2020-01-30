<?php

include_once '../../funciones.php';
//include_once 'funciones.php';

function borra_equipo($idEquipo) {
    $conn = conexionDB();
    $sql = "DELETE FROM `equipo` WHERE nombre = " . $idEquipo . "";

    $query = mysqli_query($conn, $sql);
    if (!$query) {
        $error[] = "Error en sql";
        mysqli_close($conn);
    }
}
