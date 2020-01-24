<?php

include_once '../../funciones.php';

function getAllEquipos() {

    //array que guarda todos los errores
    $error[] = "";
    $conn = conexionDB();
    $sql = "SELECT * FROM equipo ORDER BY ranking_global";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        $error[] = "Error en sql getAllEquipos";
        mysqli_close($conn);
    } else {

        if (mysqli_num_rows($query) >= 1) {

            while ($row = mysqli_fetch_array($query)) {

                $equipos[] = array(
                    'nombre' => $row['nombre'],
                    'pais' => $row['pais_origen'],
                    'ranking' => $row['ranking_global']
                );
            }
        } else {
            $error[] = "No se ha encontrado ninguna fila";
        }

        mysqli_close($conn);
    }

    //For debbuging only
    print_r($error);
    //print_r($equipos);

    return $equipos;
}

function getEquipoByName($nombre) {

    //array que guarda todos los errores
    $error[] = "";
    $conn = conexionDB();
    $sql = "SELECT * FROM equipo WHERE equipo.nombre='" . $nombre."'";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        $error[] = "Error en sql getAllEquipos";
        mysqli_close($conn);
    } else {

        if (mysqli_num_rows($query) == 1) {

            $row = mysqli_fetch_array($query);

            $equipo = array(
                'nombre' => $row['nombre'],
                'pais' => $row['pais_origen'],
                'ranking' => $row['ranking_global']
            );
        } else {
            $error[] = "Se han devuelto mas de un resultado";
        }

        mysqli_close($conn);
    }

//For debbuging only
    print_r($error);
    print_r($equipo);

    return $equipo;
}
