<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>partidos</title>
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
    </head>

    <body class="bg-secondary" style="height: 100%;background-size: 100%;background-repeat: no-repeat;">

        <!-- Navigation -->
        <?php
        require_once("../../header.php");
        ?>

        <div class="principio-jugador" style="height: 100%;">
            <div class="container" style="height: 100%;min-height: 100%;max-height: 100%;">
                <div class="row">
                    <div class="col-auto col-md-12" style="width: 40%;">
                        <h1>Liga</h1>
                    </div>
                    <div class="col-auto d-xl-flex" style="width: 100%;">
                        <h2 class="text-left">Ganador del partido:&nbsp;</h2>
                        <h2 class="d-xl-flex" style="margin-left: 35%;">Fecha</h2>
                    </div>
                </div>
                <div class="row" style="min-height: 20%;max-height: 20%;margin-bottom: 2%;padding: 2%;margin-top: 2%;">
                    <div class="col d-inline-block d-xl-flex justify-content-xl-center" style="width: 100%;">
                        <h2 class="text-center" style="padding-top: 2%;padding-bottom: 2%;">Equipo1</h2>
                    </div>
                    <div class="col" style="width: 260px;min-width: 260px;"><img class="img-fluid d-xl-flex justify-content-xl-center" style="margin-right: 2%;margin-top: 1%;width: 25%;height: 90%;margin-left: 35%;" src="../../assets/img/versus.png" height="280px" width="260px"></div>
                    <div class="col">
                        <h2 class="text-center d-xl-flex justify-content-xl-center" style="padding-top: 2%;padding-bottom: 2%;">Equipo1</h2>
                    </div>
                </div>
                <div class="row" style="height: 50%;max-height: 50%;min-height: 50%;margin-top: 1%;color: #c6d7f1;">
                    <div class="col-md-4" style="background-image: url(&quot;assets/img/cache.jpg&quot;);background-size: 100%;height: 100%;min-height: 100%;max-height: 100%;background-repeat: no-repeat;opacity: 0.87;">
                        <h2>Mapa 1</h2>
                        <h3 style="margin-bottom: 30%;">Ganador:&nbsp;</h3>
                    </div>
                    <div class="col" style="background-image: url(&quot;assets/img/mirage.jpg&quot;);background-size: 100%;background-repeat: no-repeat;opacity: 0.85;">
                        <h2>Mapa 2</h2>
                        <h3 style="margin-bottom: 30%;">Ganador:</h3>
                    </div>
                    <div class="col-md-4" style="background-image: url(&quot;assets/img/inferno.jpg&quot;);background-size: 100%;background-repeat: no-repeat;opacity: 0.81;">
                        <h2>Mapa 3</h2>
                        <h3 style="margin-bottom: 30%;">Ganador:</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php include("../../footer.php"); ?>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

</html>