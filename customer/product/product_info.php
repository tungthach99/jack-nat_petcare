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
			<?php
					$sql="Select *, IF(tbl_khuyen_mai.muc_khuyen_mai != 0, tbl_san_pham.don_gia*(1 - tbl_khuyen_mai.muc_khuyen_mai/100), tbl_san_pham.don_gia) AS 
					gia_moi, tbl_san_pham.id_san_pham AS id_san_pham from tbl_san_pham LEFT JOIN tbl_khuyen_mai ON tbl_khuyen_mai.id_san_pham = tbl_san_pham.id_san_pham";
                    $result=$con->query($sql);
                    if($result->num_rows>0)
						{
							while($row=$result->fetch_assoc())
							{ //for->while
							if($row['id_danh_muc']=='11')
							{
					?>
							<div class="col-lg-4 col-md-6 special-grid thucan">
								<div class="gallery-single fix">
									<img src="images/san-pham/<?php echo $row['anh'] ?>" alt="" style="width: 290px;height: 214px" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4><?php  echo $row['ten_san_pham'] ?></h4>
										<p></p>
										<h5><?php echo number_format($row['don_gia']) ?>  VND</h5>
										<a href="menu.php?product=1&masanpham=<?php echo $row['id_san_pham']?>"><button class="nutChiTiet">Chi tiết</button></a>
									</div>
								</div>
							</div>
							<?php
								}
								if($row['id_danh_muc']=='12')
								{
							?>
							<div class="col-lg-4 col-md-6 special-grid phukien">
								<div class="gallery-single fix">
									<img src="images/san-pham/<?php echo $row['anh'] ?>" alt="" style="width: 290px;height: 214px;" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4><?php echo $row['ten_san_pham'] ?></h4>
										<p></p>
										<h5><?php echo number_format($row['don_gia']) ?>  VND</h5>
										<a href="menu.php?product=1&masanpham=<?php echo $row['id_san_pham']?>"><button class="nutChiTiet">Chi tiết</button></a>
									</div>
								</div>
							</div>
							<?php
								}
								if($row['id_danh_muc']=='13')
								{
							?>
							<div class="col-lg-4 col-md-6 special-grid chuongnha">
								<div class="gallery-single fix">
									<img src="images/san-pham/<?php echo $row['anh'] ?>" alt="" style=" width: 290px;height: 214px;" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4><?php echo $row['ten_san_pham'] ?></h4>
										<p></p>
										<h5><?php echo number_format($row['don_gia']) ?>  VND</h5>
										<a href="menu.php?product=1&masanpham=<?php echo $row['id_san_pham']?>"><button class="nutChiTiet">Chi tiết</button></a>
									</div>
								</div>
							</div>


				<?php 
					}//end if
				}//end while
				}//if_num_row
				?>
			</div>

		
		</div>
	</div>
	<!-- End Menu -->