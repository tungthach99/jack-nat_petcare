<?php 
	// Xóa khách hàng
	if(isset($_GET['idxoa'])){
     $id=$_GET['idxoa'];
     $sql="DELETE FROM tbl_tin_tuc where id_tin_tuc= $id";
     
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
      $sql="SELECT * from tbl_tin_tuc";
      $query=$connection->query($sql);
 ?>
<div><br>
	<h1> Danh sách tin tức </h1>
	<a class="btn btn-success" href="?ql=tintuc/them">Thêm</a>
     <div class="table-responsive">
	  <table class="table align-items-center table-flush">
	    <thead class="thead-light">
	      <tr>
	        <th scope="col">STT</th>
	        <th scope="col">Tác giả</th>
	        <th scope="col">Tiêu đề</th>
	        <th scope="col">Ảnh</th>
	        <th scope="col">Nội dung</th>
            <th scope="col">Ngày thêm</th>
			<th scope="col">Ngày sửa</th>
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
	        	<td><?php echo $row['tac_gia']?></td>
	        	<td><?php echo $row['tieu_de'];?></td>
	        	<td>
				<img style="height: 100px " src="../../images/tin-tuc/<?php echo $row['anh'] ?>" alt="">
				</td>
	        	<td height="50px;"><?php echo substr($row['noi_dung'],0,80)?> ...</td>
	        	<td><?php echo $row['add_date']; ?></td>
				<td><?php echo $row['edit_date']; ?></td>
	        	<td>
	        		<a class="btn btn-outline-primary" href="?ql=tintuc/sua&idsua=<?php echo $row['id_tin_tuc']?>">Sửa</a>
	        		<a class="btn btn-outline-warning" href="?ql=tintuc/ds&idxoa=<?php echo $row['id_tin_tuc']?>">Xóa</a>
	        	</td>
	        </tr>
	    <?php $stt++; } ?>
	    </tbody>
	  </table> 
</div>