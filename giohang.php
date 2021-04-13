<?php
ob_start(); 
session_start();
if(isset($_SESSION['datDichVuThanhCong']) or isset($_SESSION['datSanPhamThanhCong']))
   {
	include("layout/message1_t.php");
	}
if(isset($_SESSION['datDichVuThanhCong']) and $_SESSION['datDichVuThanhCong']==1)
{
	if(isset($_SESSION["giohang2"]))
		unset($_SESSION["giohang2"]);
	if(isset($_SESSION["soluong2"]))
		unset($_SESSION["soluong2"]);
	if(isset($_SESSION["giatinh2"]))
		unset($_SESSION["giatinh2"]);
	if(isset($_SESSION["stt_gio_hang2"]))
		unset($_SESSION["stt_gio_hang2"]);
	if(isset($_SESSION["thucThuDichVu"]))
		unset($_SESSION["thucThuDichVu"]);
	unset($_SESSION['datDichVuThanhCong']);
}
if(isset($_SESSION['datSanPhamThanhCong']) and $_SESSION['datSanPhamThanhCong']==1)
{
	if(isset($_SESSION["giohang"]))
		unset($_SESSION["giohang"]);
	if(isset($_SESSION["soluong"]))
		unset($_SESSION["soluong"]);
	if(isset($_SESSION["giatinh"]))
		unset($_SESSION["giatinh"]);
	if(isset($_SESSION["stt_gio_hang"]))
		unset($_SESSION["stt_gio_hang"]);
	unset($_SESSION['datSanPhamThanhCong']);
}
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Jack NAT - Hệ thống cửa hàng chăm sóc thú nuôi</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/icon-logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style1.css">  
	<!-- Pickadate CSS -->
    <link rel="stylesheet" href="css/classic.css">    
	<link rel="stylesheet" href="css/classic.date.css">    
	<link rel="stylesheet" href="css/classic.time.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	
	<script type="text/javascript" src="js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/css3.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<?php
	include("public/ketnoi.php");
	include("layout/header.php");
	include("layout/taikhoan.php");
	if(isset($_GET["action"]) and $_GET["action"]=="hethang")
	{
		?>
		<div id="che-man-hinh">
			<div class="mess" id="mess-sua">
				<h1>Cảnh báo !!!</h1>
				<p>Xin lỗi! Sản phẩm bạn cần hiện không còn đủ số lượng. </p>
				<a style="color: #fff; border-radius: 5px; float: right;" onClick="dongform('che-man-hinh');" class="linkXanh" cursor="pointer">Đã hiểu</a>
			</div>
		</div>
		<?php
	}
	?>
	<div class="reservation-box">
		<div class="container">
			<?php
			if(isset($_GET["thongBao"]))
			{
			?>
				<br><h1>Cảnh báo !!!</h1>
				<p><?php echo $_GET['thongBao']?></p>
			<?php
			}
			?>
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
<!--						<h2>Giỏ hàng</h2>-->
<!--						<p></p>-->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						
							<div class="row">
								<div class="col-md-9">
