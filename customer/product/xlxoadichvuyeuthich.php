<?php
ob_start(); 
session_start();
?>
<?php
require("../../public/ketnoi.php");
if(isset($_SESSION["id-user"]))
{
	$sql="delete from tbl_yeu_thich_dich_vu where id_khach_hang='".$_SESSION["id-user"]."' and id_dich_vu='".$_GET["iddichvu"]."'";
	if($con->query($sql)==TRUE)
	{
		header("location:../../yeuthich.php?&action=xoa");
	}
	else
	{
		echo "Không thêm được ".$sql;
	}
}
else header("location:../../index.php?loi=");
?>