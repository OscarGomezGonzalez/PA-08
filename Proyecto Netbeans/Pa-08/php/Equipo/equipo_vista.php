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
        <link rel="stylesheet" href="../../assets/css/style.css">
    </head>

    <body class="bg-secondary">

        <!-- Navigation -->
        <?php
        //importa header
        //include_once("../../header.php");
        //importa backend equipo
        include 'equipo.php';
        //vamos a obtener el equipo seleccionado y todos los jugadores de dicho equipo
        //Cuando la vista de equipos este hecha deberemos cambiar esto
        //El valor pasado por parametro debera depender de un formulario
        //obteniendo el valor desde la vista anterior de equipos
        $equipo = getEquipoByName('Astralis');
        print_r($equipo);
        //echo $equipo['nombre'];
        //obtenemos los jugadores de dicho equipo
        //$jugadores = getAllPlayersFromTeam($equipo['nombre']);
        ?>


        <div class="text-left principio">
            <div class="container-fluid" style="height: 80%;width: 100%;margin-top: 2%;margin-right: 2%;margin-left: 2%;padding-top: 0%;opacity: 1;">
                <div class="row">
                    <!--Informacion del equipo-->
                    <div class="col-8 col-md-6" style="margin: 0px;color: #958484;background-image: url(&quot;../../assets/img/225-2253433_cs-go-1.jpg&quot;);background-size: 100%;"><img>
                        <img src="../../assets/<?php echo$equipo['rutaImg'];?>" width="15%"/>
                        <h1><?php echo $equipo['nombre'];?></h1>
                        <h3>Ranking global: <?php echo$equipo['ranking'];?></h3>
                        <h4><?php echo$equipo['pais'];?></h4>
                    </div>
                    <!--Informacion con ultimos eventos donde el equipo ha participado-->
                    <div class="col-4 col-md-6" style="background-image: url(&quot;../../assets/img/csgo_torneo.jpg&quot;);background-size: 100%;">
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
                
                
                
                <div class="row justify-content-center" style="width: 100%;">
                    <div class="col-4 col-md-4 col-xl-4 offset-xl-0">
                        <div class="card bg-dark" style="color: rgb(206,211,182);">
                            <div class="card-body">
                                <h4 class="card-title">Nombre jugador</h4>
                                <p class="float-left card-text">Pais</p>
                                <p class="text-left float-right card-text">Ranking</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-xl-4 offset-xl-0">
                        <div class="card bg-dark" style="color: rgb(206,211,182);">
                            <div class="card-body">
                                <h4 class="card-title">Nombre jugador</h4>
                                <p class="float-left card-text">Pais</p>
                                <p class="text-left float-right card-text">Ranking</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-xl-4 offset-xl-0">
                        <div class="card bg-dark" style="color: rgb(206,211,182);">
                            <div class="card-body">
                                <h4 class="card-title">Nombre jugador</h4>
                                <p class="float-left card-text">Pais</p>
                                <p class="text-left float-right card-text">Ranking</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 col-xl-4 offset-xl-0">
                        <div class="card bg-dark" style="color: rgb(206,211,182);">
                            <div class="card-body">
                                <h4 class="card-title">Nombre jugador</h4>
                                <p class="float-left card-text">Pais</p>
                                <p class="text-left float-right card-text">Ranking</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4 offset-xl-0">
                        <div class="card bg-dark" style="color: rgb(206,211,182);">
                            <div class="card-body">
                                <h4 class="card-title">Nombre jugador</h4>
                                <p class="float-left card-text">Pais</p>
                                <p class="text-left float-right card-text">Ranking</p>
                            </div>
                        </div>
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