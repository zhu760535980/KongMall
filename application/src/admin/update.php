<?php
include '../../../init.php';
define("root",dirname(__FILE__));
$root=substr(root, 0,-22)."/";
//exit($root);
if($_GET['action']=='delete'){
	//var_dump($_GET);
	$sql="select * from products where id=".$_GET['id'];
	$result=$mysqli->query($sql);
	$oneProduct=$result->fetch_object();
	//var_dump($oneProduct);
	$smarty->assign("oneProduct",$oneProduct);
}
if(isset($_POST['send'])){
	//echo "<pre>";
	//var_dump($_POST);
	//echo "</pre>";
	$fileName='';
	//判断文件是否上传
	if(is_uploaded_file($_FILES['pix']['tmp_name'])){
		$upload=new UploadFile("pix",$root.'public/uploads/');
		if($upload->upload()){
			//如果上传成功的话，就把新名字提交
			$fileName=$upload->getNewName();
		}
		//echo 'has';
	}else{
		//echo "none";
		//如果没有上传新文件，就提交原来的图片名;
		$fileName=$_POST['pix2'];
	}
	//echo $fileName;
	$sql2="update products set 
							name='".$_POST['name']."',
							price='".$_POST['price']."',
							inventory='".$_POST['inventory']."',
							pix='".$fileName."',
							description='".$_POST['description']."' 
							where id=".$_POST['id'];
	//echo $sql2;
	$re=$mysqli->query($sql2);
	if($re){
		Tools::Success("修改商品成功", "admin.php");
	}else{
		Tools::Error("修改商品失败", "admin.php");
	}
}
$smarty->display("admin/update.html");
?>

















