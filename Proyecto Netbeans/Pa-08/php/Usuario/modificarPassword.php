<?php

include_once '../../funciones.php';

session_start();

$saneamiento = array(
    "passActual" => FILTER_SANITIZE_STRING,
    "newPass" => FILTER_SANITIZE_STRING,
    "newPass2" => FILTER_SANITIZE_STRING
);

$datos = filter_input_array(INPUT_POST, $saneamiento);

$usuario = $_SESSION["usuario"];
$contraseñaComparar = $_SESSION["password"];
$passActual = $datos["passActual"];
$newPass = $datos["newPass"];
$newPass2 = $datos["newPass2"];

$ruta = "../../assets/img/usuarios/" . $_SESSION["usuario"];

if ($contraseñaComparar != $passActual) {
    echo'<script type="text/javascript">
        alert("La contraseña actual no es correcta, vuelva a intentarlo");
        window.location.href="../../php/Usuario/modificarPassword_vista.php";
        </script>';
} else {
    if ($newPass != $newPass2) {
        echo'<script type="text/javascript">
        alert("La contraseñas introducidas no coinciden, vuelva a intentarlo");
        window.location.href="../../php/Usuario/modificarPassword_vista.php";
        </script>';
    } else {
        $conn = conexionDB();
        $password = password_hash($newPass, PASSWORD_DEFAULT);
        $consulta = "UPDATE `usuario` SET `password`='$password' WHERE nombre_usuario='$usuario'";
        $resultado = mysqli_query($conn, $consulta);
        mysqli_close($conn);
        if ($resultado) {
            header("location:../../php/Usuario/cuentaVista.php");
        }
    }
}



