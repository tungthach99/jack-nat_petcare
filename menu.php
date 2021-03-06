<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
	<link href="css/main.css" rel="stylesheet" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Yamifood Restaurant - Responsive HTML5 Template</title>  
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
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img class="logo" src="images/.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Trang chủ</a></li>
						<li class="nav-item"><a class="nav-link" href="service.php">Dịch vụ</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">Giới thiệu</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="menu.php" id="dropdown-a" data-toggle="dropdown">Sản phẩm</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="menu.php">Đồ ăn</a>
								<a class="dropdown-item" href="menu.php">Phụ kiện</a>
								<a class="dropdown-item" href="menu.php">Chuồng/Nhà</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.php">blog</a>
								<a class="dropdown-item" href="blog-details.php">blog Single</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Liên hệ</a></li>
						<li class="nav-link"><a class="search">
							Search
							<div class="search-bar">
							  <form action="search.php" method="get">
								<input type="text" name="search" placeholder="Search...">
								
							  </form>
							</div>
							
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
							</a>
						  </li>
						<li class="nav-item"><a class="nav-link" href="login/index.php"><i class="fa fa-user"></i> Đăng nhập</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Sản phẩm</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Jack & Nat pet care</h2>
						<p>Thú cưng là gia đình</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">Tất cả</button>
							<button data-filter=".thucan">Thức ăn</button>
							<button data-filter=".phukien">Phụ kiện</button>
							<button data-filter=".chuongnha">Chuồng/Nhà</button>
						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid thucan">
					<div class="gallery-single fix">
						<a href="product-detail.php">
						<img src="images/san-pham/anh1.jpg" style="width: 290px;height: 214px;" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Thức ăn cho chó con ROYAL CANIN Bulldog Puppy</h4>
							<p></p>
							<h5> 230.000 VND</h5>
						</div>
					</a>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid thucan">
					<div class="gallery-single fix">
						<img src="images/san-pham/anh2.jpg" style="width: 290px;height: 214px;" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Thức ăn cho chó MOSHM Yorkshire Grain Free Nutrition</h4>
							<p></p>
							<h5> 470.000 VND</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid phukien">
					<div class="gallery-single fix">
						<img src="images/san-pham/anh3.jpg" style="width: 290px;height: 214px;" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Dây dắt cho chó mèo tự động DELE 007G</h4>
							<h5> 465.000 VND</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid phukien">
					<div class="gallery-single fix">
						<img src="images/san-pham/anh4.jpg" style="width: 290px;height: 214px;"class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Vòng cổ cho chó gắn chuông kèm dây dắt HAND IN HAND</h4>
							<h5> 130.000 VND</h5>
						</div>
					</div>
				</div>
				
				
				
			</div>
		</div>
	</div>
	<!-- End Menu -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						" Thú cưng là cả gia đình "
					</p>
					<span class="lead">Jack & Nat pet care</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>From Admin</h2>
						<p>"Một chú cún con không phải là toàn bộ cuộc sống của bạn nhưng chúng có thể biến cuộc sống của bạn trở nên muôn màu và toàn diện hơn."</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/hoa.png" alt="" style="width: 100%; height:auto">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">HOA NGUYEN</strong></h5>
								<!-- <h6 class="text-dark m-0">Web Developer</h6> -->
								<p class="m-0 pt-3">Những “người bạn nhỏ” dạy chúng ta cách lên kế hoạch và sắp xếp cuộc sống. Có một chú thú cưng đồng nghĩa với việc bạn phải chăm sóc chúng. Trong quá trình đó, đưa chúng đi dạo, tắm rửa hay đặt lịch hẹn với phòng khám thú y chắc chắn sẽ tiêu tốn thời gian của bạn như nhờ vậy, bạn cũng trưởng thành hơn, học được cách sắp xếp thời gian, tiền bạc và có trách nhiệm với người khác.</p>
								
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/148598838_2795103064140673_7654981318286258597_n.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">NHUNG NGUYEN</strong></h5>
								<!-- <h6 class="text-dark m-0">Web Designer</h6> -->
								<p class="m-0 pt-3">Thú cưng nhắc nhở chúng ta về giá trị của lòng biết ơn. Bài học cuộc sống này đi đôi với khái niệm về sự hài lòng. Đầu tiên, chúng ta học cách hài lòng với những gì chúng ta có, và sau đó chúng ta học cách bày tỏ lòng biết ơn đối với những điều đó.</p>
								<p class="m-0 pt-3"></p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/trung.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">TRUNG MAI</strong></h5>
								<!-- <h6 class="text-dark m-0">Seo Analyst</h6> -->
								<p class="m-0 pt-3">Một chú mèo sẽ giữ trạng thái cuộn mình lơ mơ trên chân bạn cho tới khi bạn gần như đứng thẳng. Cho tới phút cuối cùng nó vẫn đợi bạn nghe theo lương tâm mình và ngồi lại xuống.</p> 
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/tung.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">TUNG THACH</strong></h5>
								<!-- <h6 class="text-dark m-0">Web Designer</h6> -->
								<p class="m-0 pt-3">Một con mèo con thật tài giỏi khi lao đi như điên chẳng vì cái gì cả, và thường dừng lại trước khi nó đến được đó.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/anhcanhan.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">TUAN NGUYEN</strong></h5>
								<!-- <h6 class="text-dark m-0">Web Designer</h6> -->
								<p class="m-0 pt-3">Thú cưng biết ơn những điều đơn giản nhất trong cuộc sống, và chúng bày tỏ lòng biết ơn của mình theo những cách riêng. Khi bạn thấy chú cún ngoắc đuôi hay chú mèo cọ đầu vào chân bạn, chúng đang bày tỏ lòng biết ơn đấy. Những lúc ấy, hãy dừng lại đôi chút và tự hỏi bản thân xem hôm nay bạn biết ơn điều gì nhất. Sau khi gửi đi lời cảm ơn đến những điều tốt đẹp đã đến với bạn trong ngày, bạn sẽ thấy cuộc sống dễ chịu hơn rất nhiều.</p>
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
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>