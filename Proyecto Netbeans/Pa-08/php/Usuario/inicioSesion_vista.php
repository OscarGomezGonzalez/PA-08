<!DOCTYPE html>
<html>
   <?php include_once '../../head.php'; ?>
    
    <body>
         <?php
        require_once("../../header.php");
         ?>
        <div class="container-fluid">
            <div class="row mh-100vh">
                <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                    <div class="m-auto w-lg-75 w-xl-50">
                        <h2 class="text-info font-weight-light mb-5"><i class="fa fa-gamepad"></i>&nbsp; &nbsp;Bienvenido/a</h2>
                        <form action="php/Usuario/inicioSesion.php" method="POST">
                            <div class="form-group"><label class="text-secondary">Usuario</label><input name="nombre_usuario" class="form-control" type="text" required=""></div>
                            <div class="form-group"><label class="text-secondary">Contraseña</label><input name="password" class="form-control" type="password" required=""></div><button class="btn btn-info bg-secondary border-secondary mt-2" type="submit">Iniciar sesión</button></form>
                        <br>
                        <div class="form-group"><a class="text-secondary" href="php/Usuario/registro_vista.php">¿Todavia no tienes cuenta? Registrate aqui</a></div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url(&quot;assets/img/fondo_session.jpg&quot;);background-size:cover;background-position:center center;">
                    <p class="ml-auto small text-dark mb-2"></p>
                </div>
            </div>
        </div>
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
        <?php include("../../footer.php"); ?>
    </body>
</html>