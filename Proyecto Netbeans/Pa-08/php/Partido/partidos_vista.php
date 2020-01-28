<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>partidos</title>
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
    </head>

    <body class="bg-secondary" style="height: 100%;background-size: 120%;background-repeat: no-repeat;background-image: url(&quot;../../assets/img/fondoversus.jpg&quot;);">
        <!-- Navigation -->
        <?php
        require_once("../../header.php");
        include_once './partido.php';
        $partido = getPartidoById(1);
        ?>
        <div class="principio" style="height: 100%;">
            <div class="container" style="height: 100%;min-height: 100%;max-height: 100%;">
                <div class="row">
                    <div class="col-auto col-md-12" style="width: 40%;min-width: 300px">
                        <div class="card card-partidos text-light bg-dark">
                            <div class="card-body text-light text-center">
                                <h1><?php echo$partido['nombre_liga']; ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto text-left text-secondary d-xl-flex" style="width: 100%;margin-top: 2%;min-width: 200px;">
                        <div class="card card-partidos text-light bg-dark" style="width: 40%;margin-right: 10%;min-width: 300px;height: 150px;min-height: auto;">
                            <div class="card-body">
                                <h2 class="d-xl-flex">Ganador del partido: <?php echo$partido['ganador']; ?></h2>
                            </div>
                        </div>
                        <div class="card card-partidos text-light bg-dark" style="width: 40%;margin-left: 10%;min-width: 300px;height: 150px;min-height: 180px;">
                            <div class="card-body">
                                <h2>Jugado el <?php echo$partido['fecha']; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $mapas = getRutasMapas($partido);
                ?>
                <div class="row" style="min-height: 20%;max-height: 20%;margin-bottom: 2%;padding: 2%;margin-top: 2%;">
                    <div class="col d-inline-block d-xl-flex justify-content-xl-center" style="width: 100%;">
                        <div class="card card-partidos text-light bg-dark" style="width: 100%;min-height: auto;">
                            <div class="card-body">
                                <h2 class="text-center" style="padding-top: 2%;padding-bottom: 2%;"><?php echo$partido['equipo1']; ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="width: 260px;min-width: 260px;"><img class="img-fluid d-xl-flex justify-content-xl-center" style="margin-right: 2%;margin-top: 1%;width: 25%;height: 90%;margin-left: 35%;" src="../../assets/img/versus.png" height="280px" width="260px"></div>
                    <div class="col">
                        <div class="card card-partidos text-light bg-dark" style="width: 100%;min-height: auto">
                            <div class="card-body">
                                <h2 class="text-center" style="padding-top: 2%;padding-bottom: 2%;"><?php echo$partido['equipo2']; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="height: 50%;max-height: 50%;min-height: 50%;margin-top: 1%;color: #c6d7f1;">
                    <div class="col-md-4" style="background-image: url(&quot;../../assets/<?php echo$mapas[0]['ruta_imagen']; ?>&quot;);background-size: 100%;height: 100%;min-height: 100%;max-height: 100%;background-repeat: no-repeat;opacity: 0.87;">
                        <h2><?php echo$partido['mapa1']; ?></h2>
                        <h3 style="margin-bottom: 30%;">Ganador: <?php echo$partido['ganador1']; ?></h3>
                    </div>
                    <div class="col" style="background-image: url(&quot;../../assets/<?php echo$mapas[0]['ruta_imagen']; ?>&quot;);background-size: 100%;height: 100%;min-height: 100%;max-height: 100%;background-repeat: no-repeat;opacity: 0.87;opacity: 0.85;margin-left: 2%;margin-right: 2%;">
                        <h2><?php echo$partido['mapa2']; ?></h2>
                        <h3 style="margin-bottom: 30%;">Ganador: <?php echo$partido['ganador2']; ?></h3>
                    </div>
                    <div class="col-md-4" style="background-image: url(&quot;../../assets/<?php echo$mapas[0]['ruta_imagen']; ?>&quot;);background-size: 100%;height: 100%;min-height: 100%;max-height: 100%;background-repeat: no-repeat;opacity: 0.87;">
                        <h2><?php echo$partido['mapa3']; ?></h2>

                        <?php
                        if (isTwoMaps($partido)) {
                            ?>
                            
                            <h3 style="margin-bottom: 30%;">Mapa no jugado</h3>

                            <?php
                        } else {
                            ?>

                            <h3 style="margin-bottom: 30%;">Ganador: <?php echo$partido['ganador3']; ?></h3>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include("../../footer.php"); ?>
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

</html>