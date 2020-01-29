<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Untitled</title>
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/Registration-Form-with-Photo.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
    </head>

    <body>
        <?php
        session_start();

        require_once("../../header.php");
        ?>
        <div class="bg-secondary register-photo">
            <div class="form-container">
                <form action="../../php/Usuario/modificarPassword.php"  method="POST">
                    <h2 class="text-center">MODIFICAR CONTRASEÑA DE "<?php echo $_SESSION["nombre"]; ?>"</h2>
                    <div class="form-group"><label><strong>Contraseña Actual:</strong></label><input class="form-control" type="password" name="passActual" required=""></div>
                    <div class="form-group"><label><strong>Contraseña nueva:</strong></label><input class="form-control" type="password" name="newPass" required=""></div>
                    <div class="form-group"><label><strong>Confirmar nueva contraseña:</strong></label><input class="form-control" type="password" name="newPass2"required=""></div>
                    <div class="form-group"><button class="btn btn-primary btn-block bg-secondary" type="submit" >Modificar contaseña</button></div>
                </form>
            </div>
        </div>
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

</html>