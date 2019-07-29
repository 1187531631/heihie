<?php
/* Smarty version 3.1.34-dev-7, created on 2019-06-26 21:24:04
  from '/www/wwwroot/www.1024code.vip/resources/views/material/user/nodeajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d1371f42a5c41_01666203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2f3072e287f13408dc05753346de9241ccb6f18' => 
    array (
      0 => '/www/wwwroot/www.1024code.vip/resources/views/material/user/nodeajax.tpl',
      1 => 1559631017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1371f42a5c41_01666203 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('load', $_smarty_tpl->tpl_vars['point_node']->value->getNodeLoad());?>

<div id="load<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_chart" style="height: 300px; width: 100%;"></div>
	<div id="up<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_chart" style="height: 300px; width: 100%;"></div>
	<div id="alive<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_chart" style="height: 300px; width: 100%;"></div>
	<div id="speedtest<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_chart" style="height: 300px; width: 100%;"></div>
	<div id="speedtest<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_ping_chart" style="height: 300px; width: 100%;"></div>
				
	<?php echo '<script'; ?>
 type="text/javascript">
		$().ready(function(){
			chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 = new CanvasJS.Chart("load<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_chart",
			{
				title:{
					text: "节点负载情况 <?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
"
				},
				data: [
				{
					type: "line", 
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['load']->value, 'single_load');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_load']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_load']->value->log_time*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_load']->value->getNodeLoad();?>

								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_load']->value->log_time*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_load']->value->getNodeLoad();?>

								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						
					]
				}
				]
			});
			
			
			
			up_chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 = new CanvasJS.Chart("up<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_chart",
			{
				title:{
					text: "最近一天节点在线情况 <?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
 - 在线 <?php echo $_smarty_tpl->tpl_vars['point_node']->value->getNodeUptime();?>
"
				},
				data: [
					{
						//startAngle: 45,
						indexLabelFontSize: 20,
						indexLabelFontFamily: "Garamond",
						indexLabelFontColor: "darkgrey",
						indexLabelLineColor: "darkgrey",
                        yValueFormatString: "##0.00\"%\"",
						indexLabelPlacement: "outside",
						type: "doughnut",
						showInLegend: true,
						dataPoints: [
							{
								y: <?php echo $_smarty_tpl->tpl_vars['point_node']->value->getNodeUpRate()*100;?>
, label: "在线率",legendText:"在线率 <?php echo number_format($_smarty_tpl->tpl_vars['point_node']->value->getNodeUpRate()*100,2);?>
%", indexLabel: "在线率 <?php echo number_format($_smarty_tpl->tpl_vars['point_node']->value->getNodeUpRate()*100,2);?>
%"
							},
							{
								y: <?php echo (1-$_smarty_tpl->tpl_vars['point_node']->value->getNodeUpRate())*100;?>
, label: "离线率",legendText:"离线率 <?php echo number_format((1-$_smarty_tpl->tpl_vars['point_node']->value->getNodeUpRate())*100,2);?>
%", indexLabel: "离线率 <?php echo number_format((1-$_smarty_tpl->tpl_vars['point_node']->value->getNodeUpRate())*100,2);?>
%"
							}
						]
					}
					]
			});
			
			<?php $_smarty_tpl->_assignInScope('load', $_smarty_tpl->tpl_vars['point_node']->value->getNodeAlive());?>
			alive_chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 = new CanvasJS.Chart("alive<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_chart",
			{
				title:{
					text: "最近一天节点在线人数情况 <?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
"
				},
				data: [
				{
					type: "line", 
                  yValueFormatString: "##0\"人\"",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['load']->value, 'single_load');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_load']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_load']->value->log_time*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_load']->value->online_user;?>
,label: "同时在线人数"
								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_load']->value->log_time*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_load']->value->online_user;?>
,label: "同时在线人数"
								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						
					]
				}
				]
			});
			
			
			
			<?php $_smarty_tpl->_assignInScope('speedtests', $_smarty_tpl->tpl_vars['point_node']->value->getSpeedtestResult());?>
			speedtest_chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 = new CanvasJS.Chart("speedtest<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_chart",
			{
				title:{
					text: "最近节点测速延时情况报告 <?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
"
				},
				axisY: {				
					suffix: " ms"
				},
				data: [
				{
					type: "line", 
					showInLegend: true,
					legendText: "电信延时",
                    yValueFormatString: "##0\"ms\"",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtests']->value, 'single_speedtest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_speedtest']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getTelecomPing();?>
,label: "电信延时"
								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getTelecomPing();?>
,label: "电信延时"
								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						
					]
				},
				{
					type: "line", 
					showInLegend: true,
					legendText: "联通延时",
                  yValueFormatString: "##0\"ms\"",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtests']->value, 'single_speedtest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_speedtest']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getUnicomPing();?>
,label: "联通延时"
								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getUnicomPing();?>
,label: "联通延时"
								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						
					]
				},
				{
					type: "line", 
					showInLegend: true,
					legendText:"移动延时",
                  yValueFormatString: "##0\"ms\"",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtests']->value, 'single_speedtest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_speedtest']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getCmccPing();?>
,label: "移动延时"
								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getCmccPing();?>
,label: "移动延时"
								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						
					]
				}
				]
			});
			
			speedtest_ping_chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 = new CanvasJS.Chart("speedtest<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_ping_chart",
			{
				title:{
					text: "最近节点测速速度情况报告 <?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
"
				},
				axisY: {
					includeZero: false,
					suffix: " Mbps"
					},
              	toolTip:{
	     			shared: true
	                   },
				data: [
				{
					type: "line", 
					showInLegend: true,
					legendText: "电信上传速度",
                  	name: "电信上传",
                  yValueFormatString: "##0.00\"Mb\"",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtests']->value, 'single_speedtest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_speedtest']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getTelecomUpload();?>
,label: "电信上传"
								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getTelecomUpload();?>
,label: "电信上传"
								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						
					]
				},
				{
					type: "line", 
					showInLegend: true,
					legendText: "电信下载速度",
                  name: "电信下载",
                  yValueFormatString: "##0.00\"Mb\"",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtests']->value, 'single_speedtest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_speedtest']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getTelecomDownload();?>
,label: "电信下载"
								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getTelecomDownload();?>
,label: "电信下载"
								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						
					]
				},
				{
					type: "line", 
					showInLegend: true,
					legendText: "联通上传速度",
                  name: "联通上传",
                  yValueFormatString: "##0.00\"Mb\"",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtests']->value, 'single_speedtest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_speedtest']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getUnicomUpload();?>
,label: "联通上传"
								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getUnicomUpload();?>
,label: "联通上传"
								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						
					]
				},
				{
					type: "line", 
					showInLegend: true,
					legendText: "联通下载速度",
                  name: "联通下载",
                  yValueFormatString: "##0.00\"Mb\"",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtests']->value, 'single_speedtest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_speedtest']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getUnicomDownload();?>
,label: "联通下载"
								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getUnicomDownload();?>
,label: "联通下载"
								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						
					]
				},
				{
					type: "line", 
					showInLegend: true,
					legendText:"移动下载速度",
                  name: "移动下载",
                  yValueFormatString: "##0.00\"Mb\"",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtests']->value, 'single_speedtest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_speedtest']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getCmccDownload();?>
,label: "移动下载"
								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getCmccDownload();?>
,label: "移动下载"
								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						
					]
				},
				{
					type: "line", 
					showInLegend: true,
					legendText:"移动上传速度",
                  name: "移动上传",
                  yValueFormatString: "##0.00\"Mb\"",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtests']->value, 'single_speedtest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_speedtest']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getCmccUpload();?>
,label: "移动上传"
								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getCmccUpload();?>
,label: "移动上传"
								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						
					]
				}
				]
			});
			
			
			
			
			
			
			
				
			chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.render();
			up_chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.render();
			alive_chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.render();
			speedtest_chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.render();
			speedtest_ping_chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.render();
			
			
		});
		
		
		
		
			
	<?php echo '</script'; ?>
>
<?php }
}
