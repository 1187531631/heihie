<?php
/* Smarty version 3.1.34-dev-7, created on 2019-07-02 21:47:54
  from '/www/wwwroot/www.1024code.vip/resources/views/material/user/relay/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d1b608a333d11_88763240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eac1d704d7c6c7ee652cf622215df2ba0b9fe67' => 
    array (
      0 => '/www/wwwroot/www.1024code.vip/resources/views/material/user/relay/add.tpl',
      1 => 1559631017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/main.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_5d1b608a333d11_88763240 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>






	<main class="content">
		<div class="content-header ui-content-header">
			<div class="container">
				<h1 class="content-heading"> 添加中转规则</h1>
			</div>
		</div>
		<div class="container">
			<div class="col-lg-12 col-sm-12">
				<section class="content-inner margin-top-no">
					<form id="main_form">
						<div class="card">
							<div class="card-main">
								<div class="card-inner">
									<div class="form-group form-group-label control-highlight-custom dropdown">
										<label class="floating-label" for="source_node">起源节点</label>
										<button id="source_node" class="form-control maxwidth-edit" name="source_node" data-toggle="dropdown">
											请选择起源节点								
										</button>
										<ul class="dropdown-menu" aria-labelledby="source_node">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['source_nodes']->value, 'source_node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['source_node']->value) {
?>
											    <li><a href="#" class="dropdown-option" onclick="return false;" val="<?php echo $_smarty_tpl->tpl_vars['source_node']->value->id;?>
" data="source_node"><?php echo $_smarty_tpl->tpl_vars['source_node']->value->name;?>
</a></li>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</ul>
									</div>


									<div class="form-group form-group-label control-highlight-custom dropdown">
										<label class="floating-label" for="dist_node">目标节点</label>
										<button id="dist_node" class="form-control maxwidth-edit" name="dist_node" data-toggle="dropdown">
											请选择目标节点
										</button>
										<ul class="dropdown-menu" aria-labelledby="dist_node">
												<li><a href="#" class="dropdown-option" onclick="return false;" val="-1" data="dist_node">不进行中转</a></li>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dist_nodes']->value, 'dist_node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dist_node']->value) {
?>
												<li><a href="#" class="dropdown-option" onclick="return false;" val="<?php echo $_smarty_tpl->tpl_vars['dist_node']->value->id;?>
" data="dist_node"><?php echo $_smarty_tpl->tpl_vars['dist_node']->value->name;?>
</a></li>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</ul>
									</div>

									<div class="form-group form-group-label control-highlight-custom dropdown">
										<label class="floating-label" for="port">端口</label>
										<button id="port" class="form-control maxwidth-edit" name="port" data-toggle="dropdown">
											请选择端口
										</button>
										<ul class="dropdown-menu" aria-labelledby="port">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ports']->value, 'port');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['port']->value) {
?>
												<li><a href="#" class="dropdown-option" onclick="return false;" val="<?php echo $_smarty_tpl->tpl_vars['port']->value;?>
" data="port"><?php echo $_smarty_tpl->tpl_vars['port']->value;?>
</a></li>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</ul>
									</div>



									<div class="form-group form-group-label">
										<label class="floating-label" for="priority">优先级</label>
										<input class="form-control maxwidth-edit" id="priority" name="priority" type="text" value="0">
									</div>


								</div>
							</div>
						</div>


						<div class="card">
							<div class="card-main">
								<div class="card-inner">

									<div class="form-group">
										<div class="row">
											<div class="col-md-10 col-md-push-1">
												<button id="submit" type="submit" class="btn btn-block btn-brand">添加</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
					<?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<section>

			</div>



		</div>
	</main>











<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php echo '<script'; ?>
>

	$('#main_form').validate({
		rules: {
		  priority: {required: true}
		},


		submitHandler: function() {



		$.ajax({

				type: "POST",
				url: "/user/relay",
				dataType: "json",
				
				data: {
						source_node: $("#source_node").val(),
						dist_node: $("#dist_node").val(),
						port: $("#port").val(),
						priority: $("#priority").val()
				
					},
					success: function (data) {
						if (data.ret) {
						$("#result").modal();
						$("#msg").html(data.msg);
									
						window.setTimeout("location.href=top.document.referrer", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
									
						} else {
						$("#result").modal();
						$("#msg").html(data.msg);
						}
					},
					error: function (jqXHR) {
						$("#result").modal();
						$("#msg").html(data.msg+"  发生错误了。");
					}
					});
				}
		});

<?php echo '</script'; ?>
>


<?php }
}
