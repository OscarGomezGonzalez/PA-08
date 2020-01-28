<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Blog Home - Start Bootstrap Template</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="assets/bootstrap/css/blog-home.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
        <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/js/freelancer.js"></script>

    </head>

    <body class='bg-secondary' id="page-top" style="height: 647px;">

        <!-- Navigation -->
        <?php
        //define('__ROOT__', dirname(dirname(__FILE__)));
        //require_once(__ROOT__ . 'index.php');
        session_start();

        include_once 'funciones.php';

        require_once("header.php");
        ?>

        <!-- Page Content -->
        <div class="container">

            <div class="row principio">

                <!-- Blog Entries Column -->
                <div class="col-md-8">

                    <h1 class="my-4">Page Heading
                        <small>Secondary Text</small>
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
                    <!-- Pagination -->
                    <ul class="pagination justify-content-center mb-4">
                        <li class="page-item">
                            <a class="page-link" href="#">&larr; Older</a>
                        </li>
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Newer &rarr;</a>
                        </li>
                    </ul>

                </div>

                <!-- Sidebar Widgets Column -->
                <div class="col-md-4" id="sidebar">

                    <!-- Search Widget -->
                    <div class="card my-4">
                        <h5 class="card-header">Search</h5>
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div>

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

                    <!-- Side Widget -->
                    <div class="card my-4">
                        <h5 class="card-header">Side Widget</h5>
                        <div class="card-body">
                            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
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
