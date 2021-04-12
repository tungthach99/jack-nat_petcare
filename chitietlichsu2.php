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
	
	<div class="row" style="width: 100%;">
		<span onClick="dongform('formGioHang')" class="col-2"></span>
		<span class="col-8">
	<?php
	if (isset($_SESSION["id-user"]))
	{
		$sql="SELECT tbl1.id_don_dich_vu, tbl1.id_dich_vu, tbl1.so_luong_thu_cung, tbl1.don_gia, tbl1.thanh_tien, tbl1.thoi_gian_bat_dau, tbl1.thoi_gian_ket_thuc, tbl2.ten_dich_vu FROM tbl_chi_tiet_don_dich_vu AS tbl1, tbl_dich_vu AS tbl2 WHERE tbl1.id_dich_vu=tbl2.id_dich_vu AND tbl1.id_don_dich_vu='".$_GET["id"]."'";
		$result=$con->query($sql);
		if($result->num_rows>0)
		{
	?>
			<div class="container">
				<br><br><br><br>
 				<h2>Lịch sử giao dịch</h2>  
				<div class="table-responsive">
   					<table style="text-align: center;" class="table table-bordered">
						<thead>
							<tr style="background-color: rgba(208, 167, 114,0.1)">
								<th>Tên dịch vụ</th>
								<th>Số lượng thú cưng</th>
								<th>Đơn giá</th>	
								<th>Thành tiền</th>
								<th>Tg bắt đầu</th>
								<th>Tg kết thúc</th>
							</tr>
						</thead>
						<tbody>
							<tr>
			<?php
			while($row=$result->fetch_assoc())
			{
				if($row['so_luong_thu_cung']>0)
				{
			?>
								<td><?php echo $row['ten_dich_vu']?></td>
								<td><?php echo number_format($row['so_luong_thu_cung'])?></td>
								<td><?php echo number_format($row['don_gia']) ?></td>
								<td><b><?php echo number_format($row['thanh_tien'])?></b></td>
								<td><b><?php echo $row['thoi_gian_bat_dau']?></b></td>
								<td><b><?php echo $row['thoi_gian_ket_thuc']?></b></td>
							</tr>
			<?php
				}
			}
			?>
						</tbody>
					</table>
				</div>
			</div>
		<?php
		}
		else echo "<p style='margin-top: 60px;'>Lịch sử đặt dịch vụ sẽ ghi lại những giao dịch của bạn tại đây.<p>";
	}
	else echo "<p>Lịch sử đặt dịch vụ sẽ ghi lại những giao dịch của bạn tại đây.<p>";
		?>
			<a href="lichsumuahang.php">&lsaquo;&lsaquo; Lịch sử mua hàng</a><br>
			<a href="index.php">&lsaquo;&lsaquo; Trang chủ</a>
		</span>
		<span class="col-2"></span>
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