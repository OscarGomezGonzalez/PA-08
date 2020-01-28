<?php

include_once '../../funciones.php';

function borra_liga($idliga) {
    $conn = conexionDB();
    $sql = "DELETE FROM `liga` WHERE `liga`.`id_liga` = " . $idliga . "";

    $query = mysqli_query($conn, $sql);
    if (!$query) {
        $error[] = "Error en sql";
        mysqli_close($conn);
    }
}
