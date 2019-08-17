<?php
/* Smarty version 3.1.34-dev-7, created on 2019-06-26 17:17:21
  from '/www/wwwroot/www.1024code.vip/resources/views/material/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d133821c76e38_71163241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1185e819423f52e3a6d945627a46ea251c0940ca' => 
    array (
      0 => '/www/wwwroot/www.1024code.vip/resources/views/material/header.tpl',
      1 => 1559631017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mylivechat.tpl' => 1,
  ),
),false)) {
function content_5d133821c76e38_71163241 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
	<meta name="theme-color" content="#4285f4">
	<title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>
	<!-- css -->
	<link href="/theme/material/css/base.min.css" rel="stylesheet">
	<link href="/theme/material/css/project.min.css" rel="stylesheet">
	<link href="/theme/material/css/auth.css" rel="stylesheet">
    <link href="https://fonts.loli.net/css?family=Roboto:300,300italic,400,400italic,500,500italic|Material+Icons" rel="stylesheet">
	<!-- favicon -->
	<!-- js -->
	<?php echo '<script'; ?>
 src="/assets/js/fuck.js"><?php echo '</script'; ?>
>
	<!-- ... -->
</head>
  <style>
.divcss5{ position:fixed; bottom:0;}
</style>
<body class="page-brand">
	
<?php if ($_smarty_tpl->tpl_vars['config']->value["enable_mylivechat"] == 'true') {
$_smarty_tpl->_subTemplateRender('file:mylivechat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
