

<!--
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>PanelAdministrador</title>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>-->

<?php
include '../../head.php';
include '../Jugador/jugador.php';
include '../Equipo/equipo.php';
include 'assets/js/script';

if (isset($_POST['equipo'])) {
    formCreaEquipo();
} elseif (isset($_POST['jugador'])) {
    formCreaJugador();
} elseif (isset($_POST['liga'])) {
    creaLiga();
} elseif (isset($_POST['partido'])) {
    creaPartido();
} elseif (isset($_POST['btnModificarJugador'])) {
    modJugador();
}

function creaPartido() {
    ?>
    <body style = "background-image: url(&quot;assets/img/csgo-logo-wallpapers-4.jpg&quot;);background-position: center;background-size: auto;">

        <div class = "justify-content-center registration-form" style = "margin-top: 10%; margin-left: 10%; margin-right: 10%;">
            <form action = "" method = "post" style = "background-color: #000000;opacity: 0.80;color: rgb(248,249,251);">
                <h3 class = "text-center">Equipo</h3>
                <div class = "form-group">
                    <input class = "form-control item" type = "text" placeholder = "Equipo" name = "equipo1" required = "" minlength = "4" maxlength = "15">
                </div>
                <div class = "form-group">
                    <input class = "form-control item" type = "text" placeholder = "Equipo" name = "equipo2" required = "" minlength = "4"></div>
                <div class = "form-group">
                    <input class = "form-control item" type = "date" placeholder = "Fecha" name = "ranking" required = ""></div>



        </div>
        <div class = "form-group">
            <button class = "btn btn-primary btn-block create-account" type = "submit">Crear</button>
        </div>
    </form>
    </div>
    </body>
    <?php
}

function creaLiga() {
    ?>
    <body style = "background-image: url(&quot;assets/img/csgo-logo-wallpapers-4.jpg&quot;);background-position: center;background-size: auto;">

        <div class = "justify-content-center registration-form" style = "margin-top: 10%; margin-left: 10%; margin-right: 10%;">
            <form action = "" method = "post" style = "background-color: #000000;opacity: 0.80;color: rgb(248,249,251);">
                <h3 class = "text-center">Equipo</h3>
                <div class = "form-group">
                    <input class = "form-control item" type = "text" placeholder = "Nombre" name = "nombre" required = "" minlength = "4" maxlength = "15">
                </div>
                <div class = "form-group">
                    <input class = "form-control item" type = "date" placeholder = "Fecha Inicio" name = "pais" required = "" minlength = "4"></div>
                <div class = "form-group">
                    <input class = "form-control item" type = "date" placeholder = "Fecha Fin" name = "ranking" required = ""></div>
                <div class = "form-group">
                    <input class = "form-control item" type = "text" placeholder = "lugar" name = "lugar" required = "" minlength = "4" maxlength = "15">
                </div>


        </div>
        <div class = "form-group">
            <button class = "btn btn-primary btn-block create-account" type = "submit">Crear</button>
        </div>
    </form>
    </div>
    </body>
    <?php
}

