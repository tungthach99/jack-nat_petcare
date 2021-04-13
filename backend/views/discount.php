<?php  

	if (isset($_POST['submit_search'])) {
        $key = $_POST['keyw'];
        $sql = "SELECT *FROM tbl_ma_giam_gia WHERE ma_giam_gia LIKE '%$key%' ORDER BY ma_giam_gia";
    }else{
        $sql = "SELECT *FROM tbl_ma_giam_gia ORDER BY ma_giam_gia";
    }
    
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);

?>

<div class="container-fluid">

	 <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
               MÃ GIẢM GIÁ
            </h1>

            <form action="" method="POST">
                <div class="input-group">

                  <input type="text" required="" placeholder="Nhập tiêu đề bản tin cần tìm..." name="keyw" class="form-control" value="<?php if(isset($key)) { echo $key; } ?>"/>

                  <span class="input-group-addon">
                      <button style="line-height: 0px; padding: 17px;" type="submit" class="" name="submit_search">
	                      Tìm kiếm
	                  </button>
                  </span>

                </div>
            </form>

            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> DANH SÁCH MÃ GIẢM GIÁ
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
			<strong>Thêm mã</strong> thành công!
		</div>
	<?php
		}else if(isset($_SESSION['check']) && $_SESSION['check'] == 3){
	?>
		<div class="alert alert-danger noti_admin">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Xóa mã</strong> thành công!
		</div>
	<?php
		}else if(isset($_SESSION['check']) && $_SESSION['check'] == 2){
	?>
		<div class="alert alert-danger noti_admin">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Cập nhập mã</strong> thành công!
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
							<th>STT</th>
							<th>Mã giảm giá</th>
							<th>Chiết khấu</th>
							<th>Ngày áp dụng</th>
							<th>Ngày kết thúc</th>
                            <th>Tác vụ</th>
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
									<td><?php echo $row['ma_giam_gia'];?></td>
									<td><?php echo $row['chiet_khau'];?></td>
									<td><?php echo $row['ngay_ap_dung'];?></td>
	        	                    <td><?php echo $row['ngay_ket_thuc']?></td>
									<td>
										<a href="index.php?page=edit-discount&id=<?php echo $row['ma_giam_gia']; ?>"><button class="btn btn-primary">Sửa</button></a>
										<a onclick="return confirm('Bạn có muốn xóa mã này không? ');" href="index.php?page=del-discount&id=<?php echo $row['ma_giam_gia']; ?>">
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