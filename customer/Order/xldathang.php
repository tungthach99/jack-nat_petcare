<?php
ob_start(); 
session_start();
?>
<?php
	require("../../public/ketnoi.php");
// gán id khách hàng
	if(isset($_SESSION["id-user"])) $idKhachHang=$_SESSION["id-user"];
	else $idKhachHang=-1;
// gán mã giảm giá
	if(isset($_SESSION["maGiamGia"]))
	{
		$maGiamGia = $_SESSION["maGiamGia"];
	}
	else $maGiamGia = '';
// gán ghi chú
	if(isset($_POST["ghiChu"]))
	{
		$ghiChu = $_POST["ghiChu"];
	}
	else $ghiChu = '';
// gán tên khách hàng
	$tenKhachHang = $_POST["hoten"];
// gán địa chỉ
	$diaChi = $_POST["diaChiNhanHang"];
// gán số điện thoại
	$dienThoai = $_POST["sdt"];
//gán email
	$email = $_POST["email"];
//gán ngày đặt
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$ngayDat = date('Y/m/d H:i:s', time());
//	if (isset($_POST["hinhthuc"]) and $_POST["hinhthuc"]=="option3")
	$hinhThuc = "COD";

//	Them hóa đơn bán sản phẩm
	if(isset($_SESSION["giohang"]))
	{
		echo "bắt đầu thêm đơn sản phẩm...<br>";
		$sql="insert into tbl_don_hang(id_khach_hang,email,ma_giam_gia,tong_tien,trang_thai,ngay_dat,ten_khach_hang,dia_chi_nhan_hang,hinh_thuc_mua_hang,ghi_chu,dien_thoai) values('".$idKhachHang."','".$email."','".$maGiamGia."','".$_SESSION["tongtien"]."','"."1"."','".$ngayDat."','".$tenKhachHang."','".$diaChi."','".$hinhThuc."','".$ghiChu."','".$dienThoai."')";
		echo $sql."<br>";
		if($con->query($sql)==TRUE)
		{
//			Lấy ra id đơn hàng
			$sqlselect ="select id_don_hang from tbl_don_hang where ngay_dat = '".$ngayDat."' and id_khach_hang = '".$idKhachHang."' and ten_khach_hang = '".$tenKhachHang."' and dia_chi_nhan_hang = '".$diaChi."'";
			$result_1=$con->query($sqlselect);
			echo $sqlselect."<br>";
			if($result_1->num_rows>0)
			{
				while($row_1=$result_1->fetch_assoc())
				{
					$_SESSION["id_don_hang"] = $row_1['id_don_hang'];
				}
			}
//			Lấy ra id đơn hàng: end.
			foreach($_SESSION["giohang"] as $key=>$value)
			{
				$sql_1="select * from tbl_san_pham where id_san_pham=".$value;
				$result_11=$con->query($sql_1);
				if($result_11->num_rows>0)
				{
					while($row_11=$result_11->fetch_assoc())
					{
//						Them du lieu vao bang chi tiet don hang
						$thanhtien=$_SESSION["soluong"][$key]*$_SESSION["giatinh"][$key];
						$sqlinsert = "insert into tbl_chi_tiet_don_hang(id_don_hang,id_san_pham,don_gia,so_luong,thanh_tien) values('".$_SESSION["id_don_hang"]."','".$row_11['id_san_pham']."','".$_SESSION["giatinh"][$key]."',".$_SESSION["soluong"][$key].",'".$thanhtien."')";
						if ($con->query($sqlinsert)) {
							echo "<br>thêm dữ liệu vào bảng chi tiết đơn hàng thành công: ".$sqlinsert;
						}
						else
						{
//							gop hang hoa giong nhau
							$sqlcheck="select * from tbl_chi_tiet_don_hang where id_don_hang='".$_SESSION["id_don_hang"]."' and id_san_pham='".$row_11['id_san_pham'];
							$result_12=$con->query($sqlcheck);
							if($result_12->num_rows>0)
							{
								while($rowcheck=$result->fetch_assoc())
								{
									$_SESSION["soluong"][$key]+=$rowcheck['so_luong'];
									$thanhtien=$_SESSION["soluong"][$key]*$_SESSION["giatinh"][$key];
									$sqlupdate = "update tbl_chi_tiet_don_hang set so_luong =". $_SESSION["soluong"][$key].",thanh_tien=".$thanhtien." where id_don_hang='".$_SESSION["id_don_hang"]."' and id_san_pham='".$row_11['id_san_pham']."'";
									if ($con->query($sqlupdate))
									{
										echo "<br>update sản phẩm bị trùng vào csdl thành công! <br>";
									}
									else echo "không thêm được: ".$sqlupdate;
								}
							}
							else echo $sqlcheck;
						}
//						gop hang hoa giong nhau: end.
						
//						Xử lý trường hợp hàng hóa hết
						if(isset($_SESSION["soluong"][$key]) and $_SESSION["soluong"][$key]>$row_11['so_luong'])
						{
							$sqldelete="DELETE FROM tbl_chi_tiet_don_hang WHERE id_don_hang='".$_SESSION["id_don_hang"]."'";
							$result_13=$con->query($sqldelete);
							$sqldelete="DELETE FROM tbl_don_hang WHERE id_don_hang='".$_SESSION["id_don_hang"]."'";
							$result_13=$con->query($sqldelete);
							header("location:../../giohang.php?&action=hethang");
							die();
						}
//						Xử lý trường hợp hàng hóa hết: end.
					}
					
				}
				
			}
		}
		//		Gửi email xác nhận
		$chude="Thông báo đặt hàng thành công";
		$noidunegmail="Vào lúc ".$ngayDat." bạn đã thực hiện đặt hàng thành công. Mã đơn hàng: ".$_SESSION["id_don_hang"];
		include("../../sendemail/index.php");
		//		Gửi email xác nhận: end.
		header("location:../../giohang.php?&action=hoantat");
	}
