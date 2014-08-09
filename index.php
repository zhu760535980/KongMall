<?php
//echo "hello";
//如果已经安装就跳到首页，
//没有安装就跳到安装页面；
if(file_exists("application/src/install/install.lock")){
	header("location:application/src/home/home.php");
}else{
	header("location:application/src/install/step1.php");
}
?>