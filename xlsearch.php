<?php
//	session_start();
	require("public/ketnoi.php");
	$tensanpham=$_GET['text-box-tim-kiem'];
	$dieuhuong="location:menu.php?&tensanpham=".$tensanpham;
	header($dieuhuong);
?>