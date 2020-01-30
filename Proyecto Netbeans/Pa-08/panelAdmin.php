<!DOCTYPE html>
<html>
    <!--
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>PanelAdministrador</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>-->

    <?php
    include 'head.php';

    include_once 'funciones.php';
    include 'php/Liga/ver_ligas.php';
    include 'php/Partido/ver_partida.php';
    include './php/Jugador/ver_jugador.php';
    include './php/Liga/borra_liga.php';
    ?>

    <?php
    if (isset($_POST['btnModificarLiga'])) {
   
        $id = $_POST['custId'];
        
        
    }elseif (isset ($_POST['btnModificarLiga'])) {
        $id = $_POST['custId'];
    }elseif (isset ($_POST['btnModificarJugador'])) {
        $id = $_POST['custId'];
    }
    ?>

    <body style="background-image: url(&quot;assets/img/csgo-logo-wallpapers-4.jpg&quot;);background-position: center;background-size: auto;">
        <div class="d-xl-flex justify-content-xl-center" style="width: 100%;height: 100%;margin: 0;margin-top: 10%;">
            <div class="container d-xl-flex justify-content-xl-center" style="padding-left: 0;padding-right: 0;width: 100%;height: 100%;">
                <div class="row d-lg-flex align-items-lg-center" style="width: 100%;min-width: 100%;max-width: 100%;">
                    <div class="col" style="width: 100%;min-width: 100%;">
                        <form action="php/Admin/formularioGenerico.php" method="POST"class="d-lg-flex justify-content-lg-center" style="min-width: 100%;width: 100%;">
                            <button onclick="location.href = 'formularioGenerico.php'" name="liga" class="btn btn-primary" type="submit" style="width: 20%;background-color: #000000;">Crear Liga</button>
                            <button onclick="location.href = 'formularioGenerico.php'" name="partido" class="btn btn-primary" type="submit" style="width: 20%;background-color: #000000;">Crear Partida</button>
                            <button class="btn btn-primary" onclick="location.href = 'formularioGenerico.php'" name="equipo" type="submit" style="width: 20%;background-color: #000000;">Crear Equipo</button>
                            <button onclick="location.href = 'formularioGenerico.php'" class="btn btn-primary" name="jugador" type="submit" style="width: 20%;background-color: #000000;">Crear Jugador</button>
                        </form>
                    </div>
                    <div class="col-md-12" style="width: 100%;min-width: 200px;margin-bottom: 20px;margin-top: 20px;">
                        <h1 class="d-md-flex justify-content-md-center" style="color: rgb(150,155,160);margin: 0;width: 100%;height: 100%;">Equipos registrados</h1>
                    </div>


                    <?php
                    ver_ligasADMIN();
                    ?>



                    <?php
                    ?> <div class="row"><?php
                        ver_partidas();
                        ?>
                    </div>


                    <?php
                    ver_jugadores();
                    ?>



                </div>
            </div>
        </div>

    </body>

</html>