<?php 
if(isset($_POST['them']))
{
	$sqlcheckthemnv="select * from tbl_nhan_vien where ";
	//kiểm tra thông tin
	$tennhanvien=$_POST['tennhanvien'];
	$hople=true;
	$message = "";
	if($tennhanvien=="")
	{
		$hople=false;
		$message .= "<div>Bạn chưa nhập tên nhân viên</div>";
	
		 
    }

	$email=$_POST['email'];
	if($email=="")
	{
		
		$hople = false;
		$message .= "<div>Bạn chưa nhập email</div>";
		
	}
	$sqlcheckthemnv.= "email='".$email."'";
	$sodienthoai=$_POST['sodienthoai'];
	if($sodienthoai=="")
	{		
		
		$hople = false;
		$message .= "<div>Bạn chưa nhập số điện thoại</div>";
		
	}
	$sqlcheckthemnv.=" or ten_nhan_vien='".$tennhanvien."'";
	$sqlcheckthemnv.=" or so_dien_thoai='".$sodienthoai."'";

	$taikhoan=$_POST['taikhoan'];
	if($taikhoan=="")
	{
		
		$hople = false;
		$message .= "<div>Bạn chưa nhập tài khoản</div>";
		
	}
	$sqlcheckthemnv.=" or tai_khoan='".$taikhoan."'";
	$matkhau=$_POST['matkhau'];
	if($matkhau=="")		
	{
		$hople = false;
		$message .= "<div>Bạn chưa nhập mật khẩu</div>";
		
	}
	$querycheckthemnv=$connection->query($sqlcheckthemnv);

	if($hople == false or $querycheckthemnv->num_rows>0) {
		echo "<div class='alert alert-danger' role='alert'>
		             <strong>".$message."<br>Lưu ý thông tin không được nhập trùng</strong>
				</div>";
	}
	else {
		$sql="INSERT INTO tbl_nhan_vien (ten_nhan_vien, email, so_dien_thoai, tai_khoan, mat_khau,quyen) VALUES ('$tennhanvien','$email','$sodienthoai','$taikhoan','$matkhau','".$_POST['quyen']."') ";
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

<div><br>
<h1> Thêm nhân viên </h1>
<div class="card bg-secondary shadow">
<div class="card-body">
   <form method="POST">
   <h6 class="heading-small text-muted mb-4">Thông tin nhân viên</h6>
   <div class="pl-lg-4">
      <div class="row">
         <div class="col-lg-12">
            <div class="form-group focused">
               <label class="form-control-label" for="input-username">Tên nhân viên</label>
               <input name="tennhanvien" type="text" id="input-username" class="form-control form-control-alternative" >
            </div>
         </div>
         <div class="col-lg-12">
            <div class="form-group">
               <label class="form-control-label" for="input-email">Email </label>
               <input name="email" type="email" id="input-email" class="form-control form-control-alternative" >
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="form-group focused">
               <label class="form-control-label" for="input-first-name">Số điện thoại</label>
               <input name="sodienthoai" type="text" id="input-first-name" class="form-control form-control-alternative" >
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="form-group focused">
               <label class="form-control-label" for="input-first-name">Tài khoản</label>
               <input name="taikhoan" type="text" id="input-first-name" class="form-control form-control-alternative" >
            </div>
         </div>
         <div class="col-lg-12">
            <div class="form-group focused">
               <label class="form-control-label" for="input-last-name">Mật khẩu</label>
               <input name="matkhau" type="text" id="input-last-name" class="form-control form-control-alternative" >
            </div>
         </div>
		  <div class="col-lg-12">
            <div class="form-group focused">
               <label class="form-control-label" for="input-last-name">Quyền</label>
               <input name="quyen" type="number" id="input-last-name" class="form-control form-control-alternative" >
            </div>
         </div>
      </div>
      <div>
         <input class="btn btn-outline-default" type="reset" value ="Nhập lại">
         <input class="btn btn-outline-default" name="them" type="submit" value ="Thêm mới">
         <a class="btn btn-secondary btn-lg active" href="?ql=nhanvien/ds">Danh sách nhân viên</a>
      </div>
   </div>
</div>