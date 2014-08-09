<?php /* Smarty version Smarty-3.1.13, created on 2014-08-09 22:57:34
         compiled from "C:\xampp\htdocs\root\KongMall\application\views\admin\admin.html" */ ?>
<?php /*%%SmartyHeaderCode:275953e636ded1e8f7-20280205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '677ebb960ff3ece7c11b587634d9d5949031e95a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\root\\KongMall\\application\\views\\admin\\admin.html',
      1 => 1407594572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275953e636ded1e8f7-20280205',
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
  'unifunc' => 'content_53e636ded6e386_49746477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e636ded6e386_49746477')) {function content_53e636ded6e386_49746477($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link href='../../../public/styles/admin.css' rel="stylesheet">
<link href='../../../public/styles/bootstrap.min.css' rel="stylesheet">
<link href='../../../public/styles/font-awesome.min.css' rel="stylesheet">
<script src="../../../public/scripts/jquery-1.10.2.js"></script>
<script src="../../../public/scripts/bootstrap.js"></script>
<script src="../../../public/scripts/admin.js"></script>
</head>
<body>
<!--modal开始  -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title" id="myModalLabel">确定要删除吗！</h4>
				</div>
				<div class="modal-body">
					<span class="icon-warning-sign"></span>
				</div>
				<div class="modal-footer">
						<a href="" type="button" class="btn btn-default btn-success"  id="btrue">确定</a>
						<a type="button" class="btn btn-primary btn-danger" data-dismiss="modal"  id="bfalse">取消</a>
				</div>
		</div>
	</div>
</div>
<!--modal结束  -->
<table class="table tproducts">
<form action="delete.php?action=deleteAll" method="post">
	<tr class="title">
		<th>商品名称</th>
		<th>商品价格</th>
		<th>商品库存</th>
		<th>商品描述</th>
		<th>添加时间</th>
		<th>操作</th>
		<th><input type="checkbox" id="selectBar">全选</th>
	</tr>
		<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->price;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->inventory;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->description;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->addTime;?>
</td>
			<td>
				<a href='update.php?action=delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
'>修改</a>||
				<a href='delete.php?action=delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
' class="confirm-delete">删除</a>
			</td>
			<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" name="selectAll[]"></td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan="7"><a href='addProduct.php' class="btn btn-primary jump">添加商品</a><input type="submit" value="全部删除" class="btn btn-primary deleteAll"></td>
		</tr>
		<?php }else{ ?>
		<tr><td colspan="6">暂无商品</td></tr>
		<?php }?>
</form>	
</table>
<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
</body>
</html><?php }} ?>