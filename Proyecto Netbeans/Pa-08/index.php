<!DOCTYPE html>
<html>

    <?php include_once 'head.php'; ?>

    <body class='bg-secondary' id="page-top" style="height: 647px;">

        <!-- Navigation -->
        <?php
        session_start();

        include_once 'funciones.php';

        require_once("header.php");
        ?>

        <!-- Page Content -->
        <div class="container">

            <div class="row principio">

                <!-- Blog Entries Column -->
                <div class="col-md-8">

                    <h1 class="my-4">Últimas noticias
                        <small>de tus deportes favoritos</small>
                    </h1>

                    <!-- Blog Post -->
                    <?php
                    $conn = conexionDB();
                    $consulta = "SELECT * FROM `articulo`";
                    $resultado = mysqli_query($conn, $consulta);
                    $cont = 0;
                    while ($row = mysqli_fetch_array($resultado) || $cont < 8) {
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
                        $cont++;
                    }
                    ?>

                </div>

                <!-- Sidebar Widgets Column -->
                <div class="col-md-4" id="sidebar">
                    <!-- Categories Widget -->
                    <div class="card my-4">
                        <h5 class="card-header">Categories</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="#">Web Design</a>
                                        </li>
                                        <li>
                                            <a href="#">HTML</a>
                                        </li>
                                        <li>
                                            <a href="#">Freebies</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="#">JavaScript</a>
                                        </li>
                                        <li>
                                            <a href="#">CSS</a>
                                        </li>
                                        <li>
                                            <a href="#">Tutorials</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        <!-- Footer -->
        <?php include("footer.php"); ?>


    </body>

</html>
