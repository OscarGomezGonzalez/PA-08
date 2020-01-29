<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="#" method="post">
            <br>
            <input type="text" name="nombre" value="nombre">nombre<br>
            <input type="date" name="fechaInicio" value="2020-01-30">fechaInicio<br>
            <input type="date" name="fechaFin" value="2020-01-30">fechaFin<br>
            <input type="text" name="lugar" value="Mickey">lugar<br>
            <input type="number" name="primerPremio" value="0">primer premio<br>
            <input type="number" name="segundoPremio" value="0">segundo premio<br>
            <input type="number" name="premioSemifinales" value="0">premio semifinales<br>
            <input type="submit" value="Enviar" name="btnCrear" />
        </form>

        <?php
        include 'crea_equipo.php';
        include 'ver_equipo.php';
        include 'borra_equipo.php';
        include 'modif_equipo.php';

        ver_equipos();

        if (isset($_POST['btnCrear'])) {
            crear_equipo();
            header('Location: index.php');
        }

        if (isset($_POST['btnEliminar'])) {
            
            borra_equipo($_POST['custId']);
            header('Location: index.php');
        }

        if (isset($_POST['btnModificar']) || isset($_POST['btnModificarLugar'])) {
            modif_equipo($_POST['custId']);
            //header('Location: index.php');
        }
        ?>
    </body>
</html>
