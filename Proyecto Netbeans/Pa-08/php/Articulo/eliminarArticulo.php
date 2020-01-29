<?php
include_once '../../funciones.php';

session_start();

if (isset($_POST['SI'])) {
    $conn = conexionDB();
    $idArticulo = $_SESSION['idArticulo'];
    $titulo = $_SESSION['titulo'];
    $consulta = "DELETE FROM `articulo` WHERE id_articulo='$idArticulo'";
    $resultado = mysqli_query($conn, $consulta);
    mysqli_close($conn);
    $ruta = "../../assets/img/usuarios/" . $_SESSION["usuario"] . "/articulos/" . $titulo;
    deleteDirectory($ruta);
    header("location:../../php/Articulo/listaArticulos.php");
} elseif (isset($_POST['NO'])) {
    header("location:../../php/Articulo/listaArticulos.php");
} else {
    $_SESSION['idArticulo'] = $_POST['idArticulo'];
    $_SESSION['titulo'] = $_POST['nomArticulo'];
}
?>

<!DOCTYPE html>
<html>

       <?php include_once '../../head.php'; ?>
    
    <body>
         <?php require_once("../../header.php"); ?>
        <div style="background-color: #c6c8ca; width: 45%; margin-left: 29%;  margin-top:15%; border: groove 1em red; border-radius: 2em;"><h3 class="text-danger" style="text-align: center;">¿Esta seguro de eliminar este articulo?</h3></div>
        <div style="margin-top:2%; margin-left: 45%;" class="form-inline">
            <form action="#"  method="POST">
                <button name="SI" type="submit" class="btn btn-danger"><i class="fas fa-pencil-alt d-xl-flex justify-content-xl-center align-items-xl-center">SI</i></button>
            </form>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
            <form action="#"  method="POST">
                <button name="NO" type="submit" class="btn btn-warning"><i class="far fa-trash-alt d-xl-flex justify-content-xl-center align-items-xl-center">NO</i></button>
            </form>
        </div>
        <?php
        require_once("../../footer.php");
        ?>
    </body>
</html>