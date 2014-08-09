<?php
include '../../../init.php';
$page=new Page($mysqli->query("select * from products")->num_rows,10);
//Tools::dump($page);
$sql="select * from products order by id desc ".$page->limit;
$result=$mysqli->query($sql);
$products=array();
while($data=$result->fetch_object()){
	$products[]=$data;
}
//Tools::dump($products);
$smarty->assign("page",$page->display(array(0,1,2)));
$smarty->assign("products",$products);
$smarty->display("home/home.html");
?>