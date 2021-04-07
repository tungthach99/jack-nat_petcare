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
<!-- Phong to anh -->
	
<div id="noiDungPhongTo" style="100%">
		<div class="menuAnh">
		<?php
		$sql="Select * from tbl_dich_vu inner join tbl_anh on tbl_dich_vu.id_anh_dv = tbl_anh.id_anh";
	  	$result=$con->query($sql);
	 		if($result->num_rows>0)
			{
			while($row=$result->fetch_assoc())
			{
?>
			<img src="images/san-pham/<?php echo $row['src']; ?>" onClick="zoom(this)" alt="">
			<?php
			}//end_while	
			} //end if

		?>
		</div>
		<div class="anhPhongTo">
			<img id="anhPhongTo" src="images/sanpham/<?php echo $row['src']; ?>">
		</div>
		<i class="fa fa-remove thoat" style="color: #fff;" onClick="dongform('noiDungPhongTo')" title="Đóng"></i>
	</div>
<!-- Phong to anh end-->

	<!--nội dung-->
	
    <?php
		if(isset($_GET["m"]))
		{
				include("customer/Product/product_detail_2.php");
		}
		else
		{
			include("customer/Product/product_info_2.php");
		}
		//code tim kiem san pham
		if(isset($_GET["m"]))
		{
				include("customer/Product/product_info_2.php");
		}
		//end tim kiem.
        ?>

	
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