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
	$dieuhuong="location:../../quenmatkhau.php?&step=1&tendangnhap=";
	$row=$result->fetch_assoc();
	$dieuhuong.=$row["ten_dang_nhap"];
	if(!isset($_POST["step"]))
	{
		header($dieuhuong);
	}
	else
	{
		if($_POST["step"]==1 and $_POST["email"]==$row["email"])
		{
			$dieuhuong="location:../../quenmatkhau.php?&step=2&tendangnhap=";
			$dieuhuong.=$row["ten_dang_nhap"];
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
		if(isset($_POST["maxacnhan"]) and $_POST["maxacnhan"]==$row["ma_kich_hoat"] and $_POST["step"]==2)
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
			$_SESSION["tendn"]=$_POST["tendangnhap"];
			$dieuhuong="location:../../quenmatkhau.php?&step=3&tendangnhap=";
			$dieuhuong.=$row["ten_dang_nhap"];
			$dieuhuong.="&email=".$row["email"];
			header($dieuhuong);
			die();
		}
		if($_POST["step"]==3 and isset($_SESSION["datlaimatkhau"]) and $_SESSION["datlaimatkhau"]==1)
		{
			$sqlupdate="UPDATE tbl_khach_hang SET mat_khau='".$_POST["matkhaumoi"]."' WHERE email='".$_POST["email"]."'";
			$result=$con->query($sqlupdate);
			unset($_SESSION["datlaimatkhau"]);
			$dieuhuong="location:../../quenmatkhau.php?&action=hoantat";
		}
		header($dieuhuong);
	}
}
else //khong ton tai tai khoan
{
	header("location:../../quenmatkhau.php?&error=2");
}
	
?>