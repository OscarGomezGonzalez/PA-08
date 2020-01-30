<?php

include_once '../../funciones.php';
//include_once 'funciones.php';

function modif_equipo($idEquipo) {
    if (!isset($_POST['btnModificarLugar'])) {
        $conn = conexionDB();
        $sql = "SELECT `nombre`, `pais_origen`, `ranking_global`, `ruta_foto` FROM `equipo` WHERE nombre='".$idEquipo."'";
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
            <input type="text" name="nombre" value="' . $row['nombre'] . '">' . $row['nombre'] . '<br>
            <input type="text" name="pais_origen" value="' . $row['pais_origen'] . '">' . $row['pais_origen'] . '<br>
            <input type="text" name="ranking_global" value="' . $row['ranking_global'] . '">' . $row['ranking_global'] . '<br>
            <input type="text" name="ruta_foto" value="' . $row['ruta_foto'] . '">' . $row['ruta_foto'] . '<br>
            <input type="hidden" id="custId" name="custId" value="' . $row['nombre'] . '">
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
            "ranking_global" => FILTER_SANITIZE_STRING,
            "ruta_foto" => FILTER_SANITIZE_STRING
        );
        $datos = filter_input_array(INPUT_POST, $saneamiento);

        $conn = conexionDB();
        $sql2 = "UPDATE `equipo` SET `nombre` = '" . $datos['nombre'] . "', `pais_origen` = '" . $datos['pais_origen'] . "', "
                . "`ranking_global` = '" . $datos['ranking_global'] . "', `ruta_foto` = '" . $datos['ruta_foto'] . "' "
                . "WHERE `equipo`.`nombre` = '".$_POST['custId']."'";
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
