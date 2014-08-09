<?php
/**
 * $_REQUEST:可以获取post和get方式提交的数据
 * $_POST获取post提交的值：数据非常大；
 * $_GET获取get提交的值：数据少，地址栏
 *   
 *   */
var_dump($_POST);
echo "<hr>";
var_dump($_GET);
echo "<hr>";
var_dump($_REQUEST);
?>
<form action="" method="post">
	<input type="text" name="username"><br>
	<input type="submit" value="Submit" name="send">
</form>
<a href="?action=show">jump</a>