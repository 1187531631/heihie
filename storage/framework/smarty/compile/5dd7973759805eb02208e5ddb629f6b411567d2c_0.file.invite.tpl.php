<?php
/* Smarty version 3.1.34-dev-7, created on 2019-08-17 18:37:42
  from '/www/wwwroot/www.1024code.vip/resources/views/material/user/invite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d57d8f63f4bb2_60075545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dd7973759805eb02208e5ddb629f6b411567d2c' => 
    array (
      0 => '/www/wwwroot/www.1024code.vip/resources/views/material/user/invite.tpl',
      1 => 1566037702,
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
function content_5d57d8f63f4bb2_60075545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<main class="content">
		<div class="content-header ui-content-header">
			<div class="container">
				<h1 class="content-heading">邀请</h1>
			</div>
		</div>
		<div class="container">
			<section class="content-inner margin-top-no">
				<div class="row">

					<div class="col-xx-12">
						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<div class="card-inner">
										<p class="card-heading">说明</p>
										<p>您每邀请1位用户注册：</p>
										<p>您会获得<code><?php echo $_smarty_tpl->tpl_vars['config']->value["invite_gift"];?>
 G</code>流量奖励。</p>
										<p>对方将获得<code><?php echo $_smarty_tpl->tpl_vars['config']->value["invite_get_money"];?>
</code>元奖励作为初始资金。</p>
										<p>对方充值时您还会获得对方充值金额的 <code><?php echo $_smarty_tpl->tpl_vars['config']->value["code_payback"];?>
 %</code> 的返利。</p>
										<p class="card-heading">已获得返利：<code><?php echo $_smarty_tpl->tpl_vars['paybacks_sum']->value;?>
</code> 元</p>
									</div>

								</div>
							</div>
						</div>
					</div>

					
					<?php if ($_smarty_tpl->tpl_vars['user']->value->invite_num != -1) {?>
					<div class="col-xx-12">
						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner margin-bottom-no">
									<div class="card-inner margin-bottom-no">
											<div class="cardbtn-edit">
													<div class="card-heading">邀请链接</div>
													<div class="reset-flex"><span>重置链接</span><a class="reset-link btn btn-brand-accent btn-flat" ><i class="icon">autorenew</i>&nbsp;</a></div>
											</div>
										<p>剩余可邀请次数：<?php if ($_smarty_tpl->tpl_vars['user']->value->invite_num < 0) {?>无限<?php } else { ?><code><?php echo $_smarty_tpl->tpl_vars['user']->value->invite_num;?>
</code><?php }?></p>
										<p>发送邀请链接给有需要的人，邀请他人注册时，请将以下链接发给被邀请者</p>
										<div class="invite-link">
											<input type="text" class="input form-control form-control-monospace cust-link" name="input1" readonly="" value="<?php echo $_smarty_tpl->tpl_vars['config']->value["baseUrl"];?>
/auth/register?code=<?php echo $_smarty_tpl->tpl_vars['code']->value->code;?>
">
											<button class="copy-text btn btn-subscription" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['config']->value["baseUrl"];?>
/auth/register?code=<?php echo $_smarty_tpl->tpl_vars['code']->value->code;?>
">点击复制</button>				
										</div>
																																																			</div>
								</div>
							</div>
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['custom_invite_price'] >= 0) {?>
					<div class="col-xx-12 <?php if ($_smarty_tpl->tpl_vars['config']->value['invite_price'] >= 0) {?>col-lg-6<?php }?>">
							<div class="card margin-bottom-no">
								<div class="card-main">
									<div class="card-inner margin-bottom-no">
										<div class="card-inner margin-bottom-no">
												<div class="cardbtn-edit">
													<div class="card-heading">定制链接后缀 <code class="card-tag tag-green"><?php echo $_smarty_tpl->tpl_vars['config']->value['custom_invite_price'];?>
 RMB/次</code></div>
													<button class="btn btn-flat" id="custom-invite-confirm"><span class="icon">check</span>&nbsp;</button>
												</div>
											<p>例:输入<code>vip</code>则链接变为<code><?php echo $_smarty_tpl->tpl_vars['config']->value["baseUrl"];?>
/auth/register?code=vip</code></p>
											<div class="form-group form-group-label">
												<label class="floating-label" for="custom-invite-link">输入链接后缀</label>
												<input class="form-control maxwidth-edit" id="custom-invite-link" type="num">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }?>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['config']->value['invite_price'] >= 0) {?>
					<div class="col-xx-12 <?php if ($_smarty_tpl->tpl_vars['config']->value['custom_invite_price'] >= 0) {?>col-lg-6<?php }?>">
						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<div class="card-inner">
									<div class="cardbtn-edit">
											<div class="card-heading">购买邀请次数 <code class="card-tag tag-green"><?php echo $_smarty_tpl->tpl_vars['config']->value['invite_price'];?>
 RMB/个</code></div>
											<button class="btn btn-flat" id="buy-invite"><span class="material-icons">shopping_cart</span></button>
									</div>		
										<p>在下方输入需要购买的邀请次数</p>
										<div class="form-group form-group-label">
											<label class="floating-label" for="buy-invite-num">输入购买次数</label>
											<input class="form-control maxwidth-edit" id="buy-invite-num" type="num">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php }?>

                   	
                  																						                                 																																				
										<div class="col-xx-12">
                        <div class="card">
	                        <div class="card-main">
		                        <div class="card-inner">
			                        <div class="card-table">
										<div class="table-responsive bgc-fix table-user">
											<?php echo $_smarty_tpl->tpl_vars['paybacks']->value->render();?>

											<table class="table">
												<tr>
					
												 <!--   <th>ID</th> -->
													<th>ID</th>
													<th>被邀请用户ID</th>
													<th>获得返利</th>
												</tr>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paybacks']->value, 'payback');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['payback']->value) {
?>
												<tr>
					
											  <!--       <td>#<?php echo $_smarty_tpl->tpl_vars['payback']->value->id;?>
</td> -->
													<td><?php echo $_smarty_tpl->tpl_vars['payback']->value->id;?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['payback']->value->userid;?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['payback']->value->ref_get;?>
 元</td>
					
												</tr>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</table>
											<?php echo $_smarty_tpl->tpl_vars['paybacks']->value->render();?>

										</div>
			                        </div>
		                        </div>
	                        </div>
                        </div>
					
					</div>

					<?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				</div>
			</section>
		</div>
	</main>

<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
	$(function(){
		new Clipboard('.copy-text');
	});

	$(".copy-text").click(function () {
		$("#result").modal();
		$("#msg").html("已复制到您的剪贴板，请您继续接下来的操作。");
	});

    $(document).ready(function () {
        $("#invite").click(function () {
            $.ajax({
                type: "POST",
                url: "/user/invite",
                dataType: "json",
                success: function (data) {
                    window.location.reload();
                },
                error: function (jqXHR) {
                    $("#result").modal();
					$("#msg").html("发生错误：" + jqXHR.status);
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

$("#buy-invite").click(function () {
    $.ajax({
        type: "POST",
        url: "/user/buy_invite",
        dataType: "json",
        data: {
            num: $("#buy-invite-num").val(),
        },
        success: function (data) {
             if (data.ret) {
     			$("#result").modal();
				$("#msg").html(data.msg);
				window.setTimeout("location.href='/user/invite'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
	        } else {
                $("#result").modal();
			    $("#msg").html(data.msg);
            }
	    },
        error: function (jqXHR) {
            $("#result").modal();
        	$("#msg").html(data.msg+"     出现了一些错误。");
        }
    })
});

$("#custom-invite-confirm").click(function () {
    $.ajax({
        type: "POST",
        url: "/user/custom_invite",
        dataType: "json",
        data: {
            customcode: $("#custom-invite-link").val(),
        },
        success: function (data) {
             if (data.ret) {
     			$("#result").modal();
				$("#msg").html(data.msg);
				window.setTimeout("location.href='/user/invite'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
	        } else {
                $("#result").modal();
			    $("#msg").html(data.msg);
            }
	    },
        error: function (jqXHR) {
            $("#result").modal();
        	$("#msg").html(data.msg+"     出现了一些错误。");
        }
    })
});

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

$(".reset-link").click(function () {
	$("#result").modal();
	$("#msg").html("已重置您的邀请链接，复制您的邀请链接发送给其他人！");
	window.setTimeout("location.href='/user/inviteurl_reset'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
});

<?php echo '</script'; ?>
>
<?php }
}
