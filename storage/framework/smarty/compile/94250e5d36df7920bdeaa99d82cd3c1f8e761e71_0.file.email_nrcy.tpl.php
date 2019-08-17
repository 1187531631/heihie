<?php
/* Smarty version 3.1.34-dev-7, created on 2019-06-26 17:17:21
  from '/www/wwwroot/www.1024code.vip/resources/views/material/email_nrcy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d133821df1b94_85917665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94250e5d36df7920bdeaa99d82cd3c1f8e761e71' => 
    array (
      0 => '/www/wwwroot/www.1024code.vip/resources/views/material/email_nrcy.tpl',
      1 => 1559631017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d133821df1b94_85917665 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
	<img src="/images/email_nrcy.jpg" height="458" width="468">
	<br />
	<?php if ($_smarty_tpl->tpl_vars['config']->value["enable_admin_contact"] == 'true') {?>
	<p>如果发现“收信查询”中没有找到邮件，请联系管理员：</p>
	<?php if ($_smarty_tpl->tpl_vars['config']->value["admin_contact1"] != null) {?>
	<li><?php echo $_smarty_tpl->tpl_vars['config']->value["admin_contact1"];?>
</li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['config']->value["admin_contact2"] != null) {?>
	<li><?php echo $_smarty_tpl->tpl_vars['config']->value["admin_contact2"];?>
</li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['config']->value["admin_contact3"] != null) {?>
	<li><?php echo $_smarty_tpl->tpl_vars['config']->value["admin_contact3"];?>
</li>
	<?php }?>
	<?php }?>
</ul><?php }
}
