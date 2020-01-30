<?php

include_once '../../funciones.php';

function borra_liga($idliga) {
    echo $idliga;
    $conn = conexionDB();
    $sql = "DELETE FROM `liga` WHERE `id_liga`='$idliga'";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        $error[] = "Error en sql";
    }
    print_r($error);
    mysqli_close($conn);
    header("../../panelAdmin.php");
}
