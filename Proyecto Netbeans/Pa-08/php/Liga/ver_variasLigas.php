<!DOCTYPE html>
<html>
    <?php
    //importa header
    include_once("../../head.php");
    ?>
    <!--<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>lista-equipos</title>
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="../../assets/fonts/material-icons.min.css">
        <link rel="stylesheet" href="../../assets/css/Responsive-Card-Item-List.css">
        <link rel="stylesheet" href="../../assets/css/styles.css">
    </head>-->

    <body style="background-image: url(&quot;assets/img/csgo-parche-diciembre.png&quot;);background-size: cover;background-repeat: space;background-position: left;">
        <?php
        //importa header
        include_once("../../header.php");
        ?>

        <div class="d-xl-flex justify-content-xl-center" style="width: 100%;height: 70%;margin-top: 10%;">
            <div class="container d-xl-flex justify-content-xl-center" style="padding: 0;margin: 0;width: 100%;height: 100%;">
                <div class="row d-xl-flex" style="height: 10%;margin: 0;width: 100%;padding-bottom: 10px;padding-top: 20px;min-width: 100%;">
                    <div class="col-md-12" style="padding: 0;width: 100%;height: 100%;margin-bottom: 10px;">
                        <h1 class="d-md-flex justify-content-md-center" style="color: rgb(150,155,160);margin: 0;width: 100%;height: 100%;">Ligas registradas</h1>
                    </div>
                    <?php
                    include 'ver_ligas.php';
                    ver_ligas();
                    ?>



                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php include("../../footer.php"); ?>

    </body>

</html>