<?php
//	session_start();
	require("public/ketnoi.php");
	$tenDichVu=$_GET['text-box-tim-kiem2'];
	$dieuhuong="location:dichvu.php?&t=".$tenDichVu;
	header($dieuhuong);
?>