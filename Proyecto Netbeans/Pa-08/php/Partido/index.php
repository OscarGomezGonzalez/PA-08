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
            <input type="text" name="id_liga" value="id_liga">id_liga<br>
            <input type="date" name="fecha" value="2020-01-30">fecha<br>
            <input type="text" name="equipo1" value="equipo1">equipo1<br>
            <input type="text" name="equipo2" value="equipo2">equipo2<br>
            <input type="text" name="mapa1" value="mapa1">mapa1<br>
            <input type="text" name="mapa2" value="mapa2">mapa2<br>
            <input type="text" name="mapa3" value="mapa3">mapa3<br>
            <input type="text" name="ganador1" value="ganador1">ganador1<br>
            <input type="text" name="ganador2" value="ganador2">ganador2<br>
            <input type="text" name="ganador3" value="ganador3">ganador3<br>
            <input type="submit" value="Enviar" name="btnCrear" />
        </form>

        <?php
        include 'crea_partida.php';
        include 'ver_partida.php';
        include 'borra_partida.php';
        include 'modif_partida.php';

        ver_partidas();

        if (isset($_POST['btnCrear'])) {
            crear_partida();
            header('Location: index.php');
        }

        if (isset($_POST['btnEliminar'])) {
            
            borra_partida($_POST['custId']);
            header('Location: index.php');
        }

        if (isset($_POST['btnModificar']) || isset($_POST['btnModificarLugar'])) {
            modif_partida($_POST['custId']);
            //header('Location: index.php');
        }
        ?>
    </body>
</html>
