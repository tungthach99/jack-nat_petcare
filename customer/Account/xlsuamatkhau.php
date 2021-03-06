<?php
ob_start(); 
session_start();
?>
<?php
require("../../public/ketnoi.php");
$sql="select * from tbl_khach_hang where id_khach_hang='".$_SESSION["id-user"]."' and mat_khau='".$_POST["matkhau"]."' and ".$_POST["matkhaumoi"]."=".$_POST["xnmatkhaumoi"];
$result=$con->query($sql);
if($result->num_rows>0) //mat khau chinh xac
{
	$sqlupdate="UPDATE tbl_khach_hang SET mat_khau='".$_POST["matkhaumoi"]."' WHERE id_khach_hang='".$_SESSION["id-user"]."'";
	if($result2=$con->query($sqlupdate))
	{
		header("location:../../thongtintaikhoan.php?&action=hoantat&thaotac=doi");
	}
	else //khong ton tai tai khoan
	{
		header("location:../../thongtintaikhoan.php?&action=fail&thaotac=doi");
	}
}
else header("location:../../thongtintaikhoan.php?&action=fail&thaotac=doi");
?>