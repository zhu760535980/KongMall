<?php /* Smarty version Smarty-3.1.13, created on 2014-07-27 07:11:18
         compiled from "C:\xampp\htdocs\php2\mall\application\views\home\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:3189053d45895e38723-67589764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a38e52380ab9c091650bcd5c7c758f9cbf3d06d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php2\\mall\\application\\views\\home\\detail.html',
      1 => 1406437875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3189053d45895e38723-67589764',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53d45895ea5f31_93088718',
  'variables' => 
  array (
    'oneProduct' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d45895ea5f31_93088718')) {function content_53d45895ea5f31_93088718($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link href='../../../public/styles/bootstrap.min.css' rel="stylesheet">
<link href='../../../public/styles/bootstrap-theme.css' rel="stylesheet">
<link href='../../../public/styles/font-awesome.min.css' rel="stylesheet">
<link href='../../../public/styles/detail.css' rel="stylesheet">
</head>
<body>
<div id="detail">
	<div id="left">
		<img src="../../../public/uploads/<?php echo $_smarty_tpl->tpl_vars['oneProduct']->value->pix;?>
">
		<ul>
			<li>1</li>
			<li>1</li>
			<li>1</li>
			<li>1</li>
		</ul>
	</div>
	<dl id="right">
	<form method="post" action="cart.php">
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oneProduct']->value->id;?>
">
		<dt class="text-success"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneProduct']->value->name;?>
" class="form-control"></dt>
		<dd><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneProduct']->value->price;?>
" class="form-control"></dd>
		<dd><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneProduct']->value->inventory;?>
" class="form-control"></dd>
		<dd><input type="submit" class="btn btn-danger icon-shopping-cart cart" value="放入购物车"></a></dd>
	</form>
	</dl>	
</div>
</body>
</html><?php }} ?>