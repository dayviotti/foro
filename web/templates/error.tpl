{include 'header.tpl'}

<body id="fondo">
<div class="container text-center" id="containererror">
    {if $smarty.get.code == '500'}
        <p class="error2">500 Internal Server Error <br>
            Inténtelo más tarde.
        </p>
    {/if}
    {if $smarty.get.code == 'index'}
        <p class="error2">No se pudo subir el post <br>
            Inténtelo más tarde
        </p>
        {/if}
    {if $smarty.get.code == 'cat'}
        <p class="error2">No se pudo subir la categoría <br>
            Inténtelo más tarde
        </p>
    {/if}{if $smarty.get.code == 'catElim'}
        <p class="error2">No se pudo eliminar la categoría <br>
            Inténtelo más tarde
        </p>
    {/if}
</div>
</body>