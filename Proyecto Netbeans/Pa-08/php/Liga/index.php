<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>vistaLiga</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    </head>

    <body>

        <?php
        include 'ver_ligas.php';
        ver_unaLiga($_POST['custId']);
        ?>
        


                
                <div class="row justify-content-center" style="width: 100%;">

                    <?php
                    //aqui es una tarjeta de una partida
                    ?>
                    <div class="col-4 col-md-4 col-xl-4 offset-xl-0" style="min-width: 350px;">
                        <div class="card" style="width: 100%;min-width: 100%;height: 100%;min-height: 100%;">
                            <div class="card-body" style="width: 100%;min-width: 100%;height: 100%;min-height: 100%;">
                                <div class="row">
                                    <div class="col" style="width: 30%;">
                                        <p class="float-left d-md-flex justify-content-xl-center" style="width: 100%;min-width: 100%;">Equipo1<br></p>
                                        <p class="float-left d-xl-flex justify-content-xl-center" style="min-width: 100%;width: 100%;">Ganador<br></p>
                                    </div>
                                    <div class="col" style="width: 20%;min-width: 50px;"><img src="assets/img/vs.png" style="width: 100%;"></div>
                                    <div class="col" style="width: 30%;">
                                        <p class="text-left float-right d-md-flex justify-content-xl-center">Equipo2<br></p>
                                        <p class="text-left float-right d-xl-flex justify-content-xl-center">Ganador<br></p>
                                    </div>
                                </div>
                                <form style="width: 100%;min-width: 100%;max-width: 100%;height: 30px;min-height: 30px;"><button class="btn btn-primary" type="button" style="width: 100%;min-width: 100%;max-width: 100%;height: 30px;min-height: 30px;">Button</button></form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

</html>