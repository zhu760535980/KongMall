<?php
//链接mysql服务器
$mysqli=new mysqli("localhost","root","");
//如果错误号不为0，就是有错误
//显示错误信息
if(mysqli_connect_errno()){
	echo(mysqli_connect_error());
}
//设置字符集
$mysqli->query("set names utf8");
