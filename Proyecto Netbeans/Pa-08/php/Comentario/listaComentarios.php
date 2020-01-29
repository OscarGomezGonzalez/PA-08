<!DOCTYPE html>
<html>

    <?php include_once '../../head.php'; ?>

    <body>
        <?php
        session_start();
        $_SESSION["idArticulo_coment"] = 0;

        include_once '../../funciones.php';

        require_once("../../header.php");
        ?>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 style="width: 343px;">Lista de Comentarios</h2>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center align-items-center"></div>
                    <div class="col"><button class="btn btn-secondary d-flex align-items-center align-self-center" type="button" onclick="location.href = '../../php/Articulo/crearArticulo_vista.php'" style="height: 38px;background-color: #868e96;">Agregar Artículo&nbsp;<i class="fa fa-plus-circle"></i></button></div>
                </div>
                <div class="row">
                    <div class="col-md-12"><table id="example" class="table table-striped table-bordered"  cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Artículo</th>
                                    <th>Fecha</th>
                                    <th>Contenido</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $user = $_SESSION['usuario'];

                                $conn1 = conexionDB();
                                $consulta1 = "SELECT * FROM `comentario` WHERE nombre_usuario='$user'";
                                $resultado1 = mysqli_query($conn1, $consulta1);
                                while ($row = mysqli_fetch_array($resultado1)) {
                                    $id_articulo = $row['id_articulo'];
                                    $conn2 = conexionDB();
                                    $consulta2 = "SELECT titulo FROM `articulo` WHERE id_articulo='$id_articulo'";
                                    $resultado2 = mysqli_query($conn2, $consulta2);
                                    $row2 = mysqli_fetch_array($resultado2);
                                    $titulo = $row2['titulo'];
                                    mysqli_close($conn2);
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id_comentario'] ?></td>
                                        <td><?php echo $titulo ?></td>
                                        <td><?php echo $row['fecha'] ?></td>
                                        <td><?php echo $row['texto'] ?></td>
                                        <td class="form-inline">
                                            <form action="php/Articulo/articulo_vista.php"  method="POST">
                                                <input type='hidden' value="<?php echo $row['id_articulo'] ?>" name='idArticulo'/>
                                                <button type="submit" class="btn btn-light"><i class="fas fa-pencil-alt d-xl-flex justify-content-xl-center align-items-xl-center">Ver Artículo</i></button>
                                            </form>
                                        </td>
                                    </tr> 
                                    </form>
                                    <?php
                                }
                                mysqli_close($conn1);
                                ?>
                            </tbody>
                        </table></div>
                </div>
            </div>
        </div>
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
            <?php require_once("../../footer.php"); ?>
    </body>
</html>