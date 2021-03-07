<?php
ob_start(); 
session_start();
?>
<?php
require("../../public/ketnoi.php");
$hoten=$_POST["name"];
$tendangnhap=$_POST["tenDangNhap"];
$matkhau=$_POST["matKhau"];
$xnmatkhau=$_POST["xacNhanMatKhau"];
if($matkhau == $xnmatkhau)
{
	//kiểm tra sự trùng lặp csdl
	$sql="select * from tbl_khach_hang where ten_dang_nhap='".$_POST["tenDangNhap"]."' or email='".$_POST["email"]."' or so_dien_thoai='".$_POST["sdt"]."'";
	$result=$con->query($sql);
	if($result->num_rows>0) //tai khoan da ton tai
	{
		header("location:../../taotaikhoan.php?loi=2");
	}
	else
	{
		//	Tao ra doan ma ngau nhien
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
		//	Tao ra doan ma ngay nhien: end.
		$ma = rand_string(8);
	
		$sql="insert into tbl_khach_hang(ten_dang_nhap,mat_khau,ten_khach_hang,email,so_dien_thoai,dia_chi,gioi_tinh,ma_kich_hoat) values('".$tendangnhap."','".$matkhau."','".$hoten."','".$_POST["email"]."','".$_POST["sdt"]."','".$_POST["diaChi"]."','".$_POST["gioiTinh"]."','".$ma."')";
		echo $sql;
		if($con->query($sql)==TRUE)
		{
			header("location:../../index.php?dangky=1");
		}
		else
		{
			echo "Không thêm được";
		}
	}
}
else
{
	header("location:../../taotaikhoan.php?loi=1");
}
?>