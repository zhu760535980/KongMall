<?php
include '../../../init.php';
//根据action的值，执行多删
if($_GET['action']=='deleteAll'){
	//Tools::dump($_POST);
	$ids=$_POST['selectAll'];
	$strID=implode(",", $ids);
	//Tools::dump($strID);
	$sql2="delete from products where id in(".$strID.")";
	//echo $sql2;
	$re=$mysqli->query($sql2);
	if($re){
		Tools::Success("多删成功", "admin.php");
	}else{
		Tools::Error("多删失败", "admin.php");
	}
}
//根据action的值，执行单删
if($_GET['action']=='delete'){
	//Tools::dump($_GET);
	$sql="delete from products where id=".$_GET['id'];
	$result=$mysqli->query($sql);
	if($result){
		Tools::Success("删除成功", "admin.php");
	}else{
		Tools::Error("删除失败", "admin.php");
	}
}
?>