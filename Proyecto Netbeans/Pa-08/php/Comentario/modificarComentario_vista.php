<!DOCTYPE html>
<html>

    <?php include_once '../../head.php'; ?>

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
                        <form action="php/Comentario/modificarComentario.php" enctype="multipart/form-data" method="POST">
                            <h2 class="text-center">MODIFICACION COMENTARIO DEL ARTICULO "<?php echo $titulo; ?>"</h2>
                            <br><br>


                            <div class="form-group"><textarea class="form-control"  maxlength="200" rows="5" name="comentario" value="" required=""><?php echo $row['texto']; ?></textarea></div>

                            <input type='hidden' value="<?php echo $idComentario; ?>" name='idComentario'/>
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