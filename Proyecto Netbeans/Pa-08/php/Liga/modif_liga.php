<?php

//include_once '../../funciones.php';
include_once 'funciones.php';

function modif_liga($idliga) {
    if (!isset($_POST['btnModificarLugar'])) {
        $conn = conexionDB();
        $sql = "SELECT `id_liga`, `nombre`, `fecha_inicio`, `fecha_fin`, `lugar`, `premio_1`, `premio_2`, `premio_3` FROM `liga` WHERE id_liga='" . $idliga . "'";
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
            <input type="date" name="fechaInicio" value="' . $row['fecha_inicio'] . '">fechaInicio<br>
            <input type="date" name="fechaFin" value="' . $row['fecha_fin'] . '">fechaFin<br>
            <input type="text" name="lugar" value="' . $row['lugar'] . '">lugar<br>
            <input type="number" name="primerPremio" value="' . $row['premio_1'] . '">primer premio<br>
            <input type="number" name="segundoPremio" value="' . $row['premio_2'] . '">segundo premio<br>
            <input type="number" name="premioSemifinales" value="' . $row['premio_3'] . '">premio semifinales<br>
            <input type="hidden" id="custId" name="custId" value="' . $row['id_liga'] . '">
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
            "fechaInicio" => FILTER_SANITIZE_STRING,
            "fechaFin" => FILTER_SANITIZE_STRING,
            "lugar" => FILTER_SANITIZE_STRING,
            "primerPremio" => FILTER_SANITIZE_STRING,
            "segundoPremio" => FILTER_SANITIZE_STRING,
            "premioSemifinales" => FILTER_SANITIZE_STRING
        );
        $datos = filter_input_array(INPUT_POST, $saneamiento);

        $conn = conexionDB();
        $sql2 = "UPDATE `liga` SET `nombre` = '" . $datos["nombre"] . "', `fecha_inicio` = '" . $datos["fechaInicio"] . "', `fecha_fin` = '" . $datos["fechaFin"] . "', `lugar` = '" . $datos["lugar"] . "', `premio_1` = '" . $datos["primerPremio"] . "', `premio_2` = '" . $datos["segundoPremio"] . "', `premio_3` = '" . $datos["premioSemifinales"] . "' WHERE id_liga = " . $_POST['custId'];
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
