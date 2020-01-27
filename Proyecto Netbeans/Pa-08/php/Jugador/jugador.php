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
    }
    mysqli_close($conn);
    //For debbuging only
    //print_r($error);
    //print_r($jugadores);

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
    } else {

        if (mysqli_num_rows($query) == 1) {

            $row = mysqli_fetch_array($query);

            $jugador = array(
                'id' => $row['id_jugador'],
                'nombre' => $row['nombre'],
                'pais' => $row['pais_origen'],
                'ranking' => $row['ranking_jugador'],
                'equipo' => $row['nombre_equipo'],
                'rutaImg' => $row['ruta_imagen']
            );
        } else {
            $error[] = "Se han devuelto mas de un resultado";
        }
    }
    mysqli_close($conn);
//For debbuging only
    print_r($error);
    print_r($jugador);

    return $jugador;
}

/*
 * Esta funcion devuelve dos jugadores en funcion del ranking pasado por 
 * parametro que sera de otro jugador, estos jugadores estaran ordenados segun 
 * su ranking y se corresponderan a uno por encima del ranking pasado y otro 
 * por debajo, si fuera el peor jugador se devolveran los siguientes dos mejores
 * o los dos peores si fuera el ultimo
 */

function getPlayersByPlayerRanking($playerRanking) {

    //array que guarda todos los errores
    $error[] = "";
    $conn = conexionDB();

    if ($playerRanking == 1) {

        $ranking1 = 2;
        $ranking2 = 3;
    } else {

        $ranking1 = $playerRanking + 1;
        $ranking2 = $playerRanking - 1;
    }

    $sql = "SELECT * FROM jugador WHERE jugador.ranking_jugador='$ranking1' OR "
            . "jugador.ranking_jugador='$ranking2' ORDER BY jugador.ranking_jugador";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        $error[] = "Error en sql getPlayerByName";
    } else {

        if (mysqli_num_rows($query) > 1) {

            while ($row = mysqli_fetch_array($query)) {

                $jugadores[] = array(
                    'id' => $row['id_jugador'],
                    'nombre' => $row['nombre'],
                    'pais' => $row['pais_origen'],
                    'ranking' => $row['ranking_jugador'],
                    'equipo' => $row['nombre_equipo'],
                    'rutaImg' => $row['ruta_imagen']
                );
            }
        } elseif (mysqli_num_rows($query) == 1) {

            $ranking1 = $playerRanking - 2; //dos puestos por encima
            $ranking2 = $playerRanking - 1; //un puesto por encima
            //necesimas repetir la consulta
            $sql = "SELECT * FROM jugador WHERE jugador.ranking_jugador='$ranking1' OR"
                    . " jugador.ranking_jugador='$ranking2' ORDER BY jugador.ranking_jugador";
            $query = mysqli_query($conn, $sql);

            if (!$query) {
                $error[] = "Error en sql getPlayersByRanking";
            } else {
                if (mysqli_num_rows($query) >= 1) {

                    while ($row = mysqli_fetch_array($query)) {

                        $jugadores[] = array(
                            'id' => $row['id_jugador'],
                            'nombre' => $row['nombre'],
                            'pais' => $row['pais_origen'],
                            'ranking' => $row['ranking_jugador'],
                            'equipo' => $row['nombre_equipo'],
                            'rutaImg' => $row['ruta_imagen']
                        );
                    }
                }
            }
        } else {
            $error[] = "Se han devuelto mas de un resultado";
        }
    }
    mysqli_close($conn);
//For debbuging only
    //print_r($error);
    //print_r($jugadores);

    return $jugadores;
}
