<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>lista-equipos</title>
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/Responsive-Card-Item-List.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
    </head>

    <body style="background-image: url(&quot;../../assets/img/csgo-parche-diciembre.png&quot;);background-size: 120%;">
        <!-- Navigation -->
        <?php
        //importa header
        include_once("../../header.php");
        include_once("./equipo.php");
        ?>

        <div class="equipos">
            <div class="container" style="padding: 2%;margin: 2%;">
                <div class="row" style="margin-bottom: 2%;">
                    <div class="col-md-12">
                        <h1 style="color: rgb(150,155,160);">Equipos registrados</h1>
                    </div>
                </div>

                <?php
                //obtenemos todos los equipos
                $equipos = getAllEquipos();
                $numEquipos = sizeof($equipos);
                //print_r($equipos);
                //echo $equipos[0]['nombre'];
                $aux = 0;
                ?>
                <div class="row  justify-content-center" style="margin-bottom: 2%;">

                    <?php
                    for ($i = 0; $i < $numEquipos; $i++) {

                        //si el numero de equipos es par sacamos las tarjetas de dos en dos
                        if ($aux == 2) {
                            ?>
                        </div>
                        <div class="row  justify-content-center" style="margin-bottom: 2%;">
                            <div class="col">
                                <div class="card text-left" style="opacity: 0.62;filter: grayscale(0%);background-color: #000000;color: rgb(248,249,251);">
                                    <div class="card-body" style="opacity: 1;"><img class="logoEquipo" src="../../assets/<?php echo$equipos[$i]['rutaImg']; ?>">
                                        <h3 class="card-title"><?php echo$equipos[$i]['nombre']; ?></h3>
                                        <h5 class="card-title">Ranking Global: <?php echo$equipos[$i]['ranking']; ?></h5>
                                        <h6 class="text-muted card-subtitle mb-2"><?php echo$equipos[$i]['pais']; ?></h6>
                                    </div>
                                    <form action="equipo_vista.php" method="post">
                                        <input type="hidden" name="nombreEquipo" value="<?php echo$equipos[$i]['nombre']; ?>">
                                        <input class="btn btn-secondary boton-equipo" value="Ver Equipo" type="submit">
                                    </form>
                                </div>
                            </div>
                            <?php
                            //si el numero de equipos es impar sacamos la
                        } else {
                            ?>
                            <div class="col">
                                <div class="card text-left" style="opacity: 0.62;filter: grayscale(0%);background-color: #000000;color: rgb(248,249,251);">
                                    <div class="card-body" style="opacity: 1;"><img class="logoEquipo" src="../../assets/<?php echo$equipos[$i]['rutaImg']; ?>">
                                        <h3 class="card-title"><?php echo$equipos[$i]['nombre']; ?></h3>
                                        <h5 class="card-title">Ranking Global: <?php echo$equipos[$i]['ranking']; ?></h5>
                                        <h6 class="text-muted card-subtitle mb-2"><?php echo$equipos[$i]['pais']; ?></h6>
                                    </div>
                                    <form action="equipo_vista.php" method="post">
                                        <input type="hidden" name="nombreEquipo" value="<?php echo$equipos[$i]['nombre']; ?>">
                                        <input class="btn btn-secondary boton-equipo" value="Ver Equipo" type="submit">
                                    </form>
                                </div>
                            </div>
                            <?php
                        }

                        if ($i == $numEquipos - 1) {
                            ?>
                        </div>
                        <?php
                    }

                    $aux++;
                }
                ?>

            </div>
        </div>
        <!-- Footer -->
        <?php include("../../footer.php"); ?>
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

</html>