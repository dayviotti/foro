{include file="header.tpl"}
    {dk_daolister table="mensajes" name="msje" resultsPerPage=3 orderBy="idmsje DESC"}

        {dkf_declare
        type = "text"
        name = "f_t"
        queryToApply="titulo LIKE \"%@VALUE@%\""
        }

        {dkf_declare
            type = "text"
            name = "f_c"
            queryToApply="categoria LIKE \"%@VALUE@%\""
        }



        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><div class="btn-group dropdown buscar">
                        <a class="dropdown-toggle btna" href="#" data-toggle="dropdown" >
                            <p><span class="glyphicon glyphicon-search"></span></p>
                        </a>
                        <ul class="dropdown-menu " id="menu" role="menu">
                            <li ><form class="navbar-form text-center" action="http://localhost/demo/web/index.php" method="get">
                                    {dk_filters name="busqueda"}
                                        <div class="form-group text-center">
                                            {if $smarty.get.dkf_msje_f_t}
                                                {$valorb = $smarty.get.dkf_msje_f_t}
                                            {else}
                                                {$valorb = ""}
                                            {/if}
                                            {dkf_input name="f_t" class="form-control" placeholder="Título" value=$valorb}
                                            <br>
                                            <br>
                                            {dkf_input name="f_c" class="form-control" placeholder="Categoría"}
                                            <br>
                                        </div>
                                        <button type="submit" id="btnbusqueda" class="btn btn-default">Filtrar</button>
                                    {/dk_filters}
                                </form></li>
                        </ul>
                    </div>
                </li>
                {if $smarty.session.usuario}
                    <li><a id="user"><span class="glyphicon glyphicon-user usernav"></span>{$smarty.session.usuario}</a></li>
                    <li><a id="textlogout" href="http://localhost/demo/web/login.php?logout=true">CERRAR SESIÓN</a></li>
                {else}
                    <li><a id="textlogout" href="http://localhost/demo/web/login.php">INICIAR SESIÓN</a></li>
                {/if}
                {if $admin}
                    <li><a id="textlogout" href="http://localhost/demo/web/categorias.php">EDITAR CATEGORIAS</a></li>
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
                <div class="col-md-3 text-left">
                    <p><span class="glyphicon glyphicon-user"> {$daoMensajes->usuario|reemplazo}</span></p>
                </div>
                <div class="col-md-3 text-left">
                    <p><span class="glyphicon glyphicon-calendar">{$daoMensajes->fecha} </span></p>
                </div>
                <div class="col-md-2 text-left">
                    <p><span class="glyphicon glyphicon-comment"> {$daoComentarios->count()}</span></p>
                </div>
                <div class="col-md-4 text-left">
                    <p><span class="glyphicon glyphicon-star"> {$daoMensajes->categoria|reemplazo}</span></p>
                </div>
            </div>
            {/dk_lister}
        </div>

    <div class="container-fluid botones text-center">
        {include 'includes/paginator.tpl'}
    </div>
{/dk_daolister}
    {if $smarty.session.usuario}

    {if $smarty.post.titulo}
        {$valor=$smarty.post.titulo}
    {/if}
        <div class="container-fluid text-center ingmsj">
            <h2 class="publicar">Publique un nuevo post</h2>
            <form action="http://localhost/demo/web/index.php" method="post" id="formindex" onsubmit="return validacionindex();">
                <input type="hidden" name="action" value="add">
                <input type="text" placeholder="Título" maxlength="100" name="titulo" id="tit" class="form-control tit" value="{if $smarty.post.titulo!=""}{$smarty.post.titulo}{/if}">
                <input type="text" name="mensaje" id="post" placeholder="Contenido" class="form-control msje" value="{if $smarty.post.mensaje!=""}{$smarty.post.mensaje}{/if}">
                <br>
                {dk_daolister dao=$daoCategoria name='cat'}
                <select id="categorias" name="categorias" class="form-control">
                    <option value="0">Seleccione una categoría</option>
                    {dk_lister}
                    <option value="{$daoCategoria->id}">{$daoCategoria->nombre}</option>
                    {/dk_lister}
                </select>
                <br>
                {/dk_daolister}
                <select id="subcategorias" name="subcategorias" class="form-control">
                    <option value="0">Selecccione una subcategoría</option>
                </select>

                <button type="submit" class="btn btn-lg btnmsje" name="guardar">Subir</button>
            </form>

            {dk_has_errors}<div class="alert alert-danger" role="alert" style="margin-bottom: 10px;"><div>
                    {dk_showmessages}<span class="fa fa-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>
                    {$dkm_message}<br/>
                    {/dk_showmessages}</div></div>
            {/dk_has_errors}

        </div>

    {/if}



</body>

<script>
    $(document).ready(function (e){
        $("#categorias").change(function (){
           var parametros = "id="+$("#categorias").val();
            $.ajax({
                data: parametros,
                url:'../ajax_categorias.php',
                type: 'get',
                beforeSend: function () { },
                success: function (response) {
                    var data = JSON.parse(response);
                    var html = "<option value='0'>Selecccione una subcategoría</option>"
                    for (x of data){
                        html+= "<option value='" + x.nombre + "'>" + x.nombre + "</option>"
                    }
                    $('#subcategorias').html(html)
                },
                error:function (){
                    alert("error")
                }
            });
        })

    })
</script>




</html>

