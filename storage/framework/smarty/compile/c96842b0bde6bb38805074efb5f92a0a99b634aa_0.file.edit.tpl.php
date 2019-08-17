<?php
/* Smarty version 3.1.34-dev-7, created on 2019-06-27 09:23:13
  from '/www/wwwroot/www.1024code.vip/resources/views/material/user/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d141a817699c9_45018830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c96842b0bde6bb38805074efb5f92a0a99b634aa' => 
    array (
      0 => '/www/wwwroot/www.1024code.vip/resources/views/material/user/edit.tpl',
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
function content_5d141a817699c9_45018830 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<main class="content">
		<div class="content-header ui-content-header">
			<div class="container">
				<h1 class="content-heading">修改资料</h1>
			</div>
		</div>
		<div class="container">
			<section class="content-inner margin-top-no">
             


					<div class="col-xx-12 col-sm-6">
						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<div class="card-inner">
									<div class="cardbtn-edit">
										<div class="card-heading">账号登录密码修改</div>
										<button class="btn btn-flat" id="pwd-update"><span class="icon">check</span>&nbsp;</button>
									</div>
										<div class="form-group form-group-label">
											<label class="floating-label" for="oldpwd">当前密码</label>
											<input class="form-control maxwidth-edit" id="oldpwd" type="password">
										</div>

										<div class="form-group form-group-label">
											<label class="floating-label" for="pwd">新密码</label>
											<input class="form-control maxwidth-edit" id="pwd" type="password">
										</div>

										<div class="form-group form-group-label">
											<label class="floating-label" for="repwd">确认新密码</label>
											<input class="form-control maxwidth-edit" id="repwd" type="password">
										</div>
									</div>
									
								</div>
							</div>
						</div>

						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<div class="card-inner">
										<div class="cardbtn-edit">
												<div class="card-heading">节点连接密码修改</div>
												<button class="btn btn-flat" id="ss-pwd-update"><span class="icon">check</span>&nbsp;</button>
										</div>
										
										<p>当前连接密码：<code id="ajax-user-passwd"><?php echo $_smarty_tpl->tpl_vars['user']->value->passwd;?>
</code><button class="kaobei copy-text btn btn-subscription" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['user']->value->passwd;?>
">点击拷贝</button></p>
										<div class="form-group form-group-label">
											<label class="floating-label" for="sspwd">新连接密码</label>
											<input class="form-control maxwidth-edit" id="sspwd" type="text">
										</div>
										<br/>
										<p>您需要了解的是，修改此密码同时也会变更您 V2Ray 节点的 UUID，请注意及时更新托管订阅。</p>
									</div>
								</div>
							</div>
						</div>                                    
                      

						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<div class="card-inner">
										<div class="cardbtn-edit">
												<div class="card-heading">加密方式修改</div>
												<button class="btn btn-flat" id="method-update"><span class="icon">check</span>&nbsp;</button>
										</div>
										<p>注意：SS/SSD/SSR 支持的加密方式有所不同，请根据实际情况来进行选择</p>
										<p>当前加密方式：<code id="ajax-user-method" data-default="method">[<?php if (App\Utils\URL::CanMethodConnect($_smarty_tpl->tpl_vars['user']->value->method) == 2) {?>SS/SSD<?php } else { ?>SS/SSR<?php }?> 可连接] <?php echo $_smarty_tpl->tpl_vars['user']->value->method;?>
</code></p>
										<div class="form-group form-group-label control-highlight-custom dropdown">
											<label class="floating-label" for="method">加密方式</label>
											<button id="method" class="form-control maxwidth-edit" data-toggle="dropdown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->method;?>
"></button>
											<ul class="dropdown-menu" aria-labelledby="method">
												<?php $_smarty_tpl->_assignInScope('method_list', $_smarty_tpl->tpl_vars['config_service']->value->getSupportParam('method'));?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['method_list']->value, 'method');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
?>
												<li><a href="#" class="dropdown-option" onclick="return false;" val="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
" data="method">[<?php if (App\Utils\URL::CanMethodConnect($_smarty_tpl->tpl_vars['method']->value) == 2) {?>SS/SSD<?php } else { ?>SS/SSR<?php }?> 可连接] <?php echo $_smarty_tpl->tpl_vars['method']->value;?>
</a></li>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>  

						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<div class="card-inner">
										<div class="cardbtn-edit">
												<div class="card-heading">联络方式修改</div>
												<button class="btn btn-flat" id="wechat-update"><span class="icon">check</span>&nbsp;</button>
										</div>
										<p>当前联络方式：
										<code id="ajax-im" data-default="imtype">
										<?php if ($_smarty_tpl->tpl_vars['user']->value->im_type == 1) {?>
										微信
										<?php }?>

										<?php if ($_smarty_tpl->tpl_vars['user']->value->im_type == 2) {?>
										QQ
										<?php }?>

										<?php if ($_smarty_tpl->tpl_vars['user']->value->im_type == 3) {?>
										Google+
										<?php }?>

										<?php if ($_smarty_tpl->tpl_vars['user']->value->im_type == 4) {?>
										Telegram
										<?php }?>

										<?php if ($_smarty_tpl->tpl_vars['user']->value->im_type == 5) {?>
										Discord
										<?php }?>
										</code>
										</p>
										<p>当前联络方式账号：
										<code><?php echo $_smarty_tpl->tpl_vars['user']->value->im_value;?>
</code>
										</p>
										<div class="form-group form-group-label control-highlight-custom dropdown">
											<label class="floating-label" for="imtype">选择您的联络方式</label>
											<button class="form-control maxwidth-edit" id="imtype" data-toggle="dropdown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->im_type;?>
">

											</button>
											<ul class="dropdown-menu" aria-labelledby="imtype">
                                                <li><a href="#" class="dropdown-option" onclick="return false;" val="1" data="imtype">微信</a></li>
                                                <li><a href="#" class="dropdown-option" onclick="return false;" val="2" data="imtype">QQ</a></li>
                                                <li><a href="#" class="dropdown-option" onclick="return false;" val="3" data="imtype">Facebook</a></li>
                                                <li><a href="#" class="dropdown-option" onclick="return false;" val="4" data="imtype">Telegram</a></li>
                                                <li><a href="#" class="dropdown-option" onclick="return false;" val="5" data="imtype">Discord</a></li>
											</ul>
										</div>

										<div class="form-group form-group-label">
											<label class="floating-label" for="wechat">在这输入联络方式账号</label>
											<input class="form-control maxwidth-edit" id="wechat" type="text">
										</div>
									</div>
								</div>
							</div>
						</div>



						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<div class="card-inner">
										<div class="cardbtn-edit">
												<div class="card-heading">协议&混淆设置</div>
												<button class="btn btn-flat" id="ssr-update"><span class="icon">check</span>&nbsp;</button>
										</div>
										<p>当前协议：<code id="ajax-user-protocol" data-default="protocol">[<?php if (App\Utils\URL::CanProtocolConnect($_smarty_tpl->tpl_vars['user']->value->protocol) == 3) {?>SS/SSD/SSR<?php } else { ?>SSR<?php }?> 可连接] <?php echo $_smarty_tpl->tpl_vars['user']->value->protocol;?>
</code></p>
										<p>注意1：如果需要兼容 SS/SSD 请设置为 origin 或选择带_compatible的兼容选项</p>
										<p>注意3：auth_chain 系为实验性协议，可能造成不稳定或无法使用，开启前请询问是否支持</p>
										<div class="form-group form-group-label control-highlight-custom dropdown">
											<label class="floating-label" for="protocol">协议</label>
											<button id="protocol" class="form-control maxwidth-edit" data-toggle="dropdown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->protocol;?>
"></button>
											<ul class="dropdown-menu" aria-labelledby="protocol">
												<?php $_smarty_tpl->_assignInScope('protocol_list', $_smarty_tpl->tpl_vars['config_service']->value->getSupportParam('protocol'));?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['protocol_list']->value, 'protocol');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['protocol']->value) {
?>
												<li><a href="#" class="dropdown-option" onclick="return false;" val="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;?>
" data="protocol">[<?php if (App\Utils\URL::CanProtocolConnect($_smarty_tpl->tpl_vars['protocol']->value) == 3) {?>SS/SSD/SSR<?php } else { ?>SSR<?php }?> 可连接] <?php echo $_smarty_tpl->tpl_vars['protocol']->value;?>
</a></li>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</ul>
										</div>

									</div>

									<div class="card-inner">
										<p>当前混淆方式：<code id="ajax-user-obfs" data-default="obfs">[<?php if (App\Utils\URL::CanObfsConnect($_smarty_tpl->tpl_vars['user']->value->obfs) >= 3) {?>SS/SSD/SSR<?php } elseif (App\Utils\URL::CanObfsConnect($_smarty_tpl->tpl_vars['user']->value->obfs) == 1) {?>SSR<?php } else { ?>SS/SSD<?php }?> 可连接] <?php echo $_smarty_tpl->tpl_vars['user']->value->obfs;?>
</code></p>
										<p>注意1：如果需要兼容 SS/SSD 请设置为 plain 或选择带_compatible的兼容选项</p>
										<p>注意2：SS/SSD 和 SSR 支持的混淆类型有所不同，simple_obfs_* 为 SS/SSD 的混淆方式，其他为 SSR 的混淆方式</p>
										<p>注意3：如果使用 SS/SSD 作为客户端，请确保自己知道如何下载并使用混淆插件</p>
										<div class="form-group form-group-label control-highlight-custom dropdown">
											<label class="floating-label" for="obfs">混淆方式</label>
											<button id="obfs" class="form-control maxwidth-edit" data-toggle="dropdown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->obfs;?>
"></button>
											<ul class="dropdown-menu" aria-labelledby="obfs">
											<?php $_smarty_tpl->_assignInScope('obfs_list', $_smarty_tpl->tpl_vars['config_service']->value->getSupportParam('obfs'));?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obfs_list']->value, 'obfs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['obfs']->value) {
?>
											<li><a href="#" class="dropdown-option" onclick="return false;" val="<?php echo $_smarty_tpl->tpl_vars['obfs']->value;?>
" data="obfs">[<?php if (App\Utils\URL::CanObfsConnect($_smarty_tpl->tpl_vars['obfs']->value) >= 3) {?>SS/SSD/SSR<?php } else {
if (App\Utils\URL::CanObfsConnect($_smarty_tpl->tpl_vars['obfs']->value) == 1) {?>SSR<?php } else { ?>SS/SSD<?php }
}?> 可连接] <?php echo $_smarty_tpl->tpl_vars['obfs']->value;?>
</a></li>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										    </ul>
										</div>
									</div>

									<div class="card-inner">
										<p>当前混淆参数：<code id="ajax-user-obfs-param"><?php echo $_smarty_tpl->tpl_vars['user']->value->obfs_param;?>
</code></p>
										<div class="form-group form-group-label">
											<label class="floating-label" for="obs-param">在这输入混淆参数</label>
											<input class="form-control maxwidth-edit" id="obfs-param" type="text">
										</div>
									</div>

								</div>
							</div>
						</div>  







						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<div class="card-inner">
										<div class="cardbtn-edit">
												<div class="card-heading">主题修改</div>
												<button class="btn btn-flat" id="theme-update"><span class="icon">check</span>&nbsp;</button>
										</div>
										<p>当前主题：<code data-default="theme"><?php echo $_smarty_tpl->tpl_vars['user']->value->theme;?>
</code></p>
										<div class="form-group form-group-label control-highlight-custom dropdown">
											<label class="floating-label" for="theme">主题</label>
											<button id="theme" type="button" class="form-control maxwidth-edit" data-toggle="dropdown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->theme;?>
">
												
											</button>
											<ul class="dropdown-menu" aria-labelledby="mail">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 'theme');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
?>
												<li><a href="#" class="dropdown-option" onclick="return false;" val="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" data="theme"><?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
</a></li>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</ul>
										</div>
								        </div>
							        </div>
						        </div> 
                            </div>
				        </div>  


					<div class="col-xx-12 col-sm-6">

						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<div class="card-inner">
										<div class="cardbtn-edit">
												<div class="card-heading">IP解封</div>
												<button class="btn btn-flat" id="unblock"><span class="icon">not_interested</span>&nbsp;</button>
										</div>
										<p>当前状态：<code id="ajax-block"><?php echo $_smarty_tpl->tpl_vars['Block']->value;?>
</code></p>

									</div>
								</div>
							</div>
						</div> 

	

						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<div class="card-inner">
										<div class="cardbtn-edit">
												<div class="card-heading">每日邮件接收设置</div>
												<button class="btn btn-flat" id="mail-update"><span class="icon">check</span>&nbsp;</button>
										</div>
										<p class="card-heading"></p>
										<p>当前设置：<code id="ajax-mail" data-default="mail"><?php if ($_smarty_tpl->tpl_vars['user']->value->sendDailyMail == 1) {?>发送<?php } else { ?>不发送<?php }?></code></p>
										<div class="form-group form-group-label control-highlight-custom dropdown">
											<label class="floating-label" for="mail">发送设置</label>
											<button type="button" id="mail" class="form-control maxwidth-edit" data-toggle="dropdown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->sendDailyMail;?>
">
												
											</button>
											<ul class="dropdown-menu" aria-labelledby="mail">
												<li><a href="#" class="dropdown-option" onclick="return false;" val="1" data="mail">发送</a> </li>
												<li><a href="#" class="dropdown-option" onclick="return false;" val="0" data="mail">不发送</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>



						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<div class="card-inner">
										<p class="card-heading">两步验证</p>
										<p>请下载 Google 的两步验证器，扫描下面的二维码。</p>
										<p><i class="icon icon-lg" aria-hidden="true">android</i><a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2">&nbsp;Android</a></p>
										<p><i class="icon icon-lg" aria-hidden="true">tablet_mac</i><a href="https://itunes.apple.com/cn/app/google-authenticator/id388497605?mt=8">&nbsp;iOS</a></p>
										<p>在没有测试完成绑定成功之前请不要启用。</p>
										<p>当前设置：<code data-default="ga-enable"><?php if ($_smarty_tpl->tpl_vars['user']->value->ga_enable == 1) {?> 要求验证 <?php } else { ?> 不要求 <?php }?></code></p>
										<p>当前服务器时间：<?php echo date("Y-m-d H:i:s");?>
</p>
										<div class="form-group form-group-label control-highlight-custom dropdown">
											<label class="floating-label" for="ga-enable">验证设置</label>
											<button type="button" id="ga-enable" class="form-control maxwidth-edit" data-toggle="dropdown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->ga_enable;?>
">

											</button>
											<ul class="dropdown-menu" aria-labelledby="ga-enable">
												<li><a href="#" class="dropdown-option" onclick="return false;" val="0" data="ga-enable">不要求</a> </li>
												<li><a href="#" class="dropdown-option" onclick="return false;" val="1" data="ga-enable">要求验证</a></li>
											</ul>
										</div>


										<div class="form-group form-group-label">
											<div class="text-center">
												<div id="ga-qr" class="qr-center"></div>
												密钥：<?php echo $_smarty_tpl->tpl_vars['user']->value->ga_token;?>

											</div>
										</div>


										<div class="form-group form-group-label">
											<label class="floating-label" for="code">测试一下</label>
											<input type="text" id="code" placeholder="输入验证器生成的数字来测试" class="form-control maxwidth-edit">
										</div>

									</div>
									<div class="card-action">
										<div class="card-action-btn pull-left">
											<a class="btn btn-brand-accent btn-flat waves-attach" href="/user/gareset"><span class="icon">format_color_reset</span>&nbsp;重置</a>
											<button class="btn btn-flat waves-attach" id="ga-test" ><span class="icon">extension</span>&nbsp;测试</button>
											<button class="btn btn-brand btn-flat waves-attach" id="ga-set" ><span class="icon">perm_data_setting</span>&nbsp;设置</button>
										</div>
									</div>
								</div>
							</div>
						</div>    

						<?php if ($_smarty_tpl->tpl_vars['config']->value['port_price'] >= 0 || $_smarty_tpl->tpl_vars['config']->value['port_price_specify'] >= 0) {?>
						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<?php if ($_smarty_tpl->tpl_vars['config']->value['port_price'] >= 0) {?>
									<div class="card-inner">
										<div class="cardbtn-edit">
												<div class="card-heading">重置端口</div>
												<button class="btn btn-flat" id="portreset"><span class="icon">autorenew</span>&nbsp;</button>
										</div>
										<p>对号码不满意？来摇号吧～！</p>
										<p>随机更换一个端口使用，价格：<code><?php echo $_smarty_tpl->tpl_vars['config']->value['port_price'];?>
</code>元/次</p>
										<p>重置后1分钟内生效</p>
										<p>当前端口：<code id="ajax-user-port"><?php echo $_smarty_tpl->tpl_vars['user']->value->port;?>
</code></p>
									</div>
									<?php }?>

									<?php if ($_smarty_tpl->tpl_vars['config']->value['port_price_specify'] >= 0) {?>
									<div class="card-inner">
										<div class="cardbtn-edit">
												<div class="card-heading">钦定端口</div>
												<button class="btn btn-flat" id="portspecify"><span class="icon">call_made</span>&nbsp;</button>
										</div>
										<p>不想摇号？来钦定端口吧～！</p>
										<p>价格：<code><?php echo $_smarty_tpl->tpl_vars['config']->value['port_price_specify'];?>
</code>元/次</p>
										<p>端口范围：<code><?php echo $_smarty_tpl->tpl_vars['config']->value['min_port'];?>
～<?php echo $_smarty_tpl->tpl_vars['config']->value['max_port'];?>
</code></p>
										<div class="form-group form-group-label">
											<label class="floating-label" for="port-specify">在这输入想钦定的端口号</label>
											<input class="form-control maxwidth-edit" id="port-specify" type="num">
										</div>
									</div>
									
									<?php }?>
								</div>
							</div>
						</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_telegram'] == 'true' || $_smarty_tpl->tpl_vars['config']->value['enable_discord'] == 'true') {?>
						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<div class="card-inner">
									<?php if ($_smarty_tpl->tpl_vars['user']->value->telegram_id != 0) {?>
										<div class="cardbtn-edit">
											<div class="card-heading">Telegram 绑定</div>
											<div><a class="btn btn-flat btn-brand-accent" href="/user/telegram_reset"><span class="icon">not_interested</span>&nbsp;</a></div>
										</div>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['user']->value->discord != 0) {?>
										<div class="cardbtn-edit">
											<div class="card-heading">Discord 绑定</div>
											<div><a class="btn btn-flat btn-brand-accent" href="/user/discord_reset"><span class="icon">not_interested</span>&nbsp;</a></div>
										</div>
									<?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->telegram_id == 0 || $_smarty_tpl->tpl_vars['user']->value->discord == 0) {?>
										<p>复制保存下方的二维码图片（有效期10分钟，超时请刷新本页面以重新获取，每张二维码只能使用一次）</p>
										<?php if ($_smarty_tpl->tpl_vars['user']->value->telegram_id == 0) {?>
											<p>私聊发给 Telegram 机器人 <a href="https://t.me/<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
">@<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
</a> 以绑定 Telegram</p>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['user']->value->discord == 0) {?>
											<p>私聊发给 Discord 机器人 以绑定 Discord</p>
										<?php }?>
									<?php }?>
										<div class="form-group form-group-label">
											<div class="text-center">
												<div id="telegram-qr" class="qr-center"></div>
												<?php if ($_smarty_tpl->tpl_vars['user']->value->telegram_id != 0) {?>
													<p>当前绑定Telegram账户：<a href="https://t.me/<?php echo $_smarty_tpl->tpl_vars['user']->value->im_value;?>
">@<?php echo $_smarty_tpl->tpl_vars['user']->value->im_value;?>
</a></p>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['user']->value->discord != 0) {?>
													<p>当前绑定Telegram账户：<?php echo $_smarty_tpl->tpl_vars['user']->value->im_value;?>
</p>
												<?php }?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }?>
					




					<?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
	$("#msg").html("已复制到您的剪贴板。");
});


<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#portreset").click(function () {
            $.ajax({
                type: "POST",
                url: "resetport",
                dataType: "json",
                data: {

                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
						$("#ajax-user-port").html(data.msg);
						$("#msg").html("设置成功，新端口是"+data.msg);
						
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
        })
    })
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#portspecify").click(function () {
            $.ajax({
                type: "POST",
                url: "specifyport",
                dataType: "json",
                data: {
					port: $("#port-specify").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
						$("#ajax-user-port").html($("#port-specify").val());
						$("#msg").html(data.msg);
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
        })
    })
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#setpac").click(function () {
            $.ajax({
                type: "POST",
                url: "pacset",
                dataType: "json",
                data: {
                   pac: $("#pac").text()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
						$("#msg").html(data.msg);
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
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#pwd-update").click(function () {
            $.ajax({
                type: "POST",
                url: "password",
                dataType: "json",
                data: {
                    oldpwd: $("#oldpwd").val(),
                    pwd: $("#pwd").val(),
                    repwd: $("#repwd").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
						$("#msg").html(data.msg);
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
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	var ga_qrcode = '<?php echo $_smarty_tpl->tpl_vars['user']->value->getGAurl();?>
',
	qrcode1 = new QRCode(document.getElementById("ga-qr"));
	
    qrcode1.clear();
    qrcode1.makeCode(ga_qrcode);

	<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_telegram'] == 'true' || $_smarty_tpl->tpl_vars['config']->value['enable_discord'] == 'true') {?>

	var telegram_qrcode = 'mod://bind/<?php echo $_smarty_tpl->tpl_vars['bind_token']->value;?>
';

	if ($$.getElementById("telegram-qr")) {
		let qrcode2 = new QRCode(document.getElementById("telegram-qr"));
		qrcode2.clear();
		qrcode2.makeCode(telegram_qrcode);
	}

	<?php }
echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#wechat-update").click(function () {
            $.ajax({
                type: "POST",
                url: "wechat",
                dataType: "json",
                data: {
                    wechat: $("#wechat").val(),
					imtype: $("#imtype").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
						$("#ajax-im").html($("#imtype").find("option:selected").text()+" "+$("#wechat").val());
						$("#msg").html(data.msg);
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
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#ssr-update").click(function () {
            $.ajax({
                type: "POST",
                url: "ssr",
                dataType: "json",
                data: {
                    protocol: $("#protocol").val(),
					obfs: $("#obfs").val(),
					obfs_param: $("#obfs-param").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
						$("#ajax-user-protocol").html($("#protocol").val());
						$("#ajax-user-obfs").html($("#obfs").val());
						$("#ajax-user-obfs-param").html($("#obfs-param").val());
						$("#msg").html(data.msg);
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
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#relay-update").click(function () {
            $.ajax({
                type: "POST",
                url: "relay",
                dataType: "json",
                data: {
                    relay_enable: $("#relay_enable").val(),
					relay_info: $("#relay_info").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
						$("#msg").html(data.msg);
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
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#unblock").click(function () {
            $.ajax({
                type: "POST",
                url: "unblock",
                dataType: "json",
                data: {
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
						$("#ajax-block").html("IP: "+data.msg+" 没有被封");
						$("#msg").html("发送解封命令解封 "+data.msg+" 成功");
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
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#ga-test").click(function () {
            $.ajax({
                type: "POST",
                url: "gacheck",
                dataType: "json",
                data: {
                    code: $("#code").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
						$("#msg").html(data.msg);
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
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#ga-set").click(function () {
            $.ajax({
                type: "POST",
                url: "gaset",
                dataType: "json",
                data: {
                    enable: $("#ga-enable").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
						$("#msg").html(data.msg);
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
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#ss-pwd-update").click(function () {
            $.ajax({
                type: "POST",
                url: "sspwd",
                dataType: "json",
                data: {
                    sspwd: $("#sspwd").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
						$("#ajax-user-passwd").html($("#sspwd").val());
						$("#msg").html("修改成功");
                    } else {
                        $("#result").modal();
						$("#msg").html("修改失败");
                    }
                },
                error: function (jqXHR) {
                    $("#result").modal();
					$("#msg").html(data.msg+"     出现了一些错误。");
                }
            })
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#mail-update").click(function () {
            $.ajax({
                type: "POST",
                url: "mail",
                dataType: "json",
                data: {
                    mail: $("#mail").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
						$("#ajax-mail").html($("#mail").val()=="1"?"发送":"不发送");
						$("#msg").html(data.msg);
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
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#theme-update").click(function () {
            $.ajax({
                type: "POST",
                url: "theme",
                dataType: "json",
                data: {
                    theme: $("#theme").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
						$("#msg").html(data.msg);
						window.setTimeout("location.href='/user/edit'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
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
        })
    })
<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#method-update").click(function () {
            $.ajax({
                type: "POST",
                url: "method",
                dataType: "json",
                data: {
                    method: $("#method").val()
                },
                success: function (data) {
					$("#ajax-user-method").html($("#method").val());
                    if (data.ret) {
                        $("#result").modal();
						$("#msg").html("修改成功");
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
        })
    })
<?php echo '</script'; ?>
>

<?php }
}
