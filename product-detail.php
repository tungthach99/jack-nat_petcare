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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="js/jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> 
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="css/style1.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      <script src="js/main.js"></script>
</head>

<body>
  <?php
require("public/ketnoi.php");
?>
<!--	Phong to anh								-->
<div id="noiDungPhongTo">
  <div class="menuAnh">
    <img src="images/san-pham/anh1.jpg" onClick="zoom(this)" alt="">
    <img src="images/san-pham/anh1.1.jpg" onClick="zoom(this)" alt="">

  </div>
  <div class="anhPhongTo">
    <img id="anhPhongTo" src="images/hispeed.png">
  </div>
  <i class="fa fa-remove thoat" style="color: #fff;" onClick="dongform('noiDungPhongTo')" title="Đóng"></i>
</div>
<!--	End phong to anh							-->


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
					<h1>Thông tin sản phẩm</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->

    <!-- Thông tin sản phẩm-->

    <section class="blog-posts grid-system blog">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div>
              <img src="images/san-pham/anh1.jpg" onClick="zoom(this)" alt="" class="img-fluid wc-image">
            </div>
          </div>

          <div class="col-md-5">
            <div class="sidebar-item recent-posts">
              <div class="sidebar-heading">
                <h2>Thông tin</h2>
              </div>

              <div class="content">
                <p>Thức ăn cho chó con ROYAL CANIN  Bulldog Puppy dành riêng cho chó dưới 12 tháng tuổi.</p>
              </div>
            </div>

            <br>
            <div class="sidebar-heading">
              <h2>Giá: <span style="color:red;">230.000 VND</span></h2>
            </div>
            <br>
          
            <div class="contact-us">
              <div class="sidebar-item contact-form">
                <div class="sidebar-heading">
                  <h2>Thêm vào giỏ hàng</h2>
                </div>

                <div class="content">
                  <form id="contact" action="checkout2.php" method="post">
                    <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <label  for="sel1">Khối lượng</label>
                          <select class="form-control" id="sel1" name="sellist1">
                            <option value="0">500g</option>
                            <option value="0">1000g</option>
                            <option value="0">1500g</option>
                            <option value="0">2000g</option>
                          </select>
                        </fieldset>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <label for="">Số lượng</label>
                          <input type="text" class="form-control" value="1" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <a href="checkout2.php"><button type="submit" style="margin-top: 5px;" id="form-submit" class="btn btn-primary"><i class='fa fa-cart-plus'>
                          </i> Đặt hàng</button></a>
                          <button type="button" style="margin-top: 5px;" id="form-submit" class="btn btn-success"><i class="fa fa-share-alt">
                          </i> Chia sẻ</button>
                        </fieldset>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <br>
          </div>
        </div>
      </div>
    </section>

    <div class="section contact-us">
      <div class="container">
        <div class="sidebar-item recent-posts">
          <div class="sidebar-heading">
            <h2 style="font-weight: bold;">Miêu tả</h2>
          </div>

          <div class="content">
            <h2>Lợi ích chính</h2>
            <p>Thức ăn cho chó con ROYAL CANIN Bulldog Puppy với công thức đặc chế riêng cho nhu cầu dinh dưỡng của chó Bull. Sản phẩm được chế biến theo công thức nâng cao sức đề kháng, bảo vệ da và lông cho chó con.

              Sản phẩm được thiết kế độc quyền để giúp Bulldog dễ dàng hơn cho việc nhai thức ăn. Đặc biệt hỗ trợ hệ tiêu hóa được phát triển đầy đủ và duy trì hệ thực vật đường ruột cân bằng.
              
              Góp phần hỗ trợ xương và khớp xương được khỏe mạnh của Bulldog, với hàm lượng canxi và phốt pho thích hợp. Công thức độc quyền này cũng giúp duy trì trọng lượng lý tưởng.
              
              Trong giai đoạn tăng trưởng, chó Bull con chưa được phát triển đầy đủ. Thì khi sử dụng thức ăn Royal Canin sẽ bổ xung thêm chất chống oxy hóa (vitamin E và C, lutein và taurine) giúp hỗ trợ những chất cần thiết cho Bulldog.</p>

            <br>
            <h2>Thành phần dinh dưỡng</h2>
            <p>Thức ăn cho chó con ROYAL CANIN Bulldog Puppy giải quyết các vấn đề thường gặp ở chó Bulldog. Cho chó con mới cai sữa, hệ miễn dịch còn yếu. Da và lông chưa phát triển hoàn thiện, dễ bị bệnh ngoài da và ký sinh trùng.

              Thức ăn cho chó ROYAL CANIN Bulldog Puppy được chế biến theo công thức tăng cường sức đề kháng cho chó, đảm bảo cung cấp đầy đủ dinh dưỡng cần thiết cho chó, đồng thời bồi bổ cho da và lông, giúp chó có được hệ miễn dịch hoàn chỉnh. Dưỡng chất cho da PINCH: giúp chó có được làn da khỏe mạnh, lông mượt và khỏe. Chất chống oxy hóa CELT: tăng sức đề kháng cho chó con.</p>

            <br>
              <h2>Hướng dẫn cho ăn</h2>
            <p>Thức ăn cho chó con ROYAL CANIN Bulldog Puppy tạo thói quen ăn uống cho chó. Dựa theo tuổi của cho, cần cho ăn một ngày 3 lần vào các giờ cố định. Cho ăn tại một chỗ để tạo thói quen tốt cho chó. Nên cho chó ăn thức ăn chế biến riêng, không cho ăn thức ăn thừa của người. Vì thức ăn của người có nhiều thành phần khiến chó bị rối loạn tiêu hóa, dễ bị bệnh béo phì. Bảo đảm cung cấp đủ nước uống cho chó. Nếu thấy nước bị chó làm bẩn, cần thay nước mới ngay lập tức.

              Khi muốn đổi thức ăn mới cho chó, có thể trộn lẫn thức ăn cũ và mới khi cho ăn. Tăng dần tỉ lệ trong vòng 7 ngày. Đột ngột thay đổi loại thức ăn mới có thể gây mất cân bằng hệ tiêu hóa. Chó dễ bị khó tiêu và đi ngoài.
              
              Công thức phân chia lượng thức ăn theo cân nặng có thể tham khảo trên bao bì. Hạn sử dụng 18 tháng kể từ ngày sản xuất.</p>
          </div>

          <br>
          <br>
        </div>
      </div>
    </div>
    <!-- End Thông tin nhà-->

