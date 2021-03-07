<?php
if(isset($_POST['them']))
{
	//kiểm tra thông tin
    $tacgia = $_POST['tac_gia'];
	$hople=true;
	$message = "";
	if($tacgia=="")
	{
		$hople=false;
		$message .= "<div>Bạn chưa nhập tên tác giả</div>"; 
    }

	$tieude=$_POST['tieu_de'];
	if($tieude=="")
	{
		$hople = false;
		$message .= "<div>Bạn chưa tiêu đề</div>";
		
	}

	$anh=$_POST['anh'];
	if($anh=="")
	{		
		$hople = false;
		$message .= "<div>Bạn chưa nhập ảnh tin tức</div>";
		
	}
	$noidung=$_POST['noi_dung'];
	if($noidung=="")
	{
		$hople = false;
		$message .= "<div>Bạn chưa nội dung tin tức</div>";
		
	}
	else {
		$sql="INSERT INTO tbl_tin_tuc (tac_gia, tieu_de, noi_dung, anh) 
      VALUES ('$tacgia','$tieude','$noidung','$anh') ";
		if($connection->query($sql))
        {
     	    echo "<div class='alert alert-success' role='alert'>
            <strong>Thêm thành công</strong>
            </div>";
        }

         else
         {
         	echo "<div class='alert alert-danger' role='alert'>
            <strong>Thêm thất bại</strong>
        </div>";
         }
        }
}
   ?>

<div>
<h1> Thêm  tin tức</h1>
<div class="card bg-secondary shadow">
<div class="card-body">
   <form method="POST">
   <h6 class="heading-small text-muted mb-4">Thông tin tin tức</h6>
   <div class="pl-lg-4">
      <div class="row">
         <div class="col-lg-12">
            <div class="form-group focused">
               <label class="form-control-label" for="input-first-name">Tác giả</label>
               <input name="tac_gia" type="text" id="input-first-name" class="form-control form-control-alternative" >
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="form-group focused">
               <label class="form-control-label" for="input-first-name">Tiêu đề</label>
               <input name="tieu_de" type="text" id="input-first-name" class="form-control form-control-alternative" >
            </div>
         </div>
         <div class="col-lg-12">
            <div class="form-group focused">
            <label class="form-control-label" for="input-username">Chọn ảnh</label>
			<input name="anh" type='file' id="imgInp" /><br>
  			<img style="height: 200px" id="blah" src="" />
            </div>
         </div>
         <div class="col-lg-12">
            <div class="form-group focused">
               <label class="form-control-label" for="input-first-name">Nội dung</label>
               <input name="noi_dung" type="text" id="input-first-name" class="form-control form-control-alternative" >
            </div>
         </div>
      </div>
      <div>
         <input class="btn btn-outline-default" type="reset" value ="Nhập lại">
         <input class="btn btn-outline-default" name="them" type="submit" value ="Thêm mới">
         <a class="btn btn-secondary btn-lg active" href="?ql=tintuc/ds">Danh sách tin tức</a>
      </div>
   </div>
</div>