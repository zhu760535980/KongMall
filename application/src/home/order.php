<?php
include '../../../init.php';
if($_GET['action']=='placeOrder'){
	echo"<pre>";
	//var_dump($_SESSION['cart']);
	echo"</pre>";
	$pList='';
	foreach ($_SESSION['cart'] as $key=>$value){
		$pList.=$value->name.",";
	}
	$pList=rtrim($pList,",");
	//echo $pList;
	$orderId="order".date("Ymdhis").rand(100,999);
	//echo $_SESSION['sum'];	
	$sql="INSERT INTO `order`( 
							`orderId`, 
							`productName`,
	 						`total`, 
							`orderTime`
					) VALUES (
							'".$orderId."',
							'".$pList."',
							'".$_SESSION['sum']."',
							now()
					)";
	//echo $sql;
	$result=$mysqli->query($sql);
	if($result){
		//echo "提交订单成功";
		Tools::Success("提交订单成功", "home.php");
	}else{
		//echo "提交订单失败";
		Tools::Error("提交订单失败", "cart.php");
	}
}
?>