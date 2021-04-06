<?php
$sql="select * from tbl_dich_vu where tbl_dich_vu.id_dich_vu='".$_GET['m']."'";
$result=$con->query($sql);
$row=$result->fetch_assoc();
	?>
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
            <img style="cursor: pointer" src="images/san-pham/<?php echo $row['anh_dv'];?>" onClick="zoom(this)" class="img-fluid wc-image">
            </div>
          </div>

          <div class="col-md-5">
            <div class="sidebar-item recent-posts">
              <div class="sidebar-heading">
                <h2>Thông tin</h2>
              </div>

              <div class="content">
                <p><?php echo $row['ten_dich_vu']?></p>
              </div>
            </div>

            <br>
            <div class="sidebar-heading">
              <h2>Giá: <span style="color:red;"><?php echo number_format($row['don_gia_dv'])?> VND</span></h2>
            </div>
            <br>
          
            <div class="contact-us">
              <div class="sidebar-item contact-form">
                <div class="sidebar-heading">
                  <h2>Thêm vào giỏ hàng</h2>
                </div>

                <div class="content">
					<form id="contact" action="customer/Order/xlthemgiohang.php" method="get">
	                    <div class="row">
<!--
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
-->
                    	</div>

                    	<div class="row">
                      		<div class="col-md-6 col-sm-12">
                        		<fieldset>
                          			<label for="">Số lượng</label>
                        			<input type="number" class="form-control" value="1" required min="1" name="soluong">
									<input type="text" value="<?php echo $_GET["m"]?>" name="masanpham" style="display: none;">
                        		</fieldset>
                      		</div>
                      		<div class="col-lg-12">
                        		<fieldset>
                          			<a>
										<button type="submit" style="margin-top: 5px;" id="form-submit" class="btn btn-primary"><i class='fa fa-cart-plus'></i> Đặt hàng</button>
									</a>
							
									<a href="#">
										<button type="button" style="margin-top: 5px;"  class="btn btn-success"><i class='fa fa-share-alt'></i> Chia sẻ</button>
									</a>
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
           <?php echo $row['mo_ta_dv']?>
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
			<input type="text" style="display: none;" name="ma_san_pham" value="<?php echo $_GET["m"]?>">
		</div>
		</form>
		<div style="margin: 15px 0 10px 0;width: 100%;border-bottom: 2px solid var(--light);"></div>
<?php
$sql3="select * from tbl_binh_luan_dich_vu JOIN tbl_khach_hang ON tbl_khach_hang.id_khach_hang=tbl_binh_luan_dich_vu.id_khach_hang
 where id_dich_vu='".$_GET['m']."' order by ngay DESC";
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