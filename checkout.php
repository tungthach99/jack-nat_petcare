<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <link href="css/main.css" rel="stylesheet" />
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
	<!--<?php
							// Nếu người dùng submit form thì thực hiện
							if (isset($_REQUEST['ok'])) 
							{
								// Gán hàm addslashes để chống sql injection
								$search = addslashes($_GET['search']);
					
								// Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
								if (empty($search)) {
									echo "Yeu cau nhap du lieu vao o trong";
								} 
								else
								{
									// Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
									$query = "select * from users where username like '%$search%'";
					
									// Kết nối sql
									mysql_connect("localhost", "", "", "");
					
									// Thực thi câu truy vấn
									$sql = mysql_query($query);
					
									// Đếm số đong trả về trong sql.
									$num = mysql_num_rows($sql);
					
									// Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
									if ($num > 0 && $search != "") 
									{
										// Dùng $num để đếm số dòng trả về.
										echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
					
										// Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
										echo '<table border="1" cellspacing="0" cellpadding="10">';
										while ($row = mysql_fetch_assoc($sql)) {
											echo '<tr>';
												echo "<td>{$row['user_id']}</td>";
												echo "<td>{$row['username']}</td>";
												echo "<td>{$row['password']}</td>";
												echo "<td>{$row['email']}</td>";
												echo "<td>{$row['address']}</td>";
											echo '</tr>';
										}
										echo '</table>';
									} 
									else {
										echo "Khong tim thay ket qua!";
									}
								}
							}
							?>--> 
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>CHECKOUT DETAILS</h1>
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
						<h2>Đặt lịch</h2>
						<p>Đặt lịch hẹn với chúng tôi để nhận được sự phục vụ chu đáo nhất!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form id="contactForm">
							<div class="row">
								<div class="col-md-6">
									<h3>Mời bạn chọn dịch vụ</h3>
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<input id="input_date" class="datepicker picker__input form-control" name="date" type="text" value="" equired data-error="Mời bạn chọn ngày">
													<div class="help-block with-errors"></div>
												</div>
												<div class="col-md-6">
													<input id="input_time" class="time form-control picker__input" required data-error="Mời bạn chọn giờ">
											<div class="help-block with-errors"></div>
												</div>
											</div>
											
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="dichVu" required data-error="Please select Person">
											  <option disabled selected>Dịch vụ*</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="chiNhanh" required data-error="Please select Person">
											  <option disabled selected>Chi nhánh*</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
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
											<input type="text" placeholder="Email của bạn" id="email" class="form-control" name="email" required data-error="Please enter your email">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Số điện thoại" id="phone" class="form-control" name="phone" required data-error="Please enter your Numbar">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
								<div class="col-md-12">
									<div class="submit-button text-center">
										<button class="btn btn-common" id="submit" type="submit">Đặt ngay</button>
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
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>