<?php
if(isset($_GET['bcdt']) and isset($_GET['bcdt'])==1)
{
	if(isset($_POST['thang']) and isset($_POST['nam']))
	{
		$sql="SELECT SUM(tong_tien) as tong_tien FROM tbl_don_hang WHERE ngay_dat LIKE '".$_POST['thang']."/%/".$_POST['nam']."%'";
		$query=$connection->query($sql);
		while ($row=$query->fetch_assoc()) 
		{
			echo "<br><h1>Tổng doanh thu tháng ".$_POST['thang']." năm ".$_POST['nam']." là: ".number_format($row['tong_tien'])." VND</h1>";
		}
		echo "<a class='btn btn-outline-default' href='?ql=baocao/ds'> Trở về</a>";
	}
}
if(isset($_GET['bcdt']) || isset($_GET['bcdt'])==2)
{
	if(isset($_POST["sobanghi"]))
	{
	$sql= "SELECT SUM(t1.tong_tien) as doanh_thu,t2.id_san_pham,t3.ten_san_pham,COUNT(t2.id_san_pham) AS so_luong FROM tbl_don_hang AS t1,tbl_chi_tiet_don_hang AS t2,tbl_san_pham AS t3 WHERE t1.id_don_hang=t2.id_don_hang AND t2.id_san_pham=t3.id_san_pham GROUP BY t2.id_san_pham limit ".$_POST["sobanghi"];
	$query=$connection->query($sql);
?>
		<br><div class="table-responsive">
			<table class="table align-items-center table-flush">
	    		<thead class="thead-light">
	      			<tr>
	        			<th scope="col">STT</th>
	        			<th scope="col">Mã sản phẩm</th>
	        			<th scope="col">Tên sản phẩm</th>
	        			<th scope="col">Doanh số</th>
	        			<th scope="col">Doanh thu</th>
	      			</tr>
	    		</thead>
	    		<tbody>
	    		<?php 
	    		$stt = 1;
	    		while ($row=$query->fetch_assoc()) {
	    	 	?>
	        		<tr>
	        			<td><?php echo $stt; ?></td>
	        			<td><?php echo $row['id_san_pham']?></td>
	        			<td><?php echo $row['ten_san_pham'];?></td>
	        			<td><?php echo number_format($row['so_luong']);?></td>
	        			<td><?php echo number_format($row['doanh_thu'])?></td>
	        		</tr>
	    <?php $stt++; } ?>
	    		</tbody>
	  		</table> 
		</div>
<?php
	
	echo "<a class='btn btn-outline-default' href='?ql=baocao/ds'> Trở về</a>";

	}
}

if(!isset($_GET['bcdt']))
{
?>
<br>
<h1>Doanh thu theo sản phẩm</h1>
<form id="bc2" method="POST" action="?ql=baocao/ds&bcdt=2">
	<div class="row">
		<div class="col-lg-4">
			<div class="form-group focused">
				<label class="form-control-label">Số bản ghi hiển thị</label>
				<input name="sobanghi" type="number" class="form-control form-control-alternative" min="1" required value="10">
			</div>
		</div>
	</div>
	<input form="bc2" class="btn btn-outline-default" type="reset" value="Nhập lại">
	<input form="bc2" class="btn btn-outline-default" name="xem" type="submit" value="Xem">
</form>


<br>
<h1>Doanh thu theo tháng</h1>
<form id="bc1" method="POST" action="?ql=baocao/ds&bcdt=1">
	<div class="row">
		<div class="col-lg-4">
			<div class="form-group focused">
				<label class="form-control-label">Tháng</label>
				<input name="thang" type="number" class="form-control form-control-alternative" min="1" max="12" required value="<?php echo date('m')?>">
			</div>
		</div>
		<div class="col-lg-4">
			<div class="form-group focused">
				<label class="form-control-label" >Năm</label>
				<input name="nam" type="number" class="form-control form-control-alternative" min="2000" max="9999" value="<?php echo date('Y')?>">
			</div>
		</div>
	</div>
	<input class="btn btn-outline-default" type="reset" value="Nhập lại">
	<input class="btn btn-outline-default" name="xem" type="submit" value="Xem">
</form>
<?php
}
?>