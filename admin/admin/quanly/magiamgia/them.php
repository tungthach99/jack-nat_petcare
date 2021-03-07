<?php  
	if (isset($_POST['them'])) {
		//Kiểm tra nhập đủ thông tin
		$magiamgia = $_POST['magiamgia'];
		$chietkhau = $_POST['chietkhau'];
		$ngayapdung = $_POST['ngayapdung'];
		$ngayketthuc = $_POST['ngayketthuc'];
		$sqlcheck="select * from tbl_ma_giam_gia where ma_giam_gia='$magiamgia'";
		$querycheck=$connection->query($sqlcheck);
		if($magiamgia=="" or $chietkhau=="" or $chietkhau=="" or $ngayapdung=="" or $ngayketthuc=="" or $querycheck->num_rows>0){
			echo "Vui lòng nhập đủ thông tin và không được trùng!";
		}else{
			$sql = "INSERT INTO tbl_ma_giam_gia (ma_giam_gia,chiet_khau,ngay_ap_dung,ngay_ket_thuc) VALUES ('$magiamgia','$chietkhau','$ngayapdung)','$ngayketthuc')";

			if ($connection->query($sql)) 
				echo "<div class='alert alert-success' role='alert'>
				<strong>Thêm thành công</strong>
			</div>";
			else
				echo "<div class='alert alert-danger' role='alert'>
				<strong>Thêm thất bại</strong>
			</div>";
		}
	}
?>

<div>
	<div><br>
	<h1>Thêm danh mục</h1>
	<div class="mt--7" style="padding-top:70px;">
		<div class="row">
			<div class="col-xl-12">
				<div class="">
					<div class="card-body">
						<form method="POST" enctype="multipart/form-data">
							
							<div class="">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group focused">
											<label class="form-control-label" for="input-username">Mã giảm giá</label>
											<input name="magiamgia" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Mã giảm giá">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group focused">
											<label class="form-control-label" for="input-username">Chiêt khấu</label>
											<input name="chietkhau" type="number" id="input-username" class="form-control form-control-alternative" placeholder="Số tiền">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group focused">
											<label class="form-control-label" for="input-username">Ngày áp dụng</label>
											<input name="ngayapdung" type="datetime-local" id="input-username" class="form-control form-control-alternative">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group focused">
											<label class="form-control-label" for="input-username">Ngày kết thúc</label>
											<input name="ngayketthuc" type="datetime-local" id="input-username" class="form-control form-control-alternative">
										</div>
									</div>
								</div>
							</div>
							<div>
								<input class="btn btn-outline-default" type="reset" value="Nhập lại">
								<input class="btn btn-outline-default" name="them" type="submit" value="Thêm mới">
								<a class="btn btn-secondary btn-lg active" href="?ql=magiamgia/ds">Danh sách mã sản phẩm</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>
	
	<!-- Đoạn script load ảnh sau khi chọn -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script type="text/javascript">
			function readURL(input) {
	  if (input.files && input.files[0]) {
	    var reader = new FileReader();
	    
	    reader.onload = function(e) {
	      $('#blah').attr('src', e.target.result);
	    }
	    
	    reader.readAsDataURL(input.files[0]); // convert to base64 string
	  }
	}

	$("#imgInp").change(function() {
	  readURL(this);
	});
	</script>
</div>