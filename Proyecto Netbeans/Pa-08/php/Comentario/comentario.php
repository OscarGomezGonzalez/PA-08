<?php

function addComentario(){
    
}

function mostrarComentario(){ //MUESTRA DE MENSAJES
    //guardamos datos del evento actual
    $articuloId = $_GET['id'];

    //----------------------------
    // Consulta a la base de datos
    //----------------------------
    
    //Realizamos una conexion a la base de datos
    include_once '../../funciones.php';
    $error[] = "";
    $conn = conexionDB();

    //Seleccionamos los mensajes del evento ordenaos por fecha de publicacion
    $consulta_posts = "SELECT * FROM `comentario` WHERE `id_articulo`='$articuloId' ORDER BY `fecha` DESC";
    $resultado_posts = mysqli_query($conn, $consulta_posts);
    $username = array();
    $posts = array();
    while($fila_posts = mysqli_fetch_assoc($resultado_posts)){
        //Recogemos todos los nombres de usuario
        array_push($username, $fila_posts['postedBy']);
        //tambien los datos de los comentarios
        array_push($posts, $fila_posts);
    }

    //eliminamos valores duplicados 
    $username = array_unique($username);

    //preparamos el formato del IN del statement
    $in = '("' . implode('","', $username) . '")';

    $consulta_imagen = "SELECT `nombre_usuario`,`imagen_perfil` FROM `usuario` WHERE `username` IN " . $in;
    $resultado_imagen = mysqli_query($conn, $consulta_imagen) or die("Error en la consulta " + $consulta_imagen);


    while($fila_imagen = mysqli_fetch_assoc($resultado_imagen)){
        //damos un formato a como aparecen las imagenes: será del tipo username => imagen.jpg
        $fila_imagen_format[$fila_imagen['username']] = $fila_imagen['rutaImagen'];
    }

    mysqli_close($conn); //Cerramos la conexion a la base de datos ya que no nos hace falta


    $data = ['posts' => $posts, 'imagenes' => $fila_imagen_format];
    //return
    //Use JSON to transfer data types (arrays and objects) between client and server.
    echo json_encode($data);
}

function modificarComentario(){
   
}

function eliminarComentario(){
    
}