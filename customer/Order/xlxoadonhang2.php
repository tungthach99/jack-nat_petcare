<?php
ob_start(); 
session_start();
?>
<?php
	$_SESSION["soluong2"][$_GET["stt"]]=0;
	header("location:../../giohang.php?&action=sua");
?>