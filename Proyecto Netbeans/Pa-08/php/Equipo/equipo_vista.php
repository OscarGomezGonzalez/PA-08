<!DOCTYPE html>
<html>

    <!--vista de un equipo-->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>plantilla-vista-equipos</title>
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="../../assets/js/freelancer.js"></script>

    </head>

    <body class="bg-secondary">

        <!-- Navigation -->
        <?php
        //importa header
        include_once("../../header.php");
        //importa backend equipo
        include_once 'equipo.php';
        //necesitamos importar las funciones de jugador para obtener los jugadores del equipo
        include_once '../Jugador/jugador.php';



        //vamos a obtener el equipo seleccionado y todos los jugadores de dicho equipo
        $selectedEquipo = $_POST['nombreEquipo'];
        //echo $selectedEquipo[0];
        $equipo = getEquipoByName($selectedEquipo);
        //print_r($equipo);
        //echo $equipo['nombre'];
        ?>


        <div class="text-left principio">
            <div class="container-fluid" style="height: 80%;width: 100%;margin-top: 2%;margin-right: 2%;margin-left: 2%;padding-top: 0%;opacity: 1;">
                <div class="row">
                    <!--Informacion del equipo-->
                    <div class="col-8 col-md-6 equipo" style="margin: 0px;color: #958484;background-image: url(&quot;../../assets/img/225-2253433_cs-go-1.jpg&quot;);background-size: 100%;"><img>
                        <img src="../../assets/<?php echo$equipo['rutaImg']; ?>" width="15%"/>
                        <h1><?php echo $equipo['nombre']; ?></h1>
                        <h3>Ranking global: <?php echo$equipo['ranking']; ?></h3>
                        <h4><?php echo$equipo['pais']; ?></h4>
                    </div>
                    <!--Informacion con ultimos eventos donde el equipo ha participado-->
                    <div class="col-4 col-md-6 equipo" style="background-image: url(&quot;../../assets/img/csgo_torneo.jpg&quot;);background-size: 100%;">
                        <div class="card" style="background-image: url(&quot;../../assets/img/csgo_torneo.jpg&quot;);background-size: 100%;color: rgb(206,211,182);">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <ul>
                                    <li>Item 1</li>
                                    <li>Item 2</li>
                                    <li>Item 3</li>
                                    <li>Item 4</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- cartas jugadores -->
                <?php
                //obtenemos los jugadores de dicho equipo
                $jugadores = getAllPlayersFromTeam($equipo['nombre']);

                //debemos hacer un bucle para recorrer los jugadores
                for ($i = 0; $i < sizeof($jugadores); $i++) {

                    if ($i < 3) {

                        if ($i == 0) {
                            ?>
                            <div class="row justify-content-center" style="width: 100%;">
                                <?php
                            }
                            ?>

                            <div class="col-4 col-md-4 col-xl-4 offset-xl-0 equipo">
                                <div class="card bg-dark" style="color: rgb(206,211,182);">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo$jugadores[$i]['nombre'] ?></h4>
                                        <p class="float-left card-text"><?php echo$jugadores[$i]['pais'] ?></p>
                                        <p class="text-left float-right card-text">Ranking: <?php echo$jugadores[$i]['ranking']; ?></p>
                                        <form action="../Jugador/jugador_vista.php" method="post">
                                            <input type="hidden" name="nombreJugador" value="<?php echo$jugadores[$i]['nombre']; ?>">
                                            <input class="btn btn-secondary boton-equipo" value="Ver Jugador" type="submit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if ($i == 2) {
                                ?>
                            </div>
                            <?php
                        }
                    } else {

                        if ($i == 3) {
                            ?>
                            <div class="row justify-content-center">
                                <?php
                            }
                            ?>

                            <div class="col-md-4 col-xl-4 offset-xl-0 equipo">
                                <div class="card bg-dark" style="color: rgb(206,211,182);">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo$jugadores[$i]['nombre'] ?></h4>
                                        <p class="float-left card-text"><?php echo$jugadores[$i]['pais'] ?></p>
                                        <p class="text-left float-right card-text">Ranking: <?php echo$jugadores[$i]['ranking'] ?></p>
                                        <form action="../Jugador/jugador_vista.php" method="post">
                                            <input type="hidden" name="nombreJugador" value="<?php echo$jugadores[$i]['nombre']; ?>">
                                            <input class="btn btn-secondary boton-equipo" value="Ver Jugador" type="submit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if ($i == 4) {
                                ?>
                            </div>
                            <?php
                        }
                    }
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