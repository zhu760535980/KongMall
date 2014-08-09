<?php /* Smarty version Smarty-3.1.13, created on 2014-08-09 09:33:36
         compiled from "C:\xampp\htdocs\php2\mall2\application\views\home\home.html" */ ?>
<?php /*%%SmartyHeaderCode:2645453e5ced0b8d0a1-71017437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb3e4c1ac81e528f3a7b6690a8a625aef14f0d58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php2\\mall2\\application\\views\\home\\home.html',
      1 => 1406942125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2645453e5ced0b8d0a1-71017437',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53e5ced0c404f6_55657927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e5ced0c404f6_55657927')) {function content_53e5ced0c404f6_55657927($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>

<link href='../../../public/styles/bootstrap.min.css' rel="stylesheet">
<link href='../../../public/styles/font-awesome.min.css' rel="stylesheet">
<link href='../../../public/styles/home.css' rel="stylesheet">
<script src="../../../public/scripts/jquery-1.10.2.js"></script>
<script src="../../../public/scripts/bootstrap.js"></script>
<script src="../../../public/scripts/slider.js"></script>
</head>
<body>
<ul class="productList">
	<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
	<li>
		<dl>
			<dd><img src="../../../public/uploads/<?php echo $_smarty_tpl->tpl_vars['value']->value->pix;?>
" title='<?php echo $_smarty_tpl->tpl_vars['value']->value->description;?>
'></dd>	
			<dd><a href="detail.php?action=detail&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" class="btn btn-primary take" target="_blank">购买</a></dd>
		</dl>
	</li>
	<?php } ?>
	<?php }else{ ?>
	<li>暂无商品</li>
	<?php }?>
</ul>
<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
</body>
</html><?php }} ?>