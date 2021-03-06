<header class="top-navbar">
		<div id="box-tim-kiem">
			<form action="xlsearch.php" method="get">
				<label class="d-none d-lg-block">Bạn cần tìm gì nà!!</label>
				<input name="text-box-tim-kiem" type="text" id="text-box-tim-kiem" placeholder="Tìm kiếm sản phẩm..."><br>
				<button type="submit" id="nut-tim-kiem"><i class="fa fa-search"></i></button>
				<a onClick="dongform('box-tim-kiem')" id="nut-thoat-tim-kiem" title="Đóng"><i class="fa fa-close"></i></a>
				<div class="tagTimKiem"><a>#Cắt tỉa lông</a>
					<a>#Cắt tỉa lông</a>
					<a>#Balo mèo</a>
					<a>#Cắt móng</a>
				</div>
				
			</form>
		</div>
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
						<li class="nav-item"><a onClick="hienthiform('box-tim-kiem');dongform('formDangNhap')" class="nav-link"><i class="fa fa-search"></i> Search</a>
						  </li>
						<li class="nav-item"><a onClick="hienthiform('formDangNhap');" class="nav-link"><i class="fa fa-user"></i> Tài khoản</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>