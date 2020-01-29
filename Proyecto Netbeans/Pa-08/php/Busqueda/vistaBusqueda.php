<!DOCTYPE html>
<html>

    <?php include '../../head.php'; ?>

    <body class="bg-secondary principio">

        <?php
        require_once("../../header.php");

        include("busqueda.php");

        $offset = 0;
        $limit = 4;
        if (isset($_GET['next'])) {
            $offset = $_GET['next'] + $limit;
        } elseif (isset($_GET['previous'])) {
            $offset = $_GET['previous'] - $limit;
        }

        $busqueda = $_POST['busqueda'];

        $articulos = getArticulosPaginated($busqueda, $offset, $limit);
        $left = articulosLeft($offset, $limit, $busqueda);
        ?>
        <!-- Page Content -->

        <div class="container-fluid" style="height: 80%;width: 100%;margin-top: 2%;margin-right: 2%;margin-left: 2%;padding-top: 0%;">


            <?php
            $numArticulos = sizeof($articulos);

            if ($numArticulos == 0) {
                ?>

            <div class='row justify-content-center' style="margin-top: 10%;margin-bottom: 10%">
                    <div class='col-md-8'>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h1 class="my-4" style="color:grey;">No se han encontrado resultados para tu busqueda :(
                                </h1>
                            </div>

                        </div>

                    </div>
                </div>

                <?php
            } else {

                for ($i = 0; $i < $numArticulos; $i++) {

                    $imagenes = explode(";", $articulos[$i]['imagenes']);
                    ?>

                    <div class='row justify-content-center'>

                        <div class='col-md-8'>

                            <h1 class="my-4" style="color:grey;">Resultados de tu busqueda
                            </h1>
                            <div class="card mb-4">
                                <img class="card-img-top" src="<?php echo $imagenes[0]; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h2 class="card-title"><?php echo $articulos[$i]['titulo']; ?></h2>
                                    <p class="card-text"><?php echo $articulos[$i]['contenido1'] ?></p>
                                    <form action="php/Articulo/articulo_vista.php" method="POST">
                                        <input type='hidden' value="<?php echo $articulos[$i]['id_articulo'] ?>" name='idArticulo'/>
                                        <button  type="submit" class="btn btn-primary">Leer más &rarr;</button>
                                    </form>
                                </div>
                                <div class="card-footer text-muted">
                                    Creado el <?php echo $articulos[$i]['fecha']; ?> por <?php echo $articulos[$i]['nombre_usuario']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div class="row justify-content-center">
                    <div class="col-4 col-md-4 col-xl-4 offset-xl-0" style="min-width: 350px;">
                        <form action="php/Busqueda/vistaBusqueda.php" method="GET" class="d-md-flex justify-content-md-center align-items-md-center">

                            <?php if ($offset > 0) {
                                ?><button class="btn d-md-fex previous" type="submit" name="previous" style="background-color: #98A0A9;color: rgb(0,0,0);font-size: 20px;width: 50%; margin: 5px;" value="<?php echo$offset; ?>">Anterior Pagina</button>
                                <script type="text/javascript">

                                    document.getElementById("previous").onload = function () {
                                        document.getElementById("previous").style.visibility = "visible";
                                    };

                                </script>

                                <?php
                            } else {
                                ?>

                                <script type="text/javascript">

                                    document.getElementById("next").onload = function () {
                                        document.getElementById("next").style.visibility = "hidden";
                                    };

                                </script>
                                <?php
                            }
                            ?>
                            <?php if ($left) {
                                ?><button class="btn next" type="submit" name="next" style="background-color: #98A0A9;color: rgb(0,0,0);font-size: 20px;width: 50%;" value="<?php echo$offset; ?>">Siguiente Pagina</button>
                                <script type="text/javascript">

                                    document.getElementById("next").onload = function () {
                                        document.getElementById("next").style.visibility = "visible";
                                    };

                                </script>
                                <?php
                            } else {
                                ?>

                                <script type="text/javascript">

                                    document.getElementById("next").onload = function () {
                                        document.getElementById("next").style.visibility = "hidden";
                                    };

                                </script>
                                <?php
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>


        <?php include('../../footer.php'); ?>
    </body>
</html>