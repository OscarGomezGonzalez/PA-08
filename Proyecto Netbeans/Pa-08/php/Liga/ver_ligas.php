<?php

//include_once '../../funciones.php';
include_once 'funciones.php';

function ver_ligas() {

    $conn = conexionDB();
    $sql = "SELECT `id_liga`, `nombre`, `fecha_inicio`, `fecha_fin`, `lugar` FROM `liga`";

    $query = mysqli_query($conn, $sql);
    if (!$query) {
        $error[] = "Error en sql";
        mysqli_close($conn);
    } else {
        if (mysqli_num_rows($query) >= 1) {
            while ($row = mysqli_fetch_array($query)) {
                $ligas[] = array(
                    'id_liga' => $row['id_liga'],
                    'nombre' => $row['nombre'],
                    'fecha_inicio' => $row['fecha_inicio'],
                    'fecha_fin' => $row['fecha_fin'],
                    'lugar' => $row['lugar']
                );
                //Antigua vision, sirve para trazar mejor
                /*echo '<p>' . $row['id_liga'] . ' ' . $row['nombre'] . ' ' . $row['fecha_inicio'] . ' ' . $row['fecha_fin'] . ' ' . $row['lugar'] . '</p>';
                echo '
        <form action="#" method="post">
            <input type="hidden" id="custId" name="custId" value="' . $row['id_liga'] . '">
            <input type="submit" value="Eliminar" name="btnEliminar" />
            <input type="submit" value="Modificar" name="btnModificar" />
        </form>';*/
                //Fin antigua vision
                
                echo '    
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
                </div>';
                
                
            }
        } else {
            $error[] = "No hay nada";
        }
        mysqli_close($conn);
    }

    //print_r($error);
}

function ver_unaLiga($idliga) {
    $conn = conexionDB();
    $sql = "SELECT `id_liga`, `nombre`, `fecha_inicio`, `fecha_fin`, `lugar`, `premio_1`, `premio_2`, `premio_3` FROM `liga` WHERE `id_liga` ='" . $idliga . "'";
    $liga[] = array();
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        $error[] = "Error en sql";
        mysqli_close($conn);
    } else {
        if (mysqli_num_rows($query) >= 1) {
            while ($row = mysqli_fetch_array($query)) {
                $liga[] = array(
                    'id_liga' => $row['id_liga'],
                    'nombre' => $row['nombre'],
                    'fecha_inicio' => $row['fecha_inicio'],
                    'fecha_fin' => $row['fecha_fin'],
                    'lugar' => $row['lugar'],
                    'premio_1' => $row['premio_1'],
                    'premio_2' => $row['premio_2'],
                    'premio_3' => $row['premio_3']
                );
                
                
                echo '
        <div class="text-left">
            <div class="container-fluid" style="height: 80%;width: 100%;margin-top: 2%;margin-right: 2%;margin-left: 2%;padding-top: 0%;opacity: 1;">
                <div class="row">
                    <div class="col-8 col-md-6" style="margin: 0px;color: #958484;background-image: url(&quot;assets/img/225-2253433_cs-go-1.jpg&quot;);background-size: 100%;width: 50%;min-width: 300px;"><img src="assets/img/953433_1.jpg" width="15%">
                        <h1>'.$row['nombre'].'</h1>
                        <div class="d-inline-block d-sm-flex align-items-sm-center">
                            <h3 style="width: 50%;">'.$row['fecha_inicio'].'</h3>
                            <h3 style="width: 50%;">'.$row['fecha_fin'].'</h3>
                        </div>
                        <h3 style="width: 50%;">'.$row['lugar'].'</h3>
                    </div>
                    <div class="col-4 col-md-6" style="background-image: url(&quot;assets/img/csgo_torneo.jpg&quot;);background-size: 100%;width: 50%;min-width: 300px;">
                        <div class="card" style="background-image: url(&quot;assets/img/csgo_torneo.jpg&quot;);background-size: 100%;color: rgb(206,211,182);">
                            <div class="card-body">
                                <h4 class="card-title">Premios</h4>
                                <ul>
                                    <li>'.$row['premio_1'].'</li>
                                    <li>'.$row['premio_2'].'</li>
                                    <li>'.$row['premio_3'].'<br></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>';
                
            }
        } else {
            $error[] = "No hay nada o hay duplicados"; //, seguramente no hay nada";
        }
        mysqli_close($conn);
    }
    return $liga;
    //print_r($error);
}
