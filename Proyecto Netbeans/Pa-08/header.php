
<!--<body id="page-top" style="height: 647px;">-->
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
                <div class="dropdown-menu text-white" role="menu" style="background-color: #bee5eb; min-width: 10%;height: 112px;"><a class="dropdown-item text-capitalize" role="presentation" href="#" style="margin-right: -2px;">Liga</a><a class="dropdown-item text-capitalize" role="presentation" href="#">Equipos</a><a class="dropdown-item text-capitalize" role="presentation"
                                                                                                                                                                                                        href="#">Partidos</a></div>
                    <?php
                    session_start();
                    if (isset($_SESSION['usuario'])) {
                        if ($_SESSION['tipo'] == "lector") {
                            ?>
                    </div>
                    <div class="dropdown" style = "margin: 0px;font-size: 20px;filter: contrast(85%) grayscale(100%) hue-rotate(0deg);width: 15%;height: 10%;min-height: 70%;max-height: 5%;">
                        <a class="dropdown-toggle text-capitalize text-white" style="text-decoration: none;" data-toggle="dropdown" aria-expanded="false" href="#">Bienvenido <br> <strong><?php echo $_SESSION['nombre']; ?></strong></a>
                        <div class="dropdown-menu text-white" role="menu" style="background-color: #dddddd;min-width: 10%;height: 144px;">
                            <a class="dropdown-item text-capitalize" role="presentation" href="php/Usuario/cuentaVista.php" style="margin-right: -2px;">Mi cuenta</a>
                            <a class="dropdown-item text-capitalize" role="presentation" href="#">Mis comentarios</a>
                            <a class="dropdown-item text-capitalize" role="presentation" href="#">Mis valoraciones</a>
                            <a class="dropdown-item text-capitalize" role="presentation" href="php/Usuario/logout.php"><strong>Cerrar Sesión</strong></a>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                </div>
                <div class="dropdown" style = "margin: 0px;font-size: 20px;filter: contrast(85%) grayscale(100%) hue-rotate(0deg);width: 15%;height: 10%;min-height: 70%;max-height: 5%;">
                    <a class="dropdown-toggle text-capitalize text-white" style="text-decoration: none;" data-toggle="dropdown" aria-expanded="false" href="#">Bienvenido <br> <strong><?php echo $_SESSION['nombre']; ?></strong></a>
                    <div class="dropdown-menu text-white" role="menu" style="background-color: #dddddd; min-width: 10%;height: 174px;">
                        <a class="dropdown-item text-capitalize" role="presentation" href="php/Usuario/cuentaVista.php" style="margin-right: -2px;">Mi cuenta</a>
                        <a class="dropdown-item text-capitalize" role="presentation" href="#">Mis artículos</a>
                        <a class="dropdown-item text-capitalize" role="presentation" href="#">Mis comentarios</a>
                        <a class="dropdown-item text-capitalize" role="presentation" href="#">Mis valoraciones</a>
                        <a class="dropdown-item text-capitalize" role="presentation" href="php/Usuario/logout.php"><strong>Cerrar Sesión</strong></a>
                    </div>
                </div>
                <?php
            }
        } else {
            ?>
            </div>
            <div class = "btn btn-secondary text-capitalize bg-dark" role = "button" onclick = " location.href = 'php/Usuario/inicioSesion_vista.php'" style = "margin: 0px;font-size: 15px;filter: contrast(85%) grayscale(100%) hue-rotate(0deg);width: 13%;height: 5%;min-height: 5%;max-height: 5%;">Iniciar sesión</div>
            
            <?php
        }
        ?>
    </nav>
</header>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/freelancer.js"></script>
<!--</body>-->


