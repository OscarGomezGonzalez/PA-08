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
                ?>

                <div class="justify-content-lg-center align-items-lg-center" style="min-width: 350px;width: 40%;margin-right: 2%;margin-bottom: 2%;">
                    <div class="card" style="width: 100%;min-width: 100%;height: 100%;min-height: 100%;background-color: #000000;color: rgb(248,249,251);opacity: 0.62;padding:5px;">
                        <div class="card-body" style="width: 100%;min-width: 100%;height: 100%;min-height: 100%;">
                            <div class="row">
                                <div class="col" style="width: 30%;">
                                    <p class="float-left d-md-flex justify-content-xl-center" style="width: 100%;min-width: 100%;"><?php echo$row['equipo1']; ?><br></p>
                                </div>
                                <div class="col" style="width: 20%;min-width: 50px;"><img src="assets/img/versus.png" style="width: 100%;background-color: rgba(255,255,255,0.5);"></div>
                                <div class="col" style="width: 30%;">
                                    <p class="text-left float-right d-md-flex justify-content-xl-center"><?php echo$row['equipo2']; ?><br></p>
                                </div>
                            </div>
                            <form action="#panelAdmin.php" method="POST" style="width: 100%;min-width: 100%;max-width: 100%;height: 30px;min-height: 30px;">
                                <input type="hidden" id="custId" name="custId" value="<?php echo$row['nombre']; ?>">
                                <button name="btnModificarLiga" class="btn btn-primary" type="submit" style="width: 50%;min-width: 50%;height: 30px;min-height: 30px;background-color: #000000;">Modificar</button>
                            </form></div>
                    </div>

                </div><?php
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
