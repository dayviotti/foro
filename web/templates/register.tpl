<html>
{include file="header.tpl"}
<div class="container-fluid text-center contlgn" >
    <div id="containerlgn" class="container" >
        <h1 class="h1reg">REGISTRO</h1>
        {if $smarty.post.usuarionuevo}
            {$valor = $smarty.post.usuarionuevo}
        {/if}
        {if !$smarty.session.usuario}
            <form action="http://localhost/demo/web/register.php" method="post" class="formlgn" id="formlogin" onsubmit="return validacionreg();">
                <input type="text" placeholder="Usuario" name="usuarionuevo" id="usuario" class="form-control" value="{$valor}"> <br>
                <input class="form-control" type="password" id="clave" placeholder="Contraseña" name="clavenueva"> <br> <br>
                <button type="submit" id="btnlgn" class="btn btn-lg btn-info" name="registrarse">Registrarse</button>
            </form>
                {if $smarty.post.usuarionuevo && $smarty.post.clavenueva}
                    {if !$registro}
                        <p id="incorrecto">Nombre de usuario existente. <br> Elija otro.</p>
                    {/if}
                {/if}
            {/if}


            <div class="divregistrarse">
                <a class="registrarse"  href="http://localhost/demo/web/login.php">¿Ya tienes una cuenta? Inicia sesión</a>
            </div>
    </div>
</div>


<script type="text/javascript" src="../js/validaciones.js"></script>
</html>