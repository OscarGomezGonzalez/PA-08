<!DOCTYPE html>
<html>

    <?php include_once '../../head.php'; ?>

    <body>
        <?php
        session_start();
        $_SESSION['idArticulo_coment'] = 0;
        require_once("../../header.php");
        ?>
        <div style="margin-top: 125px; margin-bottom:12%;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 style="width: 343px;">Lista de Artículos</h2>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center align-items-center"></div>
                    <div class="col"><button class="btn btn-secondary d-flex align-items-center align-self-center" type="button" onclick="location.href = 'php/Articulo/crearArticulo_vista.php'" style="height: 38px;background-color: #868e96;">Agregar Artículo&nbsp;<i class="fa fa-plus-circle"></i></button></div>
                </div>
                <div class="row">
                    <div class="col-md-12"><table id="example" class="table table-striped table-bordered"  cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include_once '../../funciones.php';


                                $user = $_SESSION['usuario'];
                                $conn = conexionDB();
                                $consulta = "SELECT id_articulo,titulo,categoria,fecha FROM `articulo` WHERE nombre_usuario='$user'";
                                $resultado = mysqli_query($conn, $consulta);
                                while ($row = mysqli_fetch_array($resultado)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id_articulo'] ?></td>
                                        <td><?php echo $row['titulo'] ?></td>
                                        <td><?php echo $row['categoria'] ?></td>
                                        <td><?php echo $row['fecha'] ?></td>
                                        <td class="form-inline">
                                            <form action="php/Articulo/articulo_vista.php"  method="POST">
                                                <input type='hidden' value="<?php echo $row['id_articulo'] ?>" name='idArticulo'/>
                                                <button type="submit" class="btn btn-light"><i class="fas fa-pencil-alt d-xl-flex justify-content-xl-center align-items-xl-center">Ver</i></button>
                                            </form>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <form action="php/Articulo/modificarArticulo_vista.php"  method="POST">
                                                <input type='hidden' value="<?php echo $row['id_articulo'] ?>" name='idArticulo'/>
                                                <button type="submit" class="btn btn-warning"><i class="fas fa-pencil-alt d-xl-flex justify-content-xl-center align-items-xl-center">Modificar</i></button>
                                            </form>
                                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <form action="php/Articulo/eliminarArticulo.php"  method="POST">
                                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt d-xl-flex justify-content-xl-center align-items-xl-center">Eliminar</i></button>
                                                <input type='hidden' value="<?php echo $row['id_articulo'] ?>" name='idArticulo'/>
                                                <input type='hidden' value="<?php echo $row['titulo'] ?>" name='nomArticulo'/>
                                            </form>
                                        </td>
                                    </tr> 
                                    </form>
                                    <?php
                                }
                                mysqli_close($conn);
                                ?>
                            </tbody>
                        </table></div>
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