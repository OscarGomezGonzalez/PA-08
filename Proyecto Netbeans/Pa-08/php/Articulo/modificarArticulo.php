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
$idArticulo = $_POST['idArticulo'];
$tituloAn = $_POST['titulo'];


$titulo = $datos["titulo"];
$fecha = date("Y-m-d");
$categoria = $datos["categoria"];
$contenido1 = $datos["contenido1"];
$subtitulo = $datos["subtitulo"];
$contenido2 = $datos["contenido2"];
$contenido3 = $datos["contenido3"];
$imagen1Error = false;
$imagen2Error = false;
$ruta = "../../assets/img/usuarios/" . $_SESSION["usuario"] . "/articulos/" . $tituloAn;

if ($_FILES['imagen1']['error'] > 0) {
    
} else {
    $mTmpFile = $_FILES['imagen1']['tmp_name'];
    $mTipo = exif_imagetype($mTmpFile);
    if (($mTipo == IMAGETYPE_JPEG) or ( $mTipo == IMAGETYPE_PNG)) {
        $imagen1 = $ruta . "/primeraImagen";
        move_uploaded_file($_FILES['imagen1']['tmp_name'], $imagen1);
    } else {
        $imagen1Error = true;
    }
}
if ($_FILES['imagen2']['error'] > 0) {
    
} else {
    $mTmpFile = $_FILES['imagen2']['tmp_name'];
    $mTipo = exif_imagetype($mTmpFile);
    if (($mTipo == IMAGETYPE_JPEG) or ( $mTipo == IMAGETYPE_PNG)) {
        $imagen2 = $ruta . "/segundaImagen";
        move_uploaded_file($_FILES['imagen2']['tmp_name'], $imagen2);
    } else {
        $imagen2Error = true;
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
        $consulta = "UPDATE `articulo` SET `titulo`='$titulo', `fecha`='$fecha',`categoria`='$categoria',`contenido1`='$contenido1',`contenido2`='$contenido2',`contenido3`='$contenido3',`subtitulo`='$subtitulo' WHERE id_articulo='$idArticulo'";
        $resultado = mysqli_query($conn, $consulta);
        mysqli_close($conn);
        if ($resultado) {
            header("location:../../php/Articulo/listaArticulos.php");
        }
    }
}



