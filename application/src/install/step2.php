<?php
include '../../../init.php';
if(isset($_GET['action'])){
	//var_dump($mysqli);
	//把外部文件的内容读取到数组中;
	$lines=file("../../database/mall.sql");
	$sqlstr='';
	foreach ($lines as $line){
		//echo $line."<br>";
		//把line的前后空格删掉
		$line=trim($line);
		if($line!=''){
			if(!($line[0]=='-')){
				$sqlstr.=$line;
			}
		}
	}
	//echo "<hr>";
	$pattern="/\/\*.*?\*\/;/";
	$newstr=preg_replace($pattern,"", $sqlstr);
	$newstr=rtrim($newstr,";");
	$sqls=explode(";",$newstr);
	//echo $newstr;
	//echo $sqlstr;
	foreach ($sqls as $value){
		$mysqli->query($value);
		echo "执行".$value."成功<br>";
	}
	//echo "数据库创建成功";
	rename("step1.php","install.lock");
	header("location:step3.php");
	//echo "<hr>";
	//echo "<pre>";
	//var_dump($sqls);
	//var_dump($lines);
	//echo "</pre>";
}
//var_dump($_POST);
$smarty->display("install/step2.html");
?>