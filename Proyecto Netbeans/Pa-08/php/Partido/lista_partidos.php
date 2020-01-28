<!DOCTYPE html>
<html>

    <?php include_once '../../head.php'; ?>

    <body class="bg-secondary">

        <?php
        echo 'loko';
        //require_once("../../header.php");
        include_once 'partido.php';
        echo 'loko';
        //$partidos = getPartidosPaginated(0);
        //print_r($partidos);
        echo 'loko';
        ?>

        <div class="text-left principio">
            <div class="container-fluid" style="height: 80%;width: 100%;margin-top: 2%;margin-right: 2%;margin-left: 2%;padding-top: 0%;opacity: 1;">
                <div class="row justify-content-center" style="width: 100%;">
                    <div class="col-4 col-md-4 col-xl-4 offset-xl-0" style="min-width: 350px;">
                        <form class="d-md-flex justify-content-md-center align-items-md-center"><button class="btn btn-primary d-md-flex" type="button" style="background-color: rgba(0,123,255,0);color: rgb(0,0,0);font-size: 20px;width: 50%;" value="5">Anterior Pagina</button><button class="btn btn-primary" type="button" style="background-color: rgba(0,123,255,0);color: rgb(0,0,0);font-size: 20px;width: 50%;"
                                                                                                                                                                                                        value="5">Siguiente Pagina</button></form>
                    </div>
                </div>
                <div class="row justify-content-center" style="width: 100%;">
                    <div class="col-4 col-md-4 col-xl-4 offset-xl-0" style="min-width: 350px;">
                        <div class="card" style="background-color: #98A0A9;  width: 100%;min-width: 100%;height: 100%;min-height: 100%;">
                            <div class="card-body" style="width: 100%;min-width: 100%;height: 100%;min-height: 100%;">
                                <div class="row">
                                    <div class="col" style="width: 30%;">
                                        <p class="float-left d-md-flex justify-content-xl-center" style="width: 100%;min-width: 100%;">Equipo1<br></p>
                                        <p class="float-left d-xl-flex justify-content-xl-center" style="min-width: 100%;width: 100%;">Ganador<br></p>
                                    </div>
                                    <div class="col" style="width: 20%;min-width: 50px;"><img src="assets/img/versus.png" style="width: 100%;"></div>
                                    <div class="col" style="width: 30%;">
                                        <p class="text-left float-right d-md-flex justify-content-xl-center">Equipo2<br></p>
                                        <p class="text-left float-right d-xl-flex justify-content-xl-center">Ganador<br></p>
                                    </div>
                                </div>
                                <form style="width: 100%;min-width: 100%;max-width: 100%;height: 30px;min-height: 30px;">
                                    <input type="hidden" name="nombreJugador" value="<?php echo$jugadores[$i]['nombre']; ?>">
                                    <button class="btn btn-secondary" type="button" style="width: 100%;min-width: 100%;max-width: 100%;min-height: 30px;">Ver partido
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!--
                    <div class="col-4 col-md-4 col-xl-4 offset-xl-0" style="min-width: 350px;">
                        <div class="card" style="background-color: #98A0A9;  width: 100%;min-width: 100%;height: 100%;min-height: 100%;">
                            <div class="card-body" style="width: 100%;min-width: 100%;height: 100%;min-height: 100%;">
                                <div class="row">
                                    <div class="col" style="width: 30%;">
                                        <p class="float-left d-md-flex justify-content-xl-center" style="width: 100%;min-width: 100%;">Equipo1<br></p>
                                        <p class="float-left d-xl-flex justify-content-xl-center" style="min-width: 100%;width: 100%;">Ganador<br></p>
                                    </div>
                                    <div class="col" style="width: 20%;min-width: 50px;"><img src="assets/img/versus.png" style="width: 100%;"></div>
                                    <div class="col" style="width: 30%;">
                                        <p class="text-left float-right d-md-flex justify-content-xl-center">Equipo2<br></p>
                                        <p class="text-left float-right d-xl-flex justify-content-xl-center">Ganador<br></p>
                                    </div>
                                </div>
                                <form style="width: 100%;min-width: 100%;max-width: 100%;height: 30px;min-height: 30px;"><button class="btn btn-secondary" type="button" style="width: 100%;min-width: 100%;max-width: 100%;min-height: 30px;">Ver partido</button></form>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-xl-4 offset-xl-0" style="min-width: 350px;">
                        <div class="card" style="background-color: #98A0A9;  width: 100%;min-width: 100%;height: 100%;min-height: 100%;">
                            <div class="card-body" style="width: 100%;min-width: 100%;height: 100%;min-height: 100%;">
                                <div class="row">
                                    <div class="col" style="width: 30%;">
                                        <p class="float-left d-md-flex justify-content-xl-center" style="width: 100%;min-width: 100%;">Equipo1<br></p>
                                        <p class="float-left d-xl-flex justify-content-xl-center" style="min-width: 100%;width: 100%;">Ganador<br></p>
                                    </div>
                                    <div class="col" style="width: 20%;min-width: 50px;"><img src="assets/img/versus.png" style="width: 100%;"></div>
                                    <div class="col" style="width: 30%;">
                                        <p class="text-left float-right d-md-flex justify-content-xl-center">Equipo2<br></p>
                                        <p class="text-left float-right d-xl-flex justify-content-xl-center">Ganador<br></p>
                                    </div>
                                </div>
                                <form style="width: 100%;min-width: 100%;max-width: 100%;height: 30px;min-height: 30px;"><button class="btn btn-secondary" type="button" style="width: 100%;min-width: 100%;max-width: 100%;min-height: 30px;">Ver partido</button></form>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-xl-4 offset-xl-0" style="min-width: 350px;">
                        <div class="card" style="background-color: #98A0A9;  width: 100%;min-width: 100%;height: 100%;min-height: 100%;">
                            <div class="card-body" style="width: 100%;min-width: 100%;height: 100%;min-height: 100%;">
                                <div class="row">
                                    <div class="col" style="width: 30%;">
                                        <p class="float-left d-md-flex justify-content-xl-center" style="width: 100%;min-width: 100%;">Equipo1<br></p>
                                        <p class="float-left d-xl-flex justify-content-xl-center" style="min-width: 100%;width: 100%;">Ganador<br></p>
                                    </div>
                                    <div class="col" style="width: 20%;min-width: 50px;"><img src="assets/img/versus.png" style="width: 100%;"></div>
                                    <div class="col" style="width: 30%;">
                                        <p class="text-left float-right d-md-flex justify-content-xl-center">Equipo2<br></p>
                                        <p class="text-left float-right d-xl-flex justify-content-xl-center">Ganador<br></p>
                                    </div>
                                </div>
                                <form style="width: 100%;min-width: 100%;max-width: 100%;height: 30px;min-height: 30px;"><button class="btn btn-secondary" type="button" style="width: 100%;min-width: 100%;max-width: 100%;min-height: 30px;">Ver partido</button></form>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-xl-4 offset-xl-0" style="min-width: 350px;">
                        <div class="card" style="background-color: #98A0A9;  width: 100%;min-width: 100%;height: 100%;min-height: 100%;">
                            <div class="card-body" style="width: 100%;min-width: 100%;height: 100%;min-height: 100%;">
                                <div class="row">
                                    <div class="col" style="width: 30%;">
                                        <p class="float-left d-md-flex justify-content-xl-center" style="width: 100%;min-width: 100%;">Equipo1<br></p>
                                        <p class="float-left d-xl-flex justify-content-xl-center" style="min-width: 100%;width: 100%;">Ganador<br></p>
                                    </div>
                                    <div class="col" style="width: 20%;min-width: 50px;"><img src="assets/img/versus.png" style="width: 100%;"></div>
                                    <div class="col" style="width: 30%;">
                                        <p class="text-left float-right d-md-flex justify-content-xl-center">Equipo2<br></p>
                                        <p class="text-left float-right d-xl-flex justify-content-xl-center">Ganador<br></p>
                                    </div>
                                </div>
                                <form style="width: 100%;min-width: 100%;max-width: 100%;height: 30px;min-height: 30px;"><button class="btn btn-secondary" type="button" style="width: 100%;min-width: 100%;max-width: 100%;min-height: 30px;">Ver partido</button></form>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-xl-4 offset-xl-0" style="min-width: 350px;">
                        <div class="card" style="background-color: #98A0A9;  width: 100%;min-width: 100%;height: 100%;min-height: 100%;">
                            <div class="card-body" style="width: 100%;min-width: 100%;height: 100%;min-height: 100%;">
                                <div class="row">
                                    <div class="col" style="width: 30%;">
                                        <p class="float-left d-md-flex justify-content-xl-center" style="width: 100%;min-width: 100%;">Equipo1<br></p>
                                        <p class="float-left d-xl-flex justify-content-xl-center" style="min-width: 100%;width: 100%;">Ganador<br></p>
                                    </div>
                                    <div class="col" style="width: 20%;min-width: 50px;"><img src="assets/img/versus.png" style="width: 100%;"></div>
                                    <div class="col" style="width: 30%;">
                                        <p class="text-left float-right d-md-flex justify-content-xl-center">Equipo2<br></p>
                                        <p class="text-left float-right d-xl-flex justify-content-xl-center">Ganador<br></p>
                                    </div>
                                </div>
                                <form style="width: 100%;min-width: 100%;max-width: 100%;height: 30px;min-height: 30px;"><button class="btn btn-secondary" type="button" style="width: 100%;min-width: 100%;max-width: 100%;min-height: 30px;">Ver partido</button></form>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <?php require_once("../../footer.php"); ?>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

</html>
