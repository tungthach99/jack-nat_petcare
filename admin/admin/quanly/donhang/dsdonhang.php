<?php 
	if(isset($_GET['id'])) $id=$_GET['id'];
	if(isset($_GET['action']) and $_GET['action']=="duyet")
	{
		$sqlupdate = "UPDATE tbl_don_hang SET trang_thai='1' WHERE id_don_hang = '$id'";
		$sql22="SELECT t1.id_don_hang, t1.so_luong,t1.id_phien_ban,t1.id_san_pham
				FROM tbl_chi_tiet_don_hang t1
			    WHERE t1.id_don_hang = $id";
      $query22=$connection->query($sql22);
		while ($row22=$query22->fetch_assoc())
		{
			//sua so luong hang trong bang phien ban san pham
			$sqlupdate2 = "UPDATE tbl_phien_ban_san_pham SET so_luong_ton=so_luong_ton-".$row22["so_luong"]." WHERE id_san_pham =".$row22["id_san_pham"]." AND id_phien_ban=".$row22["id_phien_ban"];
			$queryupdate2=$connection->query($sqlupdate2);
			
			//sua so luong hang trong bang san pham
			$sqlupdate2 = "UPDATE tbl_san_pham SET so_luong=so_luong-".$row22["so_luong"]." WHERE id_san_pham =".$row22["id_san_pham"];
			$queryupdate2=$connection->query($sqlupdate2);
		}
		
		
			if($connection->query($sqlupdate))
				echo "<div class='alert alert-success' role='alert'>
    <strong>Cập nhật thành công</strong>
</div>
";
			else
				echo  "<div class='alert alert-danger' role='alert'>
    <strong>Cập nhật thất bại</strong>
</div>";
	}
	//Hiển thị danh sách đơn hàng
      $sql="SELECT *
      FROM tbl_don_hang t1 ORDER BY id_don_hang DESC";
      $query=$connection->query($sql);
 ?>
<div><br>
	<h1> Danh sách đơn hàng </h1>
     <div class="table-responsive">
	  <table class="table align-items-center table-flush">
	    <thead class="thead-light">
	      <tr>
	        <th scope="col">STT</th>
			  <th scope="col">Hành động</th>
			  <th scope="col">Trạng thái</th>
	        <th scope="col">Ngày đặt</th>
	        <th scope="col">Tổng tiền</th>
	        <th scope="col">Khách hàng</th>
	        <th scope="col">Địa chỉ nhận hàng</th>
			  <th scope="col">Email</th>
			  <th scope="col">Mã giảm giá</th>
			  <th scope="col">Điện thoại</th>
	        <th scope="col">Hình thức</th>
	        <th scope="col">Ghi chú</th>
	        
			  
	      </tr>
	    </thead>
	    <tbody>
	    	<?php 
	    	$stt = 1;
	    	while ($row=$query->fetch_assoc()) {
	    	 ?>
	        <tr>
	        	<td><?php echo $stt; ?></td>
				<td>
	        		<a  class="btn btn-outline-primary" href="?ql=donhang/chitietdonhang&id=<?php echo $row['id_don_hang']?>">Xem</a>
					<a <?php if($row['trang_thai']==1) echo "style='display:none;'"?> class="btn btn-outline-primary" href="?ql=donhang/dsdonhang&action=duyet&id=<?php echo $row['id_don_hang']?>">Duyệt</a>
	        	</td>
				<td><?php if($row['trang_thai']==0) echo "Chưa thanh toán";
					if($row['trang_thai']==1) echo "Hoàn tất";
					?></td>
	        	<td><?php echo $row['ngay_dat']; ?></td>
	        	<td><?php echo $row['tong_tien']; ?></td>
	        	<td><?php echo $row['ten_khach_hang']; ?></td>
	        	<td><?php echo $row['dia_chi_nhan_hang']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['ma_giam_gia']; ?></td>
				<td><?php echo $row['dien_thoai']; ?></td>
	        	<td><?php echo $row['hinh_thuc_mua_hang']; ?></td>
	        	<td><?php echo $row['ghi_chu']; ?></td>
	        	
	        	
	        </tr>
	    <?php $stt++; } ?>
	    </tbody>
	  </table> 
</div>