<?php 
	// Xóa khách hàng
	if(isset($_GET['idxoa'])){
     $id=$_GET['idxoa'];
     $sql="DELETE FROM tbl_binh_luan_sp where id_binh_luan = $id";
     
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
	//Hiển thị danh sách chuyên mục
      $sql="SELECT * from tbl_binh_luan_sp JOIN tbl_khach_hang ON tbl_binh_luan_sp.id_khach_hang=tbl_khach_hang.id_khach_hang";
      $query=$connection->query($sql);
 ?>
<div><br>
	<h1> Danh sách</h1>
	
     <div class="table-responsive">
	  <table class="table align-items-center table-flush">
	    <thead class="thead-light">
	      <tr>
	        <th scope="col">STT</th>
	        <th scope="col">Mã khách hàng</th>
			<th scope="col">Tên khách hàng</th>
	        <th scope="col">Mã sản phẩm</th>
	        <th scope="col">Nội dung</th>
	        <th scope="col">Ngày bình luận</th>
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
	        	<td><?php echo $row['id_khach_hang']?></td>
				<td><?php echo $row['ten_khach_hang']?></td>
	        	<td><?php echo $row['id_san_pham'];?></td>
	        	<td><?php echo substr($row['noi_dung'],0,80);?></td>
	        	<td><?php echo $row['ngay_tao']?></td>
	        	<td>
	        		<a class="btn btn-outline-warning" href="?ql=binhluansp/ds&idxoa=<?php echo $row['id_binh_luan']?>">Xóa</a>
	        	</td>
	        </tr>
	    <?php $stt++; } ?>
	    </tbody>
	  </table> 
</div>