<?php 
	//xóa chuyên mục
if(isset($_GET['idxoa'])){
     $id=$_GET['idxoa'];
	$sqlcheckxoadm="select * from tbl_san_pham where id_danh_muc='$id'";
	$querycheckxoadm=$connection->query($sqlcheckxoadm);
	if($querycheckxoadm->num_rows>0)
	{
		echo "<div class='alert alert-success' role='alert'>
    <strong>Không được phép xóa danh mục này</strong>
            </div>";
	}
	else
	{
		$sql="DELETE FROM tbl_danh_muc where id_danh_muc=$id";
		if($connection->query($sql))
		{
			echo "<div class='alert alert-success' role='alert'>
    <strong>Xóa thành công</strong>
			</div>";
		}
		else 
		{
			echo "<div class='alert alert-default' role='alert'>
    			<strong>Xóa thất bại</strong>
				</div>";
		}
	}
}

	//Hiển thị danh sách danh mục
      $sql="SELECT * from tbl_danh_muc";
      $query=$connection->query($sql);
 ?>
<div><br>
	<h1> Danh sách danh mục </h1>
	<a class="btn btn-success" href="?ql=danhmuc/them">Thêm</a>
     <div class="table-responsive">
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
	        		<a class="btn btn-outline-primary" href="?ql=danhmuc/sua&idsua=<?php 
	        		
	        		echo $row['id_danh_muc']?>">Sửa</a>
	        		<a class="btn btn-outline-warning" href="?ql=danhmuc/ds&idxoa=<?php echo $row['id_danh_muc']?>">Xóa</a>
	        	</td>
	        </tr>
	    <?php $stt++; } ?>
	    </tbody>
	  </table> 
</div>