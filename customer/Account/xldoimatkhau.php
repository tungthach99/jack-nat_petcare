<?php
ob_start(); 
session_start();
?>
<?php
require("../../public/ketnoi.php");
$sqlupdate="UPDATE tbl_khach_hang SET mat_khau='".$_POST["matkhaumoi"]."' WHERE ten_dang_nhap='".$_POST["tendn"]."'";
if($result=$con->query($sqlupdate))
{
	unset($_SESSION["datlaimatkhau"]);
	header("location:../../quenmatkhau.php?&action=hoantat");
}
else //khong ton tai tai khoan
{
	header("location:../../quenmatkhau.php?&action=fail");
}
?>