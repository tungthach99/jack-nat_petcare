<?php 
   $id = $_GET['idsua'];
	if (isset($_POST['sua'])) {
		//Kiểm tra nhập đủ thông tin chưa
		$tacgia = $_POST['tac_gia'];
      $tieude = $_POST['tieu_de'];
      $anh = $_POST['anh'];
      $noidung = $_POST['noi_dung'];
	
			//Cập nhật dữ liệu
			$sql = "UPDATE tbl_tin_tuc SET tac_gia = '$tacgia', tieu_de = '$tieude', anh='$anh', noi_dung='$noidung', edit_date = now() WHERE id_tin_tuc = $id";

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

   //Hiển thị thông tin cần sửa
   $sql = "SELECT * FROM tbl_tin_tuc WHERE id_tin_tuc = $id";
   $query = $connection->query($sql);
   $row = $query->fetch_assoc();
 ?>
<div>
   <h1>Cập nhật tin tức</h1>
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
                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Tác giả</label>
                                 <input name="tac_gia" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Tác giả" value="<?php echo $row['tac_gia'] ?>">
                              </div>
                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Tiêu đề</label>
                                 <input name="tieu_de" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Tiêu đề" value="<?php echo $row['tieu_de'] ?>">
                              </div>
                              <div class="form-group">
                              <label class="form-control-label" for="input-username">Chọn ảnh</label>
											<input name="anh" type='file' id="imgInp" /><br>
  											<img style="height: 200px" id="blah" src="" />
                              </div>
                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Nội dung</label>
                                 <input name="noi_dung" style="height:200px;" id="input-username" class="form-control form-control-alternative" placeholder="Nội dung" value="<?php echo $row['noi_dung'] ?>"></input>
                              </div>

                             
                        </div>
                     </div>
                     <div>
                        <input class="btn btn-outline-warning" type="reset" value="Nhập lại" >
                        <input class="btn btn-outline-success" name="sua" type="submit" value="Cập nhật">
                        <a class="btn btn-secondary btn-lg active" href="?ql=tintuc/ds">Danh sách tin tức</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>