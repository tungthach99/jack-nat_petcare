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
	<link href="css/remixicon/remixicon.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/css3.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
	<link href="css/aos/aos.css" rel="stylesheet">
    
</head>



<body >
	

	<!-- Start header -->
    <?php
	include("public/ketnoi.php");
	include("layout/header.php");
	include("layout/taikhoan.php");
	if(isset($_GET["loi"]))
	{
		if($_GET["loi"]=='1') include("layout/message5.php");
	}
	if(isset($_GET["error"]) and ($_GET["error"])==2)
	{
		include("layout/message2_t.php");
	}
	if(isset($_GET["dangky"]) and $_GET["dangky"]==1)
	{
		include("layout/message1_t.php");
	}
	?>
	<br><br><br>
	<!-- End header -->
	
	<!-- Start slides -->
			
	<div class="container  " >
		<div class="row">
			<div class="col-lg-8" >
				<div id="slides" class="cover-slides" >
					<ul class="slides-container">
						<li class="text-center">
							<img src="images/dog.jfif" alt="">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<h1 class="m-b-20"data-aos="fade-in" data-aos-delay="200"><strong>Welcome To <br> Jack & Nat pet care</strong></h1>
										<p class="m-b-40"data-aos="fade-in" data-aos-delay="000">"Không biết từ bao giờ, những em cún, em mèo đã trở thành một phần của cuộc sống tôi"</p>
										<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="menu.php"data-aos="fade-in" data-aos-delay="400">Xem thêm</a></p>
									</div>
								</div>
							</div>
						</li>
						<li class="text-center">
							<img src="images/photod.jfif" alt="">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<h1 class="m-b-20" data-aos="fade-in" data-aos-delay="200"><strong>Welcome To <br> Jack & Nat pet care</strong></h1>
										<p class="m-b-40"data-aos="fade-in" data-aos-delay="300">"Không biết từ bao giờ, những em cún, em mèo đã trở thành một phần của cuộc sống tôi"</p>
										<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="menu.php"data-aos="fade-in" data-aos-delay="400">Xem thêm</a></p>
									</div>
								</div>
							</div>
						</li>
						<li class="text-center">
							<img src="images/1618289632108.pjg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<h1 class="m-b-20"data-aos="fade-in" data-aos-delay="200"><strong>Welcome To <br> Jack & Nat pet care</strong></h1>
										<p class="m-b-40"data-aos="fade-in" data-aos-delay="300">"Không biết từ bao giờ, những em cún, em mèo đã trở thành một phần của cuộc sống tôi"</p>
										<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="menu.php"data-aos="fade-in" data-aos-delay="400">Xem thêm</a></p>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<div class="slides-navigation">
						<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
						<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
					<div class="tz-gallery"  data-aos="fade-left" data-aos-delay="200">
						<div class="	">
							<?php
								$sql="SELECT * 
												FROM tbl_news WHERE status = '2'  
												ORDER BY id DESC
												";
								$result=$con->query($sql);
								if($result->num_rows>0)
									{
										while($row=$result->fetch_assoc())
										{ //for->while
							?>
								<div class="col-sm-9	" style="hight=100px">
									<a class="lightbox" href="images/<?php echo $row['avatar'] ?>">
										<img class="img-fluid" src="images/<?php echo $row['avatar'] ?>" alt="Gallery Images">
									</a>
								</div>
							<?php 
							}
							}
							?>
						</div>
					</div>
			</div>
		</div>
		
	</div>
	<!-- <div id="sl1" class="sl1" style="top: 210px; position: fixed; left: 85%; margin-right: 500px; bottom: 0px;">
							
			<a rel="nofollow" href="#" title="m88" target="_blank"><img src="https://aff.opus-static.com/m88/120x300_VN.gif" alt="m88" border="0" width="120" height="280">
			</a>
			
	
	<br>	
			<a rel="nofollow" href="#" target="_blank">
				<img alt="sbobb" src="https://i.imgur.com/jye8JMj.gif" width="120" height="269">
			</a>
		
	</div> -->



	<!-- End slides -->
	<!-- ======= Clients Section ======= -->
