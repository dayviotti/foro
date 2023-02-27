
{include file="header.tpl"}
<body class="contlgn">
<div class="container-fluid text-center contlgn" >
    <div id="containerlgn" class="container" >
        <h1 class="h1lgn">LOGIN</h1>
        {if $smarty.post.usuario}
            {$valor = $smarty.post.usuario}
        {/if}

        <form action="http://localhost/demo/web/login.php" method="post" class="formlgn" id="formlogin" onsubmit="return validacionlogin();">
            <input type="text" placeholder="Usuario" name="usuario" id="usuario" class="form-control" value="{$valor}"> <br>
            <input class="form-control" type="password" id="clave" placeholder="Contraseña" name="password"> <br> <br>
            <button type="submit" id="btnlgn" class="btn btn-lg btn-info" name="ingresar">Ingresar</button>
        </form>

        {if $smarty.post.usuario && $smarty.post.password}
            {if !$smarty.session.usuario}
                    <p id="incorrecto">Usuario y/o contraseña incorrectos. <br> Reinténtelo.</p>
            {/if}
        {/if}
        <div class="divregistrarse">
            <a class="registrarse"  href="http://localhost/demo/web/register.php">¿No tienes una cuenta? Regístrate</a>
        </div>
    </div>

</div>
</body>

<script type="text/javascript" src="../js/validaciones.js"></script>
</html>