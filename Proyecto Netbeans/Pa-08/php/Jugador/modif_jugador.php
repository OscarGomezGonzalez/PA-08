<?php

include_once '../../funciones.php';
//include_once 'funciones.php';

function modif_jugador($idJugador) {
    if (!isset($_POST['btnModificarLugar'])) {
        $conn = conexionDB();
        $sql = "SELECT `id_jugador`, `nombre`, `pais_origen`, `ranking_jugador`, `nombre_equipo`, `ruta_imagen` FROM `jugador` WHERE id_jugador=" . $idJugador;
        $query = mysqli_query($conn, $sql);
        if (!$query) {
            $error[] = "Error en sql";
            mysqli_close($conn);
        } else {
            if (mysqli_num_rows($query) == 1) {
                while ($row = mysqli_fetch_array($query)) {
                    echo '
    <form action="#" method="post">
            <br>
            <input type="text" name="nombre" value="' . $row['nombre'] . '">nombre<br>
            <input type="text" name="pais_origen" value="' . $row['pais_origen'] . '">pais_origen<br>
            <input type="number" name="ranking_jugador" value="0">ranking_jugador<br>
            <input type="text" name="nombre_equipo" value="' . $row['nombre_equipo'] . '">nombre_equipo<br>
            <input type="text" name="ruta_imagen" value="' . $row['ruta_imagen'] . '">ruta_imagen<br>
            <input type="hidden" id="custId" name="custId" value="' . $row['id_jugador'] . '">
            <input type="submit" value="Modificar" name="btnModificarLugar" />
        </form>
    ';
                }
            } else {
                $error[] = "No hay nada o hay duplicados"; //, seguramente no hay nada";
            }
            mysqli_close($conn);
        }
    }

    if (isset($_POST['btnModificarLugar'])) {

        $saneamiento = array(
            "nombre" => FILTER_SANITIZE_STRING,
            "pais_origen" => FILTER_SANITIZE_STRING,
            "ranking_jugador" => FILTER_SANITIZE_STRING,
            "nombre_equipo" => FILTER_SANITIZE_STRING,
            "ruta_imagen" => FILTER_SANITIZE_STRING
        );
        $datos = filter_input_array(INPUT_POST, $saneamiento);

        $conn = conexionDB();
        $sql2 = "UPDATE `jugador` SET `nombre` = '" . $datos["nombre"] . "', `pais_origen` = '" . $datos["pais_origen"] . "', "
                . "`ranking_jugador` = '" . $datos["ranking_jugador"] . "', `nombre_equipo` = '" . $datos["nombre_equipo"] . "', "
                . "`ruta_imagen` = '" . $datos["ruta_imagen"] . "' WHERE `jugador`.`id_jugador` =" . $_POST['custId'];


        $query = mysqli_query($conn, $sql2);
        if (!$query) {
            $error[] = "Error en sql";
            mysqli_close($conn);
        } else {
            mysqli_close($conn);
            header('Location: index.php');
        }
    }

    //en caso de haber un fallo en la conexion
    //header('Location: index.php');
}
