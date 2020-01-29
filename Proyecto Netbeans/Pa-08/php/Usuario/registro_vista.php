<!DOCTYPE html>
<html>

    <script>
        function comprobarClave() {
            clave1 = document.getElementById("pass").value;
            clave2 = document.getElementById("pass2").value;

            if (clave1 != clave2) {
                alert("Las contraseñas introducidas no coinciden vuelva a intentarlo");
            }
        }
    </script>

    <body>
        <?php
        require_once("../../header.php");
        ?>
        <div class="bg-secondary register-photo">
            <div class="form-container">
                <form action="php/Usuario/registro.php" enctype="multipart/form-data" method="POST">
                    <h2 class="text-center">UNETE a nosotros</h2>
                    <div class="form-group"><input class="form-control" type="text" name="nombre" placeholder="Nombre completo" required=""></div>
                    <div class="form-group"><input class="form-control" type="text" name="nombre_usuario" placeholder="Nombre de usuario" required=""></div>
                    <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required=""></div>
                    <div class="form-group"><input class="form-control" type="password" name="password" id="pass" placeholder="Contraseña" required=""></div>
                    <div class="form-group"><input class="form-control" type="password" name="password-repeat" id="pass2" placeholder="Repita la contraseña" required=""></div>
                    <div class="form-group"><label for="file">Elija foto de perfil: </label><br><input name="imagen_perfil" type="file" value="Selecciona imagen de perfil"></div>
                    <div class="form-group">
                        <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" required="">Acepto las condiciones y terminos de uso</label></div>
                    </div>
                    <div class="form-group"><button class="btn btn-primary btn-block bg-secondary" type="submit" onClick="comprobarClave()">Registrarse</button></div><a class="already" href="php/Usuario/inicioSesion_vista.php">¿Ya tienes una cuenta? Inicia sesión aqui</a></form>
            </div>
        </div>
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
        <?php include("../../footer.php"); ?>
    </body>

</html>