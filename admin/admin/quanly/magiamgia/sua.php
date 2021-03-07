<?php 
	if (isset($_POST['sua']))
	{
		$magiamgia=$_GET['magiamgia'];
		//Kiểm tra nhập đủ thông tin chưa
		$chietkhau = $_POST['chietkhau'];
		$ngayapdung = $_POST['ngayapdung'];
		$ngayketthuc = $_POST['ngayketthuc'];
		if($chietkhau=="" or $ngayapdung=="" or $ngayketthuc=="")
		{
			echo "<br>Vui lòng nhập đủ thông tin và không được trùng!";
		}
		else
		{
			//Cập nhật dữ liệu
			$sql = "UPDATE tbl_ma_giam_gia SET chiet_khau = '$chietkhau', ngay_ap_dung='$ngayapdung', ngay_ket_thuc='$ngayketthuc' WHERE ma_giam_gia='".$_GET['magiamgia']."'";

			if($connection->query($sql))
				echo "<div class='alert alert-success' role='alert'>
    <strong>Cập nhật thành công</strong>
</div>
";
			else
				echo  "<div class='alert alert-danger' role='alert'>
    <strong>Cập nhật thất bại</strong>
</div>";
		
		}
	}

   //Hiển thị thông tin cần sửa
   $sql = "SELECT * FROM tbl_ma_giam_gia WHERE ma_giam_gia='".$_GET['magiamgia']."'";
   $query = $connection->query($sql);
   $row = $query->fetch_assoc();
 ?>
<div><br>
   <h1>Cập nhật mã giảm giá</h1>
   <div class=" mt--7" style="
      padding-top: 70px;
      ">
      <div class="row">
         <div class="">
         </div>
         <div class="col-xl-12 order-xl-1">
            <div class="shadow">
               <div class="card-body">
                  <form method="POST">
                     <div class="">
                        <div class="row">
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
                     </div>
                     <div>
                        <input class="btn btn-outline-warning" type="reset" value="Nhập lại" >
                        <input class="btn btn-outline-success" name="sua" type="submit" value="Cập nhật">
                        <a class="btn btn-secondary btn-lg active" href="?ql=magiamgia/ds">Danh sách mã giảm giá</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>