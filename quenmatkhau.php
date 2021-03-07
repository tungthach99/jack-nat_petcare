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
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
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
					<h1>TÀI KHOẢN</h1>
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
						<h2>Quên mật khẩu</h2>
						<p>Mời bạn nhập một số thông tin sau!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<?php
					if(isset($_GET["action"]) and $_GET["action"] == 'hoantat')
					{
					?>
						<div id="cheManHinh">
							<div id="thongBaoChinh">
								<h1>Thông báo!</h1>
									<p>Đổi mật khẩu thành công</p>
									<a style="color: #fff; border-radius: 5px; float: right;" onClick="dongform('cheManHinh');" class="linkXanh">Đã hiểu</a>
							</div>
						</div>
					<?php
					}
					?>
				<div class="batDau">
				<?php 
				if(isset($_GET["error"]))
    			{
					if($_GET["error"]==2)
					{
						echo "<b>Tài khoản này không tồn tại!</b>";
					}
				}
				?>
				<form id="quenmatkhau" action="customer/Account/xlquenmatkhau.php" class="was-validated" method="post">
				<?php
				if(!isset($_GET["step"]))
				{
				?>
					<div class="from-group">
						<label>Tên đăng nhập của bạn:</label>
						<input type="text" class="form-control" placeholder="Tên đăng nhập" name="tendangnhap" required>
					</div>
				<?php
				}
				if(isset($_GET["step"]) and $_GET["step"]==1)
				{
				?>
					<div class="from-group">
						<input type="text" style="display: none;" name="step" value="1">
						<label>Nhập email của bạn:</label>
						<input type="text" style="display: none;" name="tendangnhap" value="<?php echo $_GET["tendangnhap"]?>">
						<input type="text" class="form-control" placeholder="Nhập email của bạn" name="email" required>
					</div>
				<?php
				}
				?>
				<?php
				if(isset($_GET["step"]) and $_GET["step"]==2)
				{
				?>
					<div class="from-group">
						<input type="text" style="display: none;" name="step" value="2">
						<label>Mã xác nhận đã được gửi đến email của bạn. Nhập mã xác nhận:</label>
						<input type="text" style="display: none;" name="tendangnhap" value="<?php echo $_GET["tendangnhap"]?>">
						<input type="text" style="display: none;" name="email" value="<?php echo $_GET["email"]?>">
						<input type="text" class="form-control" placeholder="Nhập mã xác nhận" name="maxacnhan" required>
					</div>
				<?php
				}
				?>
					<button style="<?php
					if(isset($_GET["step"]) and $_GET["step"]==3) echo "display:none";
					?>" form="quenmatkhau" type="submit" class="btn btn-primary">Tiếp theo
					</button>
				</form>
				<?php
			
				if(isset($_GET["step"]) and $_GET["step"]==3)
				{
				?>
					<form action="customer/Account/xlquenmatkhau.php" method="post" class="was-validated" id="doimatkhau">
						<div class="from-group">
							<input type="text" style="display: none;" name="step" value="3">
							<label>Nhập mật khẩu mới:</label>
							<input type="password" class="form-control" placeholder="Nhập mật khẩu mới" name="matkhaumoi" required>
							<input type="text" style="display: none" name="tendangnhap" value="<?php echo $_GET["tendangnhap"]?>">
						</div>
						<button form="doimatkhau" type="submit" class="btn btn-primary">Đổi mật khẩu</button>
					</form>
				<?php
				}
				?>
				</div>
			</div>
			
			</div><!--Đóng thẻ row-->
			</div>
		</div>
	<!-- End Reservation -->
	
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+01 123-456-4590
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							yourmail@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							800, Lorem Street, US
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui, at ornare turpis ultrices sit amet. Nulla cursus lorem ut nisi porta, ac eleifend arcu ultrices.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Ipsum Street, Lorem Tower, MO, Columbia, 508000</p>
					<p class="lead"><a href="#">+01 2000 800 9999</a></p>
					<p><a href="#"> info@admin.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">Yamifood Restaurant</a> Design By : 
					<a href="https://html.design/">html design</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

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
</body>
</html>