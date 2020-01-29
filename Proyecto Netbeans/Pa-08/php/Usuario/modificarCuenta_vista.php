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
                <form action="../../php/Usuario/modificarCuenta.php" enctype="multipart/form-data" method="POST">
                    <h2 class="text-center">MODIFICAR CUENTA DE "<?php echo $_SESSION["nombre"]; ?>"</h2>
                    <div class="form-group"><label><strong>Nombre completo:</strong></label><input class="form-control" type="text" name="nombre" value="<?php echo $_SESSION["nombre"]; ?>" required=""></div>
                    <div class="form-group"><label><strong>E-mail:</strong></label><input class="form-control" type="email" name="email" value="<?php echo $_SESSION["email"]; ?>" required=""></div>
                    <div class="form-group"><label for="file"><strong>Desea cambiar su foto de perfil: </strong></label><br><input name="imagen_perfil" type="file" value="Selecciona imagen de perfil"></div>
                    <div class="form-group"><button class="btn btn-primary btn-block bg-secondary" type="submit" >Modificar cuenta</button></div>
                </form>
            </div>
        </div>
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
        <?php include("../../footer.php"); ?>
    </body>

</html>