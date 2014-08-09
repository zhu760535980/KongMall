<?php /* Smarty version Smarty-3.1.13, created on 2014-08-09 07:56:47
         compiled from "C:\xampp\htdocs\php2\mall\application\views\install\step3.html" */ ?>
<?php /*%%SmartyHeaderCode:485953e5b7be8e7371-17237769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '023d83fc788f40397e91933069b6ae3d1e7565ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php2\\mall\\application\\views\\install\\step3.html',
      1 => 1407563784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '485953e5b7be8e7371-17237769',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53e5b7be94b9d8_02684259',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e5b7be94b9d8_02684259')) {function content_53e5b7be94b9d8_02684259($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
					<caption>管理配置</caption>
					<tr><td>管理员名:<input type="text" class="form-control" name="admin_user"></td></tr>					
					<tr><td>管理员密码:<input type="text" class="form-control" name="admin_pwd"></td></tr>					
					<tr><td><input type="submit" class="btn btn-primary btn-success protocol" value="提交" name="send"></td></tr>			
				</table>			
			</div>
		</form>
		</div>	
	</div>
</body>
</html><?php }} ?>