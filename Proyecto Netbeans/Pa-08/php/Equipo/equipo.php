<?php

include_once '../../funciones.php';

function getAllEmplyTeams() {

    function getAllPlayers() {
        echo 'loko';
        //array que guarda todos los errores
        $error[] = "";
        $conn = conexionDB();
        $sql = "SELECT nombre_equipo FROM equipo";

        $query = mysqli_query($conn, $sql);

        if (!$query) {
            $error[] = "Error en sql getEmptyTeams";
            mysqli_close($conn);
        } else {

            if (mysqli_num_rows($query) >= 1) {

                while ($row = mysqli_fetch_array($query)) {

                    $jugadores[] = array(
                        'equipo' => $row['nombre_equipo']
                    );
                }
            } else {
                $error[] = "No se ha encontrado ninguna fila";
            }

            mysqli_close($conn);
        }

        //For debbuging only
        //print_r($error);
        //print_r($jugadores);

        return $jugadores;
    }

}

function getAllEquipos() {

    //array que guarda todos los errores
    $error[] = "";
    $conn = conexionDB();
    $sql = "SELECT * FROM equipo ORDER BY ranking_global";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        $error[] = "Error en sql getAllEquipos";
    } else {

        if (mysqli_num_rows($query) >= 1) {

            while ($row = mysqli_fetch_array($query)) {

                $equipos[] = array(
                    'nombre' => $row['nombre'],
                    'pais' => $row['pais_origen'],
                    'ranking' => $row['ranking_global'],
                    'rutaImg' => $row['ruta_foto']
                );
            }
        } else {
            $error[] = "No se ha encontrado ninguna fila";
        }
    }
    mysqli_close($conn);
    //For debbuging only
    //print_r($error);
    //print_r($equipos);

    return $equipos;
}

function getEquipoByName($nombre) {

    //array que guarda todos los errores
    $error[] = "";
    $conn = conexionDB();
    $sql = "SELECT * FROM equipo WHERE equipo.nombre='" . $nombre . "'";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        $error[] = "Error en sql getAllEquipos";
    } else {

        if (mysqli_num_rows($query) == 1) {

            $row = mysqli_fetch_array($query);

            $equipo = array(
                'nombre' => $row['nombre'],
                'pais' => $row['pais_origen'],
                'ranking' => $row['ranking_global'],
                'rutaImg' => $row['ruta_foto']
            );
        } else {
            $error[] = "Se han devuelto mas de un resultado";
        }
    }
    mysqli_close($conn);
//For debbuging only
    print_r($error);
    //print_r($equipo);

    return $equipo;
}

function getPartidosByEquipo($equipo) {

    //array que guarda todos los errores
    $error[] = "";
    $conn = conexionDB();
    $sql = "SELECT * FROM partido WHERE equipo1='$equipo' OR equipo2='$equipo'";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        $error[] = "Error en sql getPartidosByEquipo";
    } else {

        if (mysqli_num_rows($query) >= 1) {

            while ($row = mysqli_fetch_array($query)) {

                if (strtotime(date("Y-m-d")) < strtotime($row['fecha'])) {
                    $partidos[] = array(
                        'fecha' => $row['fecha'],
                        'equipo1' => $row['equipo1'],
                        'equipo2' => $row['equipo2']
                    );
                }
            }
        } else {
            $error[] = "No se han devuelto resultados";
        }
    }
    mysqli_close($conn);
//For debbuging only
    //print_r($error);
    //print_r($equipo);

    return $partidos;
}
