<?php
$sql="select *,tbl_san_pham.don_gia*(1-tbl_khuyen_mai.muc_khuyen_mai/100) AS gia_moi from tbl_san_pham LEFT OUTER JOIN tbl_khuyen_mai ON tbl_khuyen_mai.id_san_pham = tbl_san_pham.id_san_pham where tbl_san_pham.id_san_pham='".$_GET['masanpham']."'";
$result=$con->query($sql);
$row=$result->fetch_assoc();
// tăng lượt xem theo tag
$sqlTag="select id_tag, luot_xem from tag where id_tag = '".$row['tag']."'";
$resultTag=$con->query($sqlTag);
$rowTag=$resultTag->fetch_assoc();
$luotXem = $rowTag['luot_xem']+1;
$sqlUpdateTag = "UPDATE tag SET luot_xem = '".$luotXem."' WHERE id_tag = '".$rowTag['id_tag']."'";
$resultUpdateTag=$con->query($sqlUpdateTag);

//tăng lượt xem theo tag: end.
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
            <img style="cursor: pointer" src="images/san-pham/<?php echo $row['anh'];?>" onClick="zoom(this)" class="img-fluid wc-image">
            </div>
          </div>

          <div class="col-md-5">
            <div class="sidebar-item recent-posts">
              <div class="sidebar-heading">
                <h2>Thông tin</h2>
              </div>

              <div class="content">
                <p><?php echo $row['ten_san_pham'];?></p>
              </div>
            </div>

            <br>
            <div class="sidebar-heading">
              <h2>Giá: <span style="color:red;"><?php echo number_format($row['don_gia'])?> VND</span></h2>
              <?php $giasp = number_format($row['don_gia']) ?>
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
									<input type="text" value="<?php echo $_GET["masanpham"]?>" name="masanpham" style="display: none;">
                        		</fieldset>
                      		</div>
                      		<div class="col-lg-12">
                        		<fieldset>
                          			<a>
										<button type="submit" style="margin-top: 5px;" id="form-submit" class="btn btn-primary"><i class='fa fa-cart-plus'></i> Đặt hàng</button>
									</a>
							
									<a href="https://www.facebook.com/sharer/sharer.php?u=jacknatpetcare.000webhostapp.com/menu.php?masanpham=<?php echo $_GET["masanpham"]?>">
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
           <?php echo $row['mo_ta']?>
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
			<button type="submit"  class="btn btn-primary" >Gửi</button>
			<input type="text" style="display: none;" name="ma_san_pham" value="<?php echo $_GET["masanpham"]?>">
		</div>
		</form>
		<div style="margin: 15px 0 10px 0;width: 100%;border-bottom: 2px solid var(--light);"></div>
<?php
$sql3="select * from tbl_binh_luan_san_pham JOIN tbl_khach_hang ON tbl_khach_hang.id_khach_hang=tbl_binh_luan_san_pham.id_khach_hang
 where id_san_pham='".$_GET['masanpham']."' order by ngay DESC";
$result3=$con->query($sql3);
if($result->num_rows>0)
	{
	while($row3=$result3->fetch_assoc())
	{
?>
		<div class="hien-thi-binh-luan">
			<div class="hien-thi-ten"><?php echo $row3['ten_khach_hang']?><span class="hien-thi-ngay"><?php echo $row3['ngay']?></span></div>
			<div class="hien-thi-noi-dung" value= null><?php echo $row3['noi_dung']?></div>
			<div style="margin: 10px 0 10px 0;width: 90%;border-bottom: 2px solid var(--light);"></div>
		</div>
<?php
	}//end_while	
	} //end if
?>
</form>
<!-- Binh luan end   -->

	<!----  Goi y san pham           -->
	<div class="row leCacMuc" style="width: 100%; margin-top: 15px;">
		<span class="col-sm-1"></span>
		<span class="col-sm-10 noiDungGioiThieu">
			<h1 style="font-size: 40px; text-align: center; font-weight: bold">SẢN PHẨM LIÊN QUAN</h1>
			<div style="text-align: center;">
			
			<div class="row" style=" width: 101%;">
				<label id="labelTrai" for="trai"><i style="color: white" class="fa fa-angle-left"></i></label>
				<label id="lablePhai" for="phai"><i  style="color: white" class="fa fa-angle-right"></i></label>
				<div class="slide_sp">
				<div class="slides_sp">
					<input type="radio" name="dieuHuong" id="trai" checked>
					<input type="radio" name="dieuHuong" id="phai">
					<?php
						$sqllq="SELECT *
                            FROM tbl_san_pham 
                            WHERE id_san_pham<>'".$_GET["masanpham"]."' 
                                AND ABS(don_gia-".$row["don_gia"].") < 500000 AND id_danh_muc='".$row["id_danh_muc"]."' 
                            LIMIT 5";
						$resultlq=$con->query($sqllq);
						if($resultlq->num_rows>0)
						{
							$i=0;
							while($rowlq= $resultlq->fetch_assoc())
							{
								$i=$i+1;
								?>
								<div class="thanhPhan <?php if($i==1) echo "s1"; ?>">
									<span class="hoverSanPham">
									<a href="menu.php?product=1&masanpham=<?php echo $rowlq['id_san_pham']?>"><i class="fa fa-external-link" title="Mở liên kết"></i></a>
									<!--										Them san pham yeu thich-->
									<?php
										if (isset($_SESSION["id-user"]))
										{
											$sqlcheckyeuthich="select * from tbl_yeu_thich where id_khach_hang='".$_SESSION["id-user"]."' and id_san_pham='".$rowlq["id_san_pham"]."'";
											$resultyt=$con->query($sqlcheckyeuthich);
											if($resultyt->num_rows>0)
											{
										?>
										<a href="customer/product/xlxoasanphamyeuthich.php?&idsanpham=<?php echo $rowlq["id_san_pham"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>"><i style="color: #c60909" class="fa fa-heart" title="Bỏ thích"></i>
										</a>
										<?php
											}
											else
											{
										?>
										<a href="customer/product/xlthemsanphamyeuthich.php?&idsanpham=<?php echo $rowlq["id_san_pham"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>"><i class="fa fa-heart-o" title="Yêu thích"></i>
										</a>
										<?php
											}
										}
										else
										{
										?>
										<a href="customer/product/xlthemsanphamyeuthich.php?&idsanpham=<?php echo $rowlq["id_san_pham"];?>&id=<?php if(isset($_SESSION["id-user"])) echo $_SESSION["id-user"];?>"><i class="fa fa-heart-o" title="Yêu thích"></i>
										</a>
										<?php
										}
										?>
									</span>
									<div class="anhSanPham">
										<img src="images/san-pham/<?php echo $rowlq['anh']; ?>">
									</div>
									<div style="font-size: 16px;">
										<?php echo $rowlq["ten_san_pham"];?>
									</div>
									<div style="font-size: 16px; color: red; font-weight: bold;">
									Giá: <?php echo number_format($rowlq["don_gia"]) ?>"<sup><u>đ</u></sup></span>
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
	<!---- End Goi y san pham         -->

<?php	
if(isset($_SESSION["kiemtrasua"]) && $_SESSION["kiemtrasua"]==1)
	require("layout/message.php");
?>
<?php	
if(isset($_SESSION["kiemtrasua"]) && $_SESSION["kiemtrasua"]==2)
	require("layout/message2.php");
?>
