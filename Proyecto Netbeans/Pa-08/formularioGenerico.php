<!DOCTYPE html>
<html>

    <!--
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PanelAdministrador</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>-->

    <?php include 'head.php'; ?>

    <body style="background-image: url(&quot;assets/img/csgo-logo-wallpapers-4.jpg&quot;);background-position: center;background-size: auto;">

        <div class="justify-content-center registration-form" style="margin-top: 10%; margin-left: 10%; margin-right: 10%;">
            <form action="login.php" method="post" style="background-color: #000000;opacity: 0.80;color: rgb(248,249,251);">
                <h3 class="text-center">Entidades</h3>
                <div class="form-group"><input class="form-control item" type="text" id="username" placeholder="Dato1" name="username" required="" minlength="4" maxlength="15" pattern="^[a-zA-Z0-9_.-]*$"></div>
                <div class="form-group"><input class="form-control item" type="password" id="password" placeholder="Dato2" name="password" required="" minlength="4"></div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block create-account" type="submit">Modificar</button></div>
            </form>
        </div>
    </body>

</html>