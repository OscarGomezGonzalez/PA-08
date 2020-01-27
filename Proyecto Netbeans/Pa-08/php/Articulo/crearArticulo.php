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
        <div class="article-clean">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                        <form action="../../php/Usuario/registro.php" enctype="multipart/form-data" method="POST">
                            <h2 class="text-center">NUEVO ARTÍCULO</h2>
                            <br><br>
                            <div class="form-group"><input class="form-control" type="text" name="titulo" placeholder="TÍTULO DEL ARTÍCULO" required=""></div>
                            <div class="form-group"><label for="file">Primera imagen artículo: </label><br><input name="imagen1" type="file" value="Selecciona imagen para artículo"></div>
                            <div class="form-group"><textarea class="form-control"  maxlength="200" rows="5" name="contenido1" placeholder="PRIMER CONTENIDO" required=""></textarea></div>
                            <div class="form-group"><input class="form-control" type="text" name="subtitulo" placeholder="SUBTÍTULO DEL ARTÍCULO" required=""></div>
                            <div class="form-group"><textarea class="form-control"  maxlength="200" rows="5" name="contenido2" placeholder="SEGUNDO CONTENIDO" required=""></textarea></div>
                            <div class="form-group"><label for="file">Segunda imagen artículo: </label><br><input name="imagen2" type="file" value="Selecciona imagen para artículo"></div>
                            <div class="form-group"><textarea class="form-control"  maxlength="200" rows="5" name="contenido2" placeholder="TERCER CONTENIDO" required=""></textarea></div>

                            <div class="form-group"><button class="btn btn-secondary btn-block bg-secondary" type="submit">Crear Artículo</button></div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

</html>