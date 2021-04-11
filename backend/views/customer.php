<?php  

	if (isset($_POST['submit_search'])) {
        $key = $_POST['keyw'];
        $sql = "SELECT *FROM tbl_khach_hang WHERE ten_khach_hang LIKE '%$key%' ORDER BY id_khach_hang";
    }else{
        $sql = "SELECT *FROM tbl_khach_hang ORDER BY id_khach_hang";
    }
    
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);

?>

<?php 
 
 ?>
<div><br>

	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
               DANH MỤC
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
                    <i class="fa fa-dashboard"></i> DANH SÁCH KHACH HANG
            </ol>
        </div>

    </div>
	
     <div class="table-responsive">
	 <?php 
		if (isset($_SESSION['check']) && $_SESSION['check'] == 1) {
	?>
		<div class="alert alert-danger noti_admin">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Thêm khách hàng</strong> thành công!
		</div>
	<?php
		}else if(isset($_SESSION['check']) && $_SESSION['check'] == 3){
	?>
		<div class="alert alert-danger noti_admin">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Xóa khách hàng</strong> thành công!
		</div>
	<?php
		}else if(isset($_SESSION['check']) && $_SESSION['check'] == 2){
	?>
		<div class="alert alert-danger noti_admin">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Cập nhập khách hàng</strong> thành công!
		</div>
	<?php
		}
		unset($_SESSION['check']);
	?>
	  <table class="table align-items-center table-flush">
	    <thead class="thead-light">
	      <tr>
            <th scope="col">STT</th>
	        <th scope="col">Tên khách hàng</th>
	        <th scope="col">Email</th>
	        <th scope="col">Số điện thoại</th>
	        <th scope="col">Địa chỉ</th>
			<th scope="col">Tên đăng nhập</th>
	        <th scope="col">Mật khẩu</th>
	        <th scope="col">Tác vụ</th>
	        
	      </tr>
	    </thead>
	    <tbody>
	    	<?php 
	    	$stt = 1;
	    	while ($row=$query->fetch_assoc()) {
        		$_SESSION["id_khach_hang"] = $row['id_khach_hang'];
	    	 ?>
	        <tr>
            <td><?php echo $stt; ?></td>
	        	<td><?php echo $row['ten_khach_hang']?></td>
	        	<td><?php echo $row['email'];?></td>
	        	<td><?php echo $row['so_dien_thoai'];?></td>
	        	<td><?php echo $row['dia_chi']?></td>
				<td><?php echo $row['ten_dang_nhap']?></td>
	        	<td><?php echo $row['mat_khau']; ?></td>
				<td>
					<a href="index.php?page=edit-customer&id=<?php echo $row['id_khach_hang']; ?>"><button class="btn btn-primary">Sửa</button></a>
					<a onclick="return confirm('Bạn có muốn xóa khách hàng này không? ');" href="index.php?page=del-customer&id=<?php echo $row['id_khach_hang']; ?>">
						<button class="btn btn-danger">Xóa</button>
					</a>
				</td>
	        </tr>
	    <?php $stt++; } ?>
	    </tbody>
	  </table> 
</div>