{include file="header.tpl"}
    {dk_daolister table="mensajes" name="msje" resultsPerPage=3 orderBy="fecha DESC"}

        {dkf_declare
        type = "text"
        name = "f_t"
        queryToApply="titulo LIKE \"%@VALUE@%\""
        }

        <form class="navbar-form navbar-left" action="http://localhost/demo/web/index.php" method="get">
            {dk_filters name="busqueda"}
            <div class="form-group" id="busqueda">
                {if $smarty.get.dkf_msje_f_t}
                    {$valorb = $smarty.get.dkf_msje_f_t}
                {else}
                    {$valorb = ""}
                {/if}
                {dkf_input name="f_t" class="form-control" placeholder="Búsqueda" value=$valorb}
            </div>
            <button type="submit" id="btnbusqueda" class="btn btn-default">Buscar</button>
            {/dk_filters}
        </form>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                {if $smarty.session.usuario}
                    <li><a id="user"><span class="glyphicon glyphicon-user usernav"></span>{$smarty.session.usuario}</a></li>
                    <li><a id="textlogout" href="http://localhost/demo/web/login.php?logout=true">CERRAR SESIÓN</a></li>
                {else}
                    <li><a id="textlogout" href="http://localhost/demo/web/login.php">INICIAR SESIÓN</a></li>
                {/if}
            </ul>
        </div>
        </div><!-- /.container-fluid -->
        </nav>

<body id="fondo">

<div class="container-fluid text-center posts">
    <h1 class="h1ind">POSTS</h1>
</div>


        <div class="container-fluid post">
            {dk_lister}
            {dkl_getdao assign="daoMensajes"}
                {$daoComentarios=$daoMensajes->getComentarios()}
            <div class="row" id="divmens">
                <a class="mensaje" href="http://localhost/demo/web/mensaje.php?id={$daoMensajes->idmsje}" >{$daoMensajes->titulo|reemplazo}</a>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <p><span class="glyphicon glyphicon-user"> {$daoMensajes->usuario|reemplazo}</span></p>
                </div>
                <div class="col-md-4">
                    <p><span class="glyphicon glyphicon-calendar">{$daoMensajes->fecha} </span></p>
                </div>
                <div class="col-md-4">
                    <p><span class="glyphicon glyphicon-comment"> {$daoComentarios->count()}</span></p>
                </div>
            </div>
            {/dk_lister}
        </div>

    <div class="container-fluid botones text-center">
        {include 'includes/paginator.tpl'}
    </div>

    {if $smarty.session.usuario}

    {if $smarty.post.titulo}
        {$valor=$smarty.post.titulo}
    {/if}

        <div class="container-fluid text-center ingmsj">
            <h2 class="publicar">Publique un nuevo post</h2>
            <form action="http://localhost/demo/web/index.php" method="post" id="formindex" onsubmit="return validacionindex();">
                <input type="text" placeholder="Título" maxlength="100" name="titulo" id="tit" class="form-control tit" value="{$valor}">
                <textarea name="mensaje" id="post" placeholder="Contenido" class="form-control msje" ></textarea>
                <br>
                <br>
                <button type="submit" class="btn btn-lg btnmsje" name="guardar">Subir</button>
            </form>
        </div>
    {/if}
    {/dk_daolister}


</body>

<script type="text/javascript" src="../js/validaciones.js"></script>




</html>