<!-- Binh luan  -->
<form action="xlbinhluansp.php" method="POST">
		<div class="binh-luan-group">
        	<p id="binh-luan-label">Viết bình luận ...<i class="fa fa-pencil"></i></p>
			<input type="text" id="comment-box" name="noi_dung" placeholder="Hãy nhập bình luận của bạn ở đây"> </input>
			<button type="submit"  class="btn btn-primary" style="margin: 0 0 10px 5%;">Gửi</button>
			<input type="text" style="display: none;" name="ma_san_pham" value="<?php echo $_GET["masanpham"]?>">
		</div>
		</form>
		<div style="margin: 15px 0 10px 0;width: 100%;border-bottom: 2px solid var(--light);"></div>
<?php
$sql3="select * from tbl_binh_luan_sp JOIN tbl_khach_hang ON tbl_khach_hang.id_khach_hang=tbl_binh_luan_sp.id_khach_hang
 where id_san_pham='".$_GET['masanpham']."' order by ngay_tao DESC";
$result3=$con->query($sql3);
if($result->num_rows>0)
	{
	while($row3=$result3->fetch_assoc())
	{
?>
		<div class="hien-thi-binh-luan">
			<div class="hien-thi-ten"><?php echo $row3['ten_khach_hang']?><span class="hien-thi-ngay"><?php echo $row3['ngay_tao']?></span></div>
			<div class="hien-thi-noi-dung" value= null><?php echo $row3['noi_dung']?></div>
			<div style="margin: 10px 0 10px 0;width: 90%;border-bottom: 2px solid var(--light);"></div>
		</div>
<?php
	}//end_while	
	} //end if
?>
</form>
<!-- Binh luan end   -->

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