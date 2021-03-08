<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
	<link href="css/main.css" rel="stylesheet" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Jack & Nat pet care</title>  
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
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	<script type="text/javascript" src="js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/css3.css">
</head>

<body>
<?php
require("public/ketnoi.php");
	include("layout/header.php");
	include("layout/taikhoan.php");
?>

<div class="row" style="width: 100%;">
			<div class="container">
 				<h2>Lịch sử mua hàng</h2>  
				<div class="table-responsive">
   					<table style="text-align: center;" class="table table-bordered">
						<thead>
							<tr style="background: url('images/background.jpg')">
								<th>Ngày đặt</th>
								<th>Địa chỉ nhận hàng</th>
								<th>Mã giảm giá</th>
								<th>Hình thức</th>
								<th>Ghi chú</th>
								<th>Phí vận chuyển</th>
								<th>Tổng tiền</th>
								<th>Trạng thái</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
		
						</tbody>
					</table>
				</div>
			</div>
		
			<a href="home.php">&lsaquo; Trang chủ</a>
		</span>
		<span class="col-2"></span>
	</div>
	
	<?php
	include("layout/fromAdmin.php");
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
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
	<?php
	include("layout/vedautrang.php")
	?>
</body>
</html>