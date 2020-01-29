<?php

include_once '../../funciones.php';

function getPartidoById($idPartido) {

    //array que guarda todos los errores
    $error[] = "";
    $conn = conexionDB();
    $sql = "SELECT * FROM partido WHERE id_partido='$idPartido'";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        $error[] = "Error en sql getPartidoById";
    } else {

        if (mysqli_num_rows($query) == 1) {

            $row = mysqli_fetch_array($query);

            $partido = array(
                'id' => $row['id_partido'],
                'id_liga' => $row['id_liga'],
                'fecha' => setDateFormat($row['fecha']),
                'equipo1' => $row['equipo1'],
                'equipo2' => $row['equipo2'],
                'mapa1' => $row['mapa1'],
                'mapa2' => $row['mapa2'],
                'mapa3' => $row['mapa3'],
                'ganador1' => $row['ganador1'],
                'ganador2' => $row['ganador2'],
                'ganador3' => $row['ganador3']
            );

            $partido['ganador'] = getGanadorPartido($partido);

            $id_liga = $partido['id_liga'];
            //consultamos id_liga
            $sql = "SELECT nombre FROM liga WHERE id_liga='$id_liga'";
            $query = mysqli_query($conn, $sql);

            if (!$query) {
                $error[] = "Error en sql2 getPartidoById";
            } else {
                if (mysqli_num_rows($query) == 1) {
                    $row = mysqli_fetch_array($query);

                    $partido['nombre_liga'] = $row['nombre'];
                }
            }
        } else {
            $error[] = "Se han devuelto mas de un resultado";
        }
    }
    mysqli_close($conn);
//For debbuging only
    //print_r($error);
    //print_r($partido);

    return $partido;
}

/*
 * Funcion para obtener partidos y paginarlos, obtenemos partidos de 6 en 6
 */

function getPartidosPaginated($lastOne, $limit) {

    $sql = "SELECT * FROM partido ORDER BY id_partido ASC LIMIT " . $limit . " OFFSET " . $lastOne;
    $conn = conexionDB();

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        $error[] = "Error en sql paginated";
    } else {
        if (mysqli_num_rows($query) >= 1) {

            $i = 0;
            while ($row = mysqli_fetch_array($query)) {


                $partidos[] = array(
                    'id' => $row['id_partido'],
                    'equipo1' => $row['equipo1'],
                    'equipo2' => $row['equipo2']
                );

                $partidos[$i]['ganador'] = getGanadorPartido($row);
                $i++;
            }
        } else {
            $error[] = "No se han devuelto resultados";
        }
    }

    mysqli_close($conn);
//For debbuging only
    print_r($error);

    return $partidos;
}

function partidosLeft($offset, $limit) {

    $left = false;
    $offset += $limit;
    $sql = "SELECT id_partido FROM partido ORDER BY id_partido ASC LIMIT " . $limit . " OFFSET " . $offset;
    $conn = conexionDB();

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        $error[] = "Error en sql paginated";
    } else {
        if (mysqli_num_rows($query) > 0) {
            $left = true;
        }
    }

    return $left;
}

//retornamos el numero de partidos
function getNumPartidos() {
    $conn = conexionDB();
    $sql = "SELECT COUNT(id_partido) as total FROM partido";
    $res = mysqli_query($conn, $sql);
    $ret = false;
    if ($arr = mysqli_fetch_array($res)) {
        $ret = $arr['total'];
    }
    mysqli_close($conn);
    return $ret;
}

function getGanadorPartido($partido) {

    $g1 = $partido['ganador1'];
    $g2 = $partido['ganador2'];
    $g3 = $partido['ganador3'];

    if ($g1 == $g2) {
        $ganador = $g1;
    } elseif ($g1 == $g3) {
        $ganador = $g1;
    } elseif ($g2 == $g3) {
        $ganador = $g2;
    }

    return $ganador;
}

function getRutasMapas($partido) {

    $mapa1 = $partido['mapa1'];
    $mapa2 = $partido['mapa2'];
    $mapa3 = $partido['mapa3'];

    //array que guarda todos los errores
    $error[] = "";
    $conn = conexionDB();
    $sql = "SELECT ruta_imagen FROM mapa WHERE nombre_mapa='$mapa1' OR nombre_mapa='$mapa2' OR nombre_mapa='$mapa3'";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        $error[] = "Error en sql getRutasMapas";
    } else {
        if (mysqli_num_rows($query) >= 1) {

            while ($row = mysqli_fetch_array($query)) {

                $rutasMapas[] = array(
                    "ruta_imagen" => $row['ruta_imagen']
                );
            }
        } else {
            $error[] = "No se han devuelto resultados";
        }
    }

    mysqli_close($conn);
//For debbuging only
    //print_r($error);
    //print_r($rutasMapas);

    return $rutasMapas;
}

function isTwoMaps($partido) {

    $lessThan3 = false;

    if ($partido['ganador3'] == "") {

        $lessThan3 = true;
    }

    return$lessThan3;
}
