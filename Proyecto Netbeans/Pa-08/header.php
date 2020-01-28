
<!--<body id="page-top" style="height: 647px;">-->
<!--
<header class="masthead bg-primary text-white text-center header row">
    <nav class="col-12 navbar navbar-light navbar-expand-lg fixed-top bg-dark text-uppercase" id="mainNav" style="color: #dddddd;">
        <div class="container-fluid"><i class="icon ion-ios-plus-outline d-none"></i><a href="index.php" style="height: 38px;width: 0px;font-size: 0px;margin: 0px;padding: 0px;">Link<i class="fa fa-star border-dark d-inline-block" style="background-image: url(&quot;assets/img/csgo_icon.png&quot;);background-size: contain;font-size: 0;height: 40px;width: 40px;"></i></a>
            <nav
                class="navbar navbar-light navbar-expand-lg navigation-clean-search" style="height: 25px;margin: 0px;width: 55%;padding: 22px;max-height: 25px;">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navcol-1" style="width: 100%;">
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>
                        </form>
                    </div><a class="btn btn-dark text-capitalize bg-secondary d-xl-flex ml-auto justify-content-xl-end action-button" role="button" href="#" style="height: 28px;width: 15%;background-position: right;background-size: contain;font-size: 10px;">Buscar</a></div>
            </nav>
            <div class="dropdown" style="font-size:20px; height: 10%;"><a class="dropdown-toggle text-capitalize text-white" style="text-decoration: none" data-toggle="dropdown" aria-expanded="false" href="#">Menu</a>
                <div class="dropdown-menu text-white" role="menu" style="background-color: #bee5eb; min-width: 10%;height: 112px;"><a class="dropdown-item text-capitalize" role="presentation" href="#" style="margin-right: -2px;">Liga</a><a class="dropdown-item text-capitalize" role="presentation" href="php/Equipo/equipos_vista.php">Equipos</a><a class="dropdown-item text-capitalize" role="presentation"
                                                                                                                                                                                                        href="#">Partidos</a></div>

    </nav>
</header>-->
<?php session_start(); ?>
<header class="bg-primary text-white text-center header">
    <nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav flex-grow-1 justify-content-between">
                    <li class="nav-item d-flex d-md-flex justify-content-start align-items-center justify-content-md-center align-items-md-center" role="presentation" style="margin-bottom: 10px;margin-top: 10px;"><a class="nav-link" href="index.php" style="height: 38px;width: 0px;font-size: 0px;margin: 0px;padding: 0px;">Link<i class="fa fa-star border-dark d-inline-block" style="background-image: url(&quot;assets/img/csgo_icon.png&quot;);background-size: contain;font-size: 0;height: 40px;width: 40px;"></i></a></li>
                    <li
                        class="nav-item d-flex d-md-flex justify-content-start justify-content-md-center align-items-md-center" role="presentation" style="margin-bottom: 10px;margin-top: 10px;"><input class="d-md-flex justify-content-md-center align-items-md-center" type="search" style="width: 150px;padding: 0;"><a class="nav-link d-md-flex justify-content-md-center align-items-md-center" href="#" style="width: 24px;padding: 0;margin-left: 5px;"><img src="assets/img/search-icon.png"></a></li>
                    <li
                        class="nav-item d-flex d-md-flex justify-content-start justify-content-md-center align-items-md-center" role="presentation" style="margin-bottom: 10px;margin-top: 10px;">
                        <div class="nav-item dropdown d-md-flex justify-content-md-center align-items-md-center"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Menu</a>
                            <div class="dropdown-menu bg-primary" role="menu">
                                <a class="dropdown-item" role="presentation" href="#">Liga</a>
                                <a class="dropdown-item" role="presentation" href="php/Equipo/equipos_vista.php">Equipos</a>
                                <a class="dropdown-item" role="presentation" href="#">Partidos</a>
                            </div>
                        </div>
                    </li>
                    <?php
                    if (isset($_SESSION['usuario'])) {
                        if ($_SESSION['tipo'] == "lector") {
                            ?>
                            <li class="nav-item d-flex d-md-flex justify-content-start justify-content-md-center align-items-md-center" role="presentation" style="margin-bottom: 10px;margin-top: 10px;">
                                <div class="nav-item dropdown d-md-flex justify-content-md-center align-items-md-center"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Bienvenido <br> <strong><?php echo $_SESSION['nombre']; ?></strong></a>
                                    <div class="dropdown-menu bg-primary" role="menu">
                                        <a class="dropdown-item" role="presentation" href="php/Usuario/cuentaVista.php">Mi cuenta</a>
                                        <a class="dropdown-item text-capitalize" role="presentation" href="#">Mis comentarios</a>
                                        <a class="dropdown-item text-capitalize" role="presentation" href="#">Mis valoraciones</a>
                                        <a class="dropdown-item text-capitalize" role="presentation" href="php/Usuario/logout.php"><strong>Cerrar Sesión</strong></a>
                                    </div>
                                </div>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li class="nav-item d-flex d-md-flex justify-content-start justify-content-md-center align-items-md-center" role="presentation" style="margin-bottom: 10px;margin-top: 10px;">
                                <div class="nav-item dropdown d-md-flex justify-content-md-center align-items-md-center"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Bienvenido <br> <strong><?php echo $_SESSION['nombre']; ?></strong></a>
                                    <div class="dropdown-menu bg-primary" role="menu">
                                        <a class="dropdown-item" role="presentation" href="php/Usuario/cuentaVista.php">Mi cuenta</a>
                                        <a class="dropdown-item text-capitalize" role="presentation" href="#">Mis artículos</a>
                                        <a class="dropdown-item text-capitalize" role="presentation" href="#">Mis comentarios</a>
                                        <a class="dropdown-item text-capitalize" role="presentation" href="#">Mis valoraciones</a>
                                        <a class="dropdown-item text-capitalize" role="presentation" href="php/Usuario/logout.php"><strong>Cerrar Sesión</strong></a>
                                    </div>
                                </div>
                            </li>
                            <?php
                        }
                    } else {
                        ?>
                        <li class="nav-item d-flex d-md-flex justify-content-start justify-content-md-center align-items-md-center" role="presentation" style="margin-bottom: 10px;margin-top: 10px;"><a class="btn btn-primary" role="button" onclick = " location.href = 'php/Usuario/inicioSesion_vista.php'">Log In</a></li>
                            <?php
                        }
                        ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!--</body>-->


