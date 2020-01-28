<?php

session_start();
$saneamiento = Array(//Evitamos la inyeccion sql haciendo un saneamiento de los datos
    'comentario' => FILTER_SANITIZE_STRING,
);
//Saneamos
$saneado = filter_input_array(INPUT_POST, $saneamiento); // entradas te devuelve un array asociativo clave valor con los campos del formulario 
//Dejamos publicar lo que se desee por lo que no habría validación 
//procedemos a la recogida de datos
$message = $saneado['comentario'];
$postedBy = $_SESSION['usuario'];
$articuloId = $_POST['idArticulo'];
$fecha = date("Y-m-d");

//----------------------------
// Consulta a la base de datos
//----------------------------
//Realizamos una conexion a la base de datos
include_once '../../funciones.php';
$error[] = "";
$conn = conexionDB();
//Realizamos la insercion del mensaje en la Base de Datos con todos los atributos correspondientes
$consulta = "INSERT INTO `comentario`(`id_comentario`, `id_articulo`, `fecha`, `texto`, `nombre_usuario`) VALUES (null,'$articuloId','$fecha','$message','$postedBy')";

$resultado = mysqli_query($conn, $consulta);
mysqli_close($conn); // Cerramos la base de datos
if ($resultado) {
    $_SESSION['idArticulo_coment'] = $articuloId;
    header("Location:../../php/Articulo/articulo_vista.php");
?>
