<?php
/* Smarty version 3.1.34-dev-7, created on 2019-06-26 17:18:28
  from '/www/wwwroot/www.1024code.vip/resources/views/material/admin/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d13386456f074_93578001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1e6bfeb9047727077f05613b52b5456d82123d8' => 
    array (
      0 => '/www/wwwroot/www.1024code.vip/resources/views/material/admin/footer.tpl',
      1 => 1559631017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:analytics.tpl' => 1,
  ),
),false)) {
function content_5d13386456f074_93578001 (Smarty_Internal_Template $_smarty_tpl) {
?>	<footer class="ui-footer">
		<div class="container">
			<marquee>&copy;<?php echo date("Y");?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 | Powered by <a href="/staff">SSPANEL</a> </marquee> <?php if ($_smarty_tpl->tpl_vars['config']->value["enable_analytics_code"] == 'true') {
$_smarty_tpl->_subTemplateRender('file:analytics.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
		</div>
	</footer>

	<!-- js -->
    <?php if ($_smarty_tpl->tpl_vars['config']->value["sspanelAnalysis"] == 'true') {?>
    <!-- Google Analytics -->
    <?php echo '<script'; ?>
>
        window.ga=window.ga||function(){ (ga.q=ga.q||[]).push(arguments) };ga.l=+new Date;
        ga('create', 'UA-111801619-3', 'auto');
        var hostDomain = window.location.host || document.location.host || document.domain;
        ga('set', 'dimension1', hostDomain);
        ga('send', 'pageview');

        (function () {
            function perfops() {
                var js = document.createElement('script');
                js.src = 'https://cdn.jsdelivr.net/npm/perfops-rom';
                document.body.appendChild(js);
            }
            if (document.readyState === 'complete') {
                perfops();
            } else {
                window.addEventListener('load', perfops);
            }
        })();
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 async src="https://www.google-analytics.com/analytics.js"><?php echo '</script'; ?>
>
    <!-- End Google Analytics -->
    <?php }?>
	<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/datatables.net@1.10.19"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="//cdn.jsdelivr.net/gh/DataTables/DataTables@1.10.19/media/js/dataTables.material.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/theme/material/js/base.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/theme/material/js/project.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" color="0,217,255" opacity="0.5" count="49" src="https://cdn.jsdelivr.net/npm/canvas-nest.js@1.0.1"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
