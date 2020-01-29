<?php

include('../../funciones.php');

function getArticulosPaginated($busqueda, $offset, $limit) {

    $sql = "SELECT * FROM articulo WHERE titulo LIKE '%" . $busqueda .
            "%' ORDER BY fecha LIMIT " . $limit . " OFFSET " . $offset;

    $conn = conexionDB();

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        $error[] = "Error en sql busqueda";
    } else {
        if (mysqli_num_rows($query) >= 1) {

            while ($row = mysqli_fetch_array($query)) {


                $articulos[] = array(
                    'id' => $row['id_articulo'],
                    'titulo' => $row['titulo'],
                    'contenido1' => $row['contenido1'],
                    'fecha' => $row['fecha'],
                    'nombre_usuario' => $row['nombre_usuario'],
                    'imagenes' => $row['imagenes']
                );
            }
        } else {
            $error[] = "No se han devuelto resultados";
        }
    }

    mysqli_close($conn);
//For debbuging only
    print_r($error);

    return $articulos;
}

function articulosLeft($offset, $limit, $busqueda) {

    $left = false;
    $offset += $limit;
    $sql = "SELECT id_articulo FROM articulo WHERE titulo LIKE '%" . $busqueda .
            "%' ORDER BY fecha LIMIT " . $limit . " OFFSET " . $offset;
    $conn = conexionDB();

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        $error[] = "Error en sql paginated";
    } else {
        if (mysqli_num_rows($query) > 0) {
            $left = true;
        }
    }

    return $left;
}
