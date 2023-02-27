{include 'header.tpl'}
<body id="fondo">
<div class="container-fluid text-center posts">
    <h1 class="h1ind">POST</h1>

    <h1 id="titulo">{$daoMensaje->titulo|reemplazo}</h1>
</div>
<div class="container-fluid post">
    <div class="row" id="divmens">
        <a class="mensaje" href="#" >{$daoMensaje->post|reemplazo}</a>
    </div>
    <div class="row text-center">
        <div class="col-md-4">
            <p><span class="glyphicon glyphicon-user"> {$daoMensaje->usuario}</span></p>
        </div>
        <div class="col-md-4">
            <p><span class="glyphicon glyphicon-calendar"> {$daoMensaje->fecha}</span></p>
        </div>
    </div>
</div>

<div class="posts container-fluid text-center">
    <h2 class="h2mens">COMENTARIOS</h2>
</div>
{dk_daolister dao=$daoComentario name="com" orderBy="fecha DESC"}
{dk_lister}
    <div class="container-fluid post">
        <div class="row" id="divmens">
            <a class="mensaje" href="#" >{$daoComentario->texto|reemplazo}</a>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <p><span class="glyphicon glyphicon-user"> {$daoComentario->usuario}</span></p>
            </div>
            <div class="col-md-4">
                <p><span class="glyphicon glyphicon-calendar"> {$daoComentario->fecha}</span></p>
            </div>
            <div class="col-md-4">
                <form method="get" action="http://localhost/demo/web/mensaje.php">
                    <input type="hidden" name="idcom" value="{$daoComentario->id}">
                    {if $smarty.session.usuario}
                        <a class="votos" href="http://localhost/demo/web/mensaje.php?id={$idm}&voto={$daoComentario->id}" role="button"><span class="glyphicon glyphicon-heart"> {$daoComentario->votos}</span></a>
                    {else}
                        <span class="glyphicon glyphicon-heart"> {$daoComentario->votos}</span>
                    {/if}
                </form>
            </div>
        </div>
    </div>
{/dk_lister}
{/dk_daolister}
{if $smarty.session.usuario}
    <div class="container-fluid text-center ingmsj" id="comentariodiv" ">
        <h2 class="publicar">Ingresar nuevo comentario</h2>
        <form action="mensaje.php" method="post" onsubmit="return validacioncom();">
            <input type="hidden" name="id" value="{$idm}">
            <textarea placeholder="Comentario" name="comentario" id="comentario" class="form-control"></textarea>
            <br>
            <br>
            <button type="submit" class="btn btn-lg btnmsje" name="guardar">Guardar</button>
        </form>
    <br>
    </div>

{/if}

</body>


<script type="text/javascript" src="../js/validaciones.js"></script>
