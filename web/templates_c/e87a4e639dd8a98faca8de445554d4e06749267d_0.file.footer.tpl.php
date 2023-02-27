<?php
/* Smarty version 3.1.30, created on 2023-02-23 17:43:44
  from "C:\wamp64\www\demo\web\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63f7d000333057_41207944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e87a4e639dd8a98faca8de445554d4e06749267d' => 
    array (
      0 => 'C:\\wamp64\\www\\demo\\web\\templates\\footer.tpl',
      1 => 1676657921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f7d000333057_41207944 (Smarty_Internal_Template $_smarty_tpl) {
?>

        <footer class="footer">

        </footer>
        </div>
    </body>
</html>
<?php echo '<script'; ?>
 src="js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/tether.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

    $('.dropdown-submenu > a').on("click", function(e) {
        var submenu = $(this);
        $('.dropdown-submenu .dropdown-menu').removeClass('show');
        submenu.next('.dropdown-menu').addClass('show');
        e.stopPropagation();
    });

    $('.dropdown').on("hidden.bs.dropdown", function() {
        // hide any open menus when parent closes
        $('.dropdown-menu.show').removeClass('show');
    });


<?php echo '</script'; ?>
><?php }
}
