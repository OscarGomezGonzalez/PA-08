<?php

//include_once '../../funciones.php';
include_once 'funciones.php';

function modif_Partida($idPartida) {
    if (!isset($_POST['btnModificarLugar'])) {
        $conn = conexionDB();
        $sql = "SELECT `id_partido`, `id_liga`, `fecha`, `equipo1`, `equipo2`, `mapa1`, `mapa2`, `mapa3`, `ganador1`,"
                . " `ganador2`, `ganador3` "
                . "FROM `partido` WHERE id_partido=" . $idPartida;
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
            <input type="text" name="id_liga" value="' . $row['id_liga'] . '">id_liga<br>
            <input type="date" name="fecha" value="' . $row['fecha'] . '">fecha<br>
            <input type="text" name="equipo1" value="' . $row['equipo1'] . '">equipo1<br>
            <input type="text" name="equipo2" value="' . $row['equipo2'] . '">equipo2<br>
            <input type="text" name="mapa1" value="' . $row['mapa1'] . '">mapa1<br>
            <input type="text" name="mapa2" value="' . $row['mapa2'] . '">mapa2<br>
            <input type="text" name="mapa3" value="' . $row['mapa3'] . '">mapa3<br>
            <input type="text" name="ganador1" value="' . $row['ganador1'] . '">ganador1<br>
            <input type="text" name="ganador2" value="' . $row['ganador2'] . '">ganador2<br>
            <input type="text" name="ganador3" value="' . $row['ganador3'] . '">ganador3<br>

            <input type="hidden" id="custId" name="custId" value="' . $row['id_partido'] . '">
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

        $conn = conexionDB();
        $sql2 = "UPDATE `partido` SET `id_liga` = '" . $datos["id_liga"] . "', `fecha` = '" . $datos["fecha"] . "', "
                . "`equipo1` = '" . $datos["equipo1"] . "', `equipo2` = '" . $datos["equipo2"] . "', `mapa1` = '" . $datos["mapa1"] . "', "
                . "`mapa2` = '" . $datos["mapa2"] . "', `mapa3` = '" . $datos["mapa3"] . "', `ganador1` = '" . $datos["ganador1"] . "', "
                . "`ganador2` = '" . $datos["ganador2"] . "', `ganador3` = '" . $datos["ganador3"] . "' WHERE `partido`.`id_partido` = " . $_POST['custId'] . "";
        echo $sql2;

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
