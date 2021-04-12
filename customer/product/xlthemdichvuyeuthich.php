<?php
ob_start(); 
session_start();
?>
<?php
require("../../public/ketnoi.php");
if(isset($_SESSION["id-user"]))
{
	$sql="insert into tbl_yeu_thich_dich_vu(id_khach_hang,id_dich_vu) values('".$_SESSION["id-user"]."','".$_GET["iddichvu"]."')";
	if($con->query($sql)==TRUE)
	{
		header("location:../../yeuthich.php?&action=them");
	}
	else
	{
		echo "Không thêm được ".$sql;
	}
}
else header("location:../../index.php?loi=1");
?>