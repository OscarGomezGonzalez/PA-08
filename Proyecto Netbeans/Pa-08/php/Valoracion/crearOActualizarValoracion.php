<?php

session_start();
$usuario = $_SESSION['usuario'];
$articuloId = $_POST['idArticulo'];
$nuevaValoracion = $_POST['estrellas'];

include_once '../../funciones.php';

$conn = conexionDB();

$sql = "SELECT * FROM valoracion WHERE `nombre_usuario` = '$usuario' AND `id_articulo` = '$articuloId'";

$query1 = mysqli_query($conn, $sql);

if (mysqli_num_rows($query1) > 0) {
    //Modificamos valoracion con su nuevo atributo
    $sql = "UPDATE `valoracion` SET `valor` = '$nuevaValoracion' WHERE `nombre_usuario` = '$usuario' AND `id_articulo` = '$articuloId'";
} else {

    //CREAR NUEVA VALORACION
    $sql = "INSERT INTO `valoracion` (`id_articulo`, `valor`, `nombre_usuario`) VALUES ('$articuloId', '$nuevaValoracion', '$usuario')";
}
$query2 = mysqli_query($conn, $sql);


//Cerramos la conexion a la base de datos ya que no nos hace falta
mysqli_close($conn);
if ($query2) {
    $_SESSION['idArticulo_coment'] = $articuloId;
    header("Location:../../php/Articulo/articulo_vista.php");
}

//print_r($error);
?>
