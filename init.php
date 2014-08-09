<?php
//开启session
session_start();
//设置输出的文件头
header("Content-Type:text/html;charset=utf-8");
//显示所有的错误，不包括不严格的语法;
error_reporting(E_ALL &~E_STRICT);
//定义网站根目录
define("ROOT_PATH",dirname(__FILE__)."/");
//echo ROOT_PATH;
//通过网站根目录导入smarty类
include ROOT_PATH.'libs/Smarty.class.php';
//导入链接数据库文件
include ROOT_PATH.'application/includes/conn.php';
include ROOT_PATH.'application/includes/Tools.class.php';
include ROOT_PATH.'application/includes/UploadFile.class.php';
include ROOT_PATH.'application/includes/Page.class.php';
//实例化smarty
$smarty=new Smarty();
//var_dump($smarty);
//定义网站的模板目录
$smarty->template_dir=ROOT_PATH."application/views";
//定义网站的编译目录
$smarty->compile_dir=ROOT_PATH."application/run";
?>