<?php
ob_start(); 
session_start();
if(isset($_GET['action']) and $_GET['action']=='hoantat')
{
	if(isset($_SESSION["giohang"]))
		unset($_SESSION["giohang"]);
	if(isset($_SESSION["soluong"]))
		unset($_SESSION["soluong"]);
	if(isset($_SESSION["giatinh"]))
		unset($_SESSION["giatinh"]);
	if(isset($_SESSION["stt_gio_hang"]))
		unset($_SESSION["stt_gio_hang"]);
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
	?>
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>GIỎ HÀNG</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
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
									<h3>Chi tiết giỏ hàng</h3>

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
<!--								<th>Phiên bản</th>-->
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
				
				<br><br><br>
				<?php if(isset($_SESSION["giohang"])) {?>
				<div style="float: right;"><b>Tổng Tiền: </b><b style="color: red;"><?php echo number_format($_SESSION["tongtien"]) ?></b><b> VND</b></div><?php }?>
				<div><br>
					<a href="menu.php?&tensanpham=" >&lsaquo; Tiếp tục mua hàng</a>
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
			<p>Giỏ hàng của bạn trống<p>
			<a href="menu.php" >&lsaquo; Tiếp tục mua hàng</a>
					<?php
				}
		?>
		<span class="col-2"></span>
	</div>
<!--					Chi tiết giỏ hàng:end.						-->
								</div>
								<div class="col-md-3">
									<h3>Thông tin liên hệ</h3>
								<form action="customer/Order/xldathang.php" method="post" name="xldonhang">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="hoten" name="hoten" placeholder="Nhập tên" required data-error="Please enter your name">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Số điện thoại" id="sdt" class="form-control" name="sdt" required data-error="Please enter your Numbar">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Địa chỉ nhận hàng" id="diaChiNhanHang" class="form-control" name="diaChiNhanHang" required data-error="Vui lòng nhập địa chỉ nhận hàng">
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
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Tham khảo thêm</h2>
						<p>Các dịch vụ nổi bật của chúng tôi</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/dv_cat-tia-long.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase"><a href="#">Cắt tỉa lông</a></strong></h5>
								<h6 class="text-dark m-0">1,000,000 VND</h6>
								<p class="m-0 pt-3">Cắt tỉa lông và cắt tỉa lông và và cắt tỉa lông và cắt tỉa lông và cắt tỉa lông và cắt tỉa lông và cắt tỉa lông và cắt tỉa lông và cắt tỉa lông.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/dv_massage-thu-cung.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase"><a href="#">Massage cho thú cưng</a></strong></h5>
								<h6 class="text-dark m-0">1,000,000 VND</h6>
								<p class="m-0 pt-3">Massage cho thú cưng Massage cho thú cưng Massage cho thú cưng Massage cho thú cưng Massage cho thú cưng Massage cho thú cưng Massage cho thú cưng Massage cho thú cưng Massage cho thú cưng.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/dv_kham-suc-khoe.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase"><a href="#">Kiểm tra sức khỏe</a></strong></h5>
								<h6 class="text-dark m-0">1,000,000 VND</h6>
								<p class="m-0 pt-3">Kiểm tra sức khỏe Kiểm tra sức khỏe Kiểm tra sức khỏe Kiểm tra sức khỏe Kiểm tra sức khỏe Kiểm tra sức khỏe Kiểm tra sức khỏe Kiểm tra sức khỏe Kiểm tra sức khỏe Kiểm tra sức khỏe.</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
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