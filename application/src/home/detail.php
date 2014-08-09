<?php
include '../../../init.php';
//Tools::dump($_GET);
if(isset($_GET['action'])){
	//把传进来的id带入sql语句
	$sql="select * from products where id=".$_GET['id'];
	//执行sql语句
	$result=$mysqli->query($sql);
	//根据id获取一件商品;
	$oneProduct=$result->fetch_object();
	//设置默认的数量是1；
	$oneProduct->num=1;		
	if(isset($_SESSION['cart'][$oneProduct->id])){
		//id号是cart下的一件商品；
		$_SESSION['cart'][$oneProduct->id]->num++;
	}else{
		//以商品的id为键名保存的对象
		$_SESSION['cart'][$oneProduct->id]=$oneProduct;
	}
	//Tools::dump($_SESSION);
	//把一件商品赋到前台；
	$smarty->assign("oneProduct",$oneProduct);	
}
$smarty->display("home/detail.html");
?>