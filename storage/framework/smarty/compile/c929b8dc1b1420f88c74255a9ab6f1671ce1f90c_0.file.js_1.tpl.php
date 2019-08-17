<?php
/* Smarty version 3.1.34-dev-7, created on 2019-06-26 17:18:32
  from '/www/wwwroot/www.1024code.vip/resources/views/material/table/js_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d133868e9eee6_70492600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c929b8dc1b1420f88c74255a9ab6f1671ce1f90c' => 
    array (
      0 => '/www/wwwroot/www.1024code.vip/resources/views/material/table/js_1.tpl',
      1 => 1559631017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d133868e9eee6_70492600 (Smarty_Internal_Template $_smarty_tpl) {
?>function modify_table_visible(id, key) {
	if(document.getElementById(id).checked)
	{
		table_1.columns( '.' + key ).visible( true );
		localStorage.setItem(window.location.href + '-haschecked-' + id, true);
	}
	else
	{
		table_1.columns( '.' + key ).visible( false );
		localStorage.setItem(window.location.href + '-haschecked-' + id, false);
	}
}
<?php }
}
