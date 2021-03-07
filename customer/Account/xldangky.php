<?php
ob_start(); 
session_start();
?>
<?php
require("../../public/ketnoi.php");
$hoten=$_POST["txthoten"];
$tendangnhap=$_POST["txttendangnhap"];
$matkhau=$_POST["txtmatkhau"];
//kiểm tra sự trùng lặp csdl
$sql="select * from tbl_khach_hang where ten_dang_nhap='".$_POST["txttendangnhap"]."' or email='".$_POST["email"]."' or so_dien_thoai='".$_POST["sdt"]."'";
$result=$con->query($sql);
if($result->num_rows>0) //tai khoan da ton tai
{
	header("location:../../home.php?loi=2");
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
	
	$sql="insert into tbl_khach_hang(ten_dang_nhap,mat_khau,ten_khach_hang,email,so_dien_thoai,ma_kich_hoat) values('".$tendangnhap."','".$matkhau."','".$hoten."','".$_POST["email"]."','".$_POST["sdt"]."','".$ma."')";
	echo $sql;
	if($con->query($sql)==TRUE)
	{
		header("location:../../home.php?login=1");
	}
	else
	{
		echo "Không thêm được";
	}
}
?>