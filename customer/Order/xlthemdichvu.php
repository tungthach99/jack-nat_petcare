<?php
ob_start(); 
session_start();
?>
<?php
	if(!isset($_SESSION["giohang2"])) $_SESSION["giohang2"] = array(0=>"0");
	if(!isset($_SESSION["soluong2"])) $_SESSION["soluong2"] = array(0=>"0");
	if(!isset($_SESSION["giatinh2"])) $_SESSION["giatinh2"] = array(0=>"0");
	if(!isset($_SESSION["tgBatDau"])) $_SESSION["tgBatDau"] = array(0=>"0");
	if(!isset($_SESSION["tgKetThuc"])) $_SESSION["tgKetThuc"] = array(0=>"0");
	if(isset($_SESSION["stt_gio_hang2"]))
	{
		$_SESSION["stt_gio_hang2"]++;
	}
	else $_SESSION["stt_gio_hang2"]=1;
	require("../../public/ketnoi.php");
	$_SESSION["giohang2"][$_SESSION["stt_gio_hang2"]]=$_GET["masanpham"];
	$_SESSION["soluong2"][$_SESSION["stt_gio_hang2"]]=$_GET["soluong"];
	$_SESSION["tgBatDau"][$_SESSION["stt_gio_hang2"]]=$_GET["thoiGianBatDau"];
	$_SESSION["tgKetThuc"][$_SESSION["stt_gio_hang2"]]=$_GET["thoiGianKetThuc"];

foreach($_SESSION["giohang2"] as $key=>$value)
	echo $key."=>".$value.".......".$_GET["masanpham"]."        ";	
	header("location:../../giohang.php?&action=them2");
?>