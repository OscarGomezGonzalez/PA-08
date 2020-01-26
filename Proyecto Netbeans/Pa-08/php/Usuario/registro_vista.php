<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Untitled</title>
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/Registration-Form-with-Photo.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
        <script>
            function comprobarClave() {
                clave1 = document.getElementById("pass").value;
                clave2 = document.getElementById("pass2").value;

                if (clave1 != clave2) {
                    alert("Las contraseñas introducidas no coinciden vuelva a intentarlo");
                }
            }
        </script>
    </head>

    <body>
        <div class="bg-secondary register-photo">
            <div class="form-container">
                <form action="../../php/Usuario/registro.php" enctype="multipart/form-data" method="POST">
                    <h2 class="text-center">UNETE a nosotros</h2>
                    <div class="form-group"><input class="form-control" type="text" name="nombre" placeholder="Nombre completo" required=""></div>
                    <div class="form-group"><input class="form-control" type="text" name="nombre_usuario" placeholder="Nombre de usuario" required=""></div>
                    <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required=""></div>
                    <div class="form-group"><input class="form-control" type="password" name="password" id="pass" placeholder="Contraseña" required=""></div>
                    <div class="form-group"><input class="form-control" type="password" name="password-repeat" id="pass2" placeholder="Repita la contraseña" required=""></div>
                    <div class="form-group"><select class="form-control" name="tipo_usuario"><option value="lector" selected="">Lector</option><option value="redactor">Redactor</option></select></div>
                    <div class="form-group"><input name="imagen_perfil" type="file"></div>
                    <div class="form-group">
                        <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">Acepto las condiciones y terminos de uso</label></div>
                    </div>
                    <div class="form-group"><button class="btn btn-primary btn-block bg-secondary" type="submit" onClick="comprobarClave()">Registrarse</button></div><a class="already" href="../../php/Usuario/inicioSesion_vista.php">¿Ya tienes una cuenta? Inicia sesión aqui</a></form>
            </div>
        </div>
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

</html>