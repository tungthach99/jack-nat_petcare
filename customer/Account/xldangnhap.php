<?php
ob_start(); 
session_start();
?>
<?php
require("../../public/ketnoi.php");
$sql="select * from tbl_khach_hang where ten_dang_nhap='".$_POST["txttendangnhap"]."' and mat_khau='".$_POST["txtmatkhau"]."'";
$result=$con->query($sql);
$row=$result->fetch_assoc();
if($result->num_rows>0)
{
		$_SESSION["id-user"]=$row["id_khach_hang"];
		$_SESSION["ten-user"]=$row["ten_khach_hang"];
		$_SESSION["userngan"]=substr($_POST["txttendangnhap"],0,4);
		header("location:../../index.php");
		

}
else //khong ton tai tai khoan
{
	header("location:../../index.php?&error=2");
}
	
?>