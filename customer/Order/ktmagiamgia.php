<?php
ob_start(); 
session_start();
?>
<?php
	require("../../public/ketnoi.php");
if(isset($_SESSION["id-user"]))
{
	if(isset($_SESSION["magiamgia"]) and $_SESSION["magiamgia"]==$_GET["magiamgia"])
	{
		$_SESSION["magiamgia"] = null;
		$_SESSION["chietkhau"] = 0;
		header("location:../../giohang.php?&action=check");
	}
	else
	{
		$sqlcheck="select id_khach_hang, ma_giam_gia from tbl_don_hang where id_khach_hang='".$_SESSION["id-user"]."'and ma_giam_gia='".$_GET["magiamgia"]."'";
		$result=$con->query($sqlcheck);
		if($result->num_rows>0)
		{
			header("location:../../giohang.php?&action=check&check=0");
		}
		else
		{
			$sql= "select * from tbl_ma_giam_gia where ngay_ap_dung<=now() and ngay_ket_thuc>now() and ma_giam_gia = '".$_GET["magiamgia"]."'";
			$result=$con->query($sql);
			if($result->num_rows>0)
			{
				while($row=$result->fetch_assoc())
				{
					$_SESSION["magiamgia"]=$row['ma_giam_gia'];
					$_SESSION["chietkhau"]=$row['chiet_khau'];
				}
				header("location:../../giohang.php?&action=check");
			}
			else
			{
				$_SESSION["chietkhau"]=0;
				header("location:../../giohang.php?&action=check&check=0");
			}
		}
	}
}
else header("location:../../giohang.php?&action=check&login=0");
?>