<?php
ob_start(); 
session_start();
?>
<?php
	require("public/ketnoi.php");
	$_SESSION["kiemtrasua"]=0;
	$noidung=$_POST['noi_dung'];
	$idkhachhang=$_SESSION['id-user'];
	$idsanpham=$_POST['ma_san_pham'];
	$tranghientai="location:dichvu.php?&m=".$idsanpham;
	if ($noidung != "" && $idkhachhang != "")
	{
		$sql_insert="insert into tbl_binh_luan_dich_vu(id_khach_hang,id_dich_vu,noi_dung) values('".$idkhachhang."','".$idsanpham."','".$noidung."')";
		if($con->query($sql_insert)===TRUE && $con->query($sql_insert1)===TRUE)
		{	
			header($tranghientai);
		}
		else
		{
			header($tranghientai);
		}   
	}
	else
	{
		if($idkhachhang == "")
		{
			$_SESSION["kiemtrasua"]=1;
			header($tranghientai);
		}
		else
		{
		$_SESSION["kiemtrasua"]=2;
		header($tranghientai);
		}
	}
?>