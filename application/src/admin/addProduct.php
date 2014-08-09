<?php
include '../../../init.php';
define("root",dirname(__FILE__));
$root=substr(root, 0,-22)."/";
//echo $root;
$upload=new UploadFile("pix",$root.'public/uploads');
if(isset($_POST['send'])){
	//判断是否上传了图片
	if(is_uploaded_file($_FILES['pix']['tmp_name'])){
		//echo "上传了文件";
		if($upload->upload()){
			$file=$upload->getNewName();
		}
	}else{
		//echo "没有上传文件";
		//没有上传就添加默认图片
		$file="default.jpg";
	}
	//echo $file;
	//Tools::dump($_POST);
	//Tools::dump($_FILES);
	//exit();
	$sql="insert into products(
							name,
							price,
							inventory,
							pix,
							description,
							addTime
	)values(
		'".$_POST['name']."',
		'".$_POST['price']."',
		'".$_POST['inventory']."',
		'".$file."',
		'".$_POST['description']."',
		now()		
	)";
	//echo $sql;
	$result=$mysqli->query($sql);
	if($result){
		//echo "添加商品成功";
		Tools::Success("添加商品成功","admin.php",1);
	}else{
		//echo "添加商品失败";
		Tools::Error("添加商品失败","",1);
	}
}
$smarty->display("admin/addProduct.html");
?>