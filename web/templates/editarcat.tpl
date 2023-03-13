{include file="header.tpl"}
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
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

<body class="contlgn">
{if $admin}
    <div class="btn-group dropdown divedit">
    {dk_daolister dao=$daoCategoria name="cat" orderBy="id"}
        <b id="cat">CATEGORÍA: {$daoCategoria->nombre}</b>
            <a class="dropdown-toggle btna" href="#" data-toggle="dropdown" >
                <img class="anadir" title="Editar"  src="http://localhost/demo/web/images/lapiz.png">
            </a>
            <ul class="dropdown-menu" id="menu" role="menu">
                <li ><form class="form" method="post" action="../editarcat.php">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text">Nuevo nombre</label>
                            <input type="hidden" name="action" value="editar">
                            <input type="hidden" name="cat" value="{$daoCategoria->id}">
                            <input type="hidden" name="idedit" value="{$daoCategoria->id}">
                            <input class="form-control" name="nombre" placeholder="Nombre">
                        </div>
                <li><button id="agregar" type="submit" name="editar" class="btn btn-primary">EDITAR</button></li>
                </form></li>
            </ul>

        </div>
        <table class="table text-center">
            <thead >
            <tr >
                <th scope="col" class="text-center">SUBCATEGORIAS</th>
                <th scope="col" class="text-center">
                    <div class="btn-group dropdown">
                        <a class="dropdown-toggle btna" href="#" data-toggle="dropdown" >
                            <img class="anadir" title="Añadir"  src="http://localhost/demo/web/images/anadir.png">
                        </a>
                        <ul class="dropdown-menu" id="menu" role="menu">
                            <li ><form class="form" method="post" action="../editarcat.php">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text">Nueva subcategoría</label>
                                        <input type="hidden" name="action" value="add">
                                        <input type="hidden" name="cat" value="{$daoCategoria->id}">
                                        <input type="hidden" name="idedit" value="{$daoCategoria->id}">
                                        <input class="form-control" name="nombre" placeholder="Nombre">
                                    </div>
                            <li><button id="agregar" type="submit" name="agregar" class="btn btn-primary">AGREGAR</button></li>
                            </form></li>
                        </ul>
                    </div>

                </th>
            </tr>
            </thead>
    {/dk_daolister}
    {dk_daolister dao=$daoSubcategoria name='subcat' orderBy="id"}
            <tbody>
            {dk_lister}
                <tr>
                    <td>{$daoSubcategoria->nombre}</td>
                    <td>
                        <a href="http://localhost/demo/web/editarcat.php?action=eliminar&id={$daoSubcategoria->id}&cat={$daoSubcategoria->idpadre}"><img class="eliminar" title="Eliminar" src="http://localhost/demo/web/images/eliminar.png"></a>
                        <div class="btn-group dropdown">
                        <a class="dropdown-toggle btna" href="#" data-toggle="dropdown">
                            <img class="editar" title="Editar"  src="http://localhost/demo/web/images/lapiz.png"></a>
                        <ul class="dropdown-menu" id="menu" role="menu">
                            <li ><form class="form" method="post" action="../editarcat.php">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text">Nuevo nombre</label>
                                        <input type="hidden" name="action" value="editar">
                                        <input type="hidden" name="cat" value="{$daoSubcategoria->idpadre}">
                                        <input type="hidden" name="idedit" value="{$daoSubcategoria->id}">
                                        <input class="form-control" name="nombre" placeholder="Nombre">
                                    </div>
                            <li><button id="agregar" type="submit" name="editar" class="btn btn-primary">EDITAR</button></li>
                            </form></li>
                        </ul>

                        </div>
                    </td>
                </tr>
            {/dk_lister}
            </tbody>
        </table>
    {/dk_daolister}
{/if}
</body>
