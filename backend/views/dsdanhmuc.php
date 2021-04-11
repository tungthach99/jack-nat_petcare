<?php  

	if (isset($_POST['submit_search'])) {
        $key = $_POST['keyw'];
        $sql = "SELECT *FROM tbl_danh_muc WHERE ten_danh_muc LIKE '%$key%' ORDER BY id_danh_muc";
    }else{
        $sql = "SELECT *FROM tbl_danh_muc ORDER BY id_danh_muc";
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
                    <i class="fa fa-dashboard"></i> DANH SÁCH DANH MỤC
                </li>
            </ol>
        </div>

    </div>
	
     <div class="table-responsive">
	 <?php 
		if (isset($_SESSION['check']) && $_SESSION['check'] == 1) {
	?>
		<div class="alert alert-danger noti_admin">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Thêm danh mục</strong> thành công!
		</div>
	<?php
		}else if(isset($_SESSION['check']) && $_SESSION['check'] == 3){
	?>
		<div class="alert alert-danger noti_admin">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Xóa danh mục</strong> thành công!
		</div>
	<?php
		}else if(isset($_SESSION['check']) && $_SESSION['check'] == 2){
	?>
		<div class="alert alert-danger noti_admin">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Cập nhập danh mục</strong> thành công!
		</div>
	<?php
		}
		unset($_SESSION['check']);
	?>
	  <table class="table align-items-center table-flush">
	    <thead class="thead-light">
	      <tr>
	        <th scope="col">STT</th>
			<th scope="col">ID</th>
	        <th scope="col">Tên danh mục</th>
	        <th scope="col">Mô tả</th>
	        <th scope="col">Tác vụ</th>
	        
	      </tr>
	    </thead>
	    <tbody>
	    	<?php 
	    	$stt = 1;
	    	while ($row=$query->fetch_assoc()) {
        		$_SESSION["id_danh_muc"] = $row['id_danh_muc'];
	    	 ?>
	        <tr>
	        	<td><?php echo $stt; ?></td>
				<td><?php echo $row['id_danh_muc']; ?></td>
	        	<td><?php echo $row['ten_danh_muc']; ?></td>
	        	<td><?php echo $row['mo_ta']; ?></td>
				<td>
					<a href="index.php?page=sua-danhmuc&id=<?php echo $row['id_danh_muc']; ?>"><button class="btn btn-primary">Sửa</button></a>
					<a onclick="return confirm('Bạn có muốn xóa danh mục này không? ');" href="index.php?page=del-danhmuc&id=<?php echo $row['id_danh_muc']; ?>">
						<button class="btn btn-danger">Xóa</button>
					</a>
				</td>
	        </tr>
	    <?php $stt++; } ?>
	    </tbody>
	  </table> 
</div>