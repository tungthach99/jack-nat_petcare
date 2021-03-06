<?php
ob_start(); 
session_start();
?>
<?php
require("../../public/ketnoi.php");
	$sqlupdate="UPDATE tbl_khach_hang SET dia_chi='".$_POST["dc"]."' WHERE id_khach_hang='".$_SESSION["id-user"]."'";
	if($result2=$con->query($sqlupdate))
	{
		header("location:../../thongtintaikhoan.php?&action=hoantat");
	}
	else //khong ton tai tai khoan
	{
		header("location:../../thongtintaikhoan.php?&action=fail");
	}
?>