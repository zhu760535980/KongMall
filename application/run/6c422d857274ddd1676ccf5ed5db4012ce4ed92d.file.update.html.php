<?php /* Smarty version Smarty-3.1.13, created on 2014-08-02 05:57:58
         compiled from "C:\xampp\htdocs\php2\mall\application\views\admin\update.html" */ ?>
<?php /*%%SmartyHeaderCode:767253dc56221f0dd7-97977930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c422d857274ddd1676ccf5ed5db4012ce4ed92d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php2\\mall\\application\\views\\admin\\update.html',
      1 => 1406951876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '767253dc56221f0dd7-97977930',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53dc5622290cc6_87919919',
  'variables' => 
  array (
    'oneProduct' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53dc5622290cc6_87919919')) {function content_53dc5622290cc6_87919919($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link href='../../../public/styles/admin.css' rel="stylesheet">
<link href='../../../public/styles/bootstrap.min.css' rel="stylesheet">
<link href='../../../public/styles/font-awesome.min.css' rel="stylesheet">
</head>
<body>
<dl>
	<form action="" method="post" enctype="multipart/form-data">
		<dt>修改商品</dt>
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oneProduct']->value->id;?>
">
		<dd><input type="text" name="name" placeholder="商品名称"  value="<?php echo $_smarty_tpl->tpl_vars['oneProduct']->value->name;?>
" class="txt"></dd>
		<dd><input type="text" name="price" placeholder="商品价格" value="<?php echo $_smarty_tpl->tpl_vars['oneProduct']->value->price;?>
" class="txt"></dd>
		<dd><input type="text" name="inventory" placeholder="商品库存" class="txt" value="<?php echo $_smarty_tpl->tpl_vars['oneProduct']->value->inventory;?>
"></dd>
		<dd><input type="file" name="pix"></dd>
		<!--pix2保存的是商品的原图 -->
		<dd><input type="hidden" name="pix2" value="<?php echo $_smarty_tpl->tpl_vars['oneProduct']->value->pix;?>
"></dd>
		<dd><img src="../../../public/uploads/<?php echo $_smarty_tpl->tpl_vars['oneProduct']->value->pix;?>
"></dd>
		<dd><textarea name="description" class="txt description"><?php echo $_smarty_tpl->tpl_vars['oneProduct']->value->description;?>
</textarea></dd>
		<dd><input type="submit" name="send" value="修改商品" id="addBtn" class="btn btn-primary addBtn"></dd>
		<!-- <dd><input type="submit" name="send" value="提交" id="addBtn"></dd> -->
	</form>
</dl>
</body>
</html><?php }} ?>