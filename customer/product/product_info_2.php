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
            <div class="row" style="margin-top: 94px;">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button <?php if(!isset($_GET['a'])) echo "class='active'"?> data-filter="*">Tất cả</button>
							<button <?php if(isset($_GET['a']) and $_GET['a'] == "Thú y") echo "class='active'"?> data-filter=".thuy">Thú y</button>
							<button <?php if(isset($_GET['a']) and $_GET['a'] == "Trông coi") echo "class='active'"?> data-filter=".trongcoi">Trông coi</button>
							<button <?php if(isset($_GET['a']) and $_GET['a'] == "Làm đẹp") echo "class='active'"?> data-filter=".thammy">Làm đẹp</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row special-list">
			<?php
					$sql="SELECT * FROM tbl_dich_vu ";
					if(isset($_GET['t'])) $sql.= " WHERE tbl_dich_vu.ten_dich_vu Like '%".$_GET['t']."%'";
					if(isset($_GET['tag']) and !isset($_GET['tensanpham'])) $sql.= " WHERE tbl_dich_vu.tag = '".$_GET['tag']."'";
                    $result=$con->query($sql);
                    if($result->num_rows>0)
						{
							while($row=$result->fetch_assoc())
							{ //for->while
							if($row['id_danh_muc'] == '4')
							{
					?>
							<div class="col-lg-4 col-md-6 special-grid thuy">
								<div class="gallery-single fix">
									<img src="images/san-pham/<?php echo $row['anh_dv'] ?>" alt="" style="width: 290px;height: 214px" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4><?php  echo $row['ten_dich_vu']; ?></h4>
										<p></p>
										<h5><?php echo number_format($row['don_gia_dv']) ?>  VND</h5>
										<a href="dichvu.php?&m=<?php echo $row['id_dich_vu'] ?>"><button class="nutChiTiet">Chi tiết</button></a>
									</div>
								</div>
							</div>
							<?php
								}
								if($row['id_danh_muc']=='5')
								{
							?>
							<div class="col-lg-4 col-md-6 special-grid trongcoi">
								<div class="gallery-single fix">
									<img src="images/san-pham/<?php echo $row['anh_dv'] ?>" alt="" style="width: 290px;height: 214px" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4><?php  echo $row['ten_dich_vu']; ?></h4>
										<p></p>
										<h5><?php echo number_format($row['don_gia_dv']) ?>  VND</h5>
										<a href="dichvu.php?&m=<?php echo $row['id_dich_vu'] ?>"><button class="nutChiTiet">Chi tiết</button></a>
									</div>
								</div>
							</div>
							<?php
								}
								if($row['id_danh_muc']=='6')
								{
							?>
							<div class="col-lg-4 col-md-6 special-grid thammy">
								<div class="gallery-single fix">
									<img src="images/san-pham/<?php echo $row['anh_dv'] ?>" alt="" style="width: 290px;height: 214px" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4><?php  echo $row['ten_dich_vu']; ?></h4>
										<p></p>
										<h5><?php echo number_format($row['don_gia_dv']) ?>  VND</h5>
										<a href="dichvu.php?&m=<?php echo $row['id_dich_vu'] ?>"><button class="nutChiTiet">Chi tiết</button></a>
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