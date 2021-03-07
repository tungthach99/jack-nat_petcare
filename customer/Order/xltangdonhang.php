<?php
ob_start(); 
session_start();
?>
<?php
	$_SESSION["soluong"][$_GET["stt"]]++;
	header("location:../../giohang.php?&action=sua");
?>