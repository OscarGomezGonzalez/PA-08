<?php session_start(); ?>
<header class="bg-primary text-white text-center">
    <nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav flex-grow-1 justify-content-between">
                    <li class="nav-item d-flex d-md-flex justify-content-start align-items-center justify-content-md-center align-items-md-center" role="presentation" style="margin-bottom: 10px;margin-top: 10px;">
                        <a class="nav-link" href="index.php" style="height: 38px;width: 0px;font-size: 0px;margin: 0px;padding: 0px;">Link<i class="fa fa-star border-dark d-inline-block" style="background-image: url(&quot;assets/img/csgo_icon.png&quot;);background-size: contain;font-size: 0;height: 40px;width: 40px;">

                            </i>
                        </a>
                    </li>
                    <form action="php/Busqueda/vistaBusqueda.php" method="POST" style="width: 300px;">
                        <li class="nav-item d-flex d-md-flex justify-content-start justify-content-md-center align-items-md-center" role="presentation" style="margin-bottom: 10px;margin-top: 10px;">

                            <input class="d-md-flex justify-content-md-center align-items-md-center" type="search" name="busqueda" style="width: 150px;padding: 0;">
                            <button class="boton-busqueda nav-link d-md-flex justify-content-md-center align-items-md-center" href="php/Busqueda/vistaBusqueda.php" style="width: 24px;padding: 0;margin-left: 5px;background-image: url(assets/img/search-icon.png);"></button>
                               

                        </li>
                        
                    </form>
                    <li class="nav-item d-flex d-md-flex justify-content-start justify-content-md-center align-items-md-center" role="presentation" style="margin-bottom: 10px;margin-top: 10px;">
                        <div class="nav-item dropdown d-md-flex justify-content-md-center align-items-md-center">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Menu</a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" role="presentation" href="#">Liga</a>
                                <a class="dropdown-item" role="presentation" href="php/Equipo/equipos_vista.php">Equipos</a>
                                <a class="dropdown-item" role="presentation" href="php/Partido/lista_partidos.php">Partidos</a>
                            </div>
                        </div>
                    </li>
                           
                    <?php
                    if (isset($_SESSION['usuario'])) {
                        if ($_SESSION['tipo'] == "lector") {
                            ?>
                            <li
                                class="nav-item d-flex d-md-flex justify-content-start justify-content-md-center align-items-md-center" role="presentation" style="margin-bottom: 10px;margin-top: 10px;">
                                <div class="nav-item dropdown d-md-flex justify-content-md-center align-items-md-center"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Bienvenido <br> <strong><?php echo $_SESSION['usuario']; ?></strong></a>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" role="presentation" href="php/Usuario/cuentaVista.php">Mi cuenta</a>
                                        <a class="dropdown-item" role="presentation" href="php/Comentario/listaComentarios.php">Mis comentarios</a>
                                        <a class="dropdown-item" role="presentation" href="php/Valoracion/listaValoraciones.php">Mis valoraciones</a>
                                        <a class="dropdown-item" role="presentation" href="php/Usuario/logout.php"><strong>Cerrar Sesión</strong></a>
                                    </div>
                                </div>
                            </li>
                            <?php
                        } else {
                            ?>
                             <li class="nav-item d-flex d-md-flex justify-content-start justify-content-md-center align-items-md-center" role="presentation" style="margin-bottom: 10px;margin-top: 10px;"><a class="btn btn-warning" role="button" onclick="location.href = 'panelAdmin.php'">Panel de Control</a></li>
                            <li
                                class="nav-item d-flex d-md-flex justify-content-start justify-content-md-center align-items-md-center" role="presentation" style="margin-bottom: 10px;margin-top: 10px;">
                                <div class="nav-item dropdown d-md-flex justify-content-md-center align-items-md-center"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Bienvenido <br> <strong><?php echo $_SESSION['usuario']; ?></strong></a>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" role="presentation" href="php/Usuario/cuentaVista.php">Mi cuenta</a>
                                        <a class="dropdown-item" role="presentation" href="php/Articulo/listaArticulos.php">Mis artículos</a>
                                        <a class="dropdown-item" role="presentation" href="php/Comentario/listaComentarios.php">Mis comentarios</a>
                                        <a class="dropdown-item" role="presentation" href="php/Valoracion/listaValoraciones.php">Mis valoraciones</a>
                                        <a class="dropdown-item" role="presentation" href="php/Usuario/logout.php"><strong>Cerrar Sesión</strong></a>
                                    </div> 
                                </div>
                            </li>
                            <?php
                        }
                    } else {
                        ?>
                        <li class="nav-item d-flex d-md-flex justify-content-start justify-content-md-center align-items-md-center" role="presentation" style="margin-bottom: 10px;margin-top: 10px;"><a class="btn btn-primary" role="button" onclick="location.href = 'php/Usuario/inicioSesion_vista.php'">Log In</a></li>
                            <?php
                        }
                        ?>
                </ul>
            </div>
        </div>
    </nav>
</header>