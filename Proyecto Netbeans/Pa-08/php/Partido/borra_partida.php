<?php

//include_once '../../funciones.php';
include_once 'funciones.php';

function borra_partida($idPartida) {
    $conn = conexionDB();
    $sql = "DELETE FROM `partido` WHERE `partido`.`id_partido` = ".$idPartida;

    $query = mysqli_query($conn, $sql);
    if (!$query) {
        $error[] = "Error en sql";
        mysqli_close($conn);
    }
}
