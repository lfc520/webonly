<?php /* Smarty version Smarty-3.1.19, created on 2016-07-07 19:17:07
         compiled from "/data/home/qyu1988070001/htdocs/application/views/admin/feedback.html" */ ?>
<?php /*%%SmartyHeaderCode:85343898357736ebe8afaa6-46738055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ac2a3073e206d3ec8734c81e240de7fad0ae2e0' => 
    array (
      0 => '/data/home/qyu1988070001/htdocs/application/views/admin/feedback.html',
      1 => 1467890206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85343898357736ebe8afaa6-46738055',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57736ebe955e73_05867644',
  'variables' => 
  array (
    'admin' => 0,
    'AllFeedback' => 0,
    'key' => 0,
    'num' => 0,
    'value' => 0,
    'all' => 0,
    'fullcolumn' => 0,
    'banner' => 0,
    'slider' => 0,
    'sidebar' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57736ebe955e73_05867644')) {function content_57736ebe955e73_05867644($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/data/home/qyu1988070001/htdocs/libs/plugins/modifier.truncate.php';
?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>字典管理</title>
<link href="public/styles/bootstrap.css" rel="stylesheet">
<link href="public/styles/normalize.css" rel="stylesheet">
<link href="public/styles/font-awesome.css" rel="stylesheet">
<script src="public/scripts/jquery-1.10.2.js"></script>
<script src="public/scripts/bootstrap.js"></script>
<script src="public/scripts/admin.js"></script>
<script src="public/scripts/tools.js"></script>
<link href="public/styles/admin.css" rel="stylesheet">
</head>
<body>
<!--modal模态框开始  -->
<div class="confirm modal-content" id="myModal" aria-labelledby='myModalLabel' aria-hidden='true'>
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true" id="confirmCloseBtn"></span><span class="rs-only"></span>
				</button>
				<h4 class="modal-title" id="myModalLabel">确定要删除吗</h4>
			</div>
			<div class="modal-body body">
				<span class="text-danger h4">删除是不可逆的，确定要删除吗？</span>
			</div>
			<div class="modal-footer">
				<a href="" type="button" class="btn btn-success" id="true">确定</a>
				<a href="" type="button" class="btn btn-danger" data-dismiss="modal" id="falseBtn">取消</a>
			</div>
</div>
<!--modal模态框结束  -->
<?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
	<div class="row">
		<div class="col-xs-12">
		<form method="post" action="?a=dict&action=search">
			<ul class="breadcrumb">
					<li><a href='?a=index&action=welcome' target="main">后台首页</a></li>
					<li><a href='?a=dict&action=admin'>字典管理</a></li>
					<li class="active">显示词条</li>
					<li><a href="?a=dict&action=add" title='添加词条'><i class="fa fa-plus-circle"></i></a></li>
					<li>
					<input type="text" class="search" name="keyword">
					<input type="submit" value="查询" name="send">
					</li>
				</ul>
				</form>
			<table class="table table-bordered table-striped table-hover table-condensed">
			<form action="?a=feedback&action=deleteAll" method="post">
				<tr>
					<td>编号</td>
					<td>用户名</td>
					<td>联系方式</td>
					<td>提交新词</td>
					<td>提交时间</td>
					<td width=80>显示|隐藏</td>
					<td><input type="checkbox" id="selectBar">全选</td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['AllFeedback']->value) {?>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['AllFeedback']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['key']->value+$_smarty_tpl->tpl_vars['num']->value;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value->provider;?>
</td>
					<td title="<?php echo $_smarty_tpl->tpl_vars['value']->value->contact;?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value->contact,"10","...");?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value->reportWord;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value->reportTime;?>
</td>
					<td width=130><?php echo $_smarty_tpl->tpl_vars['value']->value->state;?>
</td>
					<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" name="selectAll[]"></td>
				</tr>
				<?php } ?>
				<tr>
					<td colspan="12"><input type="submit" value="全删" class="btn btn-success pull-right" name="send"></td>
				</tr>
				<?php } else { ?>
				<tr><td colspan="7">暂无广告</td></tr>
				<?php }?>
			</form>
			</table>
		</div>
	</div>
	<div class="row">
			<div class="col-md-12 text-center">
				<form action="" method="get" style="display:inline">
				<input type="hidden" name="action" value="show">
				<input type="hidden" name="a" value="ad">
					<select name="kind" class="input-sm">
						<option value="0" <?php echo $_smarty_tpl->tpl_vars['all']->value;?>
>所有广告</option>
						<option value="1" <?php echo $_smarty_tpl->tpl_vars['fullcolumn']->value;?>
>通栏广告</option>
						<option value="2" <?php echo $_smarty_tpl->tpl_vars['banner']->value;?>
>banner广告</option>
						<option value="3" <?php echo $_smarty_tpl->tpl_vars['slider']->value;?>
>slider广告</option>
						<option value="4" <?php echo $_smarty_tpl->tpl_vars['sidebar']->value;?>
>侧栏广告</option>
					</select>
					<input type="submit" name="send" value="提交" class="btn btn-success">
				</form>
			<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

			</div>
	</div>
<?php }?>

</body>
</html><?php }} ?>
