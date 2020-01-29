<!DOCTYPE html>
<html>

    <?php
    //importa header
    include_once("../../head.php");
    ?>
    <!--<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>vistaLiga</title>
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    </head>-->

    <body class="bg-secondary">

        <?php
        //importa header
        include_once("../../header.php");
        ?>

        <?php
        include 'ver_ligas.php';
        ver_unaLiga($_POST['custId']);
        ?>




        <div class="row justify-content-center" style="width: 100%;">

            <?php
            //aqui es una tarjeta de una partida
            include '../Partido/partido.php';
            getPartidosLiga($_POST['custId']);
            ?>



        </div>
    </div>
</div>
<!-- Footer -->
<?php include("../../footer.php"); ?>

</body>

</html>