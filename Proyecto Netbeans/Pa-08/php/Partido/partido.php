<?php

include_once '../../funciones.php';
include '../../head.php';

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

function getPartidosLiga($idLiga) {

    //array que guarda todos los errores
    $error[] = "";
    $conn = conexionDB();
    $sql = "SELECT * FROM partido WHERE id_liga='$idLiga'";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        $error[] = "Error en sql getPartidoById";
    } else {

        if (mysqli_num_rows($query) > 0) {

            $i = 0;
            while ($row = mysqli_fetch_array($query)) {

                $partido = array(
                    'idPartido' => $row['id_partido'],
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

                echo '
            <div class="col-4 col-md-4 col-xl-4 offset-xl-0" style="min-width: 350px;">
                <div class="card" style="width: 100%;min-width: 100%;height: 100%;min-height: 100%;background-color:#343A40;color:white;">
                    <div class="card-body" style="width: 100%;min-width: 100%;height: 100%;min-height: 100%;">
                        <div class="row">
                            <div class="col" style="width: 30%;">
                                <p class="float-left d-md-flex justify-content-xl-center" style="width: 100%;min-width: 100%;">' . $partido['equipo1'] . '<br></p>
                                </div>
                            <div class="col" style="width: 20%;min-width: 50px;"><img src="assets/img/versus.png" style="width: 100%;"></div>
                            <div class="col" style="width: 30%;">
                                <p class="text-left float-right d-md-flex justify-content-xl-center">' . $partido['equipo2'] . '<br></p>
                            </div>
                        </div>
                        <form action="php/Partido/partidos_vista.php" method="POST" style="width: 100%;min-width: 100%;max-width: 100%;height: 30px;min-height: 30px;">
                        <input type="hidden" name="idPartido" value="' . $partido['idPartido'] . '">
                        <button class="btn btn-secondary" type="submit" style="width: 100%;min-width: 100%;max-width: 100%;height: 30px;min-height: 30px;">Ver partido</button>
                            </form>
                    </div>
                </div>
            </div>';
                $i++;
            }
        } else {
            $error[] = "Se han devuelto mas de un resultado";
        }
    }
    mysqli_close($conn);
//For debbuging only
    //print_r($error);
    //print_r($partido);
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
