<!DOCTYPE html>
<html>

    <?php include_once '../../head.php'; ?>

    <body>
        <?php
        session_start();
        require_once("../../header.php");

        include_once '../../funciones.php';


        if ($_SESSION['idArticulo_coment'] == 0) {
            $articulo = $_POST['idArticulo'];
        } else {
            $articulo = $_SESSION['idArticulo_coment'];
        }




        $conn = conexionDB();
        $consulta = "SELECT * FROM `articulo` WHERE id_articulo='$articulo'";
        $resultado = mysqli_query($conn, $consulta);
        $resArticulo = mysqli_fetch_array($resultado);
        $imagenes = explode(";", $resArticulo['imagenes']);
        ?>
        <div class="article-clean">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                        <div class="intro">
                            <h1 class="text-center text-secondary"><?php echo $resArticulo['titulo']; ?></h1>
                            <p class="text-center"><span class="by">by</span> <a href="#"><?php echo $resArticulo['nombre_usuario']; ?></a><span class="date"><?php echo $resArticulo['fecha']; ?></span></p><img class="img-fluid" src="<?php echo $imagenes[0]; ?>"></div>
                        <div class="text">
                            <p><?php echo $resArticulo['contenido1']; ?></p>
                            <h2><?php echo $resArticulo['subtitulo']; ?></h2>
                            <p><?php echo $resArticulo['contenido2']; ?></p>
                            <figure><img class="figure-img" src="<?php echo $imagenes[1]; ?>"></figure>
                            <p><?php echo $resArticulo['contenido3']; ?></p>
                        </div>
                        <br><br>
                        <?php
                        if (isset($_SESSION['usuario'])) {
                            ?>
                            <div class="text-center text-secondary">
                                <form action="php/Comentario/crearComentario.php" method="POST">
                                    <textarea name="comentario" rows="5" cols="70" style=" border-radius: 2em; padding: 15px;" placeholder="Escribe aquí tu comentario:"></textarea>
                                    <input type='hidden' value="<?php echo $resArticulo['id_articulo'] ?>" name='idArticulo'/>
                                    <br><br>

                                    <div class="form-group"><button class="btn btn-secondary" type="submit">Agregar comentario</button></div>
                                </form>
                            </div>
                            <hr>
                            <br>
                            <div class="form-inline">
                                <label>Elija una valoracion para este artículo:</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="text-center text-secondary">
                                    <form action="php/Valoracion/crearOActualizarValoracion.php" method="POST">
                                        <p class="valoracion">
                                            <input id="radio1" type="radio" name="estrellas" value="5"><!--
                                            --><label for="radio1">★</label><!--
                                            --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                                            --><label for="radio2">★</label><!--
                                            --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                                            --><label for="radio3">★</label><!--
                                            --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                                            --><label for="radio4">★</label><!--
                                            --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                                            --><label for="radio5">★</label>
                                        </p>
                                        <input type = 'hidden' value = "<?php echo $resArticulo['id_articulo'] ?>" name = 'idArticulo'/>
                                        <br>
                                        <button type = "submit" class = "btn btn-warning"><i class = "far fa-trash-alt d-xl-flex justify-content-xl-center align-items-xl-center">Enviar valoración</i></button>
                                    </form>
                                </div>
                            </div>
                            <br> <br> <br>
                            <div class="form-inline">
                                <p><strong>Media de valoracion del artículo:</strong></p>

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <p style="margin-bottom: 20px; margin-left: 13%;"><?php
                                    $media = valoracionArticulo($resArticulo['id_articulo']);
                                    if ($media <= 5 || $media >= 0) {
                                        echo $media;
                                    } else {
                                        echo 0;
                                    }
                                    ?>/5
                            </div>
                            <?php
                        }
                        ?>
                        <hr>
                        <?php
                        $conn2 = conexionDB();
                        $consulta2 = "SELECT * FROM `comentario` WHERE id_articulo='$articulo'";
                        $resultado2 = mysqli_query($conn2, $consulta2);
                        while ($row = mysqli_fetch_array($resultado2)) {
                            ?>
                            <div class="text-center text-secondary" style="text-align: center;border:solid;border-radius: 2em;width: 70%; padding-top:10px;margin-left: 15%;">

                                <p><strong>Comentario creado por <?php echo $row['nombre_usuario']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['fecha']; ?></strong></p>
                                <p>
                                    <?php echo $row['texto']; ?>
                                </p>
                                <?php
                                if (isset($_SESSION['usuario'])) {
                                    if ($_SESSION['usuario'] == $row['nombre_usuario']) {
                                        ?>
                                        <div class="form-inline" style="margin-left: 30%;">
                                            <form action = "php/Comentario/eliminarComentario.php" method = "POST">
                                                <button type = "submit" class = "btn btn-danger"><i class = "far fa-trash-alt d-xl-flex justify-content-xl-center align-items-xl-center">Eliminar</i></button>
                                                <input type = 'hidden' value = "<?php echo $resArticulo['id_articulo'] ?>" name = 'idArticulo'/>
                                                <input type = 'hidden' value = "<?php echo $row['id_comentario'] ?>" name = 'idComentario'/>
                                            </form>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <form action = "php/Comentario/modificarComentario_vista.php" method = "POST">
                                                <button type = "submit" class = "btn btn-warning"><i class = "far fa-trash-alt d-xl-flex justify-content-xl-center align-items-xl-center">Modificar</i></button>
                                                <input type = 'hidden' value = "<?php echo $resArticulo['titulo'] ?>" name = 'titulo'/>
                                                <input type = 'hidden' value = "<?php echo $resArticulo['id_articulo'] ?>" name = 'idArticulo'/>
                                                <input type = 'hidden' value = "<?php echo $row['id_comentario'] ?>" name = 'idComentario'/>
                                            </form>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                                <br>
                            </div>
                            <br>
                            <br>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
        <?php
        require_once("../../footer.php");
        ?>
    </body>

</html>