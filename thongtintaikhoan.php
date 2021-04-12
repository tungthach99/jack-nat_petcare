<?php
ob_start(); 
session_start();
?>
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
	<link href="css/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/css3.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">
	
	<!-- Start header -->
    <?php
	include("public/ketnoi.php");
	include("layout/header.php");
	include("layout/taikhoan.php");
	?>
	
	<!-- End header -->
	<?php
	if(isset($_GET["action"]) and $_GET["action"] == 'hoantat')
	{
	?>
	<div id="cheManHinh">
		<div id="thongBaoChinh">
			<h1>Thông báo!</h1>
			<p>Thành công</p>
			<a style="color: #fff; border-radius: 5px; float: right;" onClick="dongform('cheManHinh');" class="linkXanh">Đã hiểu</a>
		</div>
	</div>
	<?php
	}
	?>
	<?php
	if(isset($_GET["action"]) and $_GET["action"] == 'fail')
	{
	?>
	<div id="cheManHinh">
		<div id="thongBaoChinh">
			<h1>Thông báo!</h1>
			<p>Không thành  công</p>
			<a style="color: #fff; border-radius: 5px; float: right;" onClick="dongform('cheManHinh');" class="linkXanh">Đã hiểu</a>
		</div>
	</div>
	<?php
	}
	?>
	<div class="batDau row">
		<span class="col-sm-2"></span>
		<span class="col-sm-8">
		<br><br><br><br>
		<h2>Thông tin tài khoản</h2>
		<?php
		if(isset($_GET["thaotac"]) and $_GET["thaotac"] == 'doi')
		{
		?>
			<form action="customer/Account/xlsuamatkhau.php" method="post" class="was-validated" id="doimatkhau">
				<div class="from-group">
					<label>Mật khẩu hiện tại:</label>
					<input type="password" class="form-control" placeholder="Nhập mật khẩu mới" name="matkhau" required>
				</div>
				<div class="from-group">
					<label>Nhập mật khẩu mới:</label>
					<input type="password" class="form-control" placeholder="Nhập mật khẩu mới" name="matkhaumoi" required>
				</div>
				<div class="from-group">
					<label>Xác nhận mật khẩu mới:</label>
					<input type="password" class="form-control" placeholder="Nhập mật khẩu mới" name="xnmatkhaumoi" required>
				</div>
				<button form="doimatkhau" type="submit" class="btn btn-primary">Đổi mật khẩu</button>
			</form>
		<?php
		}
		?>
		<?php
		$sql="select * from tbl_khach_hang where id_khach_hang='".$_SESSION["id-user"]."'";
		$result=$con->query($sql);
		$row=$result->fetch_assoc();
		if(!isset($_GET["thaotac"]))
		{
			?>
			<form class="was-validated" action="customer/Account/xldoithongtin.php" method="post">
				<div class="from-group">
					<label>Tên khách hàng:</label>
					<input type="text" class="form-control" value="<?php echo $row["ten_khach_hang"]?>" readonly>
				</div>
				<div class="from-group">
					<label>Email:</label>
					<input type="text" class="form-control" readonly value="<?php echo $row["email"]?>">
				</div>
				<div class="from-group">
					<label>Số điện thoại:</label>
					<input type="text" class="form-control" readonly value="<?php echo $row["so_dien_thoai"]?>">
				</div>
				<div class="from-group">
					<label>Địa chỉ</label>
					<input required type="text" class="form-control" <?php if(!isset($_GET["suathongtin"])) echo "readonly"?> name="dc" value="<?php echo $row["dia_chi"]?>">
				</div>
				<?php
				if(!isset($_GET["suathongtin"])) echo "<a href='thongtintaikhoan.php?&suathongtin' class='btn btn-primary'>Đổi thông tin</a>";
				else echo "<button type='submit' class='btn btn-primary'>Đổi thông tin</button>";
				?>
				
			</form>
			<?php
		}
		?>
		</span>
	</div>	
	<!---- End Menu           -->
	<?php
	include_once 'layout/fromAdmin.php';
    include_once 'layout/footer.php';
    
	?>
	
<!--	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>-->

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
    
	<?php include_once 'layout/vedautrang.php'; ?>
    <script src="css/aos/aos.js"></script>
	
</body>
</html>