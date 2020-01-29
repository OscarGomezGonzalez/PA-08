<?php
//========================
//MODIFICACION DE MENSAJE
//========================
//Guardamos el id del post y el nuevo mensaje que se cambiara por el antiguo
$postId = $_POST['idComentario'];
$newMessage = $_POST['comentario'];

//---------------------
// Evitar SQL Inyection
//---------------------
//Evitamos la inyeccion sql haciendo un saneamiento de los datos que nos llegan
$saneamiento = Array(
    'comentario' => FILTER_SANITIZE_STRING,
);

$saneado = filter_input_array(INPUT_POST, $saneamiento);
$newMessage = $saneado["comentario"];

//-----------------------------
// Consulta a la base de datos
//-----------------------------
//Realizamos una conexion a la base de datos
include_once '../../funciones.php';
$error[] = "";
$conn = conexionDB();


//Modificamos el mensaje con su nuevo atributo
$consulta = "UPDATE `comentario` SET `texto` = '$newMessage' WHERE `id_comentario` = '$postId'";
$resultado = mysqli_query($conn, $consulta);
if ($resultado) {
    $_SESSION['idArticulo_coment'] = $articuloId;
    header("Location:../../php/Articulo/articulo_vista.php");
}

//Cerramos la conexion a la base de datos ya que no nos hace falta
mysqli_close($conn);
?>