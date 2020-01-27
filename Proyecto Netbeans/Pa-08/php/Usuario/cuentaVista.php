<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Untitled</title>
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/Profile-Edit-Form-1.css">
        <link rel="stylesheet" href="../../assets/css/Profile-Edit-Form.css">
        <link rel="stylesheet" href="../../assets/css/style.css">

        <link href="../../assets/bootstrap/css/blog-home.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
        <link rel="stylesheet" href="../../assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="../../assets/fonts/ionicons.min.css">
        <link rel="stylesheet" href="../../assets/css/Navigation-with-Search.css">
        <link rel="stylesheet" href="../../assets/css/Pretty-Search-Form.css">
        <link rel="stylesheet" href="../../assets/css/untitled.css">

    <body>
        <?php
        //define('__ROOT__', dirname(dirname(__FILE__)));
        //require_once(__ROOT__ . 'index.php');
        require_once("../../header.php");
        session_start()
        ?>
        <div class="container profile profile-view" id="profile" style="margin-top: 120px;">
            <div class="row">
                <div class="col-md-12 alert-col relative">
                    <div class="alert alert-info absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
                </div>
            </div>
            <form>
                <div class="form-row profile-row">
                    <div class="col-md-4 relative">
                        <div class="avatar">
                            <div class="avatar-bg center" style="background-image:url(&quot;<?php echo $_SESSION['foto']; ?>&quot;);"></div>
                        </div></div>
                    <div class="col-md-7">
                        <h1>Mi cuenta</h1>
                        <hr>
                        <div class="form-row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label id="info_til">Nombre completo</label>
                                    <br>
                                    <label id="info"><?php echo $_SESSION['nombre']; ?> </label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label id="info_til">Nombre de usuario</label>
                                    <br>
                                    <label id="info"><?php echo $_SESSION['usuario']; ?> </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label id="info_til">E-mail </label>
                                <br>
                                <label id="info"><?php echo $_SESSION['email']; ?> </label>
                                <div class="form-row">
                                    <div class="col-sm-12 col-md-9">
                                        <div class="form-group"><label id="info_til">Tipo de usuario</label>
                                            <br>
                                            <label id="info"><?php echo $_SESSION['tipo']; ?> </label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-12 content-right"><button class="btn btn-primary form-btn" type="submit">Modificar<br> cuenta </button><button class="btn btn-primary form-btn" type="reset">Modificar<br> contraseña </button><button class="btn btn-danger form-btn" type="reset">Eliminar<br> cuenta </button></div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </form>
        </div>
        <?php include("../../footer.php"); ?>
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/js/Profile-Edit-Form.js"></script>
    </body>

</html>