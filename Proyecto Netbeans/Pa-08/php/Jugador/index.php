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
            <input type="text" name="pais_origen" value="pais_origen">pais_origen<br>
            <input type="number" name="ranking_jugador" value="0">ranking_jugador premio<br>
            <input type="text" name="nombre_equipo" value="nombre_equipo">nombre_equipo<br>
            <input type="text" name="ruta_imagen" value="ruta_imagen">ruta_imagen<br>
            <input type="submit" value="Enviar" name="btnCrear" />
        </form>

        <?php
        include 'crea_jugador.php';
        include 'ver_jugador.php';
        include 'borra_jugador.php';
        include 'modif_jugador.php';

        ver_jugadores();

        if (isset($_POST['btnCrear'])) {
            crear_jugador();
            header('Location: index.php');
        }

        if (isset($_POST['btnEliminar'])) {
            
            borra_jugador($_POST['custId']);
            header('Location: index.php');
        }

        if (isset($_POST['btnModificar']) || isset($_POST['btnModificarLugar'])) {
            modif_jugador($_POST['custId']);
            //header('Location: index.php');
        }
        ?>
    </body>
</html>
