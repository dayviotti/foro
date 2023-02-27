<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://localhost/demo/web/styles/estilos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid navhead">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand linknav" href="#">FORO</a>
        </div>
        {if $smarty.server.SCRIPT_NAME=='/demo/web/register.php' || $smarty.server.SCRIPT_NAME=='/demo/web/login.php'}
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="linklgn" href="http://localhost/demo/web/index.php"><button class="btn btniniciolgn">Inicio</button></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

        {elseif $smarty.server.SCRIPT_NAME=='/demo/web/mensaje.php'}
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    {if $smarty.session.usuario}
                        <li><a id="user"><span class="glyphicon glyphicon-user usernav">{$smarty.session.usuario}</a></li>
                        <li><a id="textlogout" href="http://localhost/demo/web/index.php?pagina=1">INICIO</a></li>
                        <li><a id="textlogout" href="http://localhost/demo/web/login.php?logout=true">CERRAR SESIÓN</a></li>
                    {else}
                        <li><a id="textlogout" href="http://localhost/demo/web/index.php?pagina=1">INICIO</a></li>
                        <li><a id="textlogout" href="http://localhost/demo/web/login.php">INICIAR SESIÓN</a></li>
                    {/if}
                </ul>
            </div>
    </div><!-- /.container-fluid -->
</nav>
        {/if}

