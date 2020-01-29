<?php

include_once '../../funciones.php';

session_start();

$saneamiento = array(
    "nombre" => FILTER_SANITIZE_STRING,
    "nombre_usuario" => FILTER_SANITIZE_STRING,
    "email" => FILTER_SANITIZE_EMAIL,
    "password" => FILTER_SANITIZE_STRING,
    "password-repeat" => FILTER_SANITIZE_STRING,
    "tipo_usuario" => FILTER_SANITIZE_STRING
);

$datos = filter_input_array(INPUT_POST, $saneamiento);
if ($datos["password"] == $datos["password-repeat"]) {
    $usuario = $datos["nombre_usuario"];
    $password = password_hash($datos["password"], PASSWORD_DEFAULT);
    $nombre = $datos["nombre"];
    $email = $datos["email"];
    $tipo_usuario = $datos["tipo_usuario"];


    if ($_FILES['imagen_perfil']['error'] > 0) {
        $imagen_perfil = "";
    } else {
        $mTmpFile = $_FILES['imagen_perfil']['tmp_name'];
        $mTipo = exif_imagetype($mTmpFile);
        if (($mTipo == IMAGETYPE_JPEG) or ( $mTipo == IMAGETYPE_PNG)) {
            $ruta = "assets/img/usuarios/" . $usuario;
            mkdir("../../" . $ruta, 0777, true);
            $imagen_perfil = $ruta . "/imagenPerfil";
            move_uploaded_file($_FILES['imagen_perfil']['tmp_name'], $imagen_perfil);
        } else {
            $imagen_perfil = "";
        }
    }

    $conn = conexionDB();
    $consulta = "INSERT INTO `usuario`(`email`, `tipo_usuario`, `imagen_perfil`, `nombre_usuario`, `password`, `nombre`) VALUES ('$email','$tipo_usuario','$imagen_perfil','$usuario','$password','$nombre')";
    $resultado = mysqli_query($conn, $consulta);
    mysqli_close($conn);

    if ($resultado) {
        header("location:../../php/Usuario/inicioSesion_vista.php");
    } else {
        header("location:../../php/Usuario/registro_vista.php");
    }
} else {
    header("location:../../php/Usuario/registro_vista.php");
}

