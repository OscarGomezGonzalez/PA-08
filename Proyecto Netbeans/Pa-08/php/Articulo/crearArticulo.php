<?php

include_once '../../funciones.php';

session_start();

$saneamiento = array(
    "titulo" => FILTER_SANITIZE_STRING,
    "categoria" => FILTER_SANITIZE_STRING,
    "contenido1" => FILTER_SANITIZE_STRING,
    "subtitulo" => FILTER_SANITIZE_STRING,
    "contenido2" => FILTER_SANITIZE_STRING,
    "contenido3" => FILTER_SANITIZE_STRING
);

$datos = filter_input_array(INPUT_POST, $saneamiento);


$titulo = $datos["titulo"];
$categoria = $datos["categoria"];
$contenido1 = $datos["contenido1"];
$subtitulo = $datos["subtitulo"];
$contenido2 = $datos["contenido2"];
$contenido3 = $datos["contenido3"];
$imagen1Error = false;
$imagen2Error = false;

if ($_FILES['imagen1']['error'] > 0) {
    $imagen1Error = true;
} else {
    $mTmpFile = $_FILES['imagen1']['tmp_name'];
    $mTipo = exif_imagetype($mTmpFile);
    if (($mTipo == IMAGETYPE_JPEG) or ( $mTipo == IMAGETYPE_PNG)) {
        if ($_FILES['imagen2']['error'] > 0) {
            $imagen2Error = true;
        } else {
            $mTmpFile = $_FILES['imagen2']['tmp_name'];
            $mTipo = exif_imagetype($mTmpFile);
            if (($mTipo == IMAGETYPE_JPEG) or ( $mTipo == IMAGETYPE_PNG)) {
                $ruta = "../../assets/img/usuarios/" . $_SESSION["usuario"] . "/articulos";
                mkdir($ruta, 0777, true);
                $imagen1 = $ruta . "/" . $_FILES['imagen1']['name'];
                move_uploaded_file($_FILES['imagen1']['tmp_name'], $imagen1);
                $imagen2 = $ruta . "/" . $_FILES['imagen2']['name'];
                move_uploaded_file($_FILES['imagen2']['tmp_name'], $imagen2);
                $imagenes = $imagen1 . ";" . $imagen2;
            } else {
                $imagen2Error = true;
            }
        }
    } else {
        $imagen1Error = true;
    }
}

if ($imagen1Error == true) {
    echo'<script type="text/javascript">
        alert("Existen conflictos con la primera imagen, vuelva a intentarlo");
        window.location.href="../../php/Articulo/crearArticulo_vista.php";
        </script>';
} else {
    if ($imagen2Error == true) {
        echo'<script type="text/javascript">
        alert("Existen conflictos con la segunda imagen, vuelva a intentarlo");
        window.location.href="../../php/Articulo/crearArticulo_vista.php";
        </script>';
    } else {
        $conn = conexionDB();
        $user = $_SESSION["usuario"];
        $fecha = date("Y-m-d");
        $consulta = "INSERT INTO `articulo`(`titulo`, `id_articulo`, `nombre_usuario`, `valor_valoracion`, `fecha`, `categoria`, `imagenes`, `contenido1`, `contenido2`, `contenido3`, `subtitulo`) VALUES ('$titulo',NULL,'$user',0,'$fecha','$categoria','$imagenes','$contenido1','$contenido2','$contenido3','$subtitulo')";
        $resultado = mysqli_query($conn, $consulta);
        mysqli_close($conn);
        if ($resultado) {
            header("location:../../php/Articulo/listaArticulos.php");
        } else {
            header("location:../../php/Articulo/crearArticulo.php");
        }
    }
}



