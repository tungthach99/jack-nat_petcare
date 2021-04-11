<?php
ob_start(); 
session_start();
?>
<?php
	$_SESSION["soluong2"][$_GET["stt"]]++;
	header("location:../../giohang.php?&action=sua");
?>