<!--					Chi tiết giỏ hàng						-->
									<h3>Hàng hóa đã chọn</h3>

	<div class="row" style="width: 100%;">
		<span class="col-12">
			<?php
				if(isset($_SESSION["giohang"]))
				 {	 
			?>
			<div class="container">
				<div class="table-responsive">
   					<table style="text-align: center;" class="table table-bordered">
						<thead>
							<tr style="background-color: rgba(208, 167, 114,0.1)">
								<th>Tên sản phẩm</th>
								<th>Ảnh</th>
								<th>Số lượng</th>
								<th>Đơn giá</th>
								<th>SL tồn</th>
								<th>Thành tiền</th>
								<th>+</th>
								<th>-</th>
								<th>x</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$_SESSION["tongtien"]=0;
							if(isset($_SESSION["giohang"]))
							{
								foreach($_SESSION["giohang"] as $key=>$value){
									$sql="select * from tbl_san_pham where id_san_pham=".$value;
									$result=$con->query($sql);
									if($result->num_rows>0)
									{
										while($row=$result->fetch_assoc())
										{
											if($_SESSION["soluong"][$key] >0)
											{
							?>
							<tr>
								<td style="display: none;"><?php echo $row['id_san_pham'] ?></td>
								<td><?php echo $row['ten_san_pham']?></td>
								<td><img style="width: 25%;" src="images/san-pham/<?php echo $row['anh'] ?>"></td>
<!--								<td></td>-->
								<td><?php echo number_format($_SESSION["soluong"][$key]) ?></td>
								<?php
								$giatinh=$row['don_gia'];
								$_SESSION["giatinh"][$key]=$giatinh;
								?>
								<td><?php echo number_format($giatinh) ?></td>
								<td><?php echo number_format($row['so_luong']) ?></td>
								<?php
									$thanhtien=$_SESSION["soluong"][$key]*$giatinh;
									$_SESSION["tongtien"]+=$thanhtien;
								?>
								<td><?php echo number_format($thanhtien) ?></td>
								<td>
								<a class="fa fa-plus" href="customer/Order/xltangdonhang.php?&stt=<?php echo $key?>"></a>

								</td>
								<td>
								<a class="fa fa-minus" href="customer/Order/xlgiamdonhang.php?&stt=<?php echo $key?>"></a>
								</td>
								<td><a class="fa fa-trash" href="customer/Order/xlxoadonhang.php?&stt=<?php echo $key?>"></a></td>
							</tr>
							<?php
											}
										}
									}
								}
							}
							?>
						</tbody>
					</table>
				</div>
				</form>
				
				<br>
				<?php if(isset($_SESSION["giohang"])) {?>
				<div style="float: right;"><b>Tổng Tiền: </b><b style="color: red;"><?php echo number_format($_SESSION["tongtien"]) ?></b><b> VND</b></div><?php }?>
				<div><br>
					<a href="menu.php?">&lsaquo; Tiếp tục mua hàng</a>
					<?php if(isset($_SESSION["giohang"]) and $_SESSION["tongtien"]>0) {?>
					<a onClick="hienthiform('formGioHang')" class="linkDen" style="color: #fff; border-radius: 5px; float: right;">Đặt hàng</a>
					<?php }?>
				</div>
			</div>
		</span>
		<?php
				}
				else
				{
					?>
			<p>Bạn chưa chọn sản phẩm nào<p>
			<a href="menu.php" >&lsaquo; Tiếp tục mua hàng</a>
					<?php
				}
		?>
		<span class="col-2"></span>
	</div>
<!--					Chi tiết giỏ hàng:end.						-->
								
