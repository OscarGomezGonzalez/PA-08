<?php
include_once '../../funciones.php';

session_start();

if (isset($_POST['SI'])) {
    $conn = conexionDB();
    $usuario = $_SESSION['usuario'];
    $consulta = "DELETE FROM `usuario` WHERE nombre_usuario='$usuario'";
    $resultado = mysqli_query($conn, $consulta);
    mysqli_close($conn);
    $ruta = "../../assets/img/usuarios/" . $_SESSION["usuario"];
    deleteDirectory($ruta);
    header("location:../../php/Usuario/logout.php");
} elseif (isset($_POST['NO'])) {
    header("location:../../php/Usuario/cuentaVista.php");
}
?>

<!DOCTYPE html>
<html>

    <?php include_once '../../head.php'; ?>
    
    <body>
        <?php
        require_once("../../header.php");
        ?>
        <div style=" margin-bottom:30%;">
        <div style="background-color: #c6c8ca; width: 45%; margin-left: 29%;  margin-top:15%; border: groove 1em red; border-radius: 2em; "><h3 class="text-danger" style="text-align: center;">¿Esta seguro de eliminar su cuenta?</h3></div>
        <div style="margin-top:2%; margin-left: 45%;" class="form-inline">
            <form action="php/Usuario/eliminarCuenta.php"  method="POST">
                <button name="SI" type="submit" class="btn btn-danger"><i class="fas fa-pencil-alt d-xl-flex justify-content-xl-center align-items-xl-center">SI</i></button>
            </form>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
            <form action="php/Usuario/eliminarCuenta.php"  method="POST">
                <button name="NO" type="submit" class="btn btn-warning"><i class="far fa-trash-alt d-xl-flex justify-content-xl-center align-items-xl-center">NO</i></button>
            </form>
        </div>
        </div>
        <?php include("../../footer.php"); ?>
    </body>
</html>