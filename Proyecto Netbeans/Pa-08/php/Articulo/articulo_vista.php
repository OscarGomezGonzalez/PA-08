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
        <style>
            .valoracion {
                position: relative;
                overflow: hidden;
                display: inline-block;
            }

            .valoracion input {
                position: absolute;
                top: -100px;
            }


            .valoracion label {
                float: right;
                color: #c1b8b8;
                font-size: 30px; 
            }

            .valoracion label:hover,
            .valoracion label:hover ~ label,
            .valoracion input:checked ~ label {
                color: #ffff00;
            }   
        </style>
    </head>

    <body>
        <?php
        include_once '../../funciones.php';

        session_start();

        if (isset($_SESSION['idArticulo_coment'])) {
            $articulo = $_SESSION['idArticulo_coment'];
            unset($_SESSION["idArticulo_coment"]);
        } else {
            $articulo = $_POST['idArticulo'];
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
                            <p class="text-center"><span class="by">by</span> <a href="#"><?php echo $resArticulo['nombre_usuario']; ?></a><span class="date"><?php echo $resArticulo['fecha']; ?></span></p><img class="img-fluid" src="../../<?php echo $imagenes[0]; ?>"></div>
                        <div class="text">
                            <p><?php echo $resArticulo['contenido1']; ?></p>
                            <h2><?php echo $resArticulo['subtitulo']; ?></h2>
                            <p><?php echo $resArticulo['contenido2']; ?></p>
                            <figure><img class="figure-img" src="../../<?php echo $imagenes[1]; ?>"></figure>
                            <p><?php echo $resArticulo['contenido3']; ?></p>
                        </div>
                        <br><br>
                        <div class="text-center text-secondary">
                            <form action="../../php/Comentario/crearComentario.php" method="POST">
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
                                <form action="../../php/Valoracion/crearValoracion.php" method="POST">
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
                                </form>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center text-secondary" style="text-align: center;border:solid;border-radius: 2em;width: 70%; padding-top:10px;margin-left: 15%;">
                            <h4>></h2>
                                <p></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

</html>