<?php
include '../../../init.php';
define("root",dirname(__FILE__));
$root=substr(root, 0,-22)."/";
//echo $root;
//实例化分页类;
//$mysqli->query("select * from products")->num_rows:总记录数；
$page=new Page($mysqli->query("select * from products")->num_rows);
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
$smarty->display("admin/admin.html")
?>