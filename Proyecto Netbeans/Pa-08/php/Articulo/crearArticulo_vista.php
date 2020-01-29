<!DOCTYPE html>
<html>



    <?php include_once '../../head.php'; ?>

    <body>
        <?php require_once("../../header.php"); ?>
        <div class="article-clean">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                        <form action="php/Articulo/crearArticulo.php" enctype="multipart/form-data" method="POST">
                            <h2 class="text-center">NUEVO ARTÍCULO</h2>
                            <br><br>
                            <div class="form-group"><input class="form-control" type="text" name="titulo" placeholder="TÍTULO DEL ARTÍCULO" required=""></div>
                            <div class="form-group"><input class="form-control" type="text" name="categoria" placeholder="CATEGORÍA" required=""></div>
                            <div class="form-group"><label for="file">Primera imagen artículo: </label><br><input name="imagen1" type="file" value="Selecciona imagen para artículo"></div>
                            <div class="form-group"><textarea class="form-control"  maxlength="900" rows="5" name="contenido1" placeholder="PRIMER CONTENIDO" required=""></textarea></div>
                            <div class="form-group"><input class="form-control" type="text" name="subtitulo" placeholder="SUBTÍTULO DEL ARTÍCULO" required=""></div>
                            <div class="form-group"><textarea class="form-control"  maxlength="900" rows="5" name="contenido2" placeholder="SEGUNDO CONTENIDO" required=""></textarea></div>
                            <div class="form-group"><label for="file">Segunda imagen artículo: </label><br><input name="imagen2" type="file" value="Selecciona imagen para artículo"></div>
                            <div class="form-group"><textarea class="form-control"  maxlength="900" rows="5" name="contenido3" placeholder="TERCER CONTENIDO" required=""></textarea></div>

                            <div class="form-group"><button class="btn btn-secondary btn-block bg-secondary" type="submit">Crear Artículo</button></div>
                        </form>
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