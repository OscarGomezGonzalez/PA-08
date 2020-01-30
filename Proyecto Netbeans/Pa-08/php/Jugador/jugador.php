<?php

include_once '../../funciones.php';

function isPlayerInTeam($jugador) {

    $res = false;

    if (!$jugador['equipo'] == "") {
        
        $res = true;
    }

    return $res;
}

function getAllPlayers() {

    //array que guarda todos los errores
    $error[] = "";
    $conn = conexionDB();
    $sql = "SELECT nombre,nombre_equipo FROM jugador ORDER BY ranking_jugador";

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
    //print_r($jugadores);

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
    //print_r($error);
    //print_r($jugador);

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

function nuevoJugador() {

    $error[] = "";

    if (isset($_POST['enviado'])) {
        if (isset($_POST['nombre']) && isset($_POST['pais']) &&
                isset($_POST['ranking']) && isset($_POST['equipo'])) {

            $arraySanitize = array(
                'nombre' => FILTER_SANITIZE_STRING,
                'pais' => FILTER_SANITIZE_STRING,
                'ranking' => FILTER_SANITIZE_NUMBER_INT,
                'equipo' => FILTER_SANITIZE_STRING
            );



            $jugador = getPlayerByName($arraySanitize['nombre']);

            if ($arraySanitize['nombre'] != $jugador['nombre']) {

                $datos = filter_input_array(INPUT_POST, $arraySanitize);

                $nombre = $datos["nombre"];
                $pais = $datos["pais"];
                $ranking = $datos["ranking"];
                $equipo = $datos["equipo"];


                if ($_FILES['ruta_imagen']['error'] > 0) {
                    $imagen_perfil = "";
                } else {
                    $mTmpFile = $_FILES['ruta_imagen']['tmp_name'];
                    $mTipo = exif_imagetype($mTmpFile);
                    if (($mTipo == IMAGETYPE_JPEG) or ( $mTipo == IMAGETYPE_PNG)) {
                        $ruta = "assets/img/jugadores";
                        $imagen_perfil = $ruta . "/" . $nombre;
                        move_uploaded_file($_FILES['ruta_imagen']['tmp_name'], "../../" . $imagen_perfil);
                    } else {
                        $imagen_perfil = "";
                    }
                }

                $conn = conexionDB();

                $consulta = "INSERT INTO `jugador`"
                        . "(`id_jugador`, `nombre`, `pais_origen`, "
                        . "`ranking_jugador`, `nombre_equipo`, `ruta_imagen`) "
                        . "VALUES ('NULL','$nombre','$pais','$ranking','$equipo','$imagen_perfil')";
                $resultado = mysqli_query($conn, $consulta);

                if (!$resultado) {
                    $error[] = "Error en sql crear jugador";
                }

                mysqli_close($conn);
            } else {
                //jugador ya existe
                $error[] = "El jugador ya existe";
            }
        } else {
            //rellena todos los datos
            $error[] = "Rellena todos los datos";
        }
    }

    print_r($error);

    return $resultado;
}