<!--Chi tiết dịch vụ-->
	<h3>Dịch vụ đã chọn</h3>
	<div class="row" style="width: 100%;">
		<span class="col-12">
			<?php
				if(isset($_SESSION["giohang2"]))
				 {	 
			?>
			<div class="container">
				<div class="table-responsive">
   					<table style="text-align: center;" class="table table-bordered">
						<thead>
							<tr style="background-color: rgba(208, 167, 114,0.1)">
								<th>Tên dịch vụ</th>
								<th>Số lượng thú</th>
								<th>Đơn giá</th>
								<th>Thời gian bắt đầu</th>
								<th>Thời gian kết thúc</th>
								<th>Thu thêm giờ</th>
								<th>Thành tiền</th>
								<th>+</th>
								<th>-</th>
								<th>x</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$_SESSION["tongtien2"]=0;
							if(isset($_SESSION["giohang2"]))
							{
								foreach($_SESSION["giohang2"] as $key2=>$value2){
									$sql2="SELECT t1.id_dich_vu,t1.ten_dich_vu,t1.don_gia_dv, t1.anh_dv, t1.id_danh_muc FROM tbl_dich_vu AS t1 JOIN tbl_danh_muc AS t2 ON t1.id_danh_muc = t2.id_danh_muc WHERE t1.id_dich_vu=".$value2;
									$result2=$con->query($sql2);
									if($result2->num_rows>0)
									{
										while($row2=$result2->fetch_assoc())
										{
											if($_SESSION["soluong2"][$key2] >0)
											{
							?>
							<tr>
								<td style="display: none;"><?php echo $row2['id_dich_vu'] ?></td>
								<td><?php echo $row2['ten_dich_vu']?></td>
<!--								<td></td>-->
								<td><?php echo number_format($_SESSION["soluong2"][$key2]) ?></td>
								<?php
								$giatinh2=$row2['don_gia_dv'];
								$_SESSION["giatinh2"][$key2]=$giatinh2;
								?>
								<td><?php echo number_format($giatinh2) ?></td>
								<td><?php echo ($_SESSION["tgBatDau"][$key2]) ;?></td>
								<td><?php echo ($_SESSION["tgKetThuc"][$key2])?></td>
<!--floor(((strtotime($_SESSION["tgKetThuc"][$key2])-strtotime($_SESSION["tgBatDau"][$key2])) / 60))-->
								<?php
									if($row2['id_danh_muc'] == 5) $phuThu = $giatinh2;
										else $phuThu=15000;
									if(floor(((strtotime($_SESSION["tgKetThuc"][$key2])-strtotime($_SESSION["tgBatDau"][$key2])) / 60)) > 60)
									{
										$thanhtien2=($_SESSION["soluong2"][$key2]*$giatinh2) + ($_SESSION["soluong2"][$key2]*($phuThu/60)*floor(((strtotime($_SESSION["tgKetThuc"][$key2])-strtotime($_SESSION["tgBatDau"][$key2])) / 60))-60*24);
										$_SESSION["tongtien2"]+=$thanhtien2;
									}
									else
									{
										$thanhtien2=$_SESSION["soluong2"][$key2]*$giatinh2;
										$_SESSION["tongtien2"]+=$thanhtien2;
									}
									$_SESSION["thucThuDichVu"][$key2]=$thanhtien2;
									
								?>
								<td><?php echo number_format($thanhtien2 - ($_SESSION["soluong2"][$key2]*$giatinh2));?></td>
								<td><?php echo number_format($thanhtien2) ?></td>
								<td>
								<a class="fa fa-plus" href="customer/Order/xltangdonhang2.php?&stt=<?php echo $key2?>"></a>

								</td>
								<td>
								<a class="fa fa-minus" href="customer/Order/xlgiamdonhang2.php?&stt=<?php echo $key2?>"></a>
								</td>
								<td><a class="fa fa-trash" href="customer/Order/xlxoadonhang2.php?&stt=<?php echo $key2?>"></a></td>
							</tr>
							<?php
											}
										}
									}
								}
							}
							?>
						</tbody>
					</table>
				</div>
				</form>
				
				<br>
				<?php if(isset($_SESSION["giohang2"])) {?>
				<div style="float: right;"><b>Tổng Tiền: </b><b style="color: red;"><?php echo number_format($_SESSION["tongtien2"]) ?></b><b> VND</b></div><?php }?>
				<div><br>
					<a href="dichvu.php?">&lsaquo; Tiếp tục đặt dịch vụ</a>
					<?php if(isset($_SESSION["giohang2"]) and $_SESSION["tongtien2"]>0) {?>
					<a onClick="hienthiform('formGioHang')" class="linkDen" style="color: #fff; border-radius: 5px; float: right;">Đặt hàng</a>
					<?php }?>
				</div>
			</div>
		</span>
		<?php
				}
				else
				{
					?>
			<p>Bạn chưa chọn dịch vụ nào<p>
			<a href="dichvu.php" >&lsaquo; Tiếp tục đặt dịch vụ</a>
					<?php
				}
		?>
		<span class="col-2"></span>
	</div>
<!--Chi tiết dịch vụ: end-->
								</div>
								<div class="col-md-3">
									<h3>Thông tin liên hệ</h3>
									<?php
	if(isset($_SESSION["id-user"]))
	{
		$sqlTaiKhoan = "select * from tbl_khach_hang where id_khach_hang = '".$_SESSION["id-user"]."'";
		$resultTaiKhoan=$con->query($sqlTaiKhoan);
		$rowTaiKhoan=$resultTaiKhoan->fetch_assoc();
	}
									?>
								<form action="customer/Order/xldathang.php" method="post" name="xldonhang">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="hoten" name="hoten" placeholder="Nhập tên" required data-error="Please enter your name" value="<?php if(isset($_SESSION["id-user"])) echo $rowTaiKhoan['ten_khach_hang'] ?>">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email" value="<?php if(isset($_SESSION["id-user"])) echo $rowTaiKhoan['email'] ?>">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Số điện thoại" id="sdt" class="form-control" name="sdt" required data-error="Please enter your Numbar" value="<?php if(isset($_SESSION["id-user"])) echo $rowTaiKhoan['so_dien_thoai'] ?>">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Địa chỉ nhận hàng" id="diaChiNhanHang" class="form-control" name="diaChiNhanHang" required data-error="Vui lòng nhập địa chỉ nhận hàng" value="<?php if(isset($_SESSION["id-user"])) echo $rowTaiKhoan['dia_chi'] ?>">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="submit-button text-center">
											<button class="btn btn-common" type="submit">Đặt ngay</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div> 
											<div class="clearfix"></div> 
										</div>
									</div>
								</form>
								</div>
								
							</div>            
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Reservation -->
	
	<?php
	include("layout/footer.php");
	?>
	
	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/picker.js"></script>
	<script src="js/picker.date.js"></script>
	<script src="js/picker.time.js"></script>
	<script src="js/legacy.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	
	<?php include("layout/vedautrang.php")?>
</body>
</html>