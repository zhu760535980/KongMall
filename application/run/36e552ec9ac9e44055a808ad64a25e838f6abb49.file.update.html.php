<?php /* Smarty version Smarty-3.1.13, created on 2014-08-09 22:57:37
         compiled from "C:\xampp\htdocs\root\KongMall\application\views\admin\update.html" */ ?>
<?php /*%%SmartyHeaderCode:2686853e636e1e263d9-18339761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36e552ec9ac9e44055a808ad64a25e838f6abb49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\root\\KongMall\\application\\views\\admin\\update.html',
      1 => 1407594572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2686853e636e1e263d9-18339761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oneProduct' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53e636e1e61528_24916905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e636e1e61528_24916905')) {function content_53e636e1e61528_24916905($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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