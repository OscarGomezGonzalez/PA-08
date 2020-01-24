<?php

include_once '../../funciones.php';

function getAllPlayers() {

    //array que guarda todos los errores
    $error[] = "";
    $conn = conexionDB();
    $sql = "SELECT * FROM jugador ORDER BY ranking_jugador";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        $error[] = "Error en sql getAllPlayers";
        mysqli_close($conn);
    } else {

        if (mysqli_num_rows($query) >= 1) {

            while ($row = mysqli_fetch_array($query)) {

                $jugadores[] = array(
                    'id' => $row['id_jugador'],
                    'nombre' => $row['nombre'],
                    'pais' => $row['pais_origen'],
                    'ranking' => $row['ranking_jugador'],
                    'equipo' => $row['nombre_equipo']
                );
            }
        } else {
            $error[] = "No se ha encontrado ninguna fila";
        }

        mysqli_close($conn);
    }

    //For debbuging only
    print_r($error);
    print_r($jugadores);

    return $jugadores;
}

function getAllPlayersFromTeam($equipo) {

    //array que guarda todos los errores
    $error[] = "";
    $conn = conexionDB();
    $sql = "SELECT * FROM jugador WHERE nombre_equipo='" . $equipo . "'";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        $error[] = "Error en sql getAllPlayers";
        mysqli_close($conn);
    } else {

        if (mysqli_num_rows($query) >= 1) {

            while ($row = mysqli_fetch_array($query)) {

                $jugadores[] = array(
                    'id' => $row['id_jugador'],
                    'nombre' => $row['nombre'],
                    'pais' => $row['pais_origen'],
                    'ranking' => $row['ranking_jugador'],
                    'equipo' => $row['nombre_equipo']
                );
            }
        } else {
            $error[] = "No se ha encontrado ninguna fila";
        }

        mysqli_close($conn);
    }

    //For debbuging only
    print_r($error);
    print_r($jugadores);

    return $jugadores;
}

function getPlayerByName($nombre) {

    //array que guarda todos los errores
    $error[] = "";
    $conn = conexionDB();
    $sql = "SELECT * FROM jugador WHERE jugador.nombre='" . $nombre . "'";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        $error[] = "Error en sql getPlayerByName";
        mysqli_close($conn);
    } else {

        if (mysqli_num_rows($query) == 1) {

            $row = mysqli_fetch_array($query);

            $jugador = array(
                'id_' => $row['id_jugador'],
                'nombre' => $row['nombre'],
                'pais' => $row['pais_origen'],
                'ranking' => $row['ranking_jugador'],
                'equipo' => $row['nombre_equipo']
            );
        } else {
            $error[] = "Se han devuelto mas de un resultado";
        }

        mysqli_close($conn);
    }

//For debbuging only
    print_r($error);
    print_r($jugador);

    return $jugador;
}
