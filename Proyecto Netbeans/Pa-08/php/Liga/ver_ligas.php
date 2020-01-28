<?php

//include_once '../../funciones.php';
include_once 'funciones.php';

function ver_ligas() {

    $conn = conexionDB();
    $sql = "SELECT `id_liga`, `nombre`, `fecha_inicio`, `fecha_fin`, `lugar` FROM `liga`";

    $query = mysqli_query($conn, $sql);
    if (!$query) {
        $error[] = "Error en sql";
        mysqli_close($conn);
    } else {
        if (mysqli_num_rows($query) >= 1) {
            while ($row = mysqli_fetch_array($query)) {
                $ligas[] = array(
                    'id_liga' => $row['id_liga'],
                    'nombre' => $row['nombre'],
                    'fecha_inicio' => $row['fecha_inicio'],
                    'fecha_fin' => $row['fecha_fin'],
                    'lugar' => $row['lugar']
                );
                echo '<p>' . $row['id_liga'] . ' ' . $row['nombre'] . ' ' . $row['fecha_inicio'] . ' ' . $row['fecha_fin'] . ' ' . $row['lugar'] . '</p>';
                echo '
        <form action="#" method="post">
            <input type="hidden" id="custId" name="custId" value="' . $row['id_liga'] . '">
            <input type="submit" value="Eliminar" name="btnEliminar" />
            <input type="submit" value="Modificar" name="btnModificar" />
        </form>';
            }
        } else {
            $error[] = "No hay nada";
        }
        mysqli_close($conn);
    }

    //print_r($error);
}

function ver_unaLiga($idliga) {

    $conn = conexionDB();
    $sql = "SELECT `id_liga`, `nombre`, `fecha_inicio`, `fecha_fin`, `lugar` FROM `liga` WHERE ='" . $idliga . "'";
    $liga[] = array();
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        $error[] = "Error en sql";
        mysqli_close($conn);
    } else {
        if (mysqli_num_rows($query) == 1) {
            while ($row = mysqli_fetch_array($query)) {
                $liga[] = array(
                    'id_liga' => $row['id_liga'],
                    'nombre' => $row['nombre'],
                    'fecha_inicio' => $row['fecha_inicio'],
                    'fecha_fin' => $row['fecha_fin'],
                    'lugar' => $row['lugar']
                );
            }
        } else {
            $error[] = "No hay nada o hay duplicados"; //, seguramente no hay nada";
        }
        mysqli_close($conn);
    }
    return $liga;
    //print_r($error);
}
