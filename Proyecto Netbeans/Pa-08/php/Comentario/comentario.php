<?php

function addComentario(){
    $saneamiento = Array(//Evitamos la inyeccion sql haciendo un saneamiento de los datos
        'msgTextArea' => FILTER_SANITIZE_STRING,
    );
    //Saneamos
    $saneado = filter_input_array(INPUT_POST, $saneamiento); // entradas te devuelve un array asociativo clave valor con los campos del formulario 

    //Dejamos publicar lo que se desee por lo que no habría validación 
    //procedemos a la recogida de datos
    $message = $saneado['msgTextArea'];
    $postedBy = $_SESSION['username'];
    $articuloId = $_GET['id'];

    //----------------------------
    // Consulta a la base de datos
    //----------------------------

    //Realizamos una conexion a la base de datos
    include_once '../../funciones.php';
    $error[] = "";
    $conn = conexionDB();
    //Realizamos la insercion del mensaje en la Base de Datos con todos los atributos correspondientes
    $consulta = "INSERT INTO `comentario` (`id`, `postedBy`, `id_articulo`, `fecha`, `texto`) VALUES ('NULL', '$postedBy', '$articuloId', CURRENT_TIMESTAMP, '$message')";
    $resultado = mysqli_query($conn, $consulta);

    mysqli_close($conn); // Cerramos la base de datos

    //header("");
    //exit();
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
}

function eliminarComentario(){
    
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
}