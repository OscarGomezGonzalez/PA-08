<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Untitled</title>
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
        <link rel="stylesheet" href="../../assets/css/Article-Clean.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
    </head>

    <body>
        <?php
        include_once '../../funciones.php';

        session_start();
        $idComentario = $_POST['idComentario'];
        $titulo = $_POST['titulo'];
        $conn = conexionDB();
        $consulta = "SELECT * FROM `comentario` WHERE id_comentario='$idComentario'";
        $resultado = mysqli_query($conn, $consulta);
        $row = mysqli_fetch_array($resultado);
        ?>

        <div class="article-clean">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                        <form action="../../php/Articulo/modificarArticulo.php" enctype="multipart/form-data" method="POST">
                            <h2 class="text-center">MODIFICACION COMENTARIO DEL ARTICULO "<?php echo $titulo; ?>"</h2>
                            <br><br>


                            <div class="form-group"><textarea class="form-control"  maxlength="200" rows="5" name="comentario" value="" required=""><?php echo $row['texto']; ?></textarea></div>

                            <input type='hidden' value="<?php echo $row['id_articulo'] ?>" name='idArticulo'/>
                            <input type='hidden' value="<?php echo $row['titulo'] ?>" name='titulo'/>
                            <div class="form-group"><button class="btn btn-secondary btn-block bg-secondary" type="submit">Modificar Artículo</button></div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

</ht