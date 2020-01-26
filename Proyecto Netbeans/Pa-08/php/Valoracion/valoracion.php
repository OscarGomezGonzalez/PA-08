<?php


include_once '../../funciones.php';

//Calcular valoracion actual del articulo para presentar
//valoracionArticulo($articulo);

//$_SESSION['username'] = "juan";
//valorar(0, 1);

$valoracionArticulo = valoracionArticulo(1);
echo $valoracionArticulo;


function getValoracionesArticulo($articulo) {
    //array que guarda todos los errores
    $error[] = "";
    $conn = conexionDB();
    $sql = "SELECT * FROM valoracion WHERE `id_articulo` = '$articulo'";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
          echo "fail";
        $error[] = "Error en sql getValoracion articulo"; 
    } else {
        if (mysqli_num_rows($query) >= 1) {
            while ($row = mysqli_fetch_array($query)) {
                $valoraciones[] = array(
                    'id_articulo' => $row['id_articulo'],
                    'valor' => $row['valor'],
                    'usuario' => $row['usuario']
                );
            }
        } else {
            $error[] = "No se ha encontrado ninguna fila";
        }
    }
   
    mysqli_close($conn);
    //For debbuging only
    print_r($error);
    //print_r($equipos);
    return $valoraciones;
}

function valoracionArticulo($articulo){
    $sum = 0;
    $valoraciones = getValoracionesArticulo($articulo);
    for($i = 0 ; $i < sizeof($valoraciones) ; $i++){
        $sum += $valoraciones[$i]['valor'];
    }
    $media = $sum / sizeof($valoraciones);
    return $media;
}

function valorar($nuevaValoracion, $articulo){
    $usuario = $_SESSION['username'];
    if (isset($usuario)) {
        
        $error[] = "";
        $conn = conexionDB();
               
        $sql = "SELECT * FROM valoracion WHERE `usuario` = '$usuario' AND `id_articulo` = '$articulo'";

        $query = mysqli_query($conn, $sql);

        if (!$query) {
            
            $error[] = "Error en sql getValoracion articulo";//*** 
        } else {
            
            if (mysqli_num_rows($query) > 0) {
                //Modificamos valoracion con su nuevo atributo
                $sql = "UPDATE `valoracion` SET `valor` = '$nuevaValoracion' WHERE `usuario` = '$usuario' AND `id_articulo` = '$articulo'";              
            }else{
              
                //CREAR NUEVA VALORACION
                $sql = "INSERT INTO `valoracion` (`id_articulo`, `valor`, `usuario`) VALUES ('$articulo', '$nuevaValoracion', '$usuario')";
            }  
            $query = mysqli_query($conn, $sql);
        }    
        
        //Cerramos la conexion a la base de datos ya que no nos hace falta
        mysqli_close($conn);
    }
    //print_r($error);
    
}

