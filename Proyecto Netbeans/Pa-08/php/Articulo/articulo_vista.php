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
        $articulo = $_POST['idArticulo'];
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
                            <p class="text-center"><span class="by">by</span> <a href="#"><?php echo $_SESSION['nombre']; ?></a><span class="date"><?php echo $resArticulo['fecha']; ?></span></p><img class="img-fluid" src="<?php echo $imagenes[0]; ?>"></div>
                        <div class="text">
                            <p><?php echo $resArticulo['contenido1']; ?></p>
                            <h2><?php echo $resArticulo['subtitulo']; ?></h2>
                            <p><?php echo $resArticulo['contenido2']; ?></p>
                            <figure><img class="figure-img" src="<?php echo $imagenes[1]; ?>"></figure>
                            <p><?php echo $resArticulo['contenido3']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

</html>