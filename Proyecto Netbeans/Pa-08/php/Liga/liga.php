<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>lista-equipos</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/Responsive-Card-Item-List.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-image: url(&quot;assets/img/csgo-parche-diciembre.png&quot;);background-size: cover;background-repeat: space;background-position: left;">
    <header class="masthead bg-primary text-white text-center">
        <nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark">
            <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav flex-grow-1 justify-content-between">
                        <li class="nav-item d-flex d-md-flex justify-content-start align-items-center justify-content-md-center align-items-md-center" role="presentation" style="margin-bottom: 10px;margin-top: 10px;"><a class="nav-link" href="index.html" style="height: 38px;width: 0px;font-size: 0px;margin: 0px;padding: 0px;">Link<i class="fa fa-star border-dark d-inline-block" style="background-image: url(&quot;assets/img/csgo_icon.png&quot;);background-size: contain;font-size: 0;height: 40px;width: 40px;"></i></a></li>
                        <li
                            class="nav-item d-flex d-md-flex justify-content-start justify-content-md-center align-items-md-center" role="presentation" style="margin-bottom: 10px;margin-top: 10px;"><input class="d-md-flex justify-content-md-center align-items-md-center" type="search" style="width: 150px;padding: 0;"><a class="nav-link d-md-flex justify-content-md-center align-items-md-center" href="#" style="width: 24px;padding: 0;margin-left: 5px;"><i class="material-icons apple-logo">search</i></a></li>
                            <li
                                class="nav-item d-flex d-md-flex justify-content-start justify-content-md-center align-items-md-center" role="presentation" style="margin-bottom: 10px;margin-top: 10px;">
                                <div class="nav-item dropdown d-md-flex justify-content-md-center align-items-md-center"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Menu</a>
                                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Liga</a><a class="dropdown-item" role="presentation" href="#">Equipos</a><a class="dropdown-item" role="presentation" href="#">Partidos</a></div>
                                </div>
                                </li>
                                <li class="nav-item d-flex d-md-flex justify-content-start justify-content-md-center align-items-md-center" role="presentation" style="margin-bottom: 10px;margin-top: 10px;"><a class="btn btn-primary" role="button">Log In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
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
    <footer class="text-light bg-dark float-none d-xl-flex justify-content-xl-center footer text-center" style="height: 5%;width: 100%;margin-top: 10%;"><small>Copyright ©&nbsp;Brand 2018</small></footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>