<section id="clients" class="clients" >
  <div class="container">
    <div class="row" style="margin-left= 0px">
      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
        <img src="images/clients/client-1.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
        <img src="images/clients/client-2.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="300">
        <img src="images/clients/client-3.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="400">
        <img src="images/clients/client-4.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="500">
        <img src="images/clients/client-5.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
        <img src="images/clients/client-6.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</section>
<!-- End Clients Section -->
<section id="about" class="about">
  <div class="container">
    <div class="row content">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h2 style="font-weight: 600;font-size: 40px;line-height: 60px;margin-bottom: 20px;">
		JACK&NAT PETCARE </h2>
		<h2> HƠN CẢ NHỮNG LỜI YÊU THƯƠNG</h2>
        <h3>JACK&NAT vui lòng khách đến vừa lòng khách đi</h3>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
        <p>
		Hệ thống nhiều chi nhánh cửa hàng thú cưng chuyên cung cấp đồ dùng, quần áo, thức ăn, sữa tắm, chuồng, vòng cổ xích và các phụ kiện cho Chó cảnh , Mèo cảnh.
        </p>
        <ul>
          <li><i class="ri-check-double-line"></i> Thú cưng của bạn sẽ là một con cưng, một con công chúa, một hoàng tử khi sử dụng các sản phẩm, dịch vụ tại Jack&Nat Petcare..</li>
          <li><i class="ri-check-double-line"></i> Cùng nhiều bài viết chia sẻ kinh nghiệm chăm sóc thú cưng hàng đầu tại Việt Nam</li>
          <li><i class="ri-check-double-line"></i> Địa chỉ nhận tắm spa, chăm sóc, cắt tỉa lông và trông giữ thú cưng chuyên nghiệp. </li>
          <li><i class="ri-check-double-line"></i>  Với chất lượng dịch vụ tốt nhất luôn được khách hàng tin tưởng sẽ là điểm đến lý tưởng và tuyệt vời dành cho vật nuôi.</li>

        </ul>
        <p class="font-italic">
			“Tạo ra những sản phẩm mà người yêu thú cưng thật sự tin tưởng” 
        </p>
      </div>
    </div>

  </div>
</section><!-- End About Section -->



<!-- ======= Counts Section ======= -->
<section id="counts" class="counts" style="background: #d0a772;
    padding: 40px 0 20px 0;
    color: #fff;">
  <div class="container">

    <div class="row counters">

      <div class="col-lg-3 col-6 text-center">
        <span data-toggle="counter-up" style="font-size: 36px;display: block;font-weight: 700;">1000</span>
        <p>Khách hàng</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-toggle="counter-up"style="font-size: 36px;display: block;font-weight: 700;">33</span>
        <p>Sản phẩm và Dịch vụ</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-toggle="counter-up"style="font-size: 36px;display: block;font-weight: 700;">50</span>
        <p>Nhân viên</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-toggle="counter-up"style="font-size: 36px;display: block;font-weight: 700;">100</span>
        <p>Phòng</p>
      </div>

    </div>

  </div>
