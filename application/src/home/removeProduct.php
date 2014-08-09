<?php
session_start();
//var_dump($_GET);
if($_GET['action']=='removeOne'){
	unset($_SESSION['cart'][$_GET['id']]);
}else if($_GET['action']=='removeAll'){
	unset($_SESSION['cart']);
}
header("Location:cart.php");
?>