////	Them hóa đơn bán sản phẩm: end.

		
//// 	Thêm hóa đơn đặt dịch vụ
	
	if(isset($_SESSION["giohang2"]))
	{
		echo "bắt đầu thêm đơn dịch vụ...<br>";
		$sql="insert into tbl_don_dich_vu(id_khach_hang,email,tong_tien,trang_thai,ngay_dat,ten_khach_hang,dia_chi,hinh_thuc_mua_hang,ghi_chu,so_dien_thoai) values('".$idKhachHang."','".$email."','".$_SESSION["tongtien2"]."','"."1"."','".$ngayDat."','".$tenKhachHang."','".$diaChi."','".$hinhThuc."','".$ghiChu."','".$dienThoai."')";
		echo $sql;
		if($con->query($sql)==TRUE)
		{
			echo "<br>thêm thành công...<br>";
//			Lấy ra id đơn dịch vụ
			$sqlselect ="select id_don_hang from tbl_don_dich_vu where ngay_dat = '".$ngayDat."' and id_khach_hang = '".$idKhachHang."' and ten_khach_hang = '".$tenKhachHang."' and dia_chi = '".$diaChi."'";
			$result_1=$con->query($sqlselect);
			echo "<br>".$sqlselect."<br>";
			if($result_1->num_rows>0)
			{
				while($row_1=$result_1->fetch_assoc())
				{
					$_SESSION["id_don_hang"] = $row_1['id_don_hang'];
				}
			}
//			Lấy ra id đơn hàng: end.
			foreach($_SESSION["giohang2"] as $key=>$value)
			{
				$sql_1="select * from tbl_dich_vu where id_dich_vu=".$value;
				$result_11=$con->query($sql_1);
				if($result_11->num_rows>0)
				{
					while($row_11=$result_11->fetch_assoc())
					{
//						$tgBatDau = date("Y/m/d H:i:s", strtotime($_SESSION["tgBatDau"][$key]));
//						Them du lieu vao bang chi tiet don hang
						$thanhtien=$_SESSION["soluong2"][$key]*$_SESSION["giatinh2"][$key];
						$sqlinsert = "insert into tbl_chi_tiet_don_dich_vu(id_don_dich_vu,id_dich_vu,don_gia,so_luong_thu_cung,thanh_tien,thoi_gian_bat_dau,thoi_gian_ket_thuc) values('".$_SESSION["id_don_hang"]."','".$row_11['id_dich_vu']."','".$_SESSION["giatinh2"][$key]."',".$_SESSION["soluong2"][$key].",'".$thanhtien."','".date("Y/m/d H:i:s", strtotime($_SESSION["tgBatDau"][$key]))."','".date("Y/m/d H:i:s", strtotime($_SESSION["tgKetThuc"][$key]))."')";
						if ($con->query($sqlinsert)) {
							echo "<br>Thêm chi tiết đơn dịch vụ thành công: ".$sqlinsert."<br>";
						}
						else
						{
							echo "<br>".$sqlinsert."<br>";
//							gop hang hoa giong nhau
							$sqlcheck="select * from tbl_chi_tiet_don_dich_vu where id_don_dich_vu='".$_SESSION["id_don_hang"]."' and id_dich_vu='".$row_11['id_dich_vu'];
							$result_12=$con->query($sqlcheck);
							if($result_12->num_rows>0)
							{
								while($rowcheck=$result->fetch_assoc())
								{
									$_SESSION["soluong2"][$key]+=$rowcheck['so_luong_thu_cung'];
									$thanhtien=$_SESSION["soluong2"][$key]*$_SESSION["giatinh2"][$key];
									$sqlupdate = "update tbl_chi_tiet_don_dich_vu set so_luong_thu_cung =". $_SESSION["soluong2"][$key].",thanh_tien=".$thanhtien." where id_don_dich_vu='".$_SESSION["id_don_hang"]."' and id_dich_vu='".$row_11['id_dich_vu']."'";
									if ($con->query($sqlupdate))
									{
										echo "<br>update dịch vụ bị trùng vào csdl thành công! <br>";
									}
									else echo "<br>không thêm được: ".$sqlupdate."<br>".$_SESSION["tgBatDau"][$key];
								}
							}
							else echo $sqlcheck;
						}
//						gop hang hoa giong nhau: end.
						
//						Xử lý trường hợp hàng hóa hết
//						if(isset($_SESSION["soluong"][$key]) and $_SESSION["soluong"][$key]>$row_11['so_luong'])
//						{
//							$sqldelete="DELETE FROM tbl_chi_tiet_don_hang WHERE id_don_hang='".$_SESSION["id_don_hang"]."'";
//							$result_13=$con->query($sqldelete);
//							$sqldelete="DELETE FROM tbl_don_hang WHERE id_don_hang='".$_SESSION["id_don_hang"]."'";
//							$result_13=$con->query($sqldelete);
//							header("location:../../giohang.php?&action=hethang");
//							die();
//						}
//						Xử lý trường hợp hàng hóa hết: end.
					}
					
				}
				
			}
		}
		//		Gửi email xác nhận
		$chude="Thông báo đặt hàng thành công";
		$noidunegmail="Vào lúc ".$ngayDat." bạn đã thực hiện đặt dịch vụ thú cưng thành công. Mã đơn hàng: ".$_SESSION["id_don_hang"];
		include("../../sendemail/index.php");
		header("location:../../giohang.php?&action=hoantat");
		//		Gửi email xác nhận: end.
		header("location:../../giohang.php?&action=hoantat");
	}
?>