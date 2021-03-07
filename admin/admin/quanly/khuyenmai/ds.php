<?php 
	// Xóa khách hàng
	if(isset($_GET['idxoa'])){
     $id=$_GET['idxoa'];
     $sql="DELETE FROM tbl_khuyen_mai where  id_san_pham = $id";
     
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
      $sql="SELECT * from tbl_khuyen_mai";
      $query=$connection->query($sql);
 ?>
<div><br>
	<h1> Danh sách khuyến mại </h1>
	<a class="btn btn-success" href="?ql=khuyenmai/them">Thêm</a>
     <div class="table-responsive">
	  <table class="table align-items-center table-flush">
	    <thead class="thead-light">
	      <tr>
	        <th scope="col">STT</th>
	        <th scope="col">Mã chương trình khuyến mại</th>
	        <th scope="col">Mã sản phẩm</th>
	        <th scope="col">Tên chương trình khuyến mại</th>
	        <th scope="col">Mức khuyến mại (%)</th>
	        <th scope="col">Ảnh khuyến mại</th>
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
	        	<td><?php echo $row['id_khuyen_mai']?></td>
	        	<td><?php echo $row['id_san_pham'];?></td>
	        	<td><?php echo $row['ten_khuyen_mai'];?></td>
	        	<td><?php echo $row['muc_khuyen_mai']?></td>
	        	<td><img style="height: 100px " src="../../images/khuyen-mai/<?php echo $row['anhkm'] ?>" alt=""></td>
	        	<td>
	        		<a class="btn btn-outline-primary" href="?ql=khuyenmai/sua&idsua=<?php echo $row['id_san_pham']?>">Sửa</a>
	        		<a class="btn btn-outline-warning" href="?ql=khuyenmai/ds&idxoa=<?php echo $row['id_san_pham']?>">Xóa</a>
	        	</td>
	        </tr>
	    <?php $stt++; } ?>
	    </tbody>
	  </table> 
</div>