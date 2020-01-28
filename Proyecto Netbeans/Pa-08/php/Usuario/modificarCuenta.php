<?php

include_once '../../funciones.php';

session_start();

$saneamiento = array(
    "nombre" => FILTER_SANITIZE_STRING,
    "email" => FILTER_SANITIZE_STRING,
    "tipo_usuario" => FILTER_SANITIZE_STRING
);

$datos = filter_input_array(INPUT_POST, $saneamiento);

$usuario = $_SESSION['usuario'];
$nombre = $datos["nombre"];
$email = $datos["email"];
$tipo_usuario = $datos["tipo_usuario"];
$imagenError = false;

$ruta = "../../assets/img/usuarios/" . $_SESSION["usuario"];

if ($_FILES['imagen_perfil']['error'] > 0) {
    
} else {
    $mTmpFile = $_FILES['imagen_perfil']['tmp_name'];
    $mTipo = exif_imagetype($mTmpFile);
    if (($mTipo == IMAGETYPE_JPEG) or ( $mTipo == IMAGETYPE_PNG)) {
        $imagen1 = $ruta . "/imagenPerfil";
        move_uploaded_file($_FILES['imagen_perfil']['tmp_name'], $imagen1);
    } else {
        $imagenError = true;
    }
}

if ($imagenError == true) {
    echo'<script type="text/javascript">
        alert("Existen conflictos con la imagen de perfil, vuelva a intentarlo");
        window.location.href="../../php/Usuario/modificarCuenta_vista.php";
        </script>';
} else {
    $conn = conexionDB();
    $consulta = "UPDATE `usuario` SET `email`='$email', `tipo_usuario`='$tipo_usuario',`nombre`='$nombre' WHERE nombre_usuario='$usuario'";
    $resultado = mysqli_query($conn, $consulta);
    mysqli_close($conn);
    if ($resultado) {
        header("location:../../php/Usuario/cuentaVista.php");
    } else {
        echo 'fallo';
    }
}