function formCreaEquipo() {
    ?>
    <script>
        function validar(n) {
            if (isNaN(n.value) || n.value > 500) {
                n.value = n.value.substring(0, n.value.length - 1);
            }
        }
    </script>
    <body style="background-image: url(&quot;assets/img/csgo-logo-wallpapers-4.jpg&quot;);background-position: center;background-size: auto;">

        <div class="justify-content-center registration-form" style="margin-top: 10%; margin-left: 10%; margin-right: 10%;">
            <form action="php/Equipo/crea_equipo.php" method="post" style="background-color: #000000;opacity: 0.80;color: rgb(248,249,251);">
                <h3 class="text-center">Equipo</h3>
                <div class="form-group">
                    <input class="form-control item" type="text" placeholder="Nombre" name="nombre" required="" minlength="4" maxlength="15">
                </div>
                <div class="form-group">
                    <input class="form-control item" type="text"  placeholder="Pais" name="pais" required="" minlength="4"></div>
                <div class="form-group">
                    <input class="form-control item" type="text" onkeyup="validar(this)" placeholder="Ranking" name="ranking" required=""></div>
                <div class="form-group" id="jugadoresList">

                    <label id="jugadoresList">Elige Jugadores:</label>
                    <select id="jugadorSeleccionado" class="form-control op-select" value="" onchange="displayPlayers()" id="selectJugador">

                        <?php
                        $jugadores = getAllPlayers();
                        print_r($jugadores);

                        $numJugadores = sizeof($jugadores);

                        for ($i = 0; $i < $numJugadores; $i++) {

                            if (!isPlayerInTeam($jugadores[$i])) {
                                ?>
                                <option class="op"><?php echo$jugadores[$i]['nombre']; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div> 



                <div class="form-group">
                    <button class="btn btn-primary btn-block create-account" type="submit">Crear</button>
                </div>
            </form></div>

    </body>
    <?php
}

function modEquipo() {
    ?>
    <body style="background-image: url(&quot;assets/img/csgo-logo-wallpapers-4.jpg&quot;);background-position: center;background-size: auto;">

        <div class="justify-content-center registration-form" style="margin-top: 10%; margin-left: 10%; margin-right: 10%;">
            <form action="#" method="post" style="background-color: #000000;opacity: 0.80;color: rgb(248,249,251);">
                <h3 class="text-center">Equipo</h3>
                <div class="form-group">
                    <input class="form-control item" type="text" placeholder="Nombre" name="nombre" required="" minlength="4" maxlength="15">
                </div>
                <div class="form-group">
                    <input class="form-control item" type="text"  placeholder="Pais" name="pais" required="" minlength="4"></div>
                <div class="form-group">
                    <input class="form-control item" type="ranking" id="password" placeholder="Ranking" name="ranking" required="" minlength="4"></div>

                <div class="form-group" id="jugadoresList">

                    <label id="jugadoresList">Elige Jugadores:</label>
                    <select id="jugadorSeleccionado" class="form-control op-select" value="" onchange="displayPlayers()" id="selectJugador">

                        <?php
                        $jugadores = getAllPlayers();
                        print_r($jugadores);

                        $numJugadores = sizeof($jugadores);

                        for ($i = 0; $i < $numJugadores; $i++) {

                            if (!isPlayerInTeam($jugadores[$i])) {
                                ?>
                                <option class="op"><?php echo$jugadores[$i]['nombre']; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div> 
                <div id='inputJugadores'>

                </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block create-account" type="submit">Modificar</button>
        </div>
    </form>

    </body>
    <?php
}

function formCreaJugador() {
    ?>
    }
    <body style = "background-image: url(&quot;assets/img/csgo-logo-wallpapers-4.jpg&quot;);background-position: center;background-size: auto;">

        <div class = "justify-content-center registration-form" style = "margin-top: 10%; margin-left: 10%; margin-right: 10%;">
            <form action = "php/Jugador/crea_jugador.php" method = "post" style = "background-color: #000000;opacity: 0.80;color: rgb(248,249,251);">
                <h3 class = "text-center">Jugador</h3>
                <div class = "form-group">
                    <input class = "form-control item" type = "text" placeholder = "Nombre" name = "nombre" required = "" minlength = "4" maxlength = "15">
                </div>
                <div class = "form-group">
                    <input class = "form-control item" type = "text" placeholder = "Pais" name = "pais" required = "" minlength = "4"></div>
                <div class = "form-group">
                    <input class = "form-control item" type = "number" id = "password" placeholder = "Ranking" name = "ranking" required = "" minlength = "4"></div>

                <!--<div class = "form-group" id = "jugadoresList">

                    <label id = "jugadoresList">Elige Jugadores:</label>

                    <select id = "jugadorSeleccionado" class = "form-control op-select" value = "" onchange = "displayPlayers()" id = "selectJugador">

                <?php
                /* $equipos = getAllEmplyTeams();
                  //print_r($jugadores);
                  $numEquipos = sizeof($jugadores);
                  echo 'loko';
                  for ($i = 0; $i < $numEquipos; $i++) {

                  if (!isPlayerInTeam($equipos[$i])) {
                  ?>
                  <option class="op"><?php echo$equipos[$i]['nombre']; ?></option>
                  <?php
                  }
                  } */
                ?>
                    </select></div>--> 
                <div class="form-group">
                    <button class="btn btn-primary btn-block create-account" type="submit">Crear</button>
                </div>


            </form>
        </div>
    </body>
    <?php
}

function modJugador() {
    ?>
    <body style="background-image: url(&quot;assets/img/csgo-logo-wallpapers-4.jpg&quot;);background-position: center;background-size: auto;">

        <div class="justify-content-center registration-form" style="margin-top: 10%; margin-left: 10%; margin-right: 10%;">
            <form action="#" method="post" style="background-color: #000000;opacity: 0.80;color: rgb(248,249,251);">
                <h3 class="text-center">Equipo</h3>
                <div class="form-group">
                    <input class="form-control item" type="text" placeholder="Nombre" name="nombre" required="" minlength="4" maxlength="15">
                </div>
                <div class="form-group">
                    <input class="form-control item" type="text"  placeholder="Pais" name="pais" required="" minlength="4"></div>
                <div class="form-group">
                    <input class="form-control item" type="ranking" id="password" placeholder="Ranking" name="ranking" required="" minlength="4"></div>

                <div class="form-group" id="jugadoresList">

                    <label id="jugadoresList">Elige Jugadores:</label>
                    <select id="jugadorSeleccionado" class="form-control op-select" value="" onchange="displayPlayers()" id="selectJugador">

                        <?php
                        $equipos = getAllEmplyTeams();
                        //print_r($jugadores);
                        $numEquipos = sizeof($jugadores);
                        echo 'loko';
                        for ($i = 0; $i < $numEquipos; $i++) {

                            if (!isPlayerInTeam($equipos[$i])) {
                                ?>
                                <option class="op"><?php echo$equipos[$i]['nombre']; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div> 
                <div id='inputJugadores'>

                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block create-account" type="submit">Modificar</button>
                </div>
            </form>
        </div>
    </body>
    <?php
}
?>
<script type="text/javascript">
    function displayPlayers() {
        var escogidos = document.getElementById("inputJugadores");
        if (escogidos.hasChildNodes()) {
            var children = escogidos.childNodes;
            var cont = 1;
            for (var i = 0; i < children.length; i++) {
                cont++;
            }
        }
        var op = document.getElementById("jugadorSeleccionado");
        if (op.value != "") {
            if (cont <= 10) {
                var aux = op.value;
                // if (op !== null) {
                var padre = document.getElementById("jugadoresList");

                var hijo = document.createElement("input");
                var salto = document.createElement("br");
                hijo.setAttribute("name", "jugador" + cont);
                //hijo.setAttribute("type", "text");
                hijo.value = aux;
                //var boton = document.createElement("buttom");
                escogidos.appendChild(hijo);
                escogidos.appendChild(salto);
                padre.appendChild(escogidos);
            }
        }
    }

    function displayTeams() {
        var escogidos = document.getElementById("inputJugadores");
        if (escogidos.hasChildNodes()) {
            var children = escogidos.childNodes;
            var cont = 1;
            for (var i = 0; i < children.length; i++) {
                cont++;
            }
        }
        var op = document.getElementById("jugadorSeleccionado");
        if (op.value != "") {
            if (cont <= 10) {
                var aux = op.value;
                // if (op !== null) {
                var padre = document.getElementById("jugadoresList");

                var hijo = document.createElement("input");
                var salto = document.createElement("br");
                hijo.setAttribute("name", "jugador" + cont);
                //hijo.setAttribute("type", "text");
                hijo.value = aux;
                //var boton = document.createElement("buttom");
                escogidos.appendChild(hijo);
                escogidos.appendChild(salto);
            }
        }
    }
</script>