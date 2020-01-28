<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>vista-jugador</title>
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/Navigation-with-Search.css">
        <link rel="stylesheet" href="../../assets/css/style.css">

    </head>

    <body class="bg-secondary">

        <!-- Navigation -->
        <?php
        //define('__ROOT__', dirname(dirname(__FILE__)));
        //require_once(__ROOT__ . 'index.php');
        require_once("../../header.php");
        require_once 'jugador.php';
        //obtenemos jugador seleccionado
        $nombreJugador = $_POST['nombreJugador'];
        //obtenemos todos los datos del jugador
        $jugador = getPlayerByName($nombreJugador);
        //print_r($jugador);

        if ($jugador['rutaImg'] == "") {
            $rutaImagen = "img/jugadores/default.png";
        } else {
            $rutaImagen = $jugador['rutaImg'];
        }
        ?>

        <div class="text-left principio-jugador">
            <div class="container" style="height: 90%;">
                <div class="row" style="margin-top: 20px;">
                    <div class="col-12 col-md-12">
                        <h2 class="text-center">Información de Jugador</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 col-md-6" style="width: 50%;min-width: 450px;">
                        <div class="card" style="background-color: #98A0A9">
                            <div class="card-body"><img src="../../assets/<?php echo$rutaImagen ?>" width="50%">
                                <h3><?php echo$jugador['nombre']; ?></h3>
                                <h5>Ranking Global: <?php echo$jugador['ranking']; ?></h5>
                                <h6><?php echo$jugador['pais']; ?></h6>
                            </div>
                        </div>
                    </div>
                    <?php
                    //obtenemos los jugadores compañeros del ranking
                    $otrosJugadores = getPlayersByPlayerRanking($jugador['ranking']);
                    ?>
                    <div class="col-4 col-md-6" style="width: 50%;min-width: 450px;">
                        <div class="card" style="opacity: 0.51;min-height: auto;min-width: 400px;">
                            <div class="card-body">
                                <h5>Clafisicación</h5>
                                <h4 class="card-title"><?php echo$otrosJugadores[0]['nombre']; ?></h4>
                                <h6 class="text-muted card-subtitle mb-2">Ranking Global: <?php echo$otrosJugadores[0]['ranking']; ?></h6>
                                <h6 class="text-muted card-subtitle mb-2"><?php echo$otrosJugadores[0]['equipo']; ?></h6>
                                <form action="jugador_vista.php" method="post">
                                    <input type="hidden" name="nombreJugador" value="<?php echo$otrosJugadores[0]['nombre']; ?>">
                                    <input class="btn btn-secondary boton-equipo" value="Ver Jugador" type="submit">
                                </form>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo$otrosJugadores[1]['nombre']; ?></h4>
                                <h6 class="text-muted card-subtitle mb-2">Ranking Global: <?php echo$otrosJugadores[1]['ranking']; ?></h6>
                                <h6 class="text-muted card-subtitle mb-2"><?php echo$otrosJugadores[1]['equipo']; ?></h6>
                                <form action="jugador_vista.php" method="post">
                                    <input type="hidden" name="nombreJugador" value="<?php echo$otrosJugadores[1]['nombre']; ?>">
                                    <input class="btn btn-secondary boton-equipo" value="Ver Jugador" type="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>


    <!-- Footer -->
    <?php include("../../footer.php"); ?>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>




