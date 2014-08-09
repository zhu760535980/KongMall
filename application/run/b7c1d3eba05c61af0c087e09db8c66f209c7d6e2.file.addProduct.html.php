<?php /* Smarty version Smarty-3.1.13, created on 2014-07-26 05:03:03
         compiled from "C:\xampp\htdocs\php2\mall\application\views\admin\addProduct.html" */ ?>
<?php /*%%SmartyHeaderCode:865353d30698b4dc80-00781366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7c1d3eba05c61af0c087e09db8c66f209c7d6e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php2\\mall\\application\\views\\admin\\addProduct.html',
      1 => 1406343755,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '865353d30698b4dc80-00781366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53d30698bbe655_11223341',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d30698bbe655_11223341')) {function content_53d30698bbe655_11223341($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
		<dt>添加商品</dt>
		<dd><input type="text" name="name" placeholder="商品名称" class="txt"></dd>
		<dd><input type="text" name="price" placeholder="商品价格" class="txt"></dd>
		<dd><input type="text" name="inventory" placeholder="商品库存" class="txt"></dd>
		<dd><input type="file" name="pix"></dd>
		<dd><textarea name="description" class="txt description"></textarea></dd>
		<dd><input type="submit" name="send" value="添加商品" id="addBtn" class="btn btn-primary addBtn"></dd>
		<!-- <dd><input type="submit" name="send" value="提交" id="addBtn"></dd> -->
	</form>
</dl>
</body>
</html><?php }} ?>