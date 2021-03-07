<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img class="logo" src="images/.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.html">Trang chủ</a></li>
						<li class="nav-item"><a class="nav-link" href="about.html">Giới thiệu</a></li>
						<li class="nav-item"><a class="nav-link" href="service.html">Sản phẩm</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="menu.html" id="dropdown-a" data-toggle="dropdown">Dịch vụ</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="menu.html">Cắt tỉa lông chó mèo</a>
								<a class="dropdown-item" href="menu.html">Tắm spa chó mèo</a>
								<a class="dropdown-item" href="menu.html">Khách sạn chó mèo</a>
							</div>
						</li>
						<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.html">blog</a>
								<a class="dropdown-item" href="blog-details.html">blog Single</a>
							</div>
						</li> -->
						<li class="nav-item"><a class="nav-link" href="contact.html">Liên hệ</a></li>
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
<<<<<<< Updated upstream
						<li class="nav-item"><a class="nav-link" href="login/index.php"><i class="fa fa-user"></i> Đăng nhập</a></li>	
=======
<<<<<<< HEAD
						<li class="nav-item"><a href="giohang.php" onClick="hienthiform('formDangNhap');" class="nav-link"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
						<li class="nav-item"><a onClick="hienthiform('formDangNhap');" class="nav-link"><i class="fa fa-user"></i> Tài khoản</a></li>
=======
						<li class="nav-item"><a class="nav-link" href="login/index.php"><i class="fa fa-user"></i> Đăng nhập</a></li>	
>>>>>>> c061b777d4a8e34b0678c7ff086c487c793c688e
>>>>>>> Stashed changes
					</ul>
				</div>
			</div>
		</nav>
	</header>