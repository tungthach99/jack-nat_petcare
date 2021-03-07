<?php 
   $id = $_GET['idsua'];
	if (isset($_POST['sua'])) {
		//Kiểm tra nhập đủ thông tin chưa
		$idkhuyenmai = $_POST['id_khuyen_mai'];
      $tenkhuyenmai = $_POST['ten_khuyen_mai'];
      $muckhuyenmai = $_POST['muc_khuyen_mai'];
      $anhkm = $_POST['anhkm'];
			//Cập nhật dữ liệu
			$sql = "UPDATE tbl_khuyen_mai SET id_khuyen_mai = '$idkhuyenmai', ten_khuyen_mai = '$tenkhuyenmai'
            , muc_khuyen_mai='$muckhuyenmai', anhkm='$anhkm' WHERE id_san_pham = $id";

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
   $sql = "SELECT * FROM tbl_khuyen_mai WHERE id_san_pham = $id";
   $query = $connection->query($sql);
   $row = $query->fetch_assoc();
 ?>
<div>
   <h1>Cập nhật khuyến mại</h1>
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
                                 <label class="form-control-label" for="input-username">Mã sản phẩm</label>
                                 <input name="id_san_pham" readonly type="text" id="input-username" class="form-control form-control-alternative" value="<?php echo $row['id_san_pham'] ?>">
                              </div>
                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Mã chương trình khuyến mại</label>
                                 <input name="id_khuyen_mai" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Mã chương trình khuyến mại" value="<?php echo $row['id_khuyen_mai'] ?>">
                              </div>
                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Tên khuyến mại</label>
                                 <input name="ten_khuyen_mai" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Tên khuyến mại" value="<?php echo $row['ten_khuyen_mai'] ?>">
                              </div>
                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Mức khuyến mại (%)</label>
                                 <input name="muc_khuyen_mai" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Mức khuyến mại" value="<?php echo $row['muc_khuyen_mai'] ?>">
                              </div>

                              <div class="form-group">
                              <label class="form-control-label" for="input-username">Chọn ảnh</label>
											<input name="anhkm" type='file' id="imgInp" /><br>
  											<img style="height: 200px" id="blah" src="" />
                              </div>

                           </div>
                        </div>
                     </div>
                     <div>
                        <input class="btn btn-outline-warning" type="reset" value="Nhập lại" >
                        <input class="btn btn-outline-success" name="sua" type="submit" value="Cập nhật">
                        <a class="btn btn-secondary btn-lg active" href="?ql=khuyenmai/ds">Danh sách khuyến mại</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>