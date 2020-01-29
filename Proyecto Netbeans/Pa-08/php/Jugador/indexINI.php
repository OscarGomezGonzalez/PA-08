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
            <input type="text" name="nombre" value="">nombre<br>
            <input type="text" name="pais" value=""><br>pais
            <input type="number" name="ranking" value=""><br>ranking
            <input type="text" name="equipo" value=""><br>equipo
            <div class="form-group"><label for="file">Elija foto de perfil: </label><br><input name="imagen_perfil" type="file" value="Selecciona imagen de perfil"></div>       
            <input type="submit" value="Enviar" name="enviado" />
        </form>

        <?php
        include 'jugador.php';
        $res = nuevoJugador();
        echo $res;
        /*

        if (isset($_POST['btnCrear'])) {
            crear_liga();
            header('Location: indexINI.php');
        }

        if (isset($_POST['btnEliminar'])) {
            
            borra_liga($_POST['custId']);
            header('Location: indexINI.php');
        }

        if (isset($_POST['btnModificar']) || isset($_POST['btnModificarLugar'])) {
            modif_liga($_POST['custId']);
            //header('Location: index.php');
        }*/
        ?>
    </body>
</html>
