<?php

include_once '../../funciones.php';
//include_once 'funciones.php';

crear_equipo();
header("index.php");
function crear_jugador() {
    
 echo '$sql';
        //saneamiento
        $saneamiento = array(
            "nombre" => FILTER_SANITIZE_STRING,
            "pais" => FILTER_SANITIZE_STRING,
            "ranking" => FILTER_SANITIZE_STRING
        );
        $datos = filter_input_array(INPUT_POST, $saneamiento);
 echo '$sql';
        //echo $datos["nombre"] . $datos["fechaInicio"] . $datos["fechaFin"] . $datos["lugar"] . $datos["primerPremio"] . $datos["segundoPremio"] . $datos["premioSemifinales"];


        $conn = conexionDB();
        $sql = "INSERT INTO `jugador` (`id_jugador`, `nombre`, `pais_origen`, `ranking_jugador`, `nombre_equipo`, `ruta_imagen`) "
                . "VALUES (NULL, '" . $datos["nombre"] . "', '" . $datos["pais"] . "', '" . $datos["ranking"] . "', "
                . " NULL, ' ')";
        echo $sql;
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

