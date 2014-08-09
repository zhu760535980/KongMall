<?php
include '../../../init.php';
//Tools::dump($_SESSION['cart']);
$cart=$_SESSION['cart'];
$smarty->assign("cart",$cart);
/* echo "<pre>";
var_dump($_SESSION['cart']);
echo "</pre>"; */
$sum=0;
foreach ($cart as $k=>$v){
	$sum+=($v->price*$v->num);
}
$smarty->assign("sum",$sum);
$_SESSION['sum']=$sum;
$smarty->display("home/cart.html");
?>