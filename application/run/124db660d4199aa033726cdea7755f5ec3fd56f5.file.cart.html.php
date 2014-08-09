<?php /* Smarty version Smarty-3.1.13, created on 2014-08-02 03:51:59
         compiled from "C:\xampp\htdocs\php2\mall\application\views\home\cart.html" */ ?>
<?php /*%%SmartyHeaderCode:1920853d4782b34dc36-29773592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '124db660d4199aa033726cdea7755f5ec3fd56f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php2\\mall\\application\\views\\home\\cart.html',
      1 => 1406944316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1920853d4782b34dc36-29773592',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53d4782b3c40e4_23661582',
  'variables' => 
  array (
    'cart' => 0,
    'value' => 0,
    'sum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d4782b3c40e4_23661582')) {function content_53d4782b3c40e4_23661582($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link href='../../../public/styles/bootstrap.min.css' rel="stylesheet">
<link href='../../../public/styles/bootstrap-theme.css' rel="stylesheet">
<link href='../../../public/styles/font-awesome.min.css' rel="stylesheet">
</head>
<body>
<table class="table table-bordered">
<tr>
	<th>商品名称</th>
	<th>增|数量|</th>	
	<th>商品单价</th>
	<th>商品价格</th>
	<th>操作</th>	
</tr>
<?php if ($_smarty_tpl->tpl_vars['cart']->value){?>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
<tr>
	<td><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</td>
	<td>
		<a class="btn btn-primary icon-arrow-up" onclick='location.href="updateNum.php?action=plus&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"'></a>
			[<?php echo $_smarty_tpl->tpl_vars['value']->value->num;?>
]
		<a class="btn btn-primary icon-arrow-down" onclick='location.href="updateNum.php?action=minus&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"'></a>
	</td>	
	<td><?php echo $_smarty_tpl->tpl_vars['value']->value->price;?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['value']->value->price*$_smarty_tpl->tpl_vars['value']->value->num;?>
</td>
	<td><a href="removeProduct.php?action=removeOne&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" class="btn btn-danger">移除商品</a></td>	
</tr>
<?php } ?>
<tr>
	<td align="right" colspan="5">
	<a href="removeProduct.php?action=removeAll" class="btn btn-info">清空购物车</a>&nbsp;&nbsp;
	<a href="home.php" class="btn btn-warning">继续购物</a>
	<a href="order.php?action=placeOrder" class="btn btn-success">提交订单</a>
	总计：<?php echo $_smarty_tpl->tpl_vars['sum']->value;?>

	</td>
</tr>
<?php }else{ ?>
<tr>
	<td>暂无商品</td>
</tr>
<?php }?>
</table>
</body>
</html><?php }} ?>