<?php
ob_start(); 
session_start();
?>
<?php
require("../../public/ketnoi.php");
$sql="select * from tbl_khach_hang where ten_dang_nhap='".$_POST["tendangnhap"]."'";
$result=$con->query($sql);
if($result->num_rows>0)
{
	$dieuhuong="location:../../quenmatkhau.php?&tendangnhap=";
	$row=$result->fetch_assoc();
	$dieuhuong.=$row["ten_dang_nhap"];
	if(!isset($_POST["email"])) header($dieuhuong);
	else
	{
		if($_POST["email"]==$row["email"] and !isset($_POST["maxacnhan"]))
		{
			$dieuhuong.="&email=".$row["email"];
			$chude="Đặt lại mật khẩu";
			$tenkhachhang=$row["ten_dang_nhap"];
			$noidunegmail="Mã xác nhận của bạn là: ".$row["ma_kich_hoat"];
			include("../../sendemail/index.php");
			header($dieuhuong);
			die();
		}
		else
		{
			$dieuhuong="location:../../quenmatkhau.php?&error=2";
		}
		if(isset($_POST["maxacnhan"]) and $_POST["maxacnhan"]==$row["ma_kich_hoat"])
		{
//				Tao ra doan ma ngau nhien
			function rand_string( $length )
			{
				$str="";
				$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
				$size = strlen( $chars );
				for( $i = 0; $i < $length; $i++ ) {
					$str .= $chars[ rand( 0, $size - 1 ) ];
 				}
				return $str;
				}
//				Tao ra doan ma ngay nhien: end.
			$ma = rand_string(8);
			$sqlupdate="UPDATE tbl_khach_hang SET ma_kich_hoat='".$ma."' WHERE email='".$_POST["email"]."'";
			$result=$con->query($sqlupdate);
			$_SESSION["datlaimatkhau"]=1;
			$dh="location:../../quenmatkhau.php?&action=true&tendangnhap=".$_POST["tendangnhap"];
			header($dh);
			die();
		}
		else
		{
			header("location:../../quenmatkhau.php?&action=fail");
			die();
		}
		header($dieuhuong);
	}
}
else //khong ton tai tai khoan
{
	header("location:../../quenmatkhau.php?&error=2");
}
	
?>