<?php
//========================
//MODIFICACION DE MENSAJE
//========================
//Guardamos el id del post y el nuevo mensaje que se cambiara por el antiguo
$postId = $_POST['comment'];
$newMessage = $_POST['newComment'];

//---------------------
// Evitar SQL Inyection
//---------------------
//Evitamos la inyeccion sql haciendo un saneamiento de los datos que nos llegan
$saneamiento = Array(
    'newComment' => FILTER_SANITIZE_STRING,
);

$saneado = filter_input_array(INPUT_POST, $saneamiento);
$newMessage = $saneado["newComment"];

//-----------------------------
// Consulta a la base de datos
//-----------------------------
//Realizamos una conexion a la base de datos
include_once '../../funciones.php';
$error[] = "";
$conn = conexionDB();


//Modificamos el mensaje con su nuevo atributo
$consulta = "UPDATE `comentario` SET `texto` = '$newMessage' WHERE `comentario`.`id_comentario` = '$postId'";
$resultado = mysqli_query($conn, $consulta);

//Cerramos la conexion a la base de datos ya que no nos hace falta
mysqli_close($conn);
?>