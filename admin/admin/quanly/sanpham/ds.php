<?php 
	//xóa sản phẩm
if(isset($_GET['idxoa'])){
     $id=$_GET['idxoa'];
     $sql="DELETE FROM tbl_san_pham where id_san_pham=$id";
     
     if($connection->query($sql))
     {
      echo "<div class='alert alert-success' role='alert'>
    <strong>Xóa thành công</strong>
            </div>
";
     }
      
     else 
     {
       echo "<div class='alert alert-default' role='alert'>
    <strong>Xóa thất bại</strong>
</div>";
     }
     
 }

	//Hiển thị danh sách sản phẩm
      $sql="SELECT t1.id_san_pham, t1.ten_san_pham, t1.don_gia, t1.mo_ta, t1.anh,t1.so_luong,t1.ngay_them, t2.ten_danh_muc
      FROM tbl_san_pham t1 JOIN tbl_danh_muc t2 ON t1.id_danh_muc = t2.id_danh_muc";
      $query=$connection->query($sql);
 ?>
<div><br>
	<h1> Danh sách sản phẩm </h1>
	<a class="btn btn-success" href="?ql=sanpham/them">Thêm</a>
     <div class="table-responsive">
	  <table class="table align-items-center table-flush">
	    <thead class="thead-light">
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
	    	$stt = 1;
	    	while ($row=$query->fetch_assoc()) {
	    	 ?>
	        <tr>
	        	<td><?php echo $stt; ?></td>
				<td><?php echo $row['id_san_pham']; ?></td>
	        	<td><?php echo substr($row['ten_san_pham'],0,30); ?></td>
	        	<td><?php echo $row['don_gia']; ?></td>
	        	<td><?php echo $row['ten_danh_muc']; ?></td>
	        	<td>
	        		<img style="height: 100px " src="../../images/san-pham/<?php echo $row['anh'] ?>" alt="">
	        	</td>
				<td><?php echo $row['so_luong']; ?></td>
	        	<td><?php echo substr($row['mo_ta'],0,50); ?></td>
				<td><?php echo $row['ngay_them']; ?></td>
	        	<td>
	        		<a class="btn btn-outline-primary" href="?ql=sanpham/sua&idsua=<?php echo $row['id_san_pham']?>">Sửa</a>
	        		<a class="btn btn-outline-warning" href="?ql=sanpham/ds&idxoa=<?php echo $row['id_san_pham']?>">Xóa</a>
	        	</td>
	        </tr>
	    <?php $stt++; } ?>
	    </tbody>
	  </table> 
</div>