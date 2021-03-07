<?php
ob_start(); 
session_start();
?>
<?php
	if(!isset($_SESSION["giohang"])) $_SESSION["giohang"] = array(0=>"0");
	if(!isset($_SESSION["soluong"])) $_SESSION["soluong"] = array(0=>"0");
//	if(!isset($_SESSION["phienban"])) $_SESSION["phienban"] = array(0=>"0");
	if(!isset($_SESSION["giatinh"])) $_SESSION["giatinh"] = array(0=>"0");
	if(isset($_SESSION["stt_gio_hang"]))
	{
		$_SESSION["stt_gio_hang"]++;
	}
	else $_SESSION["stt_gio_hang"]=1;
	require("../../public/ketnoi.php");
	$_SESSION["giohang"][$_SESSION["stt_gio_hang"]]=$_GET["masanpham"];
	$_SESSION["soluong"][$_SESSION["stt_gio_hang"]]=$_GET["soluong"];
//	$_SESSION["phienban"][$_SESSION["stt_gio_hang"]]=$_GET["phienban"];
foreach($_SESSION["giohang"] as $key=>$value)
	echo $key."=>".$value.".......".$_GET["masanpham"]."        ";	
	header("location:../../giohang.php?&action=them");
?>