</section><!-- End Counts Sectio

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-title" data-aos="fade-up">
                <img src="images/cut.png" alt="" class="img-fluid">
                
                <h1>DỊCH VỤ</h1>
                <p>
                    Jack&Nat pet care | luôn chú trọng nguồn nguyên liệu XANH – SẠCH, chất lượng hảo hạng, đảm bảo lần chăm sóc tốt nhất cho khách hàng. 
                    <br> <br>
                </p>
                Jack&Nat pet care mong muốn mang đến trải nghiệm tuyệt vời, tạo nên cuộc vui hết ý cho nhiều thực khách.
                </p>
            </div>
        </div>
        <div class="col-lg-8">
			<div class="row">
				<div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" >
					<div class="icon-box" style="width: 350px" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon"><i class="bx bxl-dribbble"></i></div>
						<h4><a href="">Uy Tín</a></h4>
						<p>   Luông là sự lựa chọn số 1 dành cho khách hàng     </p>
					</div>
				</div>

				<div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon"><i class="bx bx-file"></i></div>
						<h4><a href="">Chất Lượng</a></h4>
						<p>Chúng tôi luôn đặt sự lựa chọn sản phẩm lên hàng đầu và được chọn lọc kỹ càng.</p>
					</div>
				</div>

				<div class="col-md-6 d-flex align-items-stretch mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon"><i class="bx bx-tachometer"></i></div>
						<h4><a href="">Đội Ngũ</a></h4>
						<p>Với đội ngũ 5 nhân viên, được lựa chọn để phục vụ khách hàng một cách chu đáo nhất</p>
					</div>
				</div>
				<div class="col-md-6 d-flex align-items-stretch mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
						<div class="icon"><i class="bx bx-world"></i></div>
						<h4><a href="">Khách Hàng</a></h4>
						<p>Đạt tỷ lệ 80% khách hàng cũ quay lại với Jack&Nat pet care</p>
					</div>
				</div>

			</div>
        </div>
    </div>

    </div>
    </section><!-- End Services Section -->
	<!-- End Menu -->
	
    <!-- Sản phẩm bán chạy -->
	<div class="row leCacMuc" style="width: 100%; margin-top: 15px;">
		<span class="col-sm-2"></span>
		<span class="col-sm-8 noiDungGioiThieu"data-aos="fade-left">
			<h1 style="font-size: 40px; text-align: center; font-weight: bold">SẢN PHẨM BÁN CHẠY NHẤT</h1>
			<div style="text-align: center;">
			
			<div class="row" style=" width: 100%;"data-aos="zoom-in" data-aos-delay="200">
				<label id="labelTrai" for="trai"><i class="fa fa-angle-left"></i></label>
				<label id="lablePhai" for="phai"><i class="fa fa-angle-right"></i></label>
				<div class="slide_sp">
				<div class="slides_sp">
					<input type="radio" name="dieuHuong" id="trai" checked>
					<input type="radio" name="dieuHuong" id="phai">
					<?php
						$sql="SELECT  a.id_san_pham, a.ten_san_pham, a.don_gia,a.id_san_pham,SUM(b.so_luong), a.anh
						FROM tbl_san_pham AS a INNER JOIN tbl_chi_tiet_don_hang AS b ON a.id_san_pham = b.id_san_pham 
						GROUP BY a.id_san_pham ORDER BY SUM(b.so_luong) DESC LIMIT 5";
						$result=$con->query($sql);
						if($result->num_rows>0)
						{
							$i=0;
							while($row=$result->fetch_assoc())
							{
								$i=$i+1;
								?>
								<div class="thanhPhan <?php if($i==1) echo "s1"; ?>">
									<span class="hoverSanPham">
									<a href="menu.php?&masanpham=<?php echo $row['id_san_pham']?>"><i class="fa fa-external-link" title="Mở liên kết"></i></a>
									<?php
										if (isset($_SESSION["id-user"]))
										{
											$sqlcheckyeuthich="select * from tbl_yeu_thich where id_khach_hang='".$_SESSION["id-user"]."' and id_san_pham='".$row["id_san_pham"]."'";
											$resultyt=$con->query($sqlcheckyeuthich);
											if($resultyt->num_rows>0)
											{
										?>
										<a href="customer/product/xlxoasanphamyeuthich.php?&idsanpham=<?php 
										echo $row["id_san_pham"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>">
										<i style="color: #c60909" class="fa fa-bookmark" title="Bỏ thích"></i>
										</a>
										<?php
											}
											else
											{
										?>
										<a href="customer/product/xlthemsanphamyeuthich.php?&idsanpham=<?php 
										echo $row["id_san_pham"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>">
										<i class="fa fa-bookmark-o" title="Yêu thích"></i>
										</a>
										<?php
											}
										}
										else
										{
										?>
										<a href="customer/Product/xlthemsanphamyeuthich.php?&idsanpham=<?php echo $row["id_san_pham"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"]?>">
										<i class="fa fa-bookmark-o" title="Yêu thích"></i>
										</a>
										<?php
										}
										?>
									</span>
									<div class="anhSanPham">
										<img src="images/san-pham/<?php echo $row['anh']; ?>">
									</div>
									<div style="font-size: 16px;">
										<?php echo $row["ten_san_pham"];?>
									</div>
									<div style="font-size: 16px; color: red; font-weight: bold;">
									Giá: <?php echo number_format($row["don_gia"]) ?>"<sup><u>đ</u></sup></span>
									<span class='giaGachNgang'></span>
									</div>
									<span class="giaDo"></span>
								</div>
					<?php
							}
						}
					?>
				</div>
				</div>
			</div>
			
			</div>
		</span>
	</div>
	<!-- Sản phẩm bán chạy: end. -->

    <!-- Dịch vụ bán chạy -->
	<div class="row leCacMuc" style="width: 100%; margin-top: 15px;">
		<span class="col-sm-2"></span>
		<span class="col-sm-8 noiDungGioiThieu">
			<h1 style="font-size: 40px; text-align: center; font-weight: bold"data-aos="fade-left">DỊCH VỤ BÁN CHẠY NHẤT</h1>
			<div style="text-align: center;">
			
			<div class="row" style=" width: 100%;"data-aos="zoom-in" data-aos-delay="200">
				<label id="labelTrai2" for="trai2"><i class="fa fa-angle-left"></i></label>
				<label id="lablePhai2" for="phai2"><i class="fa fa-angle-right"></i></label>
				<div class="slide_sp">
				<div class="slides_sp">
					<input type="radio" name="dieuHuong" id="trai2" checked>
					<input type="radio" name="dieuHuong" id="phai2">
					<?php
						$sql="SELECT  a.id_dich_vu, a.ten_dich_vu, a.don_gia_dv,SUM(b.so_luong_thu_cung), a.anh_dv
						FROM tbl_dich_vu AS a INNER JOIN tbl_chi_tiet_don_dich_vu AS b ON a.id_dich_vu = b.id_dich_vu 
						GROUP BY a.id_dich_vu ORDER BY SUM(b.so_luong_thu_cung) DESC LIMIT 5";
						$result=$con->query($sql);
						if($result->num_rows>0)
						{
							$i=0;
							while($row=$result->fetch_assoc())
							{
								$i=$i+1;
								?>
								<div class="thanhPhan <?php if($i==1) echo "s2"; ?>">
									<span class="hoverSanPham">
									<a href="dichvu.php?&m=<?php echo $row['id_dich_vu']?>"><i class="fa fa-external-link" title="Mở liên kết"></i></a>
									<?php
										if (isset($_SESSION["id-user"]))
										{
											$sqlcheckyeuthich="select * from tbl_yeu_thich_dich_vu where id_khach_hang='".$_SESSION["id-user"]."' and id_dich_vu='".$row["id_dich_vu"]."'";
											$resultyt=$con->query($sqlcheckyeuthich);
											if($resultyt->num_rows>0)
											{
										?>
										<a href="customer/product/xlxoadichvuyeuthich.php?&iddichvu=<?php 
										echo $row["id_dich_vu"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>">
										<i style="color: #c60909" class="fa fa-bookmark" title="Bỏ thích"></i>
										</a>
										<?php
											}
											else
											{
										?>
										<a href="customer/product/xlthemdichvuyeuthich.php?&iddichvu=<?php 
										echo $row["id_dich_vu"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>">
										<i class="fa fa-bookmark-o" title="Yêu thích"></i>
										</a>
										<?php
											}
										}
										else
										{
										?>
										<a href="customer/Product/xlthemdichvuyeuthich.php?&iddichvu=<?php echo $row["id_dich_vu"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"]?>">
										<i class="fa fa-bookmark-o" title="Yêu thích"></i>
										</a>
										<?php
										}
										?>
									</span>
									<div class="anhSanPham">
										<img src="images/san-pham/<?php echo $row['anh_dv']; ?>">
									</div>
									<div style="font-size: 16px;">
										<?php echo $row["ten_dich_vu"];?>
									</div>
									<div style="font-size: 16px; color: red; font-weight: bold;">
									Giá: <?php echo number_format($row["don_gia_dv"]) ?>"<sup><u>đ</u></sup></span>
									<span class='giaGachNgang'></span>
									</div>
									<span class="giaDo"></span>
								</div>
					<?php
							}
						}
					?>
				</div>
				</div>
			</div>
			
			</div>
		</span>
	</div>

	<!-- Dịch vụ bán chạy: end. -->
	
	 <!-- Start Gallery -->
	 <div class="container"data-aos="zoom-in" data-aos-delay="200">
	 <div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
<!--					<div class="heading-title text-center">-->
						
						<h1 style="font-size: 40px; text-align: center; font-weight: bold">FEEDBACK CỦA KHÁCH HÀNG  <i class="fa fa-heart" style="font-size:30px;color:red"></i></h1>
<!--					</div>-->
				</div>
			</div>
			<div class="tz-gallery"data-aos="zoom-in" data-aos-delay="200">
				<div class="row">
					<?php
						$sql="SELECT * 
										FROM tbl_feedback
										ORDER BY id_feedback DESC
										LIMIT 6 ";
						$result=$con->query($sql);
						if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc())
								{ //for->while
					?>
						<div class="col-sm-6 col-md-4 col-lg-4">
							<a class="lightbox" href="images/uploads/<?php echo $row['img'] ?>">
								<img class="img-fluid" src="images/uploads/<?php echo $row['img'] ?>" alt="Gallery Images">
							</a>
						</div>
					<?php 
					}
					}
					?>
				</div>
			</div>
		</div>
	</div>
	</div>
	
	<!-- End Gallery -->
	
	<!-- Sản phẩm mới nhất -->
	<div class="row leCacMuc" style="width: 100%; margin-top: 15px;"data-aos="fade-right" data-aos-delay="300">
		<span class="col-sm-2"></span>
		<span class="col-sm-8 noiDungGioiThieu">
			<h1 style="font-size: 40px; text-align: center; font-weight: bold">SẢN PHẨM MỚI NHẤT</h1>
			<div style="text-align: center;">
			
			<div class="row" style=" width: 100%;">
				<label id="labelTrai3" for="trai3"><i class="fa fa-angle-left"></i></label>
				<label id="lablePhai3" for="phai3"><i class="fa fa-angle-right"></i></label>
				<div class="slide_sp">
				<div class="slides_sp">
					<input type="radio" name="dieuHuong" id="trai3" checked>
					<input type="radio" name="dieuHuong" id="phai3">
					<?php
						$sql="SELECT id_san_pham, ten_san_pham, don_gia, anh
						FROM tbl_san_pham ORDER BY ngay_them DESC LIMIT 5";
						$result=$con->query($sql);
						if($result->num_rows>0)
						{
							$i=0;
							while($row=$result->fetch_assoc())
							{
								$i=$i+1;
								?>
								<div class="thanhPhan <?php if($i==1) echo "s3"; ?>">
									<span class="hoverSanPham">
									<a href="menu.php?&masanpham=<?php echo $row['id_san_pham']?>"><i class="fa fa-external-link" title="Mở liên kết"></i></a>
									<?php
										if (isset($_SESSION["id-user"]))
										{
											$sqlcheckyeuthich="select * from tbl_yeu_thich where id_khach_hang='".$_SESSION["id-user"]."' and id_san_pham='".$row["id_san_pham"]."'";
											$resultyt=$con->query($sqlcheckyeuthich);
											if($resultyt->num_rows>0)
											{
										?>
										<a href="customer/product/xlxoasanphamyeuthich.php?&idsanpham=<?php 
										echo $row["id_san_pham"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>">
										<i style="color: #c60909" class="fa fa-bookmark" title="Bỏ thích"></i>
										</a>
										<?php
											}
											else
											{
										?>
										<a href="customer/product/xlthemsanphamyeuthich.php?&idsanpham=<?php 
										echo $row["id_san_pham"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>">
										<i class="fa fa-bookmark-o" title="Yêu thích"></i>
										</a>
										<?php
											}
										}
										else
										{
										?>
										<a href="customer/Product/xlthemsanphamyeuthich.php?&idsanpham=<?php echo $row["id_san_pham"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"]?>">
										<i class="fa fa-bookmark-o" title="Yêu thích"></i>
										</a>
										<?php
										}
										?>
									</span>
									<div class="anhSanPham">
										<img src="images/san-pham/<?php echo $row['anh']; ?>">
									</div>
									<div style="font-size: 16px;">
										<?php echo $row["ten_san_pham"];?>
									</div>
									<div style="font-size: 16px; color: red; font-weight: bold;">
									Giá: <?php echo number_format($row["don_gia"]) ?>"<sup><u>đ</u></sup></span>
									<span class='giaGachNgang'></span>
									</div>
									<span class="giaDo"></span>
								</div>
					<?php
							}
						}
					?>
				</div>
				</div>
			</div>
			
			</div>
		</span>
	</div>
	<!-- Sản phẩm mới nhất: end. -->

    <!-- Dịch vụ mới nhất -->
	<div class="row leCacMuc" style="width: 100%; margin-top: 15px;" >
		<span class="col-sm-2"></span>
		<span class="col-sm-8 noiDungGioiThieu">
			<h1 style="font-size: 40px; text-align: center; font-weight: bold"data-aos="fade-left">DỊCH VỤ MỚI NHẤT NHẤT</h1>
			<div style="text-align: center;">
			
			<div class="row" style=" width: 100%;"data-aos="zoom-in" data-aos-delay="200">
				<label id="labelTrai4" for="trai4"><i class="fa fa-angle-left"></i></label>
				<label id="lablePhai4" for="phai4"><i class="fa fa-angle-right"></i></label>
				<div class="slide_sp">
				<div class="slides_sp">
					<input type="radio" name="dieuHuong" id="trai4" checked>
					<input type="radio" name="dieuHuong" id="phai4">
					<?php
						$sql="SELECT id_dich_vu, ten_dich_vu, don_gia_dv, anh_dv
						FROM tbl_dich_vu ORDER BY ngay_them_dv DESC LIMIT 5";
						$result=$con->query($sql);
						if($result->num_rows>0)	
						{
							$i=0;
							while($row=$result->fetch_assoc())
							{
								$i=$i+1;
								?>
								<div class="thanhPhan <?php if($i==1) echo "s4"; ?>">
									<span class="hoverSanPham">
									<a href="dichvu.php?&m=<?php echo $row['id_dich_vu']?>"><i class="fa fa-external-link" title="Mở liên kết"></i></a>
									<?php
										if (isset($_SESSION["id-user"]))
										{
											$sqlcheckyeuthich="select * from tbl_yeu_thich_dich_vu where id_khach_hang='".$_SESSION["id-user"]."' and id_dich_vu='".$row["id_dich_vu"]."'";
											$resultyt=$con->query($sqlcheckyeuthich);
											if($resultyt->num_rows>0)
											{
										?>
										<a href="customer/product/xlxoadichvuyeuthich.php?&iddichvu=<?php 
										echo $row["id_dich_vu"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>">
										<i style="color: #c60909" class="fa fa-bookmark" title="Bỏ thích"></i>
										</a>
										<?php
											}
											else
											{
										?>
										<a href="customer/product/xlthemdichvuyeuthich.php?&iddichvu=<?php 
										echo $row["id_dich_vu"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>">
										<i class="fa fa-bookmark-o" title="Yêu thích"></i>
										</a>
										<?php
											}
										}
										else
										{
										?>
										<a href="customer/Product/xlthemdichvuyeuthich.php?&iddichvu=<?php echo $row["id_dich_vu"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"]?>">
										<i class="fa fa-bookmark-o" title="Yêu thích"></i>
										</a>
										<?php
										}
										?>
									</span>
									<div class="anhSanPham">
										<img src="images/san-pham/<?php echo $row['anh_dv']; ?>">
									</div>
									<div style="font-size: 16px;">
										<?php echo $row["ten_dich_vu"];?>
									</div>
									<div style="font-size: 16px; color: red; font-weight: bold;">
									Giá: <?php echo number_format($row["don_gia_dv"]) ?>"<sup><u>đ</u></sup></span>
									<span class='giaGachNgang'></span>
									</div>
									<span class="giaDo"></span>
								</div>
					<?php
							}
						}
					?>
				</div>
				</div>
			</div>
			
			</div>
		</span>
	</div>

	<!-- Dịch vụ mới nhất: end. -->

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
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
	<?php include_once 'layout/vedautrang.php'; ?>
    <script src="css/aos/aos.js"></script>
	
	<script>
  		AOS.init();
	</script>
	
</body>
</html>