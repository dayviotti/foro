{include file="header.tpl"}

<body class="contlgn">
{if $admin}
    {dk_daolister dao=$daoCategoria name="cat" orderBy="id"}
        <h1>SKILL</h1>
    <table class="table text-center">
        <thead >
        <tr >
            <th scope="col" class="text-center">CATEGORIAS</th>
            <th scope="col" class="text-center">
                <div class="btn-group dropdown">
                    <a class="dropdown-toggle btna" data-toggle="dropdown" >
                        <img class="anadir" title="Añadir"  src="http://localhost/demo/web/images/anadir.png">
                    </a>
                    <ul class="dropdown-menu" id="menu" role="menu">
                        <li ><form class="form" method="post" action="../categorias.php">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label text">Nueva categoría</label>
                                    <input type="hidden" name="action" value="add">
                                    <input class="form-control" name="nombre" placeholder="Nombre">
                                </div>
                        <li><button id="agregar" type="submit" name="agregar" class="btn btn-primary">AGREGAR</button></li>
                        {dk_has_errors}<div class="alert alert-danger" role="alert" style="margin-bottom: 10px;"><div>
                                {dk_showmessages}<span class="fa fa-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>
                                {$dkm_message}<br/>
                                {/dk_showmessages}</div></div>
                        {/dk_has_errors}
                        </form>
                        </li>
                    </ul>
                </div>



                </th>
        </tr>
        </thead>
        <tbody>
        {dk_lister}
        <tr>
            <td>{$daoCategoria->nombre}</td>
            <td>
                <a href="http://localhost/demo/web/categorias.php?action=eliminar&id={$daoCategoria->id}"><img class="eliminar" title="Eliminar" src="http://localhost/demo/web/images/eliminar.png"></a>
                <a href="http://localhost/demo/web/editarcat.php?cat={$daoCategoria->id}"><img class="editar" title="Editar"  src="http://localhost/demo/web/images/lapiz.png"></a>
            </td>
        </tr>
        {/dk_lister}
        </tbody>
    </table>
{/dk_daolister}
{/if}
</body>

