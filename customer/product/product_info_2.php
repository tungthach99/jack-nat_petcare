<!-- Start All Pages -->
<!--
<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Sản phẩm</h1>
				</div>
			</div>
		</div>
	</div>
-->
	<!-- End All Pages -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
<!--
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Jack & Nat pet care</h2>
						<p>Thú cưng là gia đình</p>
					</div>
				</div>
			</div>
-->
            <div class="row" style="margin-top: 94px;">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">Tất cả</button>
							<button data-filter=".thuy">Thú y</button>
							<button data-filter=".trongcoi">Trông coi</button>
							<button data-filter=".thammy">Thẩm mỹ</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row special-list">
			<?php
					$sql="SELECT *,
								FROM tbl_dich_vu ";
                    $result=$con->query($sql);
                    if($result->num_rows>0)
						{
							while($row=$result->fetch_assoc())
							{ //for->while
							if($row['id_danh_muc']=='11')
							{
					?>
							<div class="col-lg-4 col-md-6 special-grid thuy">
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
							<div class="col-lg-4 col-md-6 special-grid trongcoi">
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
							<div class="col-lg-4 col-md-6 special-grid thammy">
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