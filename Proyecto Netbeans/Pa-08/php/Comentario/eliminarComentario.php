<?php

//======================
//ELIMINACION DE MENSAJE
//======================
//Obtenemos el id del mensaje a eliminar
$post = $_POST['idComentario'];
$articuloId = $_POST['idArticulo'];

//----------------------------
// Consulta a la base de datos
//----------------------------
//Realizamos una conexion a la base de datos
include_once '../../funciones.php';
$error[] = "";
$conn = conexionDB();

//Sentencia para la eliminacion de un mensaje a traves del id
$consulta = "DELETE FROM `comentario` WHERE `id_comentario` = '$post'";
$resultado = mysqli_query($conn, $consulta);
if ($resultado) {
    $_SESSION['idArticulo_coment'] = $articuloId;
    header("Location:../../php/Articulo/articulo_vista.php");
}
//Cerramos la conexion a la base de datos ya que no nos hace falta
mysqli_close($conn);
?>