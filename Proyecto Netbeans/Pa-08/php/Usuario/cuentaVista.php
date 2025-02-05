<!DOCTYPE html>
<html>
 
    <?php include_once '../../head.php'; ?>

    <body>
        <?php
        //define('__ROOT__', dirname(dirname(__FILE__)));
        //require_once(__ROOT__ . 'index.php');


        require_once("../../header.php");

        include_once '../../funciones.php';

        session_start();

        $usuario = $_SESSION['usuario'];
        $conn = conexionDB();
        $consulta = "SELECT * FROM usuario WHERE nombre_usuario='$usuario'";
        $resultado = mysqli_query($conn, $consulta);
        $row = mysqli_fetch_array($resultado);

        $_SESSION["tipo"] = $row["tipo_usuario"];
        $_SESSION["nombre"] = $row["nombre"];
        $_SESSION["foto"] = $row["imagen_perfil"];
        $_SESSION["email"] = $row["email"];
        ?>
        <div class="container profile profile-view" id="profile" style="margin-bottom:12%;"  >
            <div class="row">
                <div class="col-md-12 alert-col relative">
                    <div class="alert alert-info absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
                </div>
            </div>
            <form>
                <div class="form-row profile-row">
                    <div class="col-md-4 relative">
                        <div class="avatar">
                            <div class="avatar-bg center" style="background-image:url(&quot;<?php echo $row['imagen_perfil']; ?>&quot;);"></div>
                        </div></div>
                    <div class="col-md-7">
                        <h1>Mi cuenta</h1>
                        <hr>
                        <div class="form-row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label id="info_til">Nombre completo</label>
                                    <br>
                                    <label id="info"><?php echo $row['nombre']; ?> </label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label id="info_til">Nombre de usuario</label>
                                    <br>
                                    <label id="info"><?php echo $row['nombre_usuario']; ?> </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label id="info_til">E-mail </label>
                                <br>
                                <label id="info"><?php echo $row['email']; ?> </label>
                                <div class="form-row">
                                    <div class="col-sm-12 col-md-9">
                                        <div class="form-group"><label id="info_til">Tipo de usuario</label>
                                            <br>
                                            <label id="info"><?php echo $row['tipo_usuario']; ?> </label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-12 content-right">
                                        <button class="btn btn-primary form-btn" type="button" onclick="location.href = 'php/Usuario/modificarCuenta_vista.php'">Modificar<br> cuenta </button>
                                        <button class="btn btn-primary form-btn" type="button" onclick="location.href = 'php/Usuario/modificarPassword_vista.php'">Modificar<br> contraseña </button>
                                        <button class="btn btn-danger form-btn" type="button" onclick="location.href = 'php/Usuario/eliminarCuenta.php'">Eliminar<br> cuenta </button></div>
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
        <?php
        require_once("../../footer.php");
        ?>
    </body>

</html>