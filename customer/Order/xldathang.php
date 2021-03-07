<?php
ob_start(); 
session_start();
?>
<?php
	require("../../public/ketnoi.php");
	$action="hethang";
	if(isset($_SESSION["id-user"])) $idkhachhang=$_SESSION["id-user"];
	else $idkhachhang=-1;
	if(!isset($_SESSION["magiamgia"])) $_SESSION["magiamgia"]="";
	$tongtien=$_SESSION["tongtien"];
	$trangthai='dat hang';
	$tenkhachhang = $_POST["hoten"];
	$diachi = $_POST["diaChiNhanHang"];
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$ngaydat = date('m/d/Y h:i:s a', time());
	if ($_POST["hinhthuc"]=="option3")
	$hinhthuc = "COD";
//	Them du lieu vao bang don hang
	$sql="insert into tbl_don_hang(id_khach_hang,tong_tien,trang_thai,ngay_dat,ten_khach_hang,dia_chi_nhan_hang,hinh_thuc_mua_hang,ghi_chu,dien_thoai,email,ma_giam_gia,phi_van_chuyen) values('".$idkhachhang."',".$tongtien.",'".$trangthai."','".$ngaydat."','".$tenkhachhang."','".$diachi."','".$hinhthuc."','".$_POST["ghichu"]."','".$_POST["sdt"]."','".$_POST["email"]."','".$_SESSION["magiamgia"]."','".$_SESSION["phivanchuyen"]."')";
	//echo $sql;
	if($con->query($sql)==TRUE)
	{
//		Lay id don hang
		$sqlselect ="select id_don_hang from tbl_don_hang where ngay_dat = '".$ngaydat."' and id_khach_hang = '".$idkhachhang."' and ten_khach_hang = '".$tenkhachhang."' and dia_chi_nhan_hang = '".$diachi."'";
		$result2=$con->query($sqlselect);
		if($result2->num_rows>0)
		{
			while($row2=$result2->fetch_assoc())
			{
				$_SESSION["id_don_hang"] = $row2['id_don_hang'];
			}
		}
		if(isset($_SESSION["giohang"]))
		{
			foreach($_SESSION["giohang"] as $key=>$value)
			{
//				$sql3="select * from tbl_san_pham where id_san_pham=".$value;
				$sql3="select t1.id_san_pham,t1.don_gia,t2.so_luong_ton from tbl_san_pham AS t1,tbl_phien_ban_san_pham AS t2 where t1.id_san_pham=t2.id_san_pham AND t1.id_san_pham=".$value." AND t2.id_phien_ban=".$_SESSION["phienban"][$key];
//				echo $sql3;
				$result3=$con->query($sql3);
				if($result3->num_rows>0)
				{
					while($row3=$result3->fetch_assoc())
					{
//						Them du lieu vao bang chi tiet don hang
						$thanhtien3=$_SESSION["soluong"][$key]*$_SESSION["giatinh"][$key];
						$sqlinsert = "insert into tbl_chi_tiet_don_hang(id_don_hang,id_san_pham,don_gia,so_luong,thanh_tien,id_phien_ban) values('".$_SESSION["id_don_hang"]."','".$row3['id_san_pham']."','".$_SESSION["giatinh"][$key]."',".$_SESSION["soluong"][$key].",'".$thanhtien3."','".$_SESSION["phienban"][$key]."')";
						if ($con->query($sqlinsert)) {
							echo $sqlinsert;
						}
						else
						{
//							gop hang hoa giong nhau
							$sqlcheck="select * from tbl_chi_tiet_don_hang where id_don_hang='".$_SESSION["id_don_hang"]."' and id_san_pham='".$row3['id_san_pham']."' and id_phien_ban=".$_SESSION["phienban"][$key];
							$result=$con->query($sqlcheck);
							if($result->num_rows>0)
							{
								while($rowcheck=$result->fetch_assoc())
								{
									$_SESSION["soluong"][$key]+=$rowcheck['so_luong'];
									$thanhtien3=$_SESSION["soluong"][$key]*$_SESSION["giatinh"][$key];
									$sqlupdate = "update tbl_chi_tiet_don_hang set so_luong =". $_SESSION["soluong"][$key].",thanh_tien=".$thanhtien3." where id_don_hang='".$_SESSION["id_don_hang"]."' and id_san_pham='".$row3['id_san_pham']."' and id_phien_ban='".$_SESSION["phienban"][$key]."'";
									if ($con->query($sqlupdate))
									{
										
									}
									else echo "không thêm được: ".$sqlupdate;
								}
							}
							else echo $sqlcheck;
						}
						if(isset($_SESSION["soluong"][$key]) and $_SESSION["soluong"][$key]>$row3['so_luong_ton'])
						{
							$sqldelete="DELETE FROM tbl_chi_tiet_don_hang WHERE id_don_hang='".$_SESSION["id_don_hang"]."'";
							$result=$con->query($sqldelete);
							$sqldelete="DELETE FROM tbl_don_hang WHERE id_don_hang='".$_SESSION["id_don_hang"]."'";
							$result=$con->query($sqldelete);
							$action="hethang";
							header("location:../../giohang.php?&action=hethang");
							die();
						}
					}
					
				}
				
			}
		}
//		Gửi email xác nhận
		$chude="Thông báo đặt hàng thành công";
		$noidunegmail="Vào lúc ".$ngaydat." bạn đã thực hiện đặt hàng thành công. Mã đơn hàng: ".$_SESSION["id_don_hang"];
		include("../../sendemail/index.php");
		
		header("location:../../giohang.php?&action=hoantat");
	}
	else
	{
		echo "Không thêm được ";
		echo $sql;
	}
?>