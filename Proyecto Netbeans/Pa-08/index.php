<!DOCTYPE html>
<html>

    <?php include_once 'head.php'; ?>

    <body class='bg-secondary' id="page-top" style="height: 647px;">
      
        <!-- Navigation -->
        <?php
        session_start();
        $_SESSION["idArticulo_coment"] = 0;

        include_once 'funciones.php';

        require_once("header.php");
        ?>

        <!-- Page Content -->
        <div class="container">

            <div class="row principio">

                <!-- Blog Entries Column -->
                <div class="col-md-8">

                    <h1 style="background-color: white; text-align: center; padding-top: 5px;border-radius: 2em;"class="my-4">Últimas noticias
                        <small>de tus deportes favoritos</small>
                    </h1>

                    <!-- Blog Post -->
                    <?php
                    $conn = conexionDB();
                    $consulta = "SELECT * FROM `articulo`";
                    $resultado = mysqli_query($conn, $consulta);
                    while ($row = mysqli_fetch_array($resultado)) {
                        $imagenes = explode(";", $row['imagenes']);
                        ?>

                        <div class="card mb-4">
                            <img class="card-img-top" src="<?php echo $imagenes[0]; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title"><?php echo $row['titulo']; ?></h2>
                                <p class="card-text"><?php echo $row['contenido1'] ?></p>
                                <form action="php/Articulo/articulo_vista.php" method="POST">
                                    <input type='hidden' value="<?php echo $row['id_articulo'] ?>" name='idArticulo'/>
                                    <button  type="submit" class="btn btn-primary">Leer más &rarr;</button>
                                </form>
                            </div>
                            <div class="card-footer text-muted">
                                Creado el <?php echo $row['fecha']; ?> por <?php echo $row['nombre_usuario']; ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>
                <!-- Sidebar Widgets Column -->
                <div class="col-md-4" id="sidebar" style="padding-left: 0px;padding-right: 0px;width: 50%;min-width: 200px; margin-bottom: 2000px;">
                    <!-- Categories Widget -->

                    <div class="card my-4" style="opacity: 0.62;filter: grayscale(0%);background-color: white;color: rgb(248,249,251);height: 100%;width: 100%;">
                        <h5 style="color: #06352b; text-align: center" class="card-header">Ligas</h5>

                        <div class="card-body" style="opacity: 1;padding: 0px;width: 55%;height: 100%; margin-left: 95px; margin-top: 10%;">
                            <?php
                            include 'php/Liga/ver_ligas.php';
                            ver_ligas();
                            ?>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <?php include("footer.php"); ?>
    </body>

</html>
