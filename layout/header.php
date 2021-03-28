<header class="top-navbar">
	<div id="box-tim-kiem">
		<form action="xlsearch.php" method="get">
			<label class="d-none d-lg-block">Nhập sản phẩm bạn cần tìm:</label>
			<input name="text-box-tim-kiem" type="text" id="text-box-tim-kiem" placeholder="Tìm kiếm sản phẩm..."><br>
			<button type="submit" id="nut-tim-kiem"><i class="fa fa-search"></i></button>
			<a onClick="dongform('box-tim-kiem')" id="nut-thoat-tim-kiem" title="Đóng"><i class="fa fa-close"></i></a>
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
						<li class="nav-item"><a class="nav-link" href="about.php">Giới thiệu</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.php">Sản phẩm</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="service.php" id="dropdown-a" data-toggle="dropdown">Dịch vụ</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="service.php">Cắt tỉa lông chó mèo</a>
								<a class="dropdown-item" href="service.php">Tắm spa chó mèo</a>
								<a class="dropdown-item" href="service.php">Khách sạn chó mèo</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Liên hệ</a></li>
						
						
						<li class="nav-item"><a onClick="hienthiform('box-tim-kiem'),dongFrom('formDangNhap');" class="nav-link"><i class="fa fa-search"></i > Search</a></li>
						<li class="nav-item"><a href="giohang.php" onClick="dongFrom('formDangNhap');" class="nav-link"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
						<li class="nav-item"><a onClick="hienthiform('formDangNhap');" class="nav-link"><i class="fa fa-user"></i> Tài khoản</a></li>

					</ul>
				</div>
			</div>
		</nav>
	</header>