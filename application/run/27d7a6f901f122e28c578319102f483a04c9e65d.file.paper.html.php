<?php /* Smarty version Smarty-3.1.19, created on 2016-01-03 20:01:12
         compiled from "/data/home/qyu1988070001/htdocs/application/views/home/paper.html" */ ?>
<?php /*%%SmartyHeaderCode:7351647145645d863b153e9-27747330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27d7a6f901f122e28c578319102f483a04c9e65d' => 
    array (
      0 => '/data/home/qyu1988070001/htdocs/application/views/home/paper.html',
      1 => 1451822467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7351647145645d863b153e9-27747330',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5645d863b7b4f4_55266533',
  'variables' => 
  array (
    'show' => 0,
    'allCourse' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5645d863b7b4f4_55266533')) {function content_5645d863b7b4f4_55266533($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>在线测试</title>
<link href="public/styles/bootstrap.css" rel="stylesheet">
<link href="public/styles/normalize.css" rel="stylesheet">
<link href="public/styles/font-awesome.css" rel="stylesheet">
<link href="public/styles/home.css" rel="stylesheet">
<script src="public/scripts/jquery-1.10.2.js"></script>
<script src="public/scripts/bootstrap.js"></script>
<script src="public/scripts/home.js"></script>
<link href="public/styles/paper.css" rel="stylesheet">
</head>
<body id="home">
<?php echo $_smarty_tpl->getSubTemplate ("home/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="container">
<?php if ($_smarty_tpl->tpl_vars['show']->value) {?>
	<div class="row allCourse">
		<div class="col-md-8 hotCourse">
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allCourse']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<dl style="width:150px;">
				<dt><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</dt>
				<dd class="take"><a href="?a=quiz&action=show&cid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" class="btn btn-success btn-block" target="_blank">参加</a></dd>
			</dl>
			<?php } ?>
		</div>
		<div class="col-md-4">
			coming soon
		</div>
	</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("home/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html><?php }} ?>
