<?php
ob_start(); 
session_start();
?>
<?php
require("../../public/ketnoi.php");
if(isset($_SESSION["id-user"]))
{
	$sql="insert into tbl_yeu_thich(id_khach_hang,id_san_pham) values('".$_SESSION["id-user"]."','".$_GET["idsanpham"]."')";
	if($con->query($sql)==TRUE)
	{
		header("location:../../yeuthich.php?&action=them");
	}
	else
	{
		echo "Không thêm được ".$sql;
	}
}
else header("location:../../home.php?loi=1");
?>