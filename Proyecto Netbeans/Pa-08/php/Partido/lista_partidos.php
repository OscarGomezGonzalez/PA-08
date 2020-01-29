<!DOCTYPE html>
<html>

    <?php include '../../head.php'; ?>

    <body class="bg-secondary">

        <?php
        include("../../header.php");
        include_once 'partido.php';
        //obtenemos los primeros 6 partidos
        $offset = 0;
        $limit = 6;
        if (isset($_GET['next'])) {
            $offset = $_GET['next'] + $limit;
        } elseif (isset($_GET['previous'])) {
            $offset = $_GET['previous'] - $limit;
        }

        $partidos = getPartidosPaginated($offset, $limit);
        $left = partidosLeft($offset, $limit);
        //print_r($partidos);
        ?>

        <div class="text-left principio" style="margin-bottom: 11%;">
            <div class="container-fluid" style="height: 80%;width: 100%;margin-top: 2%;margin-right: 2%;margin-left: 2%;padding-top: 0%;opacity: 1;">
                <div class="row justify-content-center" style="width: 100%;">
                    <div class="col-4 col-md-4 col-xl-4 offset-xl-0" style="min-width: 350px;">
                        <form action="php/Partido/lista_partidos.php" method="GET" class="d-md-flex justify-content-md-center align-items-md-center">

                            <?php if ($offset > 0) {
                                ?><button class="btn d-md-fex previous" type="submit" name="previous" style="background-color: #98A0A9;color: rgb(0,0,0);font-size: 20px;width: 50%; margin: 5px;" value="<?php echo$offset; ?>">Anterior Pagina</button>
                                <script type="text/javascript">

                                    document.getElementById("previous").onload = function () {
                                        document.getElementById("previous").style.visibility = "visible";
                                    };

                                </script>

                                <?php
                            } else {
                                ?>
                                
                                <script type="text/javascript">

                                    document.getElementById("next").onload = function () {
                                        document.getElementById("next").style.visibility = "hidden";
                                    };

                                </script>
                                <?php
                            }
                            ?>
                            <?php if ($left) {
                                ?><button class="btn next" type="submit" name="next" style="background-color: #98A0A9;color: rgb(0,0,0);font-size: 20px;width: 50%;" value="<?php echo$offset; ?>">Siguiente Pagina</button>
                                <script type="text/javascript">

                                    document.getElementById("next").onload = function () {
                                        document.getElementById("next").style.visibility = "visible";
                                    };

                                </script>
                                <?php
                            } else {
                                ?>

                                <script type="text/javascript">

                                    document.getElementById("next").onload = function () {
                                        document.getElementById("next").style.visibility = "hidden";
                                    };

                                </script>
                                <?php
                            }
                            ?>
                        </form>
                    </div>
                </div>
                <div class="row justify-content-center" style="width: 100%;">

                    <?php
                    $numPartidos = sizeof($partidos);

                    for ($i = 0; $i < $numPartidos; $i++) {
                        ?>


                        <div class="col-4 col-md-4 col-xl-4 offset-xl-0" style="min-width: 350px;">
                            <div class="card" style="background-color: #98A0A9;  width: 100%;min-width: 100%;height: 100%;min-height: 100%;">
                                <div class="card-body" style="width: 100%;min-width: 100%;height: 100%;min-height: 100%;">
                                    <div class="row">
                                        <div class="col" style="width: 30%;">
                                            <p class="float-left d-md-flex justify-content-xl-center" style="width: 100%;min-width: 100%;"><?php echo$partidos[$i]['equipo1'] ?><br></p>
                                            <?php
                                            if ($partidos[$i]['equipo1'] == $partidos[$i]['ganador']) {
                                                ?>
                                                <p class = "float-left d-xl-flex justify-content-xl-center" style = "min-width: 100%;width: 100%;">Ganador<br></p>

                                                <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="col" style="width: 20%;min-width: 50px;"><img src="assets/img/versus.png" style="width: 100%;"></div>
                                        <div class="col" style="width: 30%;">
                                            <p class="text-left float-right d-md-flex justify-content-xl-center"><?php echo$partidos[$i]['equipo2'] ?><br></p>
                                            <?php
                                            if ($partidos[$i]['equipo2'] == $partidos[$i]['ganador']) {
                                                ?>
                                                <p class = "float-left d-xl-flex justify-content-xl-center" style = "min-width: 100%;width: 100%;">Ganador<br></p>

                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <form action="php/Partido/partidos_vista.php" method="POST" style="width: 100%;min-width: 100%;max-width: 100%;height: 30px;min-height: 30px;">
                                        <input type="hidden" name="idPartido" value="<?php echo$partidos[$i]['id']; ?>">
                                        <button class="btn btn-secondary" type="submit" style="width: 100%;min-width: 100%;max-width: 100%;min-height: 30px;">Ver partido
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php require_once("../../footer.php"); ?>

    </body>

</html>
