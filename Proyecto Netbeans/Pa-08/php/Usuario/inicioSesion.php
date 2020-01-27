<?php

include_once '../../funciones.php';

session_start();

$saneamiento = array(
    "nombre_usuario" => FILTER_SANITIZE_STRING,
    "password" => FILTER_SANITIZE_STRING
);

$datos = filter_input_array(INPUT_POST, $saneamiento);

$usuario = $datos["nombre_usuario"];
$password = $datos["password"];

$conn = conexionDB();
$consulta = "SELECT password,tipo_usuario,nombre,imagen_perfil,email FROM `usuario` WHERE nombre_usuario='$usuario'";
$resultado = mysqli_query($conn, $consulta);
$resultadoProcesado = mysqli_fetch_array($resultado);
mysqli_close($conn);

if ($resultadoProcesado) {
    if (password_verify($password, $resultadoProcesado["password"])) {   //Si ambas contraseñas coinciden
        //Guardamos en session los datos de login
        $_SESSION["usuario"] = $usuario;
        $_SESSION["password"] = $password;
        $_SESSION["tipo"] = $resultadoProcesado["tipo_usuario"];
        $_SESSION["nombre"] = $resultadoProcesado["nombre"];
        $_SESSION["foto"] = $resultadoProcesado["imagen_perfil"];
        $_SESSION["email"] = $resultadoProcesado["email"];
        header("location:../../index.php");
    } else {
        echo'<script type="text/javascript">
        alert("La contraseña introducida no es correcta");
        window.location.href="../../php/Usuario/inicioSesion_vista.php";
        </script>';
    }
} else {
    echo'<script type="text/javascript">
    alert("El usuario introducido no es correcto");
    window.location.href="../../php/Usuario/inicioSesion_vista.php";
    </script>';
}
?>
