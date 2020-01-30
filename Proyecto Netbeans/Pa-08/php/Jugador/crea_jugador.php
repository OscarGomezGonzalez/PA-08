<?php

include_once '../../funciones.php';
//include_once 'funciones.php';

function crear_jugador() {
    

        //saneamiento
        $saneamiento = array(
            "nombre" => FILTER_SANITIZE_STRING,
            "pais_origen" => FILTER_SANITIZE_STRING,
            "ranking_jugador" => FILTER_SANITIZE_STRING,
            "nombre_equipo" => FILTER_SANITIZE_STRING,
            "ruta_imagen" => FILTER_SANITIZE_STRING
        );
        $datos = filter_input_array(INPUT_POST, $saneamiento);

        //echo $datos["nombre"] . $datos["fechaInicio"] . $datos["fechaFin"] . $datos["lugar"] . $datos["primerPremio"] . $datos["segundoPremio"] . $datos["premioSemifinales"];


        $conn = conexionDB();
        $sql = "INSERT INTO `jugador` (`id_jugador`, `nombre`, `pais_origen`, `ranking_jugador`, `nombre_equipo`, `ruta_imagen`) "
                . "VALUES (NULL, '" . $datos["nombre"] . "', '" . $datos["pais_origen"] . "', '" . $datos["ranking_jugador"] . "', "
                . "'" . $datos["nombre_equipo"] . "', '" . $datos["ruta_imagen"] . "')";
        $liga[] = array();
        $query = mysqli_query($conn, $sql);
        $mensaje = '';
        if (!$query) {
            $error[] = "Error en sql";
            mysqli_close($conn);
        } else {
            /*if (mysqli_num_rows($query) != 1) {
                $mensaje = "No se creo nada"; //buea
            } else {
                $error[] = "No se creo nada";
            }*/
            mysqli_close($conn);
        }
        //echo $sql;
    }

