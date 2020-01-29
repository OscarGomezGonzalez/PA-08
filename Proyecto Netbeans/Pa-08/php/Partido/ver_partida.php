<?php

include_once '../../funciones.php';
//include_once 'funciones.php';

function ver_partidas() {

    $conn = conexionDB();
    $sql = "SELECT `id_partido`, `id_liga`, `fecha`, `equipo1`, `equipo2`, `mapa1`, `mapa2`, `mapa3`, `ganador1`,"
            . " `ganador2`, `ganador3` "
            . "FROM `partido`";

    $query = mysqli_query($conn, $sql);
    if (!$query) {
        $error[] = "Error en sql";
        mysqli_close($conn);
    } else {
        if (mysqli_num_rows($query) >= 1) {
            while ($row = mysqli_fetch_array($query)) {
                $ligas[] = array(
                    'id_liga' => $row['id_partido'],
                    'nombre' => $row['id_liga'],
                    'fecha_inicio' => $row['fecha'],
                    'fecha_fin' => $row['equipo1'],
                    'lugar' => $row['equipo2'],
                    'lugar' => $row['mapa1'],
                    'lugar' => $row['mapa2'],
                    'lugar' => $row['mapa3'],
                    'lugar' => $row['ganador1'],
                    'lugar' => $row['ganador2'],
                    'lugar' => $row['ganador3']
                );
                //Antigua vision, sirve para trazar mejor
                echo '<p>' . $row['id_partido'] . ' ' . $row['id_liga']
                . ' ' . $row['fecha'] . ' ' . $row['equipo1']
                . ' ' . $row['equipo2'] . ' ' . $row['mapa1']
                . ' ' . $row['mapa2'] . ' ' . $row['mapa3']
                . ' ' . $row['ganador1'] . ' ' . $row['ganador2']
                . ' ' . $row['ganador3'] . '</p>';
                echo '
        <form action="#" method="post">
            <input type="hidden" id="custId" name="custId" value="' . $row['id_partido'] . '">
            <input type="submit" value="Eliminar" name="btnEliminar" />
            <input type="submit" value="Modificar" name="btnModificar" />
        </form>';
                //Fin antigua vision

                /* echo '    
                  <div class="col" style="padding-left: 0px;padding-right: 0px;width: 50%;min-width: 200px;">
                  <div class="card text-left" style="opacity: 0.62;filter: grayscale(0%);background-color: #000000;color: rgb(248,249,251);height: 100%;width: 100%;">
                  <div class="card-body" style="opacity: 1;padding: 0px;width: 100%;height: 100%;"><img>
                  <h3 class="card-title">'.$row['nombre'].'</h3>
                  <h5 class="card-title">'.$row['fecha_inicio'].'</h5>
                  <h5 class="card-title">'.$row['fecha_fin'].'</h5>
                  <h6 class="text-muted card-subtitle mb-2">'.$row['lugar'].'</h6>
                  <form action="index.php" method="post">
                  <input type="hidden" id="custId" name="custId" value="'.$row['id_liga'].'">
                  <input class="btn btn-secondary boton-equipo" value="Ver Liga" type="submit">
                  </form>
                  </div>
                  </div>
                  </div>'; */
            }
        } else {
            $error[] = "No hay nada";
        }
        mysqli_close($conn);
    }

    //print_r($error);
}
