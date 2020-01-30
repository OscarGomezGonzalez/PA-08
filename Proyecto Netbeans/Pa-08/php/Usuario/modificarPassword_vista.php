<!DOCTYPE html>
<html>

      <?php include_once '../../head.php'; ?>

    <body>
        <?php
        session_start();

        require_once("../../header.php");
        ?>
        <div class="bg-secondary register-photo"  style="margin-bottom:12%;">
            <div class="form-container">
                <form action="php/Usuario/modificarPassword.php"  method="POST">
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
        <?php include("../../footer.php"); ?>
    </body>

</html>