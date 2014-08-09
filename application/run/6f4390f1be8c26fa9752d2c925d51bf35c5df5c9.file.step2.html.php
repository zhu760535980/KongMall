<?php /* Smarty version Smarty-3.1.13, created on 2014-08-09 07:49:23
         compiled from "C:\xampp\htdocs\php2\mall\application\views\install\step2.html" */ ?>
<?php /*%%SmartyHeaderCode:2828853e590236bd4d5-03347856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f4390f1be8c26fa9752d2c925d51bf35c5df5c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php2\\mall\\application\\views\\install\\step2.html',
      1 => 1407563300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2828853e590236bd4d5-03347856',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53e59023738734_86031464',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e59023738734_86031464')) {function content_53e59023738734_86031464($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link href='../../../public/styles/bootstrap.min.css' rel="stylesheet">
<link href='../../../public/styles/install.css' rel="stylesheet">
<script src="../../../public/scripts/jquery-1.10.2.js"></script>
<script src="../../../public/scripts/holder.js"></script>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3">				
				<a class="progress-bar progress-bar-striped progress-bar-success">协议</a>
			</div>
			<div class="col-md-3">
				<!-- <img src='holder.js/213x20/vine'> -->
				<a class="progress-bar progress-bar-striped progress-bar-success">数据库</a>
			</div>
			<div class="col-md-3">
				<!-- <img src='holder.js/213x20/sky'> -->
				<a class="progress-bar progress-bar-striped progress-bar-info">管理员</a>
			</div>
			<div class="col-md-3">
				<!-- <img src='holder.js/213x20/auto'> -->
				<a class="progress-bar progress-bar-striped">管理员</a>
			</div>
		</div>
		<div class="row">
		<form action="" method="post">
			<div class="col-md-12">			
				<table class="table">
					<caption>数据库配置信息</caption>
					<tr><td>主机名:<input type="text" class="form-control" name="host"></td></tr>
					<tr><td>用户名:<input type="text" class="form-control" name="user"></td></tr>
					<tr><td>密码:<input type="text" class="form-control" name="pwd"></td></tr>
					<tr><td>数据库名:<input type="text" class="form-control" name="dbname"></td></tr>	
					<tr><td><input type="submit" class="btn btn-primary btn-success protocol" value="提交" name="send"></td></tr>			
				</table>			
			</div>
		</form>
		</div>	
	</div>
</body>
</html><?php }} ?>