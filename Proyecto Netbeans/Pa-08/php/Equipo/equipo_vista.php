<!DOCTYPE html>
<html>

    <!--vista de un equipo-->

    <?php include_once '../../head.php'; ?>

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
                    <div class="col-8 col-md-6 equipo" style="margin: 0px;color: #958484;background-image: url(&quot;assets/img/225-2253433_cs-go-1.jpg&quot;);background-size: 100%;"><img>
                        <img src="assets/<?php echo$equipo['rutaImg']; ?>" width="15%"/>
                        <h1><?php echo $equipo['nombre']; ?></h1>
                        <h3>Ranking global: <?php echo$equipo['ranking']; ?></h3>
                        <h4><?php echo$equipo['pais']; ?></h4>
                    </div>
                    <!--Informacion con ultimos eventos donde el equipo ha participado-->
                    <div class="col-4 col-md-6 equipo" style="background-image: url(&quot;assets/img/csgo_torneo.jpg&quot;);background-size: 100%;">
                        <div class="card" style="background-image: url(&quot;assets/img/csgo_torneo.jpg&quot;);background-size: 100%;color: rgb(206,211,182);">
                            <div class="card-body">

                                <?php
                                $partidos = getPartidosByEquipo($equipo['nombre']);

                                if (sizeof($partidos) > 0) {
                                    ?><h4 class="card-title">Proximos Partidos</h4>  <ul><?php
                                    for ($i = 0; $i < sizeof($partidos); $i++) {
                                        $fecha = setDateFormat($partidos[$i]['fecha']);
                                        ?>
                                            <li><?php
                                                echo $partidos[$i]['equipo1'];
                                                echo ' vs ';
                                                echo$partidos[$i]['equipo2'];
                                                echo " " . $fecha;
                                                ?></li>
                                        <?php }
                                        ?></ul><?php
                                    } else {
                                        ?><h4 class="card-title">No hay proximos partidos</h4><?php
                                    }
                                    ?>

                                <?php ?>


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
                                        <form action="php/Jugador/jugador_vista.php" method="post">
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
                                        <form action="php/Jugador/jugador_vista.php" method="post">
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
    </body>

</html>