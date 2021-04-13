<?php  

	if (isset($_POST['submit_search'])) {
        $key = $_POST['keyw'];
        $sql = "SELECT *FROM tbl_dich_vu WHERE ten_dich_vu LIKE '%$key%' ORDER BY id_dich_vu";
    }else{
        $sql = "SELECT *FROM tbl_dich_vu ORDER BY id_dich_vu";
    }
    
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);

?>

<div class="container-fluid">

	 <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
               DỊCH VỤ
            </h1>

            <form action="" method="POST">
                <div class="input-group">

                  <input type="text" required="" placeholder="Nhập tên dịch vụ cần tìm..." name="keyw" class="form-control" value="<?php if(isset($key)) { echo $key; } ?>"/>

                  <span class="input-group-addon">
                      <button style="line-height: 0px; padding: 0px;" type="submit" class="" name="submit_search">
	                      Tìm kiếm
	                  </button>
                  </span>

                </div>
            </form>

            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> DANH SÁCH DỊCH VỤ
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
			<strong>Thêm dịch vụ</strong> thành công!
		</div>
	<?php
		}else if(isset($_SESSION['check']) && $_SESSION['check'] == 3){
	?>
		<div class="alert alert-danger noti_admin">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Xóa dịch vụ</strong> thành công!
		</div>
	<?php
		}else if(isset($_SESSION['check']) && $_SESSION['check'] == 2){
	?>
		<div class="alert alert-danger noti_admin">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Cập nhập dịch vụ</strong> thành công!
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
							<th scope="col">Mã dịch vụ</th>
	       						<th scope="col">Tên dịch vụ</th>
	    						<th scope="col">Đơn giá</th>
                                <th scope="col">Ảnh</th>
	        					<th scope="col">Mô tả</th>
	        					
			  				
	        				
                                <th scope="col">Danh mục</th>
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
									<td><?php echo $row['id_dich_vu']; ?></td>
									<td><?php echo substr($row['ten_dich_vu'],0,30); ?></td>
	        						<td><?php echo $row['don_gia_dv']; ?></td>	
									<td><img src="../images/san-pham/<?php echo $row['anh_dv']; ?>" width="200" alt=""></td>
	        						<td><?php echo substr($row['mo_ta_dv'],0,50); ?></td>
                                    <td><?php echo $row['id_danh_muc']; ?></td>
									<td><?php echo date('d-m-Y H:m:s', strtotime($row['ngay_them_dv'])); ?></td>
									<td>
										<a href="index.php?page=edit-service&id=<?php echo $row['id_dich_vu']; ?>"><button class="btn btn-primary">Sửa</button></a>
										<a onclick="return confirm('Bạn có muốn xóa san phẩm này không? ');" href="index.php?page=del-service&id=<?php echo $row['id_dich_vu']; ?>">
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