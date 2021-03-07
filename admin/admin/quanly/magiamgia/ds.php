<?php 
	// Xóa khách hàng
	if(isset($_GET['idxoa'])){
     $id=$_GET['idxoa'];
     $sql="DELETE FROM tbl_ma_giam_gia where ma_giam_gia = '$id'";
     
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
      $sql="SELECT * from tbl_ma_giam_gia";
      $query=$connection->query($sql);
 ?>
<div><br>
	<h1> Danh sách mã giảm giá</h1>
	<a class="btn btn-success" href="?ql=magiamgia/them">Thêm</a>
     <div class="table-responsive">
	  <table class="table align-items-center table-flush">
	    <thead class="thead-light">
	      <tr>
	        <th scope="col">STT</th>
	        <th scope="col">Mã giảm giá</th>
	        <th scope="col">Chiết khấu</th>
	        <th scope="col">Ngày áp dụng</th>
	        <th scope="col">Ngày kết thúc</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php 
	    	$stt = 1;
	    	while ($row=$query->fetch_assoc()) {
	    	 ?>
	        <tr>
	        	<td><?php echo $stt; ?></td>
	        	<td><?php echo $row['ma_giam_gia']?></td>
	        	<td><?php echo $row['chiet_khau'];?></td>
	        	<td><?php echo $row['ngay_ap_dung'];?></td>
	        	<td><?php echo $row['ngay_ket_thuc']?></td>
	        	<td>
	        		<a class="btn btn-outline-primary" href="?ql=magiamgia/sua&magiamgia=<?php echo $row['ma_giam_gia']?>">Sửa</a>
	        		<a class="btn btn-outline-warning" href="?ql=magiamgia/ds&idxoa=<?php echo $row['ma_giam_gia']?>">Xóa</a>
	        	</td>
	        </tr>
	    <?php $stt++; } ?>
	    </tbody>
	  </table> 
</div>