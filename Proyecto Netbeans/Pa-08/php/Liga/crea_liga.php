<?php

//include_once '../../funciones.php';
include_once 'funciones.php';

function crear_liga() {
    if ($_POST['nombre'] == "" || $_POST['fechaInicio'] == "" || $_POST['fechaFin'] == "" || $_POST['lugar'] == "" || $_POST['primerPremio'] == "" || $_POST['segundoPremio'] == "" || $_POST['premioSemifinales'] == "") {
        echo 'ERROR EN EL FORMULARIO';
    } else if (!isset($_POST['nombre']) || !isset($_POST['fechaInicio']) || !isset($_POST['fechaFin']) || !isset($_POST['lugar']) || !isset($_POST['primerPremio']) || !isset($_POST['segundoPremio']) || !isset($_POST['premioSemifinales'])) {
        echo 'ERROR EN EL FORMULARIO';
    } else {

        //saneamiento
        $saneamiento = array(
            "nombre" => FILTER_SANITIZE_STRING,
            "fechaInicio" => FILTER_SANITIZE_STRING,
            "fechaFin" => FILTER_SANITIZE_STRING,
            "lugar" => FILTER_SANITIZE_STRING,
            "primerPremio" => FILTER_SANITIZE_STRING,
            "segundoPremio" => FILTER_SANITIZE_STRING,
            "premioSemifinales" => FILTER_SANITIZE_STRING
        );
        $datos = filter_input_array(INPUT_POST, $saneamiento);

        //echo $datos["nombre"] . $datos["fechaInicio"] . $datos["fechaFin"] . $datos["lugar"] . $datos["primerPremio"] . $datos["segundoPremio"] . $datos["premioSemifinales"];


        $conn = conexionDB();
        $sql = "INSERT INTO `liga` (`id_liga`, `nombre`, `fecha_inicio`, `fecha_fin`, `lugar`, `premio_1`, `premio_2`, `premio_3`)"
                . " VALUES (NULL, '" . $datos["nombre"] . "', '" . $datos["fechaInicio"] . "', '" . $datos["fechaFin"] . " ' , '" . $datos["lugar"] . "', '" . $datos["primerPremio"] . "', '" . $datos["segundoPremio"] . "', '" . $datos["premioSemifinales"] . "')";
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
}
