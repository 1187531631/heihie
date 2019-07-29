<?php
/* Smarty version 3.1.34-dev-7, created on 2019-06-26 17:18:32
  from '/www/wwwroot/www.1024code.vip/resources/views/material/table/table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d133868e95836_39762663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ededbd11c4dc0410dd05d853b2c63f25b277ad11' => 
    array (
      0 => '/www/wwwroot/www.1024code.vip/resources/views/material/table/table.tpl',
      1 => 1559631017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d133868e95836_39762663 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="table_1" class="mdl-data-table" cellspacing="0" width="100%">
  <thead>
    <tr>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config']->value['total_column'], 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
        <th class="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</th>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config']->value['total_column'], 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
        <th class="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</th>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tr>
  </tfoot>
  <tbody>
  </tbody>
</table>
<?php }
}
