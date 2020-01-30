<?php

//include_once '../../funciones.php';
include_once 'funciones.php';

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
<<<<<<< HEAD
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
=======
                //Antigua vision, sirve para trazar mejor
                echo '<p>' . $row['id_jugador'] . ' ' . $row['nombre'] . ' ' . $row['pais_origen'] . ' ' . $row['ranking_jugador'] .' ' . $row['nombre_equipo'] .  ' ' . $row['ruta_imagen'] . '</p>';
                echo '
        <form action="#" method="post">
            <input type="hidden" id="custId" name="custId" value="' . $row['id_jugador'] . '">
            <input type="submit" value="Eliminar" name="btnEliminar" />
            <input type="submit" value="Modificar" name="btnModificar" />
        </form>';
                //Fin antigua vision
                
                /*echo '    
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
>>>>>>> master
                            </form>
                        </div>
                    </div>
                </div>';*/
                
                
            }
        } else {
            $error[] = "No hay nada";
        }
        mysqli_close($conn);
    }

    //print_r($error);
}

