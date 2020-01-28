<?php

    //======================
    //ELIMINACION DE MENSAJE
    //======================
    //Obtenemos el id del mensaje a eliminar
    $post = $_POST['comment'];

    //----------------------------
    // Consulta a la base de datos
    //----------------------------
    //Realizamos una conexion a la base de datos
    include_once '../../funciones.php';
    $error[] = "";
    $conn = conexionDB();

    //Sentencia para la eliminacion de un mensaje a traves del id
    $consulta = "DELETE FROM `comentario` WHERE `comentario`.`id_comentario` = '$post'";
    $resultado = mysqli_query($conn, $consulta);

    //Cerramos la conexion a la base de datos ya que no nos hace falta
    mysqli_close($conn);
    
    ?>