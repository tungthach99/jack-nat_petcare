<?php  

	if (isset($_POST['submit_search'])) {
        $key = $_POST['keyw'];
        $sql = "SELECT *FROM tbl_san_pham WHERE ten_san_pham LIKE '%$key%' ORDER BY id_san_pham";
    }else{
        $sql = "SELECT *FROM tbl_san_pham ORDER BY id_san_pham";
    }
    
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);

?>

<div class="container-fluid">

	 <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
               SẢN PHẨM
            </h1>

            <form action="" method="POST">
                <div class="input-group">

                  <input type="text" required="" placeholder="Nhập tên sản phẩm cần tìm..." name="keyw" class="form-control" value="<?php if(isset($key)) { echo $key; } ?>"/>

                  <span class="input-group-addon">
                      <button style="line-height: 0px; padding: 0px;" type="submit" class="" name="submit_search">
	                      Tìm kiếm
	                  </button>
                  </span>

                </div>
            </form>

            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> DANH SÁCH SẢN PHẨM
                </li>
            </ol>
        </div>

    </div>
    <!-- /.row -->

	<div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">

	<?php 
		if (isset($_SESSION['check']) && $_SESSION['check'] == 1) {
	?>
		<div class="alert alert-danger noti_admin">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Thêm sản phẩm</strong> thành công!
		</div>
	<?php
		}else if(isset($_SESSION['check']) && $_SESSION['check'] == 3){
	?>
		<div class="alert alert-danger noti_admin">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Xóa sản phẩm</strong> thành công!
		</div>
	<?php
		}else if(isset($_SESSION['check']) && $_SESSION['check'] == 2){
	?>
		<div class="alert alert-danger noti_admin">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Cập nhập sản phẩm</strong> thành công!
		</div>
	<?php
		}
		unset($_SESSION['check']);
	?>

			<div class="table-responsive">
				<table class="table table-hover">
					<?php if($count > 0){ ?>
					<thead>
						<tr>
							<th scope="col">STT</th>
							<th scope="col">Mã sản phẩm</th>
	       						<th scope="col">Tên sản phẩm</th>
	    						<th scope="col">Đơn giá</th>
	        					<th scope="col">Danh mục</th>
	        					<th scope="col">Ảnh</th>
			  				<th scope="col">Số lượng</th>
	        					<th scope="col">Mô tả</th>
			  				<th scope="col">Ngày thêm</th>
	        					<th scope="col">Tác vụ</th>
						</tr>
					</thead>
					<tbody>
						<?php  
							$stt = 0;
							while ($row = mysqli_fetch_array($query)) {
								$stt += 1;
						?>
								<tr>
									<td><?php echo $stt; ?></td>
									<td><?php echo $row['id_san_pham']; ?></td>
									<td><?php echo substr($row['ten_san_pham'],0,30); ?></td>
	        							<td><?php echo $row['don_gia']; ?></td>
	        							<td><?php echo $row['id_danh_muc']; ?></td>
									<td><img style="height: 100px " src="../../images/san-pham/<?php echo $row['anh'] ?>" alt=""></td>
									<td><?php echo $row['so_luong']; ?></td>
	        							<td><?php echo substr($row['mo_ta'],0,50); ?></td>
									
									<td><?php echo date('d-m-Y H:m:s', strtotime($row['ngay_them'])); ?></td>
									<td>
										<a href="index.php?page=edit-menu&id=<?php echo $row['id_san_pham']; ?>"><button class="btn btn-primary">Sửa</button></a>
										<a onclick="return confirm('Bạn có muốn xóa sản phẩm này không? ');" href="index.php?page=del-menu&id=<?php echo $row['id_san_pham']; ?>">
											<button class="btn btn-danger">Xóa</button>
										</a>
									</td>
								</tr>
						<?php
							}
						?>
						
					</tbody>
				<?php }else{
				?>
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Dữ liệu</strong> không có!
					</div>
				<?php
				} ?>
				</table>
			</div>

		</div>
    </div>
	

</div>