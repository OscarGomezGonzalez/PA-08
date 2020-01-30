<?php
include_once '../../funciones.php';

//include_once 'funciones.php';

function ver_jugadores() {

    $conn = conexionDB();
    $sql = "SELECT `id_jugador`, `nombre`, `pais_origen`, `ranking_jugador`, `nombre_equipo`, `ruta_imagen` FROM `jugador`";

    $query = mysqli_query($conn, $sql);
    if (!$query) {
        $error[] = "Error en sql";
        mysqli_close($conn);
    } else {
        if (mysqli_num_rows($query) >= 1) {
            while ($row = mysqli_fetch_array($query)) {
                $ligas[] = array(
                    'id_jugador' => $row['id_jugador'],
                    'nombre' => $row['nombre'],
                    'pais_origen' => $row['pais_origen'],
                    'ranking_jugador' => $row['ranking_jugador'],
                    'nombre_equipo' => $row['nombre_equipo'],
                    'ruta_imagen' => $row['ruta_imagen']
                );
                ?>
                <div class="col-4 col-md-4 col-xl-4 offset-xl-0 d-lg-flex justify-content-lg-center align-items-lg-center" style="min-width: 200px;width: 25%;">
                    <div class="card" style="background-color: #000000;color: rgb(248,249,251);opacity: 0.62;width: 100%;height: 100%;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h4><?php echo$row['nombre'] ?></h4>
                                    <p class="float-left"><?php echo$row['pais_origen'] ?></p>
                                    <p class="text-left float-right">Ranking: <?php echo$row['ranking_jugador']; ?></p>
                                </div>
                            </div>
                            <form style="width: 100%;min-width: 100%;max-width: 100%;height: 30px;min-height: 30px;">
                                <input type="hidden" name="custId" value="<?php echo$row['id_jugador']; ?>">

                                <button class="btn btn-primary" name="btnModificarJugador" type="submit" style="width: 50%;min-width: 50%;height: 30px;min-height: 30px;background-color: #000000;">Modificar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            $error[] = "No hay nada";
        }
        mysqli_close($conn);
    }

    //print_r($error);
}
