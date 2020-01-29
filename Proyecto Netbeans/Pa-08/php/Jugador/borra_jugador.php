<?php

//include_once '../../funciones.php';
include_once 'funciones.php';

function borra_jugador($idJugador) {
    $conn = conexionDB();
    $sql = "DELETE FROM `jugador` WHERE `jugador`.`id_jugador` = " . $idJugador;

    $query = mysqli_query($conn, $sql);
    if (!$query) {
        $error[] = "Error en sql";
        mysqli_close($conn);
    }
}
