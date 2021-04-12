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
	<link rel="stylesheet" type="text/css" href="css/css3.css">
</head>

<body>
<?php
require("public/ketnoi.php");
	include("layout/header.php");
	include("layout/taikhoan.php");
?>
	<div class="row" style="width: 100%;">
		<span  class="col-2"></span>
		<span class="col-8">
			<br><br><br><br>
			<div id="product-content">
<?php
			if(isset($_SESSION["id-user"]))
			{
				$sql="SELECT tbl1.id_san_pham, tbl1.ten_san_pham,tbl1.don_gia,tbl1.anh, tbl3.muc_khuyen_mai,tbl1.don_gia*(1-tbl3.muc_khuyen_mai/100) AS gia_moi 
				FROM tbl_san_pham as tbl1 
				INNER JOIN (SELECT id_san_pham FROM tbl_yeu_thich INNER JOIN tbl_khach_hang  ON tbl_yeu_thich.id_khach_hang=tbl_khach_hang.id_khach_hang 
				WHERE tbl_khach_hang.id_khach_hang='".$_SESSION["id-user"]."') AS tbl2 ON tbl1.id_san_pham = tbl2.id_san_pham
				LEFT OUTER JOIN tbl_khuyen_mai AS tbl3 ON tbl1.id_san_pham=tbl3.id_san_pham";
	  			$result=$con->query($sql);
	 			if($result->num_rows>0)
				{
					while($row=$result->fetch_assoc())
					{
?>
						<div id="product-1">
							<a href="sanpham.php?product=1&masanpham=<?php echo $row['id_san_pham']?>"><img style="margin-top: 10px;" id="product-img" src="images/san-pham/<?php echo $row['anh']; ?>"></a>
							<!--			san pham yeu thich-->
		<?php
		if (isset($_SESSION["id-user"]))
		{
			$sqlcheckyeuthich="select * from tbl_yeu_thich where id_khach_hang='".$_SESSION["id-user"]."' and id_san_pham='".$row["id_san_pham"]."'";
			$resultyt=$con->query($sqlcheckyeuthich);
			if($resultyt->num_rows>0)
			{
		?>
		<a class="heart" title="Yêu thích" href="customer/Product/xlxoasanphamyeuthich.php?&idsanpham=<?php echo $row["id_san_pham"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>"><i style="color: red;" class="fa fa-bookmark" title="Bỏ thích"></i>
		</a>
		<?php
			}
			else
			{
		?>
		<a class="heart" href="customer/Product/xlthemsanphamyeuthich.php?&idsanpham=<?php echo $row["id_san_pham"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>"><i style="color: red;" class="fa fa-bookmark-o" title="Yêu thích"></i>
		</a>
		<?php
			}
		}
		else
		{
		?>
		<a class="heart" href="customer/Product/xlthemsanphamyeuthich.php?&idsanpham=<?php echo $row["id_san_pham"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>"><i style="color: red;" class="fa fa-bookmark-o" title="Yêu thích"></i>
		</a>
		<?php
		}
		?>
<!--			san pham yeu thich: end.-->
							<p id="title-product-1"><?php echo $row["ten_san_pham"];?></p>
							<?php
							if (isset($row["muc_khuyen_mai"]))
							echo "<p id='title-product-2'>Giá: ".number_format($row["gia_moi"]).
							"đ <span style='font-size:12px; color:#2c3e50; text-decoration: line-through'>".number_format($row["don_gia"])."đ</span></p>";
							else
							echo  "<p id='title-product-2'>Giá: ".number_format($row["don_gia"])."đ </p>";
							?>
							<a href="menu.php?&masanpham=<?php echo $row['id_san_pham']?>">
							<button class="nutChiTiet">Chi tiết</button></a>
						</div>
		<!--product=1=>product_detail.php-->

<?php 
					}//end while
				}//if_num_row
			}
?>
			</div>
			<a href="menu.php" >&lsaquo; Tiếp tục mua hàng</a>
		</span>
		<span class="col-2" onClick="dongform('formGioHang')"></span>
	</div>
	
	<div class="row" style="width: 100%;">
		<span  class="col-2"></span>
		<span class="col-8">
			<br><br><br><br>
			<div id="product-content">
<?php
			if(isset($_SESSION["id-user"]))
			{
				$sql="SELECT tbl_dich_vu.id_dich_vu, tbl_dich_vu.ten_dich_vu, tbl_dich_vu.don_gia_dv, tbl_dich_vu.anh_dv
				FROM tbl_dich_vu JOIN tbl_yeu_thich_dich_vu ON tbl_dich_vu.id_dich_vu = tbl_yeu_thich_dich_vu.id_dich_vu AND tbl_yeu_thich_dich_vu.id_khach_hang = ".$_SESSION["id-user"];
	  			$result=$con->query($sql);
	 			if($result->num_rows>0)
				{
					while($row=$result->fetch_assoc())
					{
?>
						<div id="product-1">
							<a href="dichvu.php?m=<?php echo $row['id_dich_vu']?>"><img style="margin-top: 10px;" id="product-img" src="images/san-pham/<?php echo $row['anh_dv']; ?>"></a>
							<!--			san pham yeu thich-->
		<?php
		if (isset($_SESSION["id-user"]))
		{
			$sqlcheckyeuthich="select * from tbl_yeu_thich_dich_vu where id_khach_hang='".$_SESSION["id-user"]."' and id_dich_vu='".$row["id_dich_vu"]."'";
			$resultyt=$con->query($sqlcheckyeuthich);
			if($resultyt->num_rows>0)
			{
		?>
		<a class="heart" title="Yêu thích" href="customer/Product/xlxoadichvuyeuthich.php?&iddichvu=<?php echo $row["id_dich_vu"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>"><i style="color: red;" class="fa fa-bookmark" title="Bỏ thích"></i>
		</a>
		<?php
			}
			else
			{
		?>
		<a class="heart" href="customer/Product/xlthemdichvuyeuthich.php?&iddichvu=<?php echo $row["id_dich_vu"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>"><i style="color: red;" class="fa fa-bookmark-o" title="Yêu thích"></i>
		</a>
		<?php
			}
		}
		else
		{
		?>
		<a class="heart" href="customer/Product/xlthemdichvuyeuthich.php?&iddichvu=<?php echo $row["id_dich_vu"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>"><i style="color: red;" class="fa fa-bookmark-o" title="Yêu thích"></i>
		</a>
		<?php
		}
		?>
<!--			san pham yeu thich: end.-->
							<p id="title-product-1"><?php echo $row["ten_dich_vu"];?></p>
							<?php
							if (isset($row["muc_khuyen_mai"]))
							echo "<p id='title-product-2'>Giá: ".number_format($row["gia_moi"]).
							"đ <span style='font-size:12px; color:#2c3e50; text-decoration: line-through'>".number_format($row["don_gia"])."đ</span></p>";
							else
							echo  "<p id='title-product-2'>Giá: ".number_format($row["don_gia_dv"])."đ </p>";
							?>
							<a href="dichvu.php?&m=<?php echo $row['id_dich_vu']?>">
							<button class="nutChiTiet">Chi tiết</button></a>
						</div>
		<!--product=1=>product_detail.php-->

<?php 
					}//end while
				}//if_num_row
			}
?>
			</div>
			<a href="dichvu.php" >&lsaquo; Tiếp tục đặt dịch vụ</a>
		</span>
		<span class="col-2"></span>
	</div>
	
	<?php
	include("layout/fromAdmin.php");
	include("layout/footer.php");
	?>
	<?php
	include("layout/header.php");
	include("layout/taikhoan.php");
	require("public/ketnoi.php");
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