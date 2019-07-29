<?php
/* Smarty version 3.1.34-dev-7, created on 2019-07-01 11:33:01
  from '/www/wwwroot/www.1024code.vip/resources/views/material/password/token.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d197eedb99462_94028754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8201dc0d8659f756d8db06a2272a7c0b095303b' => 
    array (
      0 => '/www/wwwroot/www.1024code.vip/resources/views/material/password/token.tpl',
      1 => 1559631017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d197eedb99462_94028754 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- 新的 -->
<div class="authpage">
		<div class="container">
			
				<div class="auth-main auth-row auth-col-one">
					<div class="auth-top auth-row">
						<a class="boardtop-left" href="/">
							<div>首 页</div>
						</a>
						<div class="auth-logo">
							<img src="/images/authlogo.jpg" alt="">
						</div>
						<a href="/auth/login" class="boardtop-right">
							<div>登 录</div>
						</a>
					</div>
					<div class="auth-row">
						<div class="form-group-label auth-row row-login">
							<label class="floating-label" for="password">密码</label>
							<input class="form-control maxwidth-auth" id="password" type="password">
						</div>
					</div>
					<div class="auth-row">
						<div class="form-group-label auth-row row-login">
							<label class="floating-label" for="repasswd">重复密码</label>
							<input class="form-control maxwidth-auth" id="repasswd" type="password">
						</div>
					</div>
					
					<div class="btn-auth auth-row">
						<button id="reset" type="submit" class="btn btn-block btn-brand waves-attach waves-light">重置密码</button>
					</div>
					<div class="auth-help auth-row">
						<div class="auth-help-table auth-row auth-reset">
							<a href="/auth/register">甚至想要重新注册</a>
						</div>
					</div>
					<div class="auth-bottom auth-row auth-reset">
						<div class="tgauth">
						<p>请妥善保管好自己的登录密码</p>	
						</div>
					</div>
				</div>
			
			<div class="card auth-tg">
				<div class="card-main">
					
				</div>
			</div>
		</div>
	</div>
						
						
								
						<?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
						
						
						
					
	
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
    $(document).ready(function(){
        function reset(){
            $.ajax({
                type:"POST",
                url:"/password/token/<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
",
                dataType:"json",
                data:{
                    password: $("#password").val(),
                    repasswd: $("#repasswd").val(),
                },
                success:function(data){
                    if(data.ret){
						$("#result").modal();
                        $("#msg").html(data.msg);
                        window.setTimeout("location.href='/auth/login'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    }else{
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    }
                },
                error:function(jqXHR){
                    $("#msg-error").hide(10);
                    $("#msg-error").show(100);
                    $("#msg-error-p").html("发生错误："+jqXHR.status);
                    // 在控制台输出错误信息
                    console.log(removeHTMLTag(jqXHR.responseText));
                }
            });
        }
        $("html").keydown(function(event){
            if(event.keyCode==13){
                reset();
            }
        });
        $("#reset").click(function(){
            reset();
        });
    })
<?php echo '</script'; ?>
>



<?php }
}
