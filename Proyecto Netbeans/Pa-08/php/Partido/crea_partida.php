<?php

include_once '../../funciones.php';
//include_once 'funciones.php';

function crear_partida() {


    //saneamiento
    $saneamiento = array(
        "id_liga" => FILTER_SANITIZE_STRING,
        "fecha" => FILTER_SANITIZE_STRING,
        "equipo1" => FILTER_SANITIZE_STRING,
        "equipo2" => FILTER_SANITIZE_STRING,
        "mapa1" => FILTER_SANITIZE_STRING,
        "mapa2" => FILTER_SANITIZE_STRING,
        "mapa3" => FILTER_SANITIZE_STRING,
        "ganador1" => FILTER_SANITIZE_STRING,
        "ganador2" => FILTER_SANITIZE_STRING,
        "ganador3" => FILTER_SANITIZE_STRING
    );
    $datos = filter_input_array(INPUT_POST, $saneamiento);

    //echo $datos["nombre"] . $datos["fechaInicio"] . $datos["fechaFin"] . $datos["lugar"] . $datos["primerPremio"] . $datos["segundoPremio"] . $datos["premioSemifinales"];


    $conn = conexionDB();
    $sql = "INSERT INTO `partido` (`id_partido`, `id_liga`, `fecha`, `equipo1`, `equipo2`, `mapa1`, `mapa2`, `mapa3`, `ganador1`, `ganador2`, `ganador3`) "
            . "VALUES (NULL, '".$datos['id_liga']."', '".$datos['fecha']."', '".$datos['equipo1']."', "
            . "'".$datos['equipo2']."', '".$datos['mapa1']."', '".$datos['mapa2']."', '".$datos['mapa3']."', "
            . "'".$datos['ganador1']."', '".$datos['ganador2']."', '".$datos['ganador3']."')";
    $liga[] = array();
    $query = mysqli_query($conn, $sql);
    $mensaje = '';
    if (!$query) {
        $error[] = "Error en sql";
        mysqli_close($conn);
    } else {
        /* if (mysqli_num_rows($query) != 1) {
          $mensaje = "No se creo nada"; //buea
          } else {
          $error[] = "No se creo nada";
          } */
        mysqli_close($conn);
    }
    //echo $sql;
}
