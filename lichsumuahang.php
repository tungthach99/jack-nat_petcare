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
		<span class="col-2"></span>
		<span class="col-8">
			<br><br>
	<?php
	if (isset($_SESSION["id-user"]))
	{
		$sql="select * from tbl_don_hang where id_khach_hang='".$_SESSION["id-user"]."' order by id_don_hang asc";
		$result=$con->query($sql);
		if($result->num_rows>0)
		{
	?>
			<div class="container">
				<br><br>
 				<h2>Lịch sử mua hàng</h2>  
				<div class="table-responsive">
   					<table style="text-align: center;" class="table table-bordered">
						<thead>
							<tr style="background-color: rgba(208, 167, 114,0.1)">
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
							<tr>
			<?php
			while($row=$result->fetch_assoc())
			{
			?>
								<td><?php echo $row['ngay_dat']?></td>
								<td><?php echo $row['dia_chi_nhan_hang']?></td>
								<td><?php echo $row['ma_giam_gia']?></td>
								<td><?php echo $row['hinh_thuc_mua_hang']; ?></td>
								<td><?php echo $row['ghi_chu']?></td>
								<td><?php echo number_format($row['phi_van_chuyen'])?></td>
								<td><b><?php echo number_format($row['tong_tien'])?></b></td>
								<td><?php
				if($row['trang_thai']==1) echo "Đã tiếp nhận";
				if($row['trang_thai']==2) echo "Đang giao hàng";
				if($row['trang_thai']==3) echo "Đã giao hàng";
				if($row['trang_thai']==4) echo "Đã hủy";
									?>
								</td>
								<td><a href="chitietlichsu.php?&id=<?php echo $row['id_don_hang']?>"><b>Chi tiết</b></a></td>
							</tr>
			<?php
			}
			?>
						</tbody>
					</table>
				</div>
			</div>
		<?php
		}
		else echo "<p style='margin-top: 60px;'>Lịch sử mua hàng sẽ ghi lại những giao dịch của bạn tại đây.<p>";
	}
	else echo "<p>Lịch sử mua hàng sẽ ghi lại những giao dịch của bạn tại đây.<p>";
		?>
	<?php
	if (isset($_SESSION["id-user"]))
	{
		$sql="select * from tbl_don_dich_vu where id_khach_hang='".$_SESSION["id-user"]."' order by id_don_hang asc";
		$result=$con->query($sql);
		if($result->num_rows>0)
		{
	?>
			<div class="container">
				<br><br>
 				<h2>Lịch sử đặt dịch vụ</h2>  
				<div class="table-responsive">
   					<table style="text-align: center;" class="table table-bordered">
						<thead>
							<tr style="background-color: rgba(208, 167, 114,0.1)">
								<th>Ngày đặt</th>
								<th>Địa chỉ nhận hàng</th>
								<th>Hình thức</th>
								<th>Ghi chú</th>
								<th>Phụ thu</th>
								<th>Tổng tiền</th>
								<th>Trạng thái</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<tr>
			<?php
			while($row=$result->fetch_assoc())
			{
			?>
								<td><?php echo $row['ngay_dat']?></td>
								<td><?php echo $row['dia_chi']?></td>
								<td><?php echo $row['hinh_thuc_mua_hang']; ?></td>
								<td><?php echo $row['ghi_chu']?></td>
								<td><?php echo number_format($row['phu_thu'])?></td>
								<td><b><?php echo number_format($row['tong_tien'])?></b></td>
								<td><?php
				if($row['trang_thai']==1) echo "Đã tiếp nhận";
				if($row['trang_thai']==2) echo "Đang giao hàng";
				if($row['trang_thai']==3) echo "Đã giao hàng";
				if($row['trang_thai']==4) echo "Đã hủy";
									?>
								</td>
								<td><a href="chitietlichsu2.php?&id=<?php echo $row['id_don_hang']?>"><b>Chi tiết</b></a></td>
							</tr>
			<?php
			}
			?>
						</tbody>
					</table>
				</div>
			</div>
		<?php
		}
		else echo "<p style='margin-top: 60px;'>Lịch sử đặt dịch vụ sẽ được ghi lại về những giao dịch của bạn tại đây.<p>";
	}
	else echo "<p>Lịch sử mua hàng sẽ ghi lại những giao dịch của bạn tại đây.<p>";
		?>
			<a href="index.php">&lsaquo; Trang chủ</a>
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