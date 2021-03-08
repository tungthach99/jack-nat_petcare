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
	<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/css3.css">
<!--	<script src='https://www.google.com/recaptcha/api.js' async defer ></script>-->

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
					<h1>TẠO TÀI KHOẢN</h1>
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
						<h2>Đăng ký</h2>
						<p>Mời bạn nhập một số thông tin sau!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form id="contactForm" action="customer/Account/xldangky.php" method="post">
							<div class="row">	
								<div class="col-md-6">
									<h3>Thông tin liên hệ</h3>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên" required data-error="Please enter your name">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" placeholder="Email của bạn" id="email" class="form-control" name="email" required data-error="Please enter your email">
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
											<input type="text" placeholder="Địa chỉ chi tiết" id="diaChi" class="form-control" name="diaChi" required data-error="Vui lòng nhập địa chỉ">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="gioiTinh" name="gioiTinh" required data-error="Please select Person">
											  <option disabled selected>Giới tính*</option>
											  <option value="Nam">Nam</option>
											  <option value="Nu">Nữ</option>
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
								<div class="col-md-6">
									<h3>Thông tin tài khoản</h3>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="tenDangNhap" name="tenDangNhap" placeholder="Tên đăng nhập" required data-error="Vui lòng nhập tên đăng nhập">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="password" placeholder="Mật khẩu" id="matKhau" class="form-control" name="matKhau" required data-error="Vui lòng nhập mật khẩu">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="password" placeholder="Xác nhận mật khẩu" id="xacNhanMatKhau" class="form-control" name="xacNhanMatKhau" required data-error="Vui lòng nhập lại mật khẩu">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
								<div class="col-md-12">
									<div class="submit-button text-center">
										<button class="btn btn-common" type="submit">Tạo tài khoản</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div> 
										<div class="clearfix"></div> 
									</div>
								</div>
							</div>            
						</form>
						
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
<!--    <script src="js/contact-form-script.js"></script>-->
	
	<?php
	include("layout/vedautrang.php")
	?>
	
</body>